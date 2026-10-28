<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>?v=<?php echo e(filemtime(public_path('css/main.css'))); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница созданная Великим и могучим (нет) саней</title>
    <?php echo app('Illuminate\Foundation\Vite')(["resources/css/app.css"]); ?>
    

</head>


<!-- Окно вывода ошибок -->
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>

    <div class="errors_div">
        
        
        <ul>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <li translate="yes"><?php echo e($err); ?></li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </ul>
    <h3 translate="yes">please try again</h3>

    </div>
    
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


<body>
    <?php echo $__env->make('blox/header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <main>
        <div class="from_form">
            <form action="/aboute" method="post" class="test_form">
                <?php echo csrf_field(); ?>
                <input type="text" placeholder='Назови своё имя путник' name="name">
                <textarea placeholder='Ввидите букви' name="text_from_user"></textarea>

                <button type="submit">кнопка</button>
            </form>
        </div>   
    </main>
    <?php echo $__env->make('blox/footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    

</body>
</html><?php /**PATH /home/st12/example-app/resources/views//castom_views/main_view.blade.php ENDPATH**/ ?>