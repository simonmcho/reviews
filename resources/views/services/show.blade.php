@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <h1>
            <a href="/services/{{ $service_id->id }}" class="">{{ $service_id->title }}</a>
        </h1>
        <p>{{ $service_id->service_type }}</p>
        {{-- <p>{{ $service_id->user->name }}</p> --}}
        <hr>

        {{-- @if (count($service_id->reviews))
            <div class="reviews">
                <ul class="list-group">
                    @foreach ($service_id->reviews as $review)
                        <li class="list-group-item">
                            <strong>
                                Review posted: {{ $review->created_at->diffFOrHUmans() }}
                            </strong>
                            <article>
                                {{ $review->body }}
                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        
        <br />
        <div class="card">
            <div class="card-block">
            <form method="POST" action="/posts/{{ $service_id->id }}/reviews">
                    {{-- {{ method_field('PATCH') }} --}}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your review here" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Review!</button>
                    </div>
                </form>
            </div>
        </div>

        @include ('layouts.errors')
    </div>

    <div class="col-sm-8 blog-pagination">
        <a href="#" class="btn btn-outline-primary">Older</a>
        <a href="#" class="btn btn-outline-secondary disabled">Newer</a>
    </div>
@endsection