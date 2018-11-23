<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div align="center"><p style="color:white ;font-size: 40px;border:10px solid MediumSeaGreen;  ; border-radius: 10px; background:MediumSeaGreen; "><a href="{{route('home')}}" style="border-radius: 15px; position: absolute; left: 20px;" class="btn btn-primary">Back</a><b>Informations</b> <a href="{{route('logout')}}"  class="btn btn-primary" style="background:Tomato; border-radius: 15px; position: absolute; right: 20px;">Logout</a></p>
</div>
<br><br>

	<div class="container" align="center">

		<div class="card" style="width: 18rem;">
                       <img class="card-img-top" src="/../../../{{$detail->image}}" alt="Card image cap">
                <div class="card-body">
    				   <b>Product Id :</b> {{$detail->adid}} <br>
				       <b>Product Name :</b> {{$detail->product_name}} <br>
				       <b>Product Quantity :</b> {{$detail->quantity}} <br>
					   <b> Price Per Unit:</b>{{$detail->price_per_unit}} <br>
					   <b> Location:</b> {{$detail->division}}  <br>
					   <b> Phone:</b> {{$detail->phone}}<br>

                </div>
        </div>
	
    </div>

</body>
</html>

