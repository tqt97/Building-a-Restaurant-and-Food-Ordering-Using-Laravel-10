@props(['header', 'id', 'button'])

<?php
$buttonText = $button ?? __('Save');
?>

<div {{ $attributes->merge(['class' => 'card card-primary']) }}>
    @if ($header)
        <div class="card-header">
            <h4>{{ __($header) }}</h4>
            <x-admin.card-header-action id="{{ $id }}" />
        </div>
    @endif
    <div class="card-body">
        <div class="collapse show" id="{{ $id ?? '' }}">
            <div class="row">
                {{ $slot }}
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary">{{ __($buttonText) }}</button>
    </div>
</div>
