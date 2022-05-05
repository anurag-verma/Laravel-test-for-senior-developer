@extends('vendor.rw-real-estate.layouts.base')

@section('content')
    <div class="title m-b-md">
        <h1 class="c-title c-title--h1">Properties</h1>
        <p style="text-align:center;"><a href="{{url('/home')}}">Home</a></p>
    </div>
    <div class="c-grid">
        <aside class="c-grid__left">
            @include('vendor.rw-real-estate.partials.filters')
        </aside>
        <aside class="c-grid__right">
            <section class="c-properties-grid__wrapper">
                <div class="c-properties-grid">
                   @foreach($properties as $props)
                   <a class="anchor" href="{{url('property-details',$props->id)}}">
                        <div class="c-properties-grid__item">
                            <h3 class="c-properties-grid-item__title">{!! $props->name !!}</h3>
                            <p>{!! $props->description !!}</p>
                            <ul class="c-properties-grid-item__list">
                                <li>Price: {{$props->properties_features->price}} €</li>
                                <li>Location: {!! $props->locations->name !!}</li>
                                <li>Rooms: {!! $props->properties_features->bedrooms !!}</li>
                                <li>Bathrooms: {!! $props->properties_features->bathrooms !!}</li>
                                <li>Built Area: {!! $props->properties_features->built_area !!} m2</li>
                            </ul>
                        </div>
                    </a>
                @endforeach
                </div>
            </section>
        </aside>
    </div>
@endsection

@push('css')
    <style>
        .c-grid {
            display: grid;
            grid-template-columns: 30% 70%;
        }
        .c-grid__left {
            background-color: rgba(40, 40, 40, 0.1);
            height: 100vh;
        }
        .anchor {
            color: #000;
            text-decoration: none;
        }
        .pagination {
          list-style: none;
          padding-left: 0;
        }
        .pagination li {
          display: inline-block;
        }
        .pagination li + li {
          margin-left: 1rem;
        }
    </style>
@endpush

@push('js')
    <script>

    </script>
@endpush
