@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="/app/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/app/bootstrap.min.css">
 <script src="/app/bootstrap.min.css"></script>
<script src="/app/jquery-3.1.1.min.js"></script>




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="panel-heading"> Product Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br><br><center>
                    <a href="/women" class="btn btn-primary">Women's Wear</a>
                    <a href="/men" class="btn btn-primary">Men's Wear</a>
                    <a href="/children" class="btn btn-primary">Childrens Wear</a>
                    <a href="/bag" class="btn btn-primary">Bag</a>
                    <a href="/shoes" class="btn btn-primary">Shoes</a>
                    </center>
          <br><br><br><br>
     

      <h1 face="times">Featured products</h1>
    
     <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="7feef18f9b8628a969a552ff2caf93e1.jpg" alt="Paris" width="400" height="300">
          <p><strong>Product 01</strong></p>
          <p>Php 750.00</p>
          <a href="/Cart" class="btn">Add cart</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="31ff100d99fa497b85b41de7e89f3480.jpg" alt="New York" width="400" height="300">
          <p><strong>Product 02</strong></p>
          <p>Php 175.00</p>
          <a href="/Cart" class="btn">Add cart</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="20151105103655_3646286009.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>product 03</strong></p>
          <p>Php 1300.00</p>
          <a href="/Cart" class="btn">Add cart</a>
        </div>
        <div class="row text-left">
      <div class="col-sm-14">
        <div class="thumbnail">
          <img src="bonicrew_keychain.jpg" alt="Paris" width="400" height="300">
          <p><strong>product 04</strong></p>
          <p>Php 175</p>
          <a href="/Cart" class="btn">Add cart</a>
        </div>
      </div>
      <div class="col-sm-14">
        <div class="thumbnail">
          <img src="ahn_jae_hyun_png_by_jknanddsc-da3j156.png" alt="New York" width="400" height="300">
          <p><strong>product 05</strong></p>
          <p>Php 1300.00</p>
          <a href="/Cart" class="btn">Add cart</a>
        </div>
      </div>
      <div class="col-sm-14">
        <div class="thumbnail">
          <img src="FB_IMG_1504788843349.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>product 06</strong></p>
          <p>Php 50.00</p>
          <a href="/Cart" class="btn">Add cart</a>
        </div>
        


      </div>
    </div>
  </div>
</div>

 

                </div>
            </div>
        </div>
    </div>
</div>



<style>
   footer {
               background-color: #555;
               color: white;
               padding: 30px;
            }
    .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}

  </style>

<br><br><br>

<footer class="container-fluid text-center">
  <p>@ E-Diary.com / LaravelProjects - Made by Angela requinto</p>
  <p> La Verdad Christian College Apalit Pampanga</p>
</footer>
 
@endsection
