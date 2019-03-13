<?php /* /Applications/AMPPS/www/wcms18_php_oop_projectmanager-master/resources/views/back/article/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

	<div class="row">
				<div class="col-lg-12">
			<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
			<td><?php echo e($article->article_id); ?></td>
			 <td><?php echo e($article->name); ?></td>
			 <td><?php echo e($article->rent_price); ?></td>
               <div class="btn-group" role="group">
				   <button class="btn btn-warning">
					   <li class="icon"
				  <?php echo Form::open(array(
					  'metod'=>'DELETE',
					  'route'=>['article.destroy', $article->id],
					  'submit'=>"return confirm(' are you sure?')"
					  )); ?>


				    <button type="submit" class="btn btn-danger">fdf</button>
				  <?php echo Form::close(); ?>

				   </button>


			   </div>
			</tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>