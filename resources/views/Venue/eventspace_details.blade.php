@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous"></script>


    <style>
        a {
            font-size: 100% !important;
        }

        /* unvisited link */
        a:link {
            color: white !important;
        }

        /* visited link */
        a:visited {
            color: white !important;
        }

        /* selected link */
        a:active {
            color: white !important;

        }

        .container-fluid {
            width: 100%;
            height: auto;

        }

        /* search */
        input[type=search] {
            -webkit-appearance: none !important;
            background-clip: padding-box;
            background-color: white;
            vertical-align: middle;
            border-radius: 0.25rem;
            border: 1px solid #e0e0e5;
            font-size: 1rem;
            width: 100%;
            line-height: 2;
            padding: 0.375rem 1.25rem;
            transition: border-color 0.2s;
        }

        input[type=search]:focus {
            transition: all 0.5s;
            box-shadow: 0 0 40px #f9d442b9;
            border-color: #f9d342;
            outline: none;
        }

        form.search-form {
            display: flex;
            justify-content: center;
        }

        label {
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: auto;
            align-self: center;
            margin-bottom: 0;
        }

        input.search-field {
            margin-bottom: 0;
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: auto;
            align-self: center;
            height: 51px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        input.search-submit {
            height: 51px;
            margin: 0;
            padding: 1rem 1.3rem;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            font-family: "Font Awesome 5 Free";
            font-size: 1rem;
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        .button {
            display: inline-block;
            font-weight: 600;
            font-size: 0.8rem;
            line-height: 1.15;
            letter-spacing: 0.1rem;
            text-transform: uppercase;
            background: #f9d342;
            color: #292826;
            border: 1px solid transparent;
            vertical-align: middle;
            text-shadow: none;
            transition: all 0.2s;
        }

        .button:hover,
        .button:active,
        .button:focus {
            cursor: pointer;
            background: #E89A3D;
            color: #292826;
            outline: 0;
        }


        /* compare */
        .product-col {
            display: none;
        }

        .compare-col-1 {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
            display: block;
        }

        .compare-col-2 {
            -webkit-box-ordinal-group: 3;
            -webkit-order: 2;
            -ms-flex-order: 2;
            order: 2;
            display: block;
        }

        .compare-col-3 {
            -webkit-box-ordinal-group: 4;
            -webkit-order: 3;
            -ms-flex-order: 3;
            order: 3;
            display: block;
        }

        .compare-col-4 {
            -webkit-box-ordinal-group: 5;
            -webkit-order: 4;
            -ms-flex-order: 4;
            order: 4;
            display: block;
        }

        .compare-col-5 {
            -webkit-box-ordinal-group: 6;
            -webkit-order: 5;
            -ms-flex-order: 5;
            order: 5;
            display: block;
        }

        /* gallery */
        #gallery {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 100%;
            display: table;
            transition: all ease 1s;
            background-color: #fff;
            overflow-x: hidden;
        }

        #gallery .item {
            width: 20%;
            display: block;
            float: left;
            transition: all ease 400ms;
            background-color: #000;
            position: relative;
        }

        #gallery .item:hover,
        #gallery .item:focus {
            transform: scale(1.1);
            z-index: 50;
            box-shadow: 0 0 10px black;
        }

        #gallery .item figure {
            transition: all ease 1s;
            overflow: hidden;
            height: auto;
            padding: 0;
            margin: 0;
            position: relative;
        }

        #gallery .item figure img {
            transform: scale(1.4);
            transition: all ease 1s;
        }

        #gallery .item:hover figure,
        #gallery .item:focus figure {
            transition: all ease 400ms;
        }

        #gallery .item:hover figure img,
        #gallery .item:focus figure img {
            transform: scale(1.4);
            transition: all ease 1s;
        }

        #gallery.hover {
            transition: all ease 1s;
            /*   opacity:.7; */
        }

        #gallery.hover .item {
            opacity: .9;
            filter: blur(1px);
        }

        #gallery.hover .item:hover,
        #gallery.hover .item:focus {
            opacity: 1;
            filter: blur(0);
        }

        #gallery .item figcaption {
            position: absolute;
            font-size: 18px;
            color: #fff;
            width: 100%;
            height: 100%;
            padding: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            top: 0;
            left: 0;
            transform: scale(1.3);
            filter: blur(4px);
            opacity: 0;
            transition: 500ms;
            background-color: rgba(0, 154, 178, .6);
            text-transform: uppercase;
            font-weight: bold;
        }

        #gallery .item:hover figcaption,
        #gallery .item:focus figcaption {
            transform: scale(1);
            filter: blur(0);
            opacity: 1;
            transition: 300ms;
        }

        @media (max-width:1368px) {
            #gallery .item {
                width: 25%;
            }
        }

        @media (max-width:1080px) {
            #gallery .item {
                width: 33.3%;
            }
        }

        @media (max-width:800px) {
            #gallery .item {
                width: 50%;
            }

            #gallery .item figure {
                height: 250px;
            }

            #gallery .item figure img {
                transform: rotate(0) scale(1);
                transition: all ease 1s;
                width: auto;
                min-width: 100%;
                height: 100%;
                min-height: 250px;
            }

            #gallery .item:hover figure img {
                transform: rotate(0) scale(1);

            }
        }

        @media (max-width:500px) {
            #gallery .item {
                width: 100%;
            }

            #gallery .item figure {
                height: 250px;
            }
        }

        /* maps */

        #map {
            height: 50vh;
            /* margin-top: 80px; */
        }

        #firstHeading {
            font-size: 20px;
        }

        #bodyContent a {
            color: red;
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        #bodyContent p {
            font-size: 15px;
            max-width: 400px;
        }

    </style>

    <body>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12" style="padding-left: 5%; padding-right: 5%; padding-top: 5%;">
                    <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a><br><br>
                    <div class="rounded-lg card border-1">
                        <!-- Card body -->
                        <div class="p-0 card-body">
                            <!-- Card title -->

                            @if (sizeof($eventspace))
                                <div class="flex-row p-3 m-0 card-title d-flex align-items-center justify-content-between">
                                    <h1>Event Space Details</h1>
                                </div>
                            @else
                                <div class="flex-row p-3 m-0 card-title d-flex align-items-center justify-content-between">
                                    <h1>{{ $hotel_name->hotel_name }}</h1>
                                </div>
                            @endif
                            <!-- Activity details -->
                            @forelse($eventspace as $data)
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row" style="text-align: center">
                                            <div class="col-md-12">
                                                <h3 class="m-0 font-weight-normal">{{ $data->hotels->hotel_name }}</h3>
                                                <img class="card-img-top"
                                                    src="{{ asset($image_path = str_replace('public', 'storage', $data->hotels->thumbnail)) }}"
                                                    style="width: 250px; height: 200px;" alt="Card image cap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row" style="text-align: center">
                                            @if ($data->hotels->car_radius)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Radius from KLCC (car)</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->hotels->car_radius ? $data->hotels->car_radius : '-' }}
                                                    </h5>
                                                </div>
                                            @endif
                                            @if ($data->venue)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Event Space</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->venue ? $data->venue : '-' }}</h5>
                                                    <br>
                                                </div>
                                            @endif
                                            @if ($data->size)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Size</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->size ? $data->size : '-' }} sq.ft</h5>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row" style="text-align: center">
                                            @if ($data->hotels->walking_radius)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Radius from KLCC (walk)</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->hotels->walking_radius ? $data->hotels->walking_radius : '-' }}
                                                    </h5>
                                                </div>
                                            @endif

                                            @if ($data->level)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Level</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->level ? $data->level : '-' }}</h5>
                                                </div>
                                            @endif
                                            @if ($data->banquet)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Banquet</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->banquet ? $data->banquet : '-' }}</h5>
                                                </div>
                                            @endif

                                        </div>
                                        <br>
                                        <div class="row" style="text-align: center">
                                            @if ($data->classroom)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Classroom</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->classroom ? $data->classroom : '-' }}</h5>
                                                    <br>

                                                </div>
                                            @endif
                                            @if ($data->cocktail)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Cocktail</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->cocktail ? $data->cocktail : '-' }}</h5>
                                                    <br>

                                                </div>
                                            @endif
                                            @if ($data->theater)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Theater</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->theater ? $data->theater : '-' }}</h5>
                                                </div>
                                            @endif


                                        </div>
                                        <br>
                                        <div class="row" style="text-align: center">

                                            @if ($data->cabaret)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Cabaret</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->cabaret ? $data->cabaret : '-' }}</h5>
                                                </div>
                                            @endif

                                            @if ($data->booth_capacity)
                                                <div class="col-md-4">
                                                    <h5 class="text-muted">Booth Capacity</h5>
                                                    <h5 class="m-0 font-weight-normal">
                                                        {{ $data->booth_capacity ? $data->booth_capacity : '-' }}</h5>
                                                    <br>
                                                </div>
                                            @endif
                                            {{-- @if ($data->banquet)
                                    <div class="col-md-2">
                                        <h5 class="text-muted">Banquet</h5>
                                        <h5 class="m-0 font-weight-normal">{{ $data->banquet ? $data->banquet : "-" }}</h5>
                                    </div>
                                    @endif --}}

                                        </div>
                                    </div>
                                </div>

                            @empty

                            @endforelse
                            <div class="border-0 rounded-lg card" style="padding: 5%">
                                <!-- Tab nav -->
                                <ul class="mb-3 nav nav-pills" id="pills-tab" role="tablist"
                                    style="background-color: #2F4858; justify-content: space-evenly;">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="true">
                                            <font color="white">Photo Gallery</font>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">
                                            <font color="white">Event Space Available</font>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                            role="tab" aria-controls="pills-contact" aria-selected="false">
                                            <font color="white">Nearby</font>
                                        </a>
                                    </li>
                                </ul>


                                <!-- Tab content -->

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div id="gallery">
                                            @forelse($photos as $photo)
                                                <div class="item">
                                                    <a href="{{ asset($image_path = str_replace('public', 'storage', $photo->photos)) }}"
                                                        data-fancybox="gallery" data-caption="{{ $photo->caption }}">
                                                        <figure>
                                                            <img class="card-img-top"
                                                                src="{{ asset($image_path = str_replace('public', 'storage', $photo->photos)) }}"
                                                                style="width:100%;" alt="Card image cap">
                                                            {{-- <figcaption>This is a caption with a long text to test</figcaption> --}}
                                                        </figure>
                                                    </a>
                                                </div>
                                            @empty
                                                {{-- @forelse($gallery as $gallery)
                                                    <div class="item">
                                                        <a href="{{ asset($image_path = str_replace('public', 'storage', $gallery->photos)) }}"
                                                            data-fancybox="gallery"
                                                            data-caption="{{ $gallery->caption }}">
                                                            <figure>
                                                                <img class="card-img-top"
                                                                    src="{{ asset($image_path = str_replace('public', 'storage', $gallery->photos)) }}"
                                                                    style="width:100%;" alt="Card image cap">

                                                            </figure>
                                                        </a>
                                                    </div>
                                                @empty
                                                @endforelse --}}
                                            @endforelse
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">

                                        <div class="table-responsive">
                                            <table class="table text-dark table-borderless" id="defaultOrderingDataTable">
                                                {{-- <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;"> --}}

                                                <thead>
                                                    <tr class="text-center">
                                                        <th>
                                                            <p class="mb-0">Event Space</p>
                                                        </th>
                                                        <th>
                                                            <p class="mb-0">Level</p>
                                                        </th>
                                                        <th>
                                                            <p class="mb-0">Size</p>
                                                        </th>
                                                        <th>
                                                            <p class="mb-0">Banquet</p>
                                                        </th>
                                                        <th>
                                                            <p class="mb-0">Classroom</p>
                                                        </th>
                                                        <th>
                                                            <p class="mb-0">Theater</p>
                                                        </th>
                                                        <th>
                                                            <p class="mb-0">Cocktail</p>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Table data -->
                                                    {{-- @if ($data->hotel_id) --}}
                                                    @forelse ( $hotels as $data)
                                                        <tr class="text-center">
                                                            <td>
                                                                <p class="mb-0 font-weight-bold">{{ $data->venue }}
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 font-weight-normal">{{ $data->level }}
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 font-weight-normal">{{ $data->size }}
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 font-weight-normal">
                                                                    {{ $data->banquet }}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 font-weight-normal">
                                                                    {{ $data->classroom }}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 font-weight-normal">
                                                                    {{ $data->theater }}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 font-weight-normal">
                                                                    {{ $data->cocktail }}</p>
                                                            </td>
                                                        </tr>
                                                    @empty

                                                    @endforelse
                                                    {{-- @else
                                @forelse ( $eventspace as $data)
                                    <tr class="text-center">
                                        <td><p class="mb-0 font-weight-bold">{{ $data->venue }}</p></td>
                                        <td><p class="mb-0 font-weight-normal">{{ $data->level }}</p></td>
                                        <td><p class="mb-0 font-weight-normal">{{ $data->size }}</p></td>
                                        <td><p class="mb-0 font-weight-normal">{{ $data->banquet }}</p></td>
                                        <td><p class="mb-0 font-weight-normal">{{ $data->classroom }}</p></td>
                                        <td><p class="mb-0 font-weight-normal">{{ $data->theater }}</p></td>
                                        <td><p class="mb-0 font-weight-normal">{{ $data->cocktail }}</p></td>
                                    </tr>
                                    @empty
                                    @endforelse
                                @endif --}}



                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">

                                        <div id="map"></div>
                                        {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC2TRFZxVzF15u7s41qm_9a2ai_IOFD8A&sensor=false&callback=initMap"></script> --}}
                                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxD3V2LgIn_K_q2oAOs5gzS0GCG5qRjr0&callback=initMap&libraries=&v=weekly?"async></script>

                                        {{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBC2TRFZxVzF15u7s41qm_9a2ai_IOFD8A&sensor=false"></script> --}}


                                        @forelse ($map as $item)


                                            <script>
                                                var icons = {
                                                    parking: {
                                                        icon: 'https://tarantelleromane.files.wordpress.com/2016/10/map-marker.png?w=50'
                                                    }
                                                };


                                                // REPLACE WITH DATA FROM API
                                                //TITLE | POSITION - LAT , LNG | ICON | TITLE | CONTENT
                                                var airports = [{
                                                    title: "{{ $item->hotel_name }}",
                                                    position: {
                                                        lat: {{ $item->latitude }},
                                                        lng: {{ $item->longitude }}
                                                    },
                                                    icon: 'parking',
                                                    content: '<div id="content"><div id="siteNotice"></div><h1 id="firstHeading" class="firstHeading">{{ $item->hotel_name }}</h1><div id="bodyContent"><p><b>{{ $item->hotel_name }}</b></div></div>'
                                                }];

                                                function initMap() {

                                                    var uk = {
                                                        lat: 3.1580,
                                                        lng: 101.7118
                                                    };

                                                    var map = new google.maps.Map(document.getElementById('map'), {
                                                        zoom: 15,
                                                        center: uk,
                                                        disableDefaultUI: true,

                                                    });

                                                    var InfoWindows = new google.maps.InfoWindow({});

                                                    airports.forEach(function(airport) {
                                                        var marker = new google.maps.Marker({
                                                            position: {
                                                                lat: airport.position.lat,
                                                                lng: airport.position.lng
                                                            },
                                                            map: map,
                                                            icon: icons[airport.icon].icon,
                                                            title: airport.title
                                                        });
                                                        marker.addListener('mouseover', function() {
                                                            InfoWindows.open(map, this);
                                                            InfoWindows.setContent(airport.content);
                                                        });
                                                    });
                                                }
                                            </script>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><br>

        </div>


        <script>
            $("#gallery .item").hover(
                function() {
                    $('#gallery').addClass("hover");
                    $(this).addClass("hover");
                },
                function() {
                    $(this).removeClass("hover");
                    $('#gallery').removeClass("hover");
                }
            );
        </script>



    @endsection
