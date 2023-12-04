<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

    <title>Home</title>
</head>
<body>
    <?php echo $__env->yieldContent('liste'); ?>

    
    <?php echo $__env->yieldContent('lesson'); ?>

    <?php echo $__env->yieldContent('formulaire'); ?>
</body>
</html><?php /**PATH /home/youssef/bloc3/prjg5/devops/prjg5-devops/resources/views/canevas.blade.php ENDPATH**/ ?>