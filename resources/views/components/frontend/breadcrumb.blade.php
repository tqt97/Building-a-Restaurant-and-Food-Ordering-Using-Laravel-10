@props(['title', 'subtitle', 'link', 'linkText'])

@php
$classes = "fp__breadcrumb";
@endphp
<section {{ $attributes->merge(['class' => $classes]) }} style="background: url({{ asset('frontend/images/counter_bg.jpg') }});">
    <div class="fp__breadcrumb_overlay">
        <div class="container">
            <div class="fp__breadcrumb_text">
                <h1>{{ $title }}</h1>
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="{{ $link }}">{{ $subtitle }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
