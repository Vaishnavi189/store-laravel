<!DOCTYPE html>

<html>

<head>

	<title> Admin </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>

	<div class="container">
		
		<div class="jumbotron">

			<legend style="text-align: center;"> Add Product </legend>
			
			<form method="post" action="/addItem" enctype="multipart/form-data">

				{{ csrf_field() }}
		 
			<div class="form-group">
		   
		    	<label> Enter Product Name: </label>
		    	<input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="{{ old('name') }}">
		  
		  	</div>

		  	<div class="form-group">
		   
		    	<label> Enter Product description: </label>
		    	<textarea class="form-control" name="description" rows="3" placeholder="Enter Product Description"> {{ old('description') }} </textarea>
		  
		  	</div>

		  	<div class="form-group">
		   
		    	<label> Enter Product Price: </label>
		    	<input type="text" class="form-control" name="price" placeholder="Enter Product Price" value="{{ old('price') }}" >
		  
		  	</div>

		  	<div class="input-group">

		    	<div class="custom-file">
		    		
		    		<input type="file" name="image" class="custom-file-input" >
		    		<label class="custom-file-label"> Choose Image </label>

		    	</div>

		  	</div>

		  	<br>

		  	<p style="text-align: center;">

		  		<button type="submit" name="submit" class="btn btn-primary"> Add Item </button> 

		  		<a href="/admin" class="btn btn-primary"> Admin Page </a> 

		  	</p>

		  	@if($errors->any())

		  		<div class="alert alert-danger">
		  			
		  			<ul>
		  				
		  				@foreach($errors->all() as $error)

		  					<li> {{ $error }} </li>

		  				@endforeach

		  			</ul>

		  		</div>

		  	@endif

		</form>

		</div>

	</div>

</body>

</html>