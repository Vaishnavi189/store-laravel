@extends('layouts.app')

@section('content')

	

	<div class="container">

		<legend style="text-align: center;"> Cart Items </legend> 

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
						      	
						      	<td style="line-height: 100px;"> 

						      		<a href="/remove/{{$product->id}}" class="btn btn-danger"> Remove </a>

						      	</td>

						    </tr>

						    <?php 

						    	$price = $price + $product->price; 

						    ?>

						@endforeach

						<tr>
							
							<td colspan="5"></td>

						</tr>

						<tr>
							
							<td colspan="<?php if($price>0){ echo "4"; }else{ echo "5"; } ?>" style="line-height: 30px;"> <b> Total Price: </b> <?php echo $price . ".00 Rs"?> </td>

							@if($price>0)

								<td> <a href="/placeorder" class="btn btn-primary" style="background-color: rgb(244, 217, 66)"><span style="color:black">Place Order </span></a> </td>

							@endif

						</tr>

				</tbody>

			</table>

        </div>

    </div>

</div>



@endsection
