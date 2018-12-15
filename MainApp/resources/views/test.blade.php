@extends('layouts.app')
@section('content')
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 500px;overflow: hidden;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="image/1.webp" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="image/2.webp" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="image/3.webp" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div style="position:absolute; width:250px;top:100px;left:10%;">
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso" style="background: rgba(255,255,255,0.7);">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

    <form action="/add" method="post">
    {!! csrf_field() !!}
     <div class="form-group">
      <label class="control-label requiredField" for="arrival_date">
       Arrival
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <input class="form-control" id="arrival_date" name="arrival_date" placeholder="YYYY-MM-DD" type="text" required />
       <div class="input-group-addon">
        <i class="fa fa-calendar-plus-o">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="departure_date">
       Departure
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <input class="form-control" id="departure_date" name="departure_date" placeholder="YYYY-MM-DD" type="text" required />
       <div class="input-group-addon">
        <i class="fa fa-calendar-times-o">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="adult_count">
       Adults
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="adult_count" name="adult_count" placeholder="Amount of adults" type="text" required />
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="childs_count">
       Childrens
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="number1" name="childs_count" placeholder="Amount of childs" type="text" required />
     </div>
      <div class="form-group ">
      <label class="control-label requiredField" for="childs_count">
       Contact number
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="number1" name="contact_number" placeholder="enter number" type="text" required />
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary" name="submit" type="submit" onclick='alert("Запрос отправлен");'>
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
</div>
</div>
@stop
