<html>
<head>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body class="main">


<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="{{route('menu')}}">Menu <span class="sr-only">(current)</span></a>
      </li>


      
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>
    </ul>

</nav>
</div>

</br>


<div  class="container">
  <div align="center" class="row">
    @foreach($menu as $cat)
    <div class="col-sm-6">    
        <div  class="card text-center" style="width: 18rem;">

          
        <img src="/../{{$cat->image}}" class="card-img-top" class="rounded mx-auto d-block" height="150" width="150">
        <div  class="card-body" >
          
          <a href="{{route('categoriesproduct',['name'=> $cat->cname])}}" class="btn btn-primary" style="background:#2F4F4F; color:white border-radius: 15px; ">{{$cat->cname}}</a>

          
        </div>                  
      </div>
      <br><br>
    </div>
    @endforeach   
  </div>     
</div>

</html>