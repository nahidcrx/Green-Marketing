<html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div align="center"><p style="color:white ;font-size: 40px;border:10px solid MediumSeaGreen;  ; border-radius: 10px; background:MediumSeaGreen; "><a href="/../../../{{'admin'}}"  class="btn btn-primary" style="border-radius: 15px; position: absolute; left: 20px;">Back</a><b>Informations</b> <a href="{{route('logout')}}"  class="btn btn-primary" style="background:Tomato; border-radius: 15px; position: absolute; right: 20px;">Logout</a></p>
</div>
<br><br>

<div class="container" align="center">

		<div class="card" style="width: 18rem;">
                <div class="card-body">
    				    <b>First Name :</b> {{$detail->First_Name}} <br>
				       <b>Last Name :</b> {{$detail->Last_Name }} <br>
					   <b>User Name:</b> {{$detail->User_Name}} <br>
					   <b>Phone :</b> {{$detail->Phone }} <br>
				       <b>Location :</b> {{$detail->Division}} <br>
					   <b>Email:</b> {{$detail->Email }} <br>
					   <b>Gender:</b> {{$detail->Gender }}
                </div>
        </div>
	
    </div>

<br><br>

<div align="center"><p style="color:white ;font-size: 40px;border:10px solid MediumSeaGreen;  ; border-radius: 10px; background:MediumSeaGreen; "><b>Advertisements</b></p>
</div>

<br><br>

<div class="container">
 @if($ads)

<div class="container">
	<div align="center" class="row">
		
		@foreach($ads as $info)

		<div class="col-sm-6"> 

			<div  class="card text-center" style="width: 18rem;"> 

				<img src="/../../../{{$info->image}}" class="card-img-top" class="rounded mx-auto d-block" height="150" width="150">
		      	
		      		<div class="card-body">
		      		   <b>Product ID :</b> {{$info->adid }} <br>
				       <b>Product Name :</b> {{$info->product_name}} <br>
				       <b>Product Quantity :</b> {{$info->quantity}} <br>
					   <b> Price Per Unit:</b> {{$info->price_per_unit}} <br>
					   <b> Location:</b> {{$info->division}} <br>
					   <b> Phone:</b> {{$info->phone}} <br><br>
					   <a href="{{route('delete_add',['id'=> $info->adid])}}" class="btn btn-primary" style="background:red; border-radius: 15px; " >Delete</a>
	
					</div>
			</div>
			<br><br>		
		</div>			
				
		@endforeach
	</div>	

</div>

@endif


		
	</div>
		
</body>


</html>