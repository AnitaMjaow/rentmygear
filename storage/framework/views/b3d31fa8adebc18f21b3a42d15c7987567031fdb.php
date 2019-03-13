<?php /* /Applications/AMPPS/www/RNG/resources/views//layouts/adsCategory.blade.php */ ?>
<?php $__env->startSection('content'); ?>

        <form method="POST" action="/projects">
            <?php echo e(csrf_field()); ?>



<!--             action="<?php echo e(route('projects.store')); ?>"
 -->
            <?php echo Form::open(array('files'=>true)); ?> 
             <!--  jag skriv array för att låta användare ladda upp fler bilder/ ska bli sakert att koden aktiveras NA -->
			<div class="form-group">
				<label for="name">Article Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Article Name" required value="<?php echo e(old('name')); ?>">
			</div>

			<div class="form-group">
				<label for="rent_price">Article Price</label>
				<input type="text" name="rent_price" id="rent_price" class="form-control" placeholder="Article rent_price" required value="<?php echo e(old('rent_price')); ?>">
            </div>
            <div class="form-group">
				<label for="description">Article Description</label>
				<input type="text" name="description" id="description" class="form-control" placeholder="Article Description" required value="<?php echo e(old('description')); ?>">
<!-- 				<?php echo Form::label('description', 'description:'); ?>

 -->            </div>
           <div class="form-group">
				<label for="category_id">Article category</label>
				<?php echo e(Form::select('category_id',$categories,1,['class'=>'form-control'])); ?>

            </div>
            <div class="form-group">
				<label for="city_id">Article City</label>
				<?php echo e(Form::select('city_id',$cities,1,['class'=>'form-control'])); ?> 
			</div>
			 <!-- <div class="form-group">
				<label for="image">Article Images</label>
				<input type="file" class="form-control" name="images[]" multiple/>
			</div> -->
   <button type="submit"  class="btn btn-primary">save</button>
<?php echo Form::close(); ?>


       <a href="/ ">&laquo; Back to all projects</a>
</div> 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>