<html>
    <head>
<title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
<style>
    .myoption{
        background-color:blue;
    }
</style>
    </head>
    <body>
        <?php $__env->startSection('navbar'); ?>
         <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- <div style="dispaly:flex;">
        <h2>Laravel<h2>
            <a href="\users.index">Home</a>
            <select name="Users" id="Users">
                <option value="List"><a href="\users.create">List</a></option>
                <option value="New User"><a href="#">New User</a></option>
</select>
</div> -->
<?php echo $__env->yieldSection(); ?>
<div class>
    <?php echo $__env->yieldContent('content'); ?>
</div>


   </body>
    <html><?php /**PATH E:\xampp_New_Installation\htdocs\lab17laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>