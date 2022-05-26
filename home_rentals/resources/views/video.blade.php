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
                    <h2>Video view</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="parallax_section  active-stream" data-parallax="scroll" data-bleed="10" id="home">
    <div class="center_content-chat">
        <div class="container">
            <div class="content-video">
                <video width="320" height="240" controls>
                  <source src="http://localhost/homes-rentals/videos/{{$data['id']}}" type="video/mp4">
                Your browser does not support the video tag.
                </video>    
<!--                 <video id='hls-example'  class="video-js vjs-default-skin" width="850" height="450" controls>
                    <source type="application/x-mpegURL" src="http://localhost/homes-rentals/videos/file_39.ts">
                </video>  -->           
                <!-- list of all available broadcasting rooms -->
                
            </div>
        </div>
    </div>
</section>
@endsection