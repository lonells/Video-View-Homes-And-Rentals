@extends('master.header')
@section('content')
<style type="text/css">
section.statecity ul {
    float: left;
    padding: 0;
    width: 100%;
    box-sizing: border-box;
    padding-left: 30px;
    padding-right: 30px;
    margin: 0;
}

section.aboutsecbanner {
    background-image: linear-gradient(#05595b, #062C30), url(assets/images/random-3162742262147.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 110px 0 100px;
    background-position: 90% 43%;
    background-blend-mode: multiply;
}

</style>
<!-- about banner sec start -->
<section class="aboutsecbanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="abouttext2">
                    <h2>Countries</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statecity U.S.A start -->
<section class="statecity">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>City</h2>
            </div>
            <div class="row">
                @foreach ($data as $item)

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <ul class="statecitycountry">
                        <li>
                            <a href="{{ url('/cityproducts') }}/{{ $item->id }}" data-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;{{ $item->city }}
                            </a>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>

                @endforeach

            </div>
        </div>
</section>

<!-- statecity U.S.A end -->

@endsection