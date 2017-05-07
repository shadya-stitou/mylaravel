<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajax crud</title>
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 



</head>
<body>
  <nav class="navbar navbar-default" role="navigation"> 
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
  <span class="sr-only"> Toggle navigation </span>
  <span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">App Laravel</a>
</div>
<div class="collapse navbar-collapse" id="navbar">
<ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href=""></a></li>

</ul>
    
<form class="navbar-form navbar-left" role="search">
   <div class="col-md-15">
  {!! Form::open(['method'=>'GET','url'=>'itemCRUD','class'=>'navbar-form navbar-left','role'=>'search'])!!}
  <div class="input-group custom-search-form">
  <input type="text" name="search" class="form-control" placeholder="Search">
  <span class="input-group-btn">
  <button type="submit" class="btn btn-default-sm"><font color='#555'><img src='../img/logosearch.png' width='20px'height='20px'/></button>

    
  </span>
    
  </div>
</div>
</form>
<ul class="nav navbar-nav navbar-right">
    <li><a href="#"></a></li>
</ul>

</div>
</div>
</nav>
<div class="container">
   <div class="row">
       @yield('content')
   </div> 
</div>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    




</body>




       




    

