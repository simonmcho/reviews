@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8">
        @foreach ($services as $service)
            @include ('services.service')
        @endforeach
    </div>
@endsection