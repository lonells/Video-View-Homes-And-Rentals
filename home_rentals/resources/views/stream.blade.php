@extends('master.header')
@section('content')

<style>
.content-video ul p.abcdasd {
    margin-left: 0;
    padding: 13px 0px;
    margin-top: 6px;
    color: #fff;
    font-size: 20px;
    color: #000;
    font-weight: 700;
}

.button-info-set {
    margin: 0 auto;
    display: block;
    width: 100px;

}

section.productdetailbanner {
    background: linear-gradient(#05595b, #062C30), url(assets/images/rf23843955_l162742497887.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 110px 0 100px;
    background-position: 90% 43%;
    background-blend-mode: multiply;
}
</style>

<section class="productdetailbanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="detailbannertext">
                    <h2>Manage streaming</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="parallax_section  active-stream" data-parallax="scroll" data-bleed="10" id="home">
    <div class="center_content-chat">
        <div class="container">
            <div class="content-video">
                <!-- list of all available broadcasting rooms -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link {{ ($data['section'] == 'live') ? 'active' : '' }}" aria-current="page" href="/homes-rentals/stream/live">Live Stream</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($data['section'] == 'previous') ? 'active' : '' }}" href="/homes-rentals/stream/previous">Previous streams</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($data['section'] == 'recorded') ? 'active' : '' }}" href="/homes-rentals/stream/recorded">Recorded streams</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link {{ ($data['section'] == 'uploads') ? 'active' : '' }}" href="/homes-rentals/stream/uploads">Uploaded videos</a>
                  </li>
                </ul>
                <br>  
                <div class="streaming-section"></div>
                <div style="min-height: 400px;">
                    @if ($data['section'] == 'live')
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p>Put this streaming url on your streaming source; <code>rtmp://192.168.43.196:1935/app</code></p>
                            <p>stream key is <code>passthrough</code></p>
                            <button class="btn btn-info recording-btn" onclick="streamRecording()">Start recording</button>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <!-- HTML -->
                            <video id='hls-example'  class="video-js vjs-default-skin" width="850" height="450" controls>
                                <source type="application/x-mpegURL" src="{{$data['url']}}/app/passthrough/playlist.m3u8">
                            </video>
                        </div>
                    </div>
                    @endif
                    @if ($data['section'] == 'previous')
                        <table class="table caption-top" style="padding: 30px;caption-side: bottom;text-align: right;letter-spacing: 1px;">
                          <caption>Streams</caption>
                          <thead>
                            <tr>
                              <th scope="col">Stream ID</th>
                              <th scope="col">Source type</th>
                              <th scope="col">Source url</th>
                              <th scope="col">Name</th>
                              <th scope="col">Start Time</th>
                            </tr>
                          </thead>
                          <tbody>
                        <?php
                            foreach ($data["items"] as $stream):
                        ?>
                                <tr>
                                  <td>{{$stream['id']}}</td>
                                  <td>{{$stream['source_type']}}</td>
                                  <td>{{$stream['source_url']}}</td>
                                  <td>{{$stream['name']}}</td>
                                  <td>{{$stream['start_time']}}</td>
                                </tr>
                        <?php
                            endforeach;
                        ?>
                      </tbody>
                    </table>                    
                    @endif
                    @if ($data['section'] == 'recorded')
                        <table class="table" style="padding: 30px;caption-side: bottom;text-align: right;letter-spacing: 1px;">
                          <caption>Streams</caption>
                          <thead>
                            <tr>
                              <th scope="col">Stream name</th>
                              <th scope="col">Source url</th>
                              <th scope="col">Length</th>
                              <th scope="col">Description</th>
                              <th scope="col">Created at</th>
                            </tr>
                          </thead>
                          <tbody>
                        <?php
                            foreach ($data["items"] as $video):
                        ?>
                                <tr>
                                  <td><a href="/homes-rentals/video{{$video['source_url']}}">{{$video['stream_name']}}</a></td>
                                  <td><a href="/homes-rentals/video{{$video['source_url']}}">{{$video['source_url']}}</a></td>
                                  <td>{{$video['length']}}</td>
                                  <td>{{$video['description']}}</td>
                                  <td>{{$video['created_at']}}</td>
                                </tr>
                        <?php
                            endforeach;
                        ?>
                      </tbody>
                    </table>                    
                    @endif                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection