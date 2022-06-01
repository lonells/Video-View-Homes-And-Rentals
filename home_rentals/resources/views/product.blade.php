@extends('master.header')
@section('content')
<?php /* ?>
    <style type="text/css">
        section.aboutsecbanner {
            background-image: linear-gradient(#05595b, #062C30), url(assets/images/products.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 110px 0 100px;
            background-position: 90% 43%;
            background-blend-mode: multiply;
        }

        a:hover {
            cursor: pointer;
        }

    </style>
    <section class="aboutsecbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="abouttext2">
                        <!-- <h2 class="upper"> </h2> -->
                        <h2 class="upper">Our Products</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about banner sec end -->

    <!-- product detail banner sec end -->
    <!-- product detail listing sec start -->
    <section class="productlistingsec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="product-category">
                        <h5>Product Category</h5>

                        @forelse ($category as $item)
                            <a href="{{ url('/filter') }}/{{ $item->name }}">
                                {{ $item->name }}
                            </a>
                        @empty
                            No Category
                        @endforelse


                        <a href="{{ url('/products') }}"> View All <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <section class="our-blog pb70">
                        <div class="row">
                            @forelse ($product as $item)
                                <div class="col-md-4 col-lg-4 col-sm-6">
                                    <a href="{{ url('/') }}/productdetail/{{ $item->id }}">
                                        <div class="for_blog feat_property">
                                            <div class="thumb">
                                                <div class="product-view mg-b-30 d-block">
                                                {{-- Image --}}
                                                @if (!empty($item->product_image))
                                                    @foreach (json_decode($item->product_image) as $img)
                                                        @if ($loop->first)
                                                            <img src="{{ env('BACKEND_URL') . "uploads/products/$img" }}"
                                                                draggable="false" width="100%" alt="">
                                                        @endif
                                                    @endforeach
                                                @endif
                                                {{-- Video --}}
                                                @if (!empty($item->video))
                                                    {{-- <video
                                                        src="{{ $item->video }}"
                                                        width="140" height="170" controls controlsList='nodownload'>
                                                        Your browser does not support the video tag.
                                                    </video> --}}
                                <iframe width="100%" height="100%" src="{{ $item->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                @endif
                                        </div>

                                                <div class="tag bgc-thm">{{ $item->cat_name }}</div>

                                            </div>
                                            <div class="details">
                                                <div class="tc_content">
                                                    <div class="bp_meta">
                                                        <h6 class="pname">{{ $item->product_name }}</h6>
                                                        <p>{{ $item->description }}</p>
                                                    </div>
                                                    @if (!empty($item->discount_price))
                                                        <span class="price">$ {{ $item->discount_price }}</span>
                                                    @else
                                                        <span class="price">$ {{ $item->selling_price }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>

                                    </a>
                                </div>

                            @empty
                                No Products
                            @endforelse

                        </div>
                    </section>
                </div>
            </div>
            {{-- <nav aria-label="Page navigation example" class="product-pegination">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav> --}}

            <div class="paginatoin-area style-2 pt-35 pb-20 text-center paginationstyle">
                {{ $product->withQueryString()->links() }}
            </div>
        </div>
    </section>
    <!-- product detail listing sec end-->
<?php */ ?>

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
                    <h2>Flint Michigan Automobiles</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner sec end -->
<!-- full upload video section -->
<section class="section-page mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12"></div>
            <div class="col-md-8 col-sm-12">
                <div class="video-wrapper mtb-15">
                    <div class="video-container" id="video-container">
                    	<video controls preload="metadata" poster="{{ url('/') }}/productimages/{{ $oneproduct->servicephoto }}">
                    		<source src="{{ url('/') }}/productvideos/{{ $oneproduct->servicevideo }}" type="video/mp4">
                    	</video>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-12"></div>
        </div>
    </div> 
    <!-- uploading video form section -->
    <div class="container mb-20">
            <!--<form class="uploadform" action="" method="post" enctype="multipart/form-data">-->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center">
                        <div class="upload-btn-wrapper">
                          <a class="btn" href="{{ url('/') }}/uploadproduct">+ Upload Product</a>
                          <!--<input type="file" name="servicephoto" />-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center">
                        <div class="upload-btn-wrapper">
                          <a class="btn" href="{{ url('/') }}/products/#">+ Upload Services</a>
                          <!--<input type="file" name="servicevideo" />-->
                        </div>
                    </div>
                </div> 
            <!--</form>-->
    </div>
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
                            <button class="btn-views-links"><img src="assets/images/thumb-up.png" class="img-responsive" alt="img"></button>
                        </div>   
                        <div class="col-2-grid prd-qty-available">
                            <h4>Quantity Available: {{ $item->quantity_available }}</h4>
                        </div>
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
