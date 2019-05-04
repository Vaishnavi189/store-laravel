<?php $__env->startSection('content'); ?>

	

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
				
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<tr>
						
						      	<td scope="row"> 

						      		<img src=" <?php echo e(asset('images/'.$product->image)); ?> " alt="product Image" width="100px" height="100px">  

						      	</td>
						      	
						      	<td style="line-height: 100px;"> <?php echo e($product->name); ?> </td>
						      	
						      	<td> <?php echo e($product->description); ?> </td>
						      	
						      	<td style="line-height: 100px;"> <?php echo e($product->price); ?> </td>
						      	
						      	<td style="line-height: 100px;"> 

						      		<a href="/remove/<?php echo e($product->id); ?>" class="btn btn-danger"> Remove </a>

						      	</td>

						    </tr>

						    <?php 

						    	$price = $price + $product->price; 

						    ?>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<tr>
							
							<td colspan="5"></td>

						</tr>

						<tr>
							
							<td colspan="<?php if($price>0){ echo "4"; }else{ echo "5"; } ?>" style="line-height: 30px;"> <b> Total Price: </b> <?php echo $price . ".00 Rs"?> </td>

							<?php if($price>0): ?>

								<td> <a href="/placeorder" class="btn btn-primary" style="background-color: rgb(244, 217, 66)"><span style="color:black">Place Order </span></a> </td>

							<?php endif; ?>

						</tr>

				</tbody>

			</table>

        </div>

    </div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ph\resources\views/cart.blade.php ENDPATH**/ ?>