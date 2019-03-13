<?php /* /Applications/AMPPS/www/wcms18_php_oop_projectmanager-master/resources/views//projects/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="container mt-3">

		<?php echo $__env->make('partials/validation_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		

         <div class="row">
					<div class="col-lg-12 text-left">
						<h4>last article</h4><hr/>
					</div>
					<div class="col-lg-4 col-md-6 mb-4 text-left">
						<div class="card h-100">
							<a href="#"><img class="card-img-top" height="150px" src="https://www.elgiganten.se/image/dv_web_D18000100279466/APPLEMQD22HYA/apple-tv-4k-generation-5-32-gb.jpg?$fullsize$" alt="image" ></a>
							<div class="card-body">
								<h5 class="card-title">
								  <a href="">Apple TV 4K generation </a>
								</h5>
								<h6>600 kr</h6>
								<a>read more</a>
								<button href="/layouts/book">Boka</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4 text-left">
						<div class="card h-100">
							<a href="#"><p>New Camera</p><img class="card-img-top" height="150px" src="https://www.elgiganten.se/image/dv_web_D180001002181495/12022/nikon-d7200-dslr-kameraaf-s-dx-nikkor-18-105-mm-telefotozoomobjektiv.jpg?$fullsize$"  alt="image" ></a>
							<div class="card-body">
								<h5 class="card-title">
								  <a href="">Camera</a>
								</h5>
								<h6>300 Kr</h6>
								<a>read more</a>
								<button href="/layouts/book">Boka</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4 text-left">
						<div class="card h-100">
							<a href="#"><img class="card-img-top" height="150px" src="https://www.elgiganten.se/image/dv_web_D18000100230239/ATLP120USBHCB/audio-technica-at-lp120-usbhc-skivspelare.jpg?$fullsize$"  alt="image" ></a>
							<div class="card-body">
								<h5 class="card-title">
								<a href="">Audio Technica AT-LP120-USBHC skivspelare</a>
								</h5>
								<h6>4000 kr</h6>
								<a>read more</a>
								<button href="/layouts/book">Boka</button>
							</div>
							</div>
						</div>



	<div class="container mt-3">
    <h1>All Articles</h1>



 <div class="col-lg-4 col-md-6 mb-4 text-left">
	 <div class="row">
		 <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="card h-100">

        <ol>
    <a href="#"><img class="card-img-top" height="150px" src="" alt="image" ></a>
    <div class="card-body">
        <h5 class="card-title">
            <a href="/projects/<?php echo e($article->article_id); ?>"><?php echo e($article->name); ?></a></li>
        </h5>
		<h6><?php echo e($article->rent_price); ?></h6>
	</div>
</div>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
						</div>
					</div>
				</div>

						</div>
					</div>
				</div>



   <input type="submit" value="Create New Article" class="btn btn-primary">
<?php echo Form::close(); ?>


       <a href="/ ">&laquo; Back to all projects</a>
</div>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>