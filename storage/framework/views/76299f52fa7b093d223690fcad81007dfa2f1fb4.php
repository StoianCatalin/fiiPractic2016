<?php $__env->startSection('content'); ?>

<section id="top" class="nonIndex">
    <div class="ui container">
        <div class="ui stackable grid">
            <div class="ten wide column">
                <img src="/images/indexBg.png" alt="Graphic" class="vectorGraphic" />
                <div class="continutGraph"></div>
            </div>
            <div class="six wide column">
                <h1 class="ui header">Trainings</h1>
            </div>
        </div>
    </div>
</section>
<section class="trainingNameSection">
	<div class="ui container">
		<h2 class="ui header">
				<?php echo e($info['selectedTraining']['attributes']['name']); ?>

		</h2>
	</div>
</section>
<section class="trainingContent">
	<div class="ui container">
		<br/>
		<p><?php echo e($info['selectedTraining']['attributes']['description']); ?></p>
	</div>
	<br/>
	<div class="ui container">
        <a href="#"><div class="ui teal button">
            <i class="icon send"></i>
            Aplica
        </div></a>
    </div>
    <br/>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>