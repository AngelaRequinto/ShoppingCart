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
                    You add an item to your Cart!


                    <center>
         <h1>Cart Form</h1>
         <form action="/insert" method="post">
   <div>
        {{csrf_field()}}
  
    <label for="name">Product name</label>
    <input type="text" id="name" name="name">

    <label for="price">price</label>
    <input type="text" id="price" name="price">

    
  <a href="/home" class="btn btn-primary">submit</a>
    
  </form>
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

  input[type=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 80px;
}

  </style>

<br><br><br>

<footer class="container-fluid text-center">
  <p>@ E-Diary.com / LaravelProjects - Made by Angela requinto</p>
  <p> La Verdad Christian College Apalit Pampanga</p>
</footer>
 
@endsection
