<?php
if (!function_exists('_827d83a46d02d233cfd2d3d93e0fe47f')):
function _827d83a46d02d233cfd2d3d93e0fe47f($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'iconVariant' => 'mini',
    'size' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php if (!function_exists('_641533aa7abd7c3dab1326fc2c1c780d')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/641533aa7abd7c3dab1326fc2c1c780d.php'); require $__blaze->compiledPath.'/641533aa7abd7c3dab1326fc2c1c780d.php'; } ?>
<?php if (isset($__slots641533aa7abd7c3dab1326fc2c1c780d)) { $__slotsStack641533aa7abd7c3dab1326fc2c1c780d[] = $__slots641533aa7abd7c3dab1326fc2c1c780d; } ?>
<?php if (isset($__attrs641533aa7abd7c3dab1326fc2c1c780d)) { $__attrsStack641533aa7abd7c3dab1326fc2c1c780d[] = $__attrs641533aa7abd7c3dab1326fc2c1c780d; } ?>
<?php $__attrs641533aa7abd7c3dab1326fc2c1c780d = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slots641533aa7abd7c3dab1326fc2c1c780d = []; ?>
<?php $__blaze->pushData($__attrs641533aa7abd7c3dab1326fc2c1c780d); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_95fe9753c104e8ad2c70dd3c4b44475d')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/95fe9753c104e8ad2c70dd3c4b44475d.php'); require $__blaze->compiledPath.'/95fe9753c104e8ad2c70dd3c4b44475d.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _95fe9753c104e8ad2c70dd3c4b44475d($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php if (!function_exists('_7962f02281f2d2df3150c92af0239dcb')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/7962f02281f2d2df3150c92af0239dcb.php'); require $__blaze->compiledPath.'/7962f02281f2d2df3150c92af0239dcb.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _7962f02281f2d2df3150c92af0239dcb($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slots641533aa7abd7c3dab1326fc2c1c780d['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots641533aa7abd7c3dab1326fc2c1c780d); ?>
<?php _641533aa7abd7c3dab1326fc2c1c780d($__blaze, $__attrs641533aa7abd7c3dab1326fc2c1c780d, $__slots641533aa7abd7c3dab1326fc2c1c780d, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack641533aa7abd7c3dab1326fc2c1c780d)) { $__slots641533aa7abd7c3dab1326fc2c1c780d = array_pop($__slotsStack641533aa7abd7c3dab1326fc2c1c780d); } ?>
<?php if (! empty($__attrsStack641533aa7abd7c3dab1326fc2c1c780d)) { $__attrs641533aa7abd7c3dab1326fc2c1c780d = array_pop($__attrsStack641533aa7abd7c3dab1326fc2c1c780d); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/input/viewable.blade.php ENDPATH**/ ?>