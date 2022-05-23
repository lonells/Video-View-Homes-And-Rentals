<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use View;
use Session;
use DB;
use Auth;

class StreamController extends Controller
{

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
        $url = "http://192.168.43.196:8081/v1/vhosts/default/apps/".$request->input('app').":startRecord";

        $headerContent = [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        'authorization'     => 'Basic '.base64_encode('xg5470nbg3klq1b9'),
        ];

        $bodyContent = [
          "id" => "$videoId",
          "stream" => [
            "name" => $request->input('stream-name'),
            "tracks" => [0]
          ],
          "filePath"  => "/var/file_".$videoId.".ts",
          "infoPath"  => "/var/file.xml",
          "interval"  => 60000,
          "segmentationRule"  => "continuity"
        ];

        $req = $client->post($url,  [
        'headers' => $headerContent,            
        'body'=>json_encode($bodyContent)]);
        $response = $req->getBody();
        return $response;
    }
    function stop_recoding(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $url = "http://192.168.43.196:8081/v1/vhosts/default/apps/".$request->input('app').":stopRecord?=";
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
        $response = $req->getBody();
        return $response;
    }    
}