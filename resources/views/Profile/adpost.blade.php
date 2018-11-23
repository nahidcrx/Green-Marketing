<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	
	
	
	
 <div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('profile')}}">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('menu')}}">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<br>


	
	
<div class="container">	

	<form action="" class="add" method="post" name="adpost" enctype="multipart/form-data">

		{{csrf_field()}}

		<div class="pname">
			<label>Product Name:
			<input type="text" class="form-control" id="pname" name="pname" onkeyup="validation()" ></label>
			<span id="msg1"></span>

		</div>
		
		<div>
			<label>Product Category:
				<select id="" name="product_category" class="form-control" onkeyup="validation()">

					@foreach($category as $cat)
							<option value="{{$cat->cname}}">{{$cat->cname}}</option>
					@endforeach
					  


				</select></label>
				<span id="msg2"></span>
		</div>
		
		<div>
			<label>Product Image:

		<input type="file" class="form-control" name="image"></label>

		</div>
	
		
		<span id="msg3"></span>
		
		
		
		<div>
		<label>Quantity:
		<input type="text"  id="pquality" class="form-control" name="quantity" onkeyup="validation()" ></label>
		<span id="msg4"></span>
		</div>
		
		<div>
		<label>Price Per Unit:
		<input type="text"  id="pprice" class="form-control" name="price_per_unit" onkeyup="validation()"  ></label>
		<span id="msg5"></span>
		</div>
		
		<div>
		<label>Description:
		<input type="text"  id="pdiscribetion" class="form-control" name="product_description" onkeyup="validation()" ></label>
		<span id="msg6"></span>
		</div>
		
		<div>
		<label>Phone:
		<input type="text"  id="pphone" class="form-control" name="phone" onkeyup="validation()" ></label>
		<span id="msg7"></span>
		</div>
		
		<div>
		<label>Division:
				<select id="" class="form-control" name="product_division" onkeyup="validation()">
					  <option value="Chittagong">Chittagong</option>
					  <option value="Rajshahi">Rajshahi</option>
					  <option value="Meat">Khulna</option>
					  <option value="Barisal">Barisal</option>
					  <option value="Dhaka">Dhaka</option>
					  <option value="Comilla">Comilla</option>


				</select></label>
				<span id="msg8"></span>
		</div>
		
		
		<label><div><input type="submit" class="btn btn-primary" onclick="return validation()" value="Submit" /></div></label>



		 @if($errors->any())
    
             <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
            </ul>

             @endif
		

		

	</form>
</div>
	
	</body>
	</html>
	
