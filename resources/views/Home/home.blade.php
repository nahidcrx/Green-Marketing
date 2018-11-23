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
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('profile')}}">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('menu')}}">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post">
    	{{ csrf_field() }}
    	<select class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
    				  <option value="" disabled selected hidden>Choose Location...</option>
					  <option value="Chittagong">Chittagong</option>
					  <option value="Rajshahi">Rajshahi</option>
					  <option value="Meat">Khulna</option>
					  <option value="Barisal">Barisal</option>
					  <option value="Dhaka">Dhaka</option>
					  <option value="Comilla">Comilla</option>
		</select>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>

<br><br>




<div  class="container">
	<div align="center" class="row">
		@foreach($add as $ad)
		<div class="col-sm-6">		
		  	<div  class="card text-center" style="width: 18rem;">

					
				<img src="{{$ad->image}}" class="card-img-top" class="rounded mx-auto d-block" height="150" width="150">
				<div  class="card-body" >
					<b class="card-title" >Product Name :</b>{{$ad->product_name}}<br>
					<b class="card-text"> Location:</b>{{$ad->division}}<br>
					<a href="{{route('add.details',['id'=> $ad->adid])}}" class="btn btn-primary">Details</a>
				</div>	   							
			</div>
			<br><br>
		</div>
		@endforeach		
	</div>	   
</div>		
	
 </body>
     
</html>