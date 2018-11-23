<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Delete Added Post</h2>
	<a href="{{route('userdetails',['id'=> $details->regid])}}">Back to Profile</a>
	<br/><br/>
	
	
		<div>
			<img src="/../../../{{$details->image}}" height="150" width="150">
			<span><h2>Product Name:<u>{{$details->product_name}}</u></h2></span>  	
		
			<span><h2>Product Category:<u>{{$details->product_category}}</u></h2></span>
		
		</div>
	
	<h3>This cannot be undone. Are you sure?</h3>

	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="regid" value="{{$details->regid}}">
		<input type="submit" value="Confirm">
		<input type="hidden" name="adid" value="{{$details->adid}}">
	</form>
</body>
</html>