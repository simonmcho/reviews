@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8">
        @if (count($services)) 
            @foreach ($services as $service)
                @include ('services.service')
            @endforeach
        @else
            <div>
                No services!
            </div>
        @endif
    </div>
    @include ('layouts.sidebar')
@endsection
