@extends('master')

@section('main-content')
    <style>
        .ts-service-box-bg {
            background: #252525;
            color: #fff;
            padding: 30px;
        }

        .ts-service-icon.icon-round i {
            font-size: 24px;
            color: #fff;
            background: #ffb600;
            text-align: center;
            border-radius: 100%;
            width: 60px;
            height: 60px;
            line-height: 60px;
            margin-bottom: 20px;
            position: relative;
            float: none;
        }

        .ts-service-icon i {
            float: left;
            font-size: 28px;
            margin-right: 15px;
            margin-top: 2px;
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

    <section style="padding:50px;background:#dedede;margin:50px;">
        <div class="container">
            <div class="row text-center">
                <h2 class="section-title">Reaching our Office</h2>
                <h3 class="section-sub-title">Find Our Location</h3>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center" style="height: 196px">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <div class="ts-service-box-content fontchange">
                            <p>〒169-0073, Tokyo, Shinjuku Ku, Hiyakunin Cho 1-11-31, Shin Okubo Building 2- 201</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center" style="height: 196px">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <div class="ts-service-box-content fontchange">
                            <h4>Email Us</h4>
                            <p>info@jbnetjp.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center" style="height: 196px">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-phone-square"></i>
                        </span>
                        <div class="ts-service-box-content fontchange">
                            <h4>Call Us</h4>
                            <p>03-6304-0504 | 080-3317-6494</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:50px;background:#dedede;margin:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="width: 100%"><iframe width="100%" height="500"
                            src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;q=Tokyo%20169-0073%2C%20%20Shinjuku%20City%2C%20Hyakunincho%201-11-31-201+(JBNet%20Group)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a
                                href="https://www.maps.ie/coordinates.html">gps coordinates finder</a></iframe></div><br>
                </div>
            </div>
        </div>
    </section>
@endsection
