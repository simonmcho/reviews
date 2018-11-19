@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8">
        @if (count($services)) 
            @foreach ($services as $service)
                @include ('services.service')
            @endforeach
        @else
            <div>
                <h4>
                    No services!
                </h4>
                <a href="/services">Click here to go back to all services</a>
            </div>
        @endif
    </div>
    @include ('layouts.sidebar')
@endsection
