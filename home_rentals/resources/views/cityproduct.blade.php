@extends('master.header')
@section('content')
<style type="text/css">
section.aboutsecbanner {
    background-image: linear-gradient(#05595b, #062C30), url(assets/images/-managed-services-banner162742458088.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 110px 0 100px;
    background-position: 90% 43%;
    background-blend-mode: multiply;
}
.center{text-align: center;}
.mtb-15{margin-top:15px;margin-bottom:15px;}
.mt-15{margin-top:15px;}
.mt-50{margin-top:50px;}
.mb-50{margin-bottom:50px;}
.mb-15{margin-bottom:15px;}
.mb-20{margin-bottom:20px;}
.section-page {padding: 0px 8%;}
.upload-service-form button {font-family: 'Lato', sans-serif;font-style: normal;font-weight: 700;font-size: 20px;line-height: normal;
    letter-spacing: 1px;background-color: #062C30;color: white;width: 100%;height: 100%;padding: 10px 15px;cursor: pointer;border: 0px;max-width: 315px;margin: 0px auto;display: block;text-align: center;}
.upload-btn-wrapper {position: relative;overflow: hidden;display: inline-block;}
.upload-btn-wrapper .btn {font-family: 'Lato', sans-serif;font-style: italic;font-weight: 700;font-size: 20px;line-height: normal;letter-spacing: 1px;background-color: #062C30;color: white;width: 100%;height: 100%;margin: 0px 0px;padding: 10px 15px;cursor: pointer;}
.upload-btn-wrapper input[type=file] {font-size: 100px;position: absolute;left: 0;top: 0;opacity: 0;}
.upload-video-content h4 {font-size: 14px;font-weight: 600;color: #062c30;margin-bottom: 0px;}
.col-2-grid {display: flex;justify-content: space-between;column-gap: 10px;margin-bottom: 10px;}
.upload-video-box {background-color: #ffffff;border: 1px solid #dcdad6;border-radius: 8px; margin-bottom: 10px;overflow: hidden;position: relative;padding: 10px 10px 0px 10px;}
.btn-buynow {font-size: 13px;font-weight: 700;line-height: normal;border: none;background-color: #062C30;color: #fff;border-radius: 4px;padding: 5px 10px;}
.prd-address {margin-bottom: 10px;}
.btn-views-links {border: none;padding: 0px;background-color: transparent;}
.btn-views-links img {width: 100%;max-width: 18px;}
.btn-live {font-size: 12px;font-weight: 700;line-height: normal;border: none;background-color: #062C30;color: #fff;border-radius: 4px;padding: 4px 5px;
    display: flex;width: 100%;align-items: center;column-gap: 5px;text-align: center;justify-content: center;}
.btn-live img {width: 100%;max-width: 16px;}
</style>
<!-- banner sec start -->
<section class="aboutsecbanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="abouttext2">
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner sec end -->
<!-- full upload video section -->
<section class="section-page mt-50 mb-50">
    <!-- upload video section -->
    <div class="container">
        <div class="row">
        @foreach($product as $item)
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-15">
                <div class="upload-video-box">
                    <div class="video-wrapper">
                        <div class="video-container" id="video-container">
                        	<video controls preload="metadata" poster="{{ url('/') }}/productimages/{{ $item->servicephoto }}">
                        		<source src="{{ url('/') }}/productvideos/{{ $item->servicevideo }}" type="video/mp4">
                        	</video>
                        </div>
                    </div>
                    <div class="upload-video-content">
                        <div class="col-2-grid prd-title-btn-info">
                            <h4>{{ $item->product }}</h4>
                            <button class="btn-buynow">Buy Now</button>
                        </div>
                        <div class="prd-address">
                            <h4>About: {{ $item->about }} , {{ $item->pick_ship }}</h4>
                        </div>    
                        <div class="col-2-grid prd-price">   
                            <h4>Price: </h4>
                            <h4>${{ $item->live_stream_price }}  </h4>
                        </div>
                        <div class="col-2-grid prd-views-likes">
                            <h4>Views Likes:</h4>
                            <button class="btn-views-links"><img src="{{ url('/') }}/assets/images/thumb-up.png" class="img-responsive" alt="img"></button>
                        </div>   
                        <div class="col-2-grid prd-qty-available">
                          <div class="col-2-grid btn-live-info">
                            <button class="btn-live">Live Stream Product <i class="fa fa-video-camera" aria-hidden="true"></i></button>
                            <button class="btn-live">Request Live  <i class="fa fa-video-camera" aria-hidden="true"></i></button>
                        </div>    
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>

@endsection