<?php /* /Applications/AMPPS/www/RNG/resources/views/layouts/byCategory.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-3">
<div class="row">
	<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php
	$img=$article->images->first();
	$image_name=$img['image'];
	?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
    <?php echo $__env->make('layouts.showCategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</div>
</div>
		
				
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>