@props(['label', 'type', 'name', 'id', 'value', 'required'])

<@php
    $value = $value ?? '';
    $type = $type ?? 'text';
    $required = $required ?? false;
@endphp

<label for="{{ $id }}">{{ __($label) }}</label>
    <input type="{{ $type }}" name="{{ $password }}" id="{{ $id }}"
        {{ $attributes->merge(['class' => 'form-control']) }} {{ $required ? 'required' : '' }} />



@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
