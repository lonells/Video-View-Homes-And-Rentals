<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Stream;
use App\Models\Video;
use View;
use Session;
use DB;
use Auth;

class StreamController extends Controller
{
    function index(Request $request)
    {
        $data = ["section" => $request->section, 'url' => env('STREAM_PLAY_URL')];
        if ($request->section == "previous") {
            $stream=Stream::where([
                'name'=>"bypass_stream"
            ])->get();
            $data["items"] = json_decode($stream, true);           
        }else if($request->section == "recorded"){
            $videos=Video::where([
                'stream_name'=>"mystreamname"
            ])->get();
            $data["items"] = json_decode($videos, true);  
        }
        return view('stream',compact('data'));
    }
    function video_view(Request $request)
    {
        $data = ["id" => $request->id];
        return view('video',compact('data'));
    }

    function streams()
    {
        $streams=Stream::all();
        return $streams;
    } 
    function videos()
    {
        $vides=Video::all();
        return $vides;
    }        
    function start_recoding(Request $request)
    {
        $videoId = DB::table('videos')->insertGetId(
            ['user_id' => '1', 
            'stream_name' => $request->input('stream-name'), 
            'source_url' => "",
            'length' => 0,
            'description' => ""
        ]);  

        $client = new \GuzzleHttp\Client();
        $url = env('STREAM_SERVER_URL')."/v1/vhosts/default/apps/".$request->input('app').":startRecord";

        $headerContent = [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        'authorization'     => 'Basic '.base64_encode('xg5470nbg3klq1b9'),
        ];
        $fpath = "/file_".$videoId.".ts";
        $bodyContent = [
          "id" => "$videoId",
          "stream" => [
            "name" => $request->input('stream-name'),
            "tracks" => [0]
          ],
          "filePath"  => $fpath,
          "infoPath"  => "/file.xml",
          "interval"  => 3600000,
          "segmentationRule"  => "continuity"
        ];

        $vid =Video::find($videoId);
        $vid->source_url = $fpath;
        $vid->save();

        $req = $client->post($url,  [
        'headers' => $headerContent,            
        'body'=>json_encode($bodyContent)]);
        $response = $req->getBody();
        return $response;
    }
    function stop_recoding(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $url = env('STREAM_SERVER_URL')."/v1/vhosts/default/apps/".$request->input('app').":stopRecord?=";
        $headerContent = [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        'authorization'     => 'Basic '.base64_encode('xg5470nbg3klq1b9'),
        ];

        $bodyContent = [
          "id" => $request->input('id'),
        ];

        $req = $client->post($url,  [
        'headers' => $headerContent,            
        'body'=>json_encode($bodyContent)]);
        $res = json_decode($req->getBody(), true);
        print_r($res);
        $vid =Video::find($request->input('id'));
        $vid->length = $res['response'][0]['recordTime'];
        $vid->save();

        return json_encode($req);
    } 
    function ping_stream(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $url = env('STREAM_SERVER_URL')."/v1/vhosts/default/apps/app/streams/".$request->name;
        $headerContent = [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        'authorization'     => 'Basic '.base64_encode('xg5470nbg3klq1b9'),
        ];

        try{
            $req = $client->get($url,  [
            'headers' => $headerContent            
            ]);
            $res = json_decode($req->getBody(), true);
            $streamRaw=Stream::where([
                'source_type'=>$res['response']['input']['sourceType'],
                'source_url'=>$res['response']['input']['sourceUrl'],
                'name'=>$res['response']['name'],
                'start_time'=>$res['response']['input']['createdTime']
            ])->first();
            $stream = json_decode($streamRaw, true);

            if (!isset($stream)) {
                $strm = new Stream();
                $strm->source_type = $res['response']['input']['sourceType'];
                $strm->source_url = $res['response']['input']['sourceUrl'];
                $strm->name = $res['response']['name'];
                $strm->start_time = $res['response']['input']['createdTime'];
                $strm->save();
            }

            $response = $res;
        }catch(\GuzzleHttp\Exception\ClientException $e){
            $res = $e->getResponse();
            $response = json_encode(["message" => $res->getStatusCode()]);
/*            var_dump($response->getStatusCode()); // HTTP status code;
            var_dump($response->getReasonPhrase()); // Response message;
            var_dump((string) $response->getBody()); // Body, normally it is JSON;
            var_dump(json_decode((string) $response->getBody())); // Body as the decoded JSON;*/
        }
        return $response;
    }
}