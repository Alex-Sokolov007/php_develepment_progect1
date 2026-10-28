<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщение № <?php echo e($mes->id); ?></title>
<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body>
	<div class="mes">
            <h1><?php echo e($mes->name); ?></h1>
            <p><?php echo e($mes->text_message); ?></p> 
 </div>	    
</body>
</html>
<?php /**PATH /home/st12/example-app/resources/views//castom_views/aboute_for_id.blade.php ENDPATH**/ ?>