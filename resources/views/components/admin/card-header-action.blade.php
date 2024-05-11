@props(['id'])

<div {{ $attributes->merge(['class' => 'card-header-action']) }}>
    <a data-collapse="#{{ $id }}" class="btn btn-icon btn-primary" href="#">
        <i class="fas fa-minus"></i>
    </a>
</div>
