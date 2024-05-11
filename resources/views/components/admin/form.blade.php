@props(['method', 'action', 'overwrite'])
<?php
$method = $method ?? 'POST';
$action = $action ?? '';
$overwrite = $overwrite ?? $method;
?>
<form method="{{ $method }}" action="{{ $action }}" novalidate="" {{ $attributes->merge(['class' => 'needs-validation']) }}>
    @csrf
    @method($overwrite)
    {{-- <div class="row"> --}}
        {{ $slot }}
    {{-- </div> --}}
</form>
