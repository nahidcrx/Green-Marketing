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
        <a class="nav-link" href="{{route('admin')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      <a href="{{route('category')}}"  class="btn btn-primary" style="background:#2F4F4F; color:white; border-radius: 15px; position: absolute; right: 100px;">Back</a>

      
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>
    </ul>

</nav>
</div>

</br>



	
	<div class="container" align="center">

	<form action="" class="add" method="post" name="adpost" enctype="multipart/form-data">

		{{csrf_field()}}

		<div class="pname">
			<label><h3>Category Name</h2>
			<input type="text"  id="cname" class="form-control" name="cname" onkeyup="validation()" >
			</label>

		</div>
		</br>
		
		<div>
			<label><h3>Category Image</h3>

		<input type="file" class="form-control" name="image"></label>

		</div>

	</br>
		
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