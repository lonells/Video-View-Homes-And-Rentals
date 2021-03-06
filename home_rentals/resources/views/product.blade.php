@extends('master.header')
@section('content')
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

@endsection
