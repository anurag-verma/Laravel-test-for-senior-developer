@extends('vendor.rw-real-estate.layouts.base')

@section('content')
    <div class="title m-b-md">
        <h1 class="c-title c-title--h1">PHP Senior Level Test</h1>
    </div>
    <div>
        <h2 class="c-title c-title--h2">Home</h2>
        <p style="text-align:center;"><a href="{{url('/filter')}}">Properties</a></p>
        <section class="c-properties-grid__wrapper">
            <div class="c-properties-grid">
                @foreach($properties as $props)
                    <div class="c-properties-grid__item">
                        <h3 class="c-properties-grid-item__title">{!! $props->name !!}</h3>
                        <p>{!! $props->description !!}</p>
                        <ul class="c-properties-grid-item__list">
                            <li>Price: {{ $props->properties_features->price }} €</li>
                            <li>Location: {!! $props->locations->name !!}</li>
                            <li>Rooms: {{ $props->properties_features->bedrooms }}</li>
                            <li>Bathrooms: {{ $props->properties_features->bathrooms }}</li>
                            <li>Built Area: {{ $props->properties_features->built_area }} m2</li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@push('css')
    <style>

    </style>
@endpush

@push('js')
    <script>

    </script>
@endpush
