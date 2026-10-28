<?php
if (!function_exists('_f1423929fbc91a6f5fb754ae5cfb4fcb')):
function _f1423929fbc91a6f5fb754ae5cfb4fcb($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('flex size-[1.125rem] rounded-[.3rem] mt-px outline-offset-2')
    ;
?>

<?php if (!function_exists('_bc9bf706d1aa9c1da30f4a8f9b36bb8f')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/with-inline-field.blade.php', $__blaze->compiledPath.'/bc9bf706d1aa9c1da30f4a8f9b36bb8f.php'); require $__blaze->compiledPath.'/bc9bf706d1aa9c1da30f4a8f9b36bb8f.php'; } ?>
<?php if (isset($__slotsbc9bf706d1aa9c1da30f4a8f9b36bb8f)) { $__slotsStackbc9bf706d1aa9c1da30f4a8f9b36bb8f[] = $__slotsbc9bf706d1aa9c1da30f4a8f9b36bb8f; } ?>
<?php if (isset($__attrsbc9bf706d1aa9c1da30f4a8f9b36bb8f)) { $__attrsStackbc9bf706d1aa9c1da30f4a8f9b36bb8f[] = $__attrsbc9bf706d1aa9c1da30f4a8f9b36bb8f; } ?>
<?php $__attrsbc9bf706d1aa9c1da30f4a8f9b36bb8f = ['attributes' => $attributes]; ?>
<?php $__slotsbc9bf706d1aa9c1da30f4a8f9b36bb8f = []; ?>
<?php $__blaze->pushData($__attrsbc9bf706d1aa9c1da30f4a8f9b36bb8f); ?>
<?php ob_start(); ?>
    <ui-checkbox <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-control data-flux-checkbox>
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::checkbox.indicator", []); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_55d50e6dec5fd13c7bb03592b331b0fd')) { $__blaze->compile('/home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/checkbox/indicator.blade.php', $__blaze->compiledPath.'/55d50e6dec5fd13c7bb03592b331b0fd.php'); require $__blaze->compiledPath.'/55d50e6dec5fd13c7bb03592b331b0fd.php'; } ?>
<?php $__blaze->pushData([]); ?>
<?php _55d50e6dec5fd13c7bb03592b331b0fd($__blaze, [], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    </ui-checkbox>
<?php $__slotsbc9bf706d1aa9c1da30f4a8f9b36bb8f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsbc9bf706d1aa9c1da30f4a8f9b36bb8f); ?>
<?php _bc9bf706d1aa9c1da30f4a8f9b36bb8f($__blaze, $__attrsbc9bf706d1aa9c1da30f4a8f9b36bb8f, $__slotsbc9bf706d1aa9c1da30f4a8f9b36bb8f, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackbc9bf706d1aa9c1da30f4a8f9b36bb8f)) { $__slotsbc9bf706d1aa9c1da30f4a8f9b36bb8f = array_pop($__slotsStackbc9bf706d1aa9c1da30f4a8f9b36bb8f); } ?>
<?php if (! empty($__attrsStackbc9bf706d1aa9c1da30f4a8f9b36bb8f)) { $__attrsbc9bf706d1aa9c1da30f4a8f9b36bb8f = array_pop($__attrsStackbc9bf706d1aa9c1da30f4a8f9b36bb8f); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /home/st12/example-app/vendor/livewire/flux/src/../stubs/resources/views/flux/checkbox/variants/default.blade.php ENDPATH**/ ?>