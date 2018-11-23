<!DOCTYPE html>
<head>
<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div align="center"><p style="color:white ;font-size: 40px;border:10px solid MediumSeaGreen;  ; border-radius: 0px; background:	MediumSeaGreen; "><b>LOGIN</b></p>


</div>

<div class="container">
<form method="post">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="uname"  placeholder="Username">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" style="background:#2F4F4F; color:white;">Login</button><br><br>

  <div>

<a href="{{route('registration')}}" class="btn btn-primary" style="font-size:15px; background:	#20B2AA; color:white;">Sing Up</a><br><br> 
<a href="{{'index'}}" style="font-size:15px; background:#2F4F4F; color:white; " class="btn btn-primary">Back to Home</a>

  </div>	
</form>
</div>

@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
@endif

@if(session('message'))
	{{session('message')}}
@endif

</body>

</html>