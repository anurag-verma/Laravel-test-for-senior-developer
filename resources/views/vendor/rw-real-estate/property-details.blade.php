@extends('vendor.rw-real-estate.layouts.base')

@section('content')
    <div class="title m-b-md">
        <h1 class="c-title c-title--h1">Property Details</h1>
    </div>
    <div>
        <h2 class="c-title c-title--h2"></h2>
        <section class="c-properties-grid__wrapper">
            <div class="c-properties">
                    <div class="c-properties-grid__item">
                        <h3 class="c-properties-grid-item__title">{!! $property->name !!}</h3>
                        <p>{!! $property->description !!}</p>
                        <ul class="c-properties-grid-item__list">
                            <li>Property Type: {!! $property->properties_types->type !!}</li>
                        </ul>
                        <ul class="c-properties-grid-item__list">
                            <li><h4>Property Characteristics</h4></li>
                            <li>Price: {{ $property->properties_features->price }} €</li>
                            <li>Location: {!! $property->locations->name !!}</li>
                            <li>Rooms: {{ $property->properties_features->bedrooms }}</li>
                            <li>Bathrooms: {{ $property->properties_features->bathrooms }}</li>
                            <li>Private Pools: {{ $property->properties_features->private_pool }}</li>
                            <li>Community Pools: {{ $property->properties_features->community_pool }}</li>
                            <li>Garden: {{ $property->properties_features->garden }}</li>
                            <li>Garage: {{ $property->properties_features->garaje }}</li>
                            <li>Built Area: {{ $property->properties_features->built_area }} m2</li>
                            <li>Land Area: {{ $property->properties_features->land_area }}</li>
                        </ul>
                        <ul class="c-properties-grid-item__list">
                            <li><h4>Agent Incharge</h4></li>
                            <li>Agent Incharge: {!! $property->agents->surname !!}</li>
                        </ul>
                    </div>
            </div>
        </section>
        <div style="text-align: center;">
            <a href="{{url()->previous()}}"><b>Back</b></a>
        </div>

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
