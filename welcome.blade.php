<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap-theme.min.css">
        <script src="/app/bootstrap.min.css"></script>
        <script src="/app/jquery-3.1.1.min.js"></script>

        <title>PoomiShop</title>

        <link rel="shortcut icon" href="unnamed.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #003380;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #003380;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-size: 150px;
                
            }
            body {
                background-image: url("");
                background-repeat: no-repeat;
                background-size: 100%;
            }
            .container {
                color:#202020;
                padding: 80px 120px;

            }
            {
                font-size: 50px;
                font-style: italic;
                font-family: "Times New Roman", Times, serif;
            }

            footer {
               background-color: #555;
               color: white;
               padding: 15px;
            }



            </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                         <a href="{{url('/home')}}">Shop</a>
                         <a href="{{url('/Cart')}}">Cart</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                </div>
                <div class="container">
              <div class="col-sm-8">
                 <img src="tumblr_nlb3or7hsv1rcoad1o1_1280.jpg" alt="Random Name" width="1220" height="450" position="center">
                   </div>
                   
     <div class="panel-body">
     <h1>Categories</h1>
                
<div class="btn-group btn-group-justified">
  <h4>Women's wear / Men's Wear / Children's Wear / Bags / shoes </h4>
  
</div>
  </div>
        <div class="flex-center">
           <font face="Times" style="italic"><p align="center">Just the right shopping fashion for you!</p></font>
        </div>
    </div>

            </div>
        </div>
       
     

<footer class="container-fluid text-center">
  <p >@ PoomiShop / ShoppingCart - Made by Angela requinto</p>
  <p > La Verdad Christian College Apalit Pampanga</p>
</footer>



  



    </body>
</html>
