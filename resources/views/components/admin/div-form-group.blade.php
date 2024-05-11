@props([])

<div {{ $attributes->merge(['class' => 'form-group col-md-12 col-12']) }}>
    {{ $slot }}
</div>
