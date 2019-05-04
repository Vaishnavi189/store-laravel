@extends('layouts.app')

@section('content')

	

	<div class="container">

		<legend style="text-align: center;"> Your Orders </legend> 

    <div class="row justify-content-center">

        <div class="col-md-12">

            <table class="table table-striped table-bordered">
				 
			 	<thead class="thead-dark" style="text-align: center;">
				
				    <tr>
				
				      	 	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Image</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Name</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Description</th>
				      	<th scope="col" style="background-color:rgb(127, 8, 142)">Product Price</th>
				      	
				
				    </tr>
				
				</thead>
				
			  	<tbody style="text-align: center;">

			  		
			  			<?php 

						    $price = 0; 

						?>
				
						@foreach($products as $product)

							<tr>
						
						      	<td scope="row"> 

						      		<img src=" {{ asset('images/'.$product->image) }} " alt="product Image" width="100px" height="100px">  

						      	</td>
						      	
						      	<td style="line-height: 100px;"> {{ $product->name }} </td>
						      	
						      	<td> {{ $product->description }} </td>
						      	
						      	<td style="line-height: 100px;"> {{ $product->price }} </td>

						    </tr>

						    <?php 

						    	$price = $price + $product->price; 

						    ?>

						@endforeach

						<tr>
							
							<td colspan="5"></td>

						</tr>

						<tr>
							
							<td colspan="4" style="line-height: 30px;"> <b> Total Price: </b> <?php echo $price . ".00 Rs"?> </td>

						</tr>

						<tr>
							
							<td colspan="4"></td>

						</tr>

				</tbody>

			</table>

			

        </div>

    </div>

</div>

<div class="container">


			

        </div>

    </div>

</div>


@endsection
