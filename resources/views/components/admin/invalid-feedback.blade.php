@props(['message'])

<div {{ $attributes->merge(['class' => 'invalid-feedback ']) }}>
    {{ __($message) }}
    {{ $slot }}
</div>
