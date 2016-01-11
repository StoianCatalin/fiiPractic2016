<?php $__env->startSection('content'); ?>
    <section id="top" class="nonIndex">
        <div class="ui container">
            <div class="ui stackable grid">
                <div class="ten wide column">
                    <img src="/images/indexBg.png" alt="Graphic" class="vectorGraphic" />
                    <div class="continutGraph"></div>
                </div>
                <div class="six wide column">
                    <h1 class="ui header">Arii de studiu</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="despre">
        <div class="ui container">
            <div class="ui stackable grid ariiStudiu">
                <?php foreach($info['arii'] as $area): ?>
                    <div class="five wide column">
                        <?php if(count($area->subareas) > 0): ?>
                            <a href="/arii-de-studiu/subarii/<?php echo e($area['link']); ?>">
                                <?php else: ?>
                                    <a href="/trainings/<?php echo e($area['link']); ?>">
                                        <?php endif; ?>
                                        <div class="arie">
                                            <i class="<?php echo e($area['icon']); ?>"></i>
                                            <h2><?php echo e($area['title']); ?></h2>
                                        </div>
                                    </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>