<?php /* /Applications/AMPPS/www/RNG/resources/views/partials/validation_errors.blade.php */ ?>
<?php if($errors->any()): ?>
	<div class="alert alert-danger" role="alert">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
<?php endif; ?>
