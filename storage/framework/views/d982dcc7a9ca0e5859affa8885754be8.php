<?php
if (!function_exists('_d982dcc7a9ca0e5859affa8885754be8')):
function _d982dcc7a9ca0e5859affa8885754be8($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description) || isset($descriptionTrailing)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php if (!function_exists('_02d3c1bc0bf901d546ee4d711cf4fbae')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/02d3c1bc0bf901d546ee4d711cf4fbae.php'); require $__blaze->compiledPath.'/02d3c1bc0bf901d546ee4d711cf4fbae.php'; } ?>
<?php if (isset($__slots02d3c1bc0bf901d546ee4d711cf4fbae)) { $__slotsStack02d3c1bc0bf901d546ee4d711cf4fbae[] = $__slots02d3c1bc0bf901d546ee4d711cf4fbae; } ?>
<?php if (isset($__attrs02d3c1bc0bf901d546ee4d711cf4fbae)) { $__attrsStack02d3c1bc0bf901d546ee4d711cf4fbae[] = $__attrs02d3c1bc0bf901d546ee4d711cf4fbae; } ?>
<?php $__attrs02d3c1bc0bf901d546ee4d711cf4fbae = ['attributes' => $fieldAttributes]; ?>
<?php $__slots02d3c1bc0bf901d546ee4d711cf4fbae = []; ?>
<?php $__blaze->pushData($__attrs02d3c1bc0bf901d546ee4d711cf4fbae); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php if (!function_exists('_66f0a6a72d2f77f70dbe20e841f9172c')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/66f0a6a72d2f77f70dbe20e841f9172c.php'); require $__blaze->compiledPath.'/66f0a6a72d2f77f70dbe20e841f9172c.php'; } ?>
<?php if (isset($__slots66f0a6a72d2f77f70dbe20e841f9172c)) { $__slotsStack66f0a6a72d2f77f70dbe20e841f9172c[] = $__slots66f0a6a72d2f77f70dbe20e841f9172c; } ?>
<?php if (isset($__attrs66f0a6a72d2f77f70dbe20e841f9172c)) { $__attrsStack66f0a6a72d2f77f70dbe20e841f9172c[] = $__attrs66f0a6a72d2f77f70dbe20e841f9172c; } ?>
<?php $__attrs66f0a6a72d2f77f70dbe20e841f9172c = ['attributes' => $labelAttributes]; ?>
<?php $__slots66f0a6a72d2f77f70dbe20e841f9172c = []; ?>
<?php $__blaze->pushData($__attrs66f0a6a72d2f77f70dbe20e841f9172c); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots66f0a6a72d2f77f70dbe20e841f9172c['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots66f0a6a72d2f77f70dbe20e841f9172c); ?>
<?php _66f0a6a72d2f77f70dbe20e841f9172c($__blaze, $__attrs66f0a6a72d2f77f70dbe20e841f9172c, $__slots66f0a6a72d2f77f70dbe20e841f9172c, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack66f0a6a72d2f77f70dbe20e841f9172c)) { $__slots66f0a6a72d2f77f70dbe20e841f9172c = array_pop($__slotsStack66f0a6a72d2f77f70dbe20e841f9172c); } ?>
<?php if (! empty($__attrsStack66f0a6a72d2f77f70dbe20e841f9172c)) { $__attrs66f0a6a72d2f77f70dbe20e841f9172c = array_pop($__attrsStack66f0a6a72d2f77f70dbe20e841f9172c); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php if (!function_exists('_35881478acc2d10976586c36072cd088')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/35881478acc2d10976586c36072cd088.php'); require $__blaze->compiledPath.'/35881478acc2d10976586c36072cd088.php'; } ?>
<?php if (isset($__slots35881478acc2d10976586c36072cd088)) { $__slotsStack35881478acc2d10976586c36072cd088[] = $__slots35881478acc2d10976586c36072cd088; } ?>
<?php if (isset($__attrs35881478acc2d10976586c36072cd088)) { $__attrsStack35881478acc2d10976586c36072cd088[] = $__attrs35881478acc2d10976586c36072cd088; } ?>
<?php $__attrs35881478acc2d10976586c36072cd088 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots35881478acc2d10976586c36072cd088 = []; ?>
<?php $__blaze->pushData($__attrs35881478acc2d10976586c36072cd088); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots35881478acc2d10976586c36072cd088['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots35881478acc2d10976586c36072cd088); ?>
<?php _35881478acc2d10976586c36072cd088($__blaze, $__attrs35881478acc2d10976586c36072cd088, $__slots35881478acc2d10976586c36072cd088, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack35881478acc2d10976586c36072cd088)) { $__slots35881478acc2d10976586c36072cd088 = array_pop($__slotsStack35881478acc2d10976586c36072cd088); } ?>
<?php if (! empty($__attrsStack35881478acc2d10976586c36072cd088)) { $__attrs35881478acc2d10976586c36072cd088 = array_pop($__attrsStack35881478acc2d10976586c36072cd088); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php if (!function_exists('_8d77371c7701826bf619a06c0a9bc9d1')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/8d77371c7701826bf619a06c0a9bc9d1.php'); require $__blaze->compiledPath.'/8d77371c7701826bf619a06c0a9bc9d1.php'; } ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _8d77371c7701826bf619a06c0a9bc9d1($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php if (!function_exists('_35881478acc2d10976586c36072cd088')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/35881478acc2d10976586c36072cd088.php'); require $__blaze->compiledPath.'/35881478acc2d10976586c36072cd088.php'; } ?>
<?php if (isset($__slots35881478acc2d10976586c36072cd088)) { $__slotsStack35881478acc2d10976586c36072cd088[] = $__slots35881478acc2d10976586c36072cd088; } ?>
<?php if (isset($__attrs35881478acc2d10976586c36072cd088)) { $__attrsStack35881478acc2d10976586c36072cd088[] = $__attrs35881478acc2d10976586c36072cd088; } ?>
<?php $__attrs35881478acc2d10976586c36072cd088 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots35881478acc2d10976586c36072cd088 = []; ?>
<?php $__blaze->pushData($__attrs35881478acc2d10976586c36072cd088); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots35881478acc2d10976586c36072cd088['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots35881478acc2d10976586c36072cd088); ?>
<?php _35881478acc2d10976586c36072cd088($__blaze, $__attrs35881478acc2d10976586c36072cd088, $__slots35881478acc2d10976586c36072cd088, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack35881478acc2d10976586c36072cd088)) { $__slots35881478acc2d10976586c36072cd088 = array_pop($__slotsStack35881478acc2d10976586c36072cd088); } ?>
<?php if (! empty($__attrsStack35881478acc2d10976586c36072cd088)) { $__attrs35881478acc2d10976586c36072cd088 = array_pop($__attrsStack35881478acc2d10976586c36072cd088); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots02d3c1bc0bf901d546ee4d711cf4fbae['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots02d3c1bc0bf901d546ee4d711cf4fbae); ?>
<?php _02d3c1bc0bf901d546ee4d711cf4fbae($__blaze, $__attrs02d3c1bc0bf901d546ee4d711cf4fbae, $__slots02d3c1bc0bf901d546ee4d711cf4fbae, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack02d3c1bc0bf901d546ee4d711cf4fbae)) { $__slots02d3c1bc0bf901d546ee4d711cf4fbae = array_pop($__slotsStack02d3c1bc0bf901d546ee4d711cf4fbae); } ?>
<?php if (! empty($__attrsStack02d3c1bc0bf901d546ee4d711cf4fbae)) { $__attrs02d3c1bc0bf901d546ee4d711cf4fbae = array_pop($__attrsStack02d3c1bc0bf901d546ee4d711cf4fbae); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>