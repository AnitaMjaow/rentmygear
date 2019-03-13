<?php /* /Applications/AMPPS/www/wcms18_php_oop_projectmanager-master/resources/views/welcome.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="container mt-3">
		Welcome to my Project Manager

		<p>Your Message: <?php echo e($msg); ?></p>
	</div><!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>