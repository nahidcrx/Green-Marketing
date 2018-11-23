<html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div align="center"><p style="color:white ;font-size: 40px;border:10px solid MediumSeaGreen;  ; border-radius: 0px; background:MediumSeaGreen; "><b>ALL USERS</b>

<a href="{{route('category')}}"  class="btn btn-primary" style="background:#2F4F4F; color:white; border-radius: 15px; position: absolute; right: 100px;">Category List</a>


<a href="{{route('logout')}}"  class="btn btn-primary" style="background:Tomato; border-radius: 15px; position: absolute; right: 20px;">Logout</a></p>
</div>

<br><br>

	<div class="container">
	<div  class="container">
	<div align="center" class="row">
		@foreach($user as $usr)
		<div class="col-sm-6">		
		  	<div  class="card text-center" style="width: 18rem;">
				<div  class="card-body" >
					<b class="card-title" >Name :</b> {{$usr->First_Name}} {{$usr->Last_Name}}<br>
					<b class="card-text"> Location:</b> {{$usr->Division}}<br><br>
					<a href="{{route('userdetails',['id'=> $usr->ID])}}" class="btn btn-primary" style=" border-radius: 15px;">Details</a>
					<a href="{{route('delete_user',['id'=> $usr->ID])}}" class="btn btn-primary" style="background:red; border-radius: 15px; ">Delete</a>
				</div>	   							
			</div>
			<br><br>
		</div>
		@endforeach		
	</div>	   
</div>		


	</div>	
</body>


</html>