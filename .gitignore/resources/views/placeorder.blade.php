<!DOCTYPE html>

<html>

<head>

	<title> Billing </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>

	<div class="container">
		
		<div class="jumbotron">

			<legend style="text-align: center;"> Almost Done!!!</legend>
			
			<form method="post" action="/placeorder" enctype="multipart/form-data">

				{{ csrf_field() }}
		 
			<div class="form-group">
		   
		    	<label> please provide an Email id  to contact you!!!</label>
		    	<input type="text" class="form-control" name="email" placeholder="E mail  " value="{{ old('email') }}"  required >
		  
		  	</div>
	  
		  	</div>

		  	<br>

		  	<p style="text-align: center;">

		  			<a href="/done" class="btn btn-primary" style="background-color:rgb(244, 217, 66)" > <span style="color:black" >Placeorder </span></a>

		  		<a href="/cartitems" class="btn btn-primary" style="background-color: rgb(244, 217, 66)"> <span style="color:black">Back to Cart</span> </a>

		  	</p>

		  		

		</form>

		</div>

	</div>

</body>

</html>