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
.mtb-15{margin-top:15px;margin-bottom:15px;}
.mt-15{margin-top:15px;}
.mb-15{margin-bottom:15px;}
.upload-service-form {margin-top: 50px;margin-bottom: 50px;padding: 0px 8%;}
.upload-service-form form label {display: inline-block;vertical-align: top;float: none;width: 100%;margin-bottom: 8px;}
.upload-service-form span.field_required {color: #790000;margin-left: 4px;}
.upload-service-form input[type="text"],
.upload-service-form select {max-width: 100%;width: 100%;border: 1px solid #c3c3c5;padding: 10px 20px;line-height: 24px;border-radius: 0;margin-bottom: 12px;color: #666;font-style: italic;text-align: left;background: #fff;}
.upload-service-form button {font-family: 'Lato', sans-serif;font-style: normal;font-weight: 700;font-size: 20px;line-height: normal;
    letter-spacing: 1px;background-color: #062C30;color: white;width: 100%;height: 100%;padding: 10px 15px;cursor: pointer;border: 0px;max-width: 315px;margin: 0px auto;display: block;text-align: center;}
.upload-btn-wrapper {position: relative;overflow: hidden;display: inline-block;}
.upload-btn-wrapper .btn {font-family: 'Lato', sans-serif;font-style: italic;font-weight: 700;font-size: 20px;line-height: normal;letter-spacing: 1px;background-color: #062C30;color: white;width: 100%;height: 100%;margin: 0px 0px;padding: 10px 15px;cursor: pointer;}
.upload-btn-wrapper input[type=file] {font-size: 100px;position: absolute;left: 0;top: 0;opacity: 0;}
.upload-form-txt p {font-family: 'Lato', sans-serif;font-size: 18px;line-height: normal;}

</style>
<!-- about banner sec start -->
<section class="aboutsecbanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="abouttext2">
                    <h2>UPLOAD SERVICE OR PRODUCT</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upload service banner sec end -->

<!-- upload service form start -->
<section class="upload-service-form">
    <div class="container">
            <form class="uploadform" action="{{ url('/uploadproduct_service') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>City:<span class="field_required">*</span></label>
                        <br>
                        <select name="city" id="city" required>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->city}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Category:<span class="field_required">*</span></label>
                        <br>
                        <select name="category" id="category" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Product:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="product" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Service<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="service" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>About:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="about" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Price:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="price" required>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Quantity Available:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="quantity_available" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Company:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="company" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Website:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="website" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Product size:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="product_size" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Live stream Price:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="live_stream_price" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Local Pick Up / Ship:<span class="field_required">*</span></label>
                        <br>
                        <input type="text" name="pick_ship" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Photo Upload:<span class="field_required">*</span></label>
                        <br>
                        <div class="upload-btn-wrapper">
                          <button class="btn">+ Upload Photo</button>
                          <input type="file" name="servicephoto" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Video Upload:<span class="field_required">*</span></label>
                        <br>
                        <div class="upload-btn-wrapper">
                          <button class="btn">+ Upload Video</button>
                          <input type="file" name="servicevideo" />
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="upload-form-txt mtb-15">
                        <p>Live Stream Product End points Facebook~Instagram~Linkedln~Twitter~You Tube Free</p>
                        <p>Video View Home Page (in Video $5 per hour)</p>
                        <p>Video View City Page (at top $3 per hour)</p>
                        <p>Private 1 on 1 client request Vendor choice </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-15">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button value="SUBMIT">Submit</button>
                        </div>
                </div>
            </form>
    </div>
</section>

<!-- upload service form end -->

@endsection