<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Séries</title>
    </head>

    <body>
        <h1>Séries</h1>

        <ul>
            <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($serie); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </body>
</html>
<?php /**PATH C:\Users\Lucas\Desktop\crud_series-php_laravel\controle-series\resources\views/listar-series.blade.php ENDPATH**/ ?>