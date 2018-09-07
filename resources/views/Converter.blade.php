<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">--}}
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 800;
                height: 100vh;
                margin: 0;
                padding: 30px 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .w-100{
                width: 100%;
                height: 100%;
            }
            .row div{
                height: 100px;
            }
            .select-content span{
                padding-left: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <img src="{{url('/image/pic1.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic1 </p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic2.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 2</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic3.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 3</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic4.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 4</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic5.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 5</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic6.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 6</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic7.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 7</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic8.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 8</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic9.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 9</p>
            </div>
            <div class="col-md-1">
                <img src="{{url('/image/pic10.jpg')}}" class="w-100">
                <p class="text-bold text-center">pic 10</p>
            </div>
        </div>
        <div class="row" style="padding-top: 150px;">
            <div class="video-play-content col-md-6">
                <div class="float-right">
                <video width="600px;" controls style="float-right">
                    <source src="{{url('/test.mp4')}}">
                    Your browser does not support the video tag.
                </video>
                </div>
            </div>
            <div class="select-play-content col-md-6">
                <div class="select-content">
                    <form action="<?php echo url('/create') ?>" method="post" accept-charset="UTF-8" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <ul class="">
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic1</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic2</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic3</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic4</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic5</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic6</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic7</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic8</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic9</span></input>
                        </li>
                        <li>
                            <input type="checkbox" name="pic[]"><span>Pic10</span></input>
                        </li>
                        <button type="submit"  class="btn btn-primary" style="margin-top: 20px;">Save</button>
                    </form>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

