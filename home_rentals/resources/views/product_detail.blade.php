@extends('master.header')
@section('content')
    <style>
        .Buy:hover {
            cursor: pointer;
        }

        #animatedModal {
            width: 600px;
        }

        #card-errors {
            color: red;
        }

        .buyheading {
            border: 1px solid;
            border-radius: 5px;
            box-shadow: 3px 3px black;
            background-image: linear-gradient(180deg, #9c8e8e, #bfac82);
        }

        .not-allowed {
            cursor: not-allowed;
        }

        .glider-prev,
        .glider-next {
            user-select: none;
            position: absolute;
            outline: none;
            background: none;
            padding: 0;
            z-index: 2;
            font-size: 40px;
            text-decoration: none;
            left: -23px;
            border: 0;
            top: 50%;
            cursor: pointer;
            color: #000;
            opacity: 1;
            line-height: 1;
            transition: opacity .5s cubic-bezier(.17, .67, .83, .67), color .5s cubic-bezier(.17, .67, .83, .67);
        }

        .glider-next {
            right: -23px;
            left: auto;
        }

        section.aboutsecbanner {
            background-image: linear-gradient(#05595b, #062C30), url(assets/images/products-detail.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 110px 0 100px;
            background-position: 90% 43%;
            background-blend-mode: multiply;
        }

    </style>

    <!-- product detail banner sec start -->
    <section class="aboutsecbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="abouttext2">
                        <!-- <h2 class="upper"> </h2> -->
                        <h2 class="upper">Product Details</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product detail banner sec end -->
    <!-- product detail listing sec start -->
    <section class="productlistingsec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="slider-for">
                        <div>
                            <div class="detailproimg">
                                {{-- <video controls="" width="100%">
                                <source type="video/mp4"
                                    src="http://www.videoviewhomesandrentals.com/assets/uploads/product/10763088361586721306852809687SampleVideo_1280x720_1mb.mp4"
                                    width="100%">
                            </video> --}}
                                @if (!empty($product->product_image))
                                    @foreach (json_decode($product->product_image) as $img)
                                        @if ($loop->first)
                                            <div class="product-view mg-b-30 d-block">
                                                <img id="expandedImg"
                                                    src="{{ env('BACKEND_URL') . "uploads/products/$img" }}"
                                                    style="width:100%">
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                                @if (!empty($product->video))
                                                <div class="product-view mg-b-30 d-block">
                                                    {{-- <video
                                                        src="{{ $product->video }}"
                                                        width="100%" height="100%" controls controlsList='nodownload'>
                                                        Your browser does not support the video tag.
                                                    </video> --}}
                                <iframe width="100%" height="100%" src="{{ $product->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                </div>
                                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <div class="product-detail">
                        <div class="propertylist ">
                            <h6 class="category">
                                {{ $product->cat_name }}
                            </h6>
                            <h6 class="pname">
                                {{ $product->product_name }}
                            </h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>

                            <h6 class="desct">
                                Discription
                            </h6>
                            <p class="desc">
                                {{ $product->description }}
                            </p>
                            <div class="pricing">
                                <h6 class="prices">
                                    <p class="desct m-0">
                                        Price
                                    </p>
                                    @if (!empty($product->discount_price))
                                        $ <span class="amount">{{ $product->discount_price }}.00</span>
                                    @else
                                        $ <span class="amount">{{ $product->selling_price }}.00</span>
                                    @endif
                                </h6>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus  btn-number" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="number" id="quantity" name="quantity"
                                            class="form-control text-center fs_18 input-number" value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus  btn-number" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7">
                                    <button class="addtocart">Add to Cart</button>
                                </div>
                            </div>
                            <!-- <button class="order-btn">Order Now</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="relatedsec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="latesttext mb-5">
                        <h3>RELATED PRODUCTS</h3>
                    </div>
                    <div class="row">
                        
                        @forelse ($relatedproducts as $item)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="{{ url('/') }}/productdetail/{{ $item->id }}">
                                    <div class="for_blog feat_property">
                                        <div class="thumb">
                                            @if (!empty($item->product_image))
                                                @foreach (json_decode($item->product_image) as $img)
                                                    @if ($loop->first)
                                                        <div class="product-view mg-b-30 d-block">
                                                            <img src="{{ env('BACKEND_URL') . "uploads/products/$img" }}"
                                                                draggable="false" width="100%" alt="">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                            @if (!empty($item->video))
                                                <div class="product-view mg-b-30 d-block">
                                                    {{-- <video
                                                        src="{{ $item->video }}"
                                                        width="140" height="170" controls controlsList='nodownload'>
                                                        Your browser does not support the video tag.
                                                    </video> --}}
                                <iframe width="100%" height="100%" src="{{ $item->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                </div>
                                            @endif
                                            {{-- <img src="assets/images/thumb.jpg" draggable="false" width="100%" alt=""> --}}

                                            <div class="tag bgc-thm"> {{ $item->cat_name }}</div>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <div class="bp_meta">
                                                    <h6 class="pname"> {{ $item->product_name }} </h6>
                                                    <p>{{ $item->description }}</p>
                                                </div>
                                                @if (!empty($item->discount_price))
                                                    $ <span class="price">{{ $item->discount_price }}.00</span>
                                                @else
                                                    $ <span class="price">{{ $item->selling_price }}.00</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>

                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product detail listing sec end-->

    <div style="display: none;" id="animatedModal" class="animated-modal">
        <form id="payment-form" action="javascript:void(0)">
            <h4>Add Card Details</h4>
            <input type="hidden" name="product_id" value="10">
            <div id="card-element" class="form-control StripeElement StripeElement--empty">
                <div class="__PrivateStripeElement"
                    style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
                    <iframe name="__privateStripeFrame2435" frameborder="0" allowtransparency="true" scrolling="no"
                        allow="payment *"
                        src="https://js.stripe.com/v3/elements-inner-card-200bbcd726e5c89329e6b645b191861a.html#wait=false&amp;mids[guid]=NA&amp;mids[muid]=ca80151e-61e9-4c86-a21c-cb7c4b7d3e0fc734b0&amp;mids[sid]=7c6244f2-7dce-45ab-982d-09e5be29993993a112&amp;style[base][color]=%23495057&amp;style[base][fontFamily]=apple-system%2CBlinkMacSystemFont%2C%22Segoe+UI%22%2CRoboto%2C%22Helvetica+Neue%22%2CArial%2Csans-serif&amp;style[base][padding]=8px+12px&amp;rtl=false&amp;componentName=card&amp;keyMode=test&amp;apiKey=pk_test_hWqb9XMOfZFuscYRUOHPNIyg&amp;referrer=http%3A%2F%2Fwww.videoviewhomesandrentals.com%2Fproduct%2Fdetail%2F10&amp;controllerId=__privateStripeController2431"
                        title="Secure card payment input frame"
                        style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: normal !important; height: 16.8px;"></iframe><input
                        class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false"
                        maxlength="1"
                        style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;">
                </div>
            </div>
            <div id="card-errors" role="alert"></div><br>
            <div class="btn btn-primary pay" style="width:100%;">Pay</div>
        </form>
    </div>

    <script>
        var userid = 0;

        $("#replyForm").submit(function() {
            // var data = new FormData(document.getElementById('replyForm'));
            if (userid > 0) {
                if ($('#reply_name').val() != "" && $('#reply_email').val() != "" && $('#reply_scheduletime')
                    .val() !=
                    "") {
                    var data = $('#replyForm').serialize();
                    var url = "http://www.videoviewhomesandrentals.com/dashboard/custom/agency_reply";
                    var res = AjaxRequest.formrequest(url, data);

                    if (res.status == 1) {
                        // AdminToastr.success(res.txt);
                        if (!res.redirection) {
                            AdminToastr.success(res.txt);
                        } else {
                            AdminToastr.success('You\'ll now be redirected to the payment page!', "Success");

                            setInterval(function() {
                                window.location.href = base_url + 'product/stream_payment/' + res.id;
                            }, 2000);
                        }
                    } else {
                        AdminToastr.error(res.txt);
                    }
                } else {
                    AdminToastr.error('Please fill in relevant details!');
                }
            } else {
                AdminToastr.error('Please login to send response!');
            }
        });

        $('.Buy').click(function() {
            var data = {
                product: 'a:122:{s:10:"product_id";s:2:"10";s:14:"product_userid";s:1:"1";s:19:"product_category_id";s:1:"1";s:22:"product_subcategory_id";s:2:"12";s:24:"product_childcategory_id";s:1:"0";s:27:"product_subchildcategory_id";s:1:"0";s:13:"product_color";s:1:"0";s:19:"product_material_id";s:1:"0";s:12:"product_name";s:5:"Novel";s:12:"product_slug";s:5:"Novel";s:12:"product_type";s:4:"Book";s:23:"product_streaming_price";s:1:"4";s:12:"product_size";s:9:"400 pages";s:11:"product_zip";s:6:"564664";s:15:"product_address";s:9:"street 21";s:15:"product_country";s:13:"United States";s:13:"product_state";N;s:12:"product_city";s:7:"Absecon";s:17:"product_offertype";s:4:"Sale";s:12:"product_year";s:4:"2020";s:17:"product_neighbour";s:13:"National Bank";s:13:"product_price";s:4:"1000";s:17:"product_old_price";s:0:"";s:13:"product_stock";N;s:11:"product_sku";N;s:14:"product_detail";s:0:"";s:16:"product_features";s:16:"400 pages, index";s:16:"product_overview";N;s:14:"product_vendor";N;s:12:"product_info";N;s:11:"product_kit";N;s:17:"product_prep_size";N;s:17:"product_tech_info";N;s:21:"product_kit_component";N;s:16:"product_delivery";N;s:15:"product_returns";N;s:13:"product_image";s:32:"1447635534707462910839566721.jpg";s:13:"product_video";s:57:"10763088361586721306852809687SampleVideo_1280x720_1mb.mp4";s:19:"product_image_thumb";N;s:18:"product_image_path";s:23:"assets/uploads/product/";s:11:"product_new";s:1:"0";s:16:"product_featured";s:1:"0";s:18:"product_sell_today";s:1:"0";s:15:"product_is_sold";s:1:"1";s:14:"product_status";s:1:"1";s:20:"product_is_promotion";s:1:"0";s:17:"product_createdon";s:19:"2021-06-02 13:49:56";s:18:"product_view_count";s:2:"73";s:11:"category_id";s:2:"12";s:15:"category_userid";s:1:"0";s:13:"category_type";s:1:"0";s:18:"category_parent_id";s:1:"1";s:20:"category_is_featured";s:1:"0";s:13:"category_name";s:4:"book";s:13:"category_slug";s:4:"book";s:15:"category_detail";N;s:16:"category_detail2";N;s:16:"category_detail3";N;s:16:"category_detail4";N;s:16:"category_detail5";N;s:16:"category_detail6";N;s:16:"category_detail7";N;s:16:"category_detail8";N;s:17:"category_shipping";N;s:14:"category_image";N;s:15:"category_image2";N;s:21:"category_banner_image";N;s:20:"category_image_thumb";N;s:19:"category_image_path";N;s:15:"category_status";s:1:"1";s:18:"category_createdon";s:19:"2021-06-02 13:49:56";s:9:"signup_id";s:1:"1";s:11:"signup_type";N;s:17:"signup_package_id";N;s:15:"signup_price_id";s:1:"3";s:15:"signup_fullname";s:11:"Eric Walter";s:16:"signup_firstname";s:4:"Eric";s:15:"signup_lastname";s:6:"Walter";s:12:"signup_email";s:30:"ericwalter.developer@gmail.com";s:15:"signup_about_me";s:4:"Test";s:14:"signup_website";s:0:"";s:27:"signup_show_activity_status";N;s:31:"signup_show_subscription_offers";N;s:31:"signup_push_notification_status";N;s:32:"signup_email_notification_status";N;s:32:"signup_site_related_notification";N;s:33:"signup_toast_related_notification";N;s:37:"signup_site_subscription_notification";N;s:23:"signup_amazon_whishlist";s:0:"";s:12:"signup_phone";s:11:"95264646466";s:14:"signup_address";s:0:"";s:15:"signup_birthday";N;s:15:"signup_address2";N;s:16:"signup_education";N;s:11:"signup_file";N;s:16:"signup_file_path";N;s:15:"signup_password";s:32:"a3dcb4d229de6fde0db5686dee47145d";s:10:"signup_zip";s:4:"3216";s:14:"signup_country";s:13:"United States";s:10:"signup_day";N;s:11:"signup_user";s:3:"@u1";s:12:"signup_month";N;s:11:"signup_year";N;s:11:"signup_city";s:7:"Absecon";s:12:"signup_state";s:10:"New Jersey";s:14:"signup_company";s:0:"";s:20:"signup_business_name";N;s:14:"signup_contact";s:12:"+92675476561";s:17:"signup_logo_image";s:29:"1366538117859332016user_1.jpg";s:18:"signup_vendor_logo";s:42:"1156671862757705412contact-icon-list-1.png";s:22:"signup_logo_image_path";s:20:"assets/uploads/user/";s:19:"signup_banner_image";s:35:"15460903841352906141home-slider.jpg";s:15:"signup_industry";N;s:15:"signup_facebook";s:25:"https://www.facebook.com/";s:14:"signup_twitter";s:28:"https://twitter.com/?lang=en";s:16:"signup_instagram";s:26:"https://www.instagram.com/";s:15:"signup_linkedin";s:0:"";s:12:"signup_token";s:0:"";s:15:"signup_response";s:0:"";s:21:"signup_payment_status";s:0:"";s:13:"signup_status";s:1:"1";s:16:"signup_createdon";s:19:"2021-03-20 01:34:17";}'
            };
            var url = base_url + 'checkout/add_cart';
            var res = AjaxRequest.formrequest(url, data);
            if (res.status) {
                AdminToastr.success(res.msg);
            } else {
                AdminToastr.error(res.msg);
            }
        });
    </script>


    <script src="https://js.stripe.com/v3/"></script>

    <script>
        // var stripe = Stripe('pk_test_hWqb9XMOfZFuscYRUOHPNIyg');
        var stripe = Stripe('pk_test_hWqb9XMOfZFuscYRUOHPNIyg');

        var elements = stripe.elements();

        var style = {
            base: {
                // 'lineHeight': '1.35',
                // 'fontSize': '1.11rem',
                'color': '#495057',
                'fontFamily': 'apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif',
                'padding': '8px 12px'
            }
        };
        var card = elements.create("card", {
            style: style
        });
        card.mount("#card-element");

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');

            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        $('.pay').click(function() {
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {

                    // Send the token to your server.
                    stripeTokenHandler(result.token);

                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            // form.submit();
            var data = $('#payment-form').serialize();
            var url = base_url + 'product/product_payment';
            var res = AjaxRequest.formrequest(url, data);
            if (res.status) {
                AdminToastr.success(res.txt);
                setInterval(function() {
                    window.location.reload();
                }, 2000);
            } else {
                AdminToastr.error(res.txt);
            }
        }

        $('.alert').click(function() {
            AdminToastr.error("Please login to buy this product!");
        })

        $('.add').click(function() {
            AdminToastr.error("Feature unavailable!");
        })
    </script>
@endsection
