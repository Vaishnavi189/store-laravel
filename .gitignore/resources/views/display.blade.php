@extends('layouts.app')

@section('content')

	

	<div class="container">

		<legend style="text-align: center;"> For Sale </legend> 

    <div class="row justify-content-center">

        <div class="col-md-12">

            <table class="table table-striped table-bordered">
				 
			 	<thead class="thead-dark" style="text-align: center;">
				
				    <tr>
				
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Image</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Name</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Description</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Price</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)"> Add to Cart </th>
				
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

						      		<a href="/cart/{{$product->id}}" class="btn btn-primary" style="background-color: rgb(244, 217, 66)" > <span style="color:black">Buy </span></a> 

						      	</td>

						    </tr>

						@endforeach

				</tbody>

			</table>

        </div>

    </div>

</div>

@endsection
