@extends('layouts.app')

@section('content')

	

	<div class="container">

	<center> <a href="/addItem" class="btn btn-primary" style="background-color: rgb(244, 217, 66)"> <span style="color:black">  Add Item </span></a> </center

    <div class="row justify-content-center">

        <div class="col-md-12">

            <table class="table table-striped table-bordered">
				 
			 	<thead class="thead-dark" style="text-align: center;">
				
				    <tr>
				
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Image</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Name</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Description</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Price</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)"> Manage </th>
				
				    </tr>
				
				</thead>
				
			  	<tbody style="text-align: center;">

			  		
				
						@foreach($products as $product)

							<tr>
						
						      	<td scope="row"> 

						      		<img src=" {{ asset('images/'.$product->image) }} " alt="product Image" width="100px" height="100px">  

						      	</td>
						      	
						      	<td style="line-height: 100px;"> {{ $product->name }} </td>
						      	
						      	<td> {{ $product->description }} </td>
						      	
						      	<td style="line-height: 100px;"> {{ $product->price }} </td>
						      	
						      	<td style="line-height: 100px;"> 

						      		<a href="/edit/{{$product->id}}" class="btn btn-success"> Edit </a>
						      		<a href="/delete/{{$product->id}}" class="btn btn-danger"> Delete </a> 
						      	
						      	</td>
						
						    </tr>

						@endforeach

				</tbody>

			</table>

        </div>

    </div>

</div>



@endsection
