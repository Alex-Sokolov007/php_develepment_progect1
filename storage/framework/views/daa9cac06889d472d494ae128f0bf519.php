<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Побочная страница</title>
    <!-- vite(['resources/css/app.css', 'resources/js/app.js']) -->
    
</head>


<body>
    <?php echo $__env->make('blox/header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <main>
        
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="mes">
<form action="/aboute/<?php echo e($mes->id); ?>/edit" method="POST">
               <input name="name" value="<?php echo e($mes->name); ?>" >
                <textarea name="text_message"><?php echo e($mes->text_message); ?></textarea>
		<button type="submit">Обновить</button>
</form>
		<a href="/aboute/<?php echo e($mes->id); ?>"><p>подробнее</p></a>
<form action="/aboute/<?php echo e($mes->id); ?>/delete" method="POST">
    <?php echo csrf_field(); ?>
    <button type="submit">Удалить</button>
</form>	
            </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        
    </main>
    <?php echo $__env->make('blox/footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH /home/st12/example-app/resources/views//castom_views/aboute.blade.php ENDPATH**/ ?>