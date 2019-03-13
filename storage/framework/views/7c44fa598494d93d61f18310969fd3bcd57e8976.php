<?php /* /Applications/AMPPS/www/wcms18_php_oop_projectmanager-master/resources/views/projects/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>

         <form method="POST" action="/projects">
            <?php echo csrf_field(); ?>

            <?php echo Form::open(array('files'=>true)); ?>

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
            </div>
            <div class="form-group">
				<label for="category">Article category</label>
				<?php echo e(Form::select('category_id',$categories,1,['class'=>'form-control'])); ?>

            </div>
            <div class="form-group">
				<label for="city">Article City</label>
				<?php echo e(Form::select('city_id',$cities,1,['class'=>'form-control'])); ?>

			</div>
   <input type="submit" value="Create New Article" class="btn btn-primary">
<?php echo Form::close(); ?>


       <a href="/ ">&laquo; Back to all projects</a>
</div> --}}
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>