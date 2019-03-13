<?php /* /Applications/AMPPS/www/wcms18_php_oop_projectmanager-master/resources/views/partials/status.blade.php */ ?>
<?php if(session('status')): ?>
	<div class="alert alert-success">
		<?php echo e(session('status')); ?>

	</div>
<?php endif; ?>
