<?php
if (!function_exists('_c10ddce375389c678bd9a2e81ca2424c')):
function _c10ddce375389c678bd9a2e81ca2424c($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php if (!function_exists('_44dc0b508dc296bca2077356a7d7b440')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/44dc0b508dc296bca2077356a7d7b440.php'); require $__blaze->compiledPath.'/44dc0b508dc296bca2077356a7d7b440.php'; } ?>
<?php if (isset($__slots44dc0b508dc296bca2077356a7d7b440)) { $__slotsStack44dc0b508dc296bca2077356a7d7b440[] = $__slots44dc0b508dc296bca2077356a7d7b440; } ?>
<?php if (isset($__attrs44dc0b508dc296bca2077356a7d7b440)) { $__attrsStack44dc0b508dc296bca2077356a7d7b440[] = $__attrs44dc0b508dc296bca2077356a7d7b440; } ?>
<?php $__attrs44dc0b508dc296bca2077356a7d7b440 = ['class' => 'inline-flex','content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots44dc0b508dc296bca2077356a7d7b440 = []; ?>
<?php $__blaze->pushData($__attrs44dc0b508dc296bca2077356a7d7b440); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots44dc0b508dc296bca2077356a7d7b440['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots44dc0b508dc296bca2077356a7d7b440); ?>
<?php _44dc0b508dc296bca2077356a7d7b440($__blaze, $__attrs44dc0b508dc296bca2077356a7d7b440, $__slots44dc0b508dc296bca2077356a7d7b440, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack44dc0b508dc296bca2077356a7d7b440)) { $__slots44dc0b508dc296bca2077356a7d7b440 = array_pop($__slotsStack44dc0b508dc296bca2077356a7d7b440); } ?>
<?php if (! empty($__attrsStack44dc0b508dc296bca2077356a7d7b440)) { $__attrs44dc0b508dc296bca2077356a7d7b440 = array_pop($__attrsStack44dc0b508dc296bca2077356a7d7b440); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>