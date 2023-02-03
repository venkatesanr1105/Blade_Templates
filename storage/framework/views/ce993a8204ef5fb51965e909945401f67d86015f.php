<?php $__env->startSection('title', 'Page title'); ?>
<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
    <p>This refers to the master Sidebar.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<p>This is my body content.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asplap3185/Desktop/PHP/Blade_Templates/Application1/resources/views/app.blade.php ENDPATH**/ ?>