@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <h1>
            <a href="/services/{{ $service_id->id }}" class="">{{ $service_id->title }}</a>
        </h1>
        <p>{{ $service_id->service_type }}</p>
        <p>By: {{ $service_id->username }}</p>
        <hr>

        @if (count($service_id->reviews))
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
                            <p>
                                Review by: {{ $review->user->username }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <br />
        @if (Auth::check())
            <div class="card">
                <div class="card-block">
                <form method="POST" action="/services/{{ $service_id->id }}/reviews">
                        {{-- {{ method_field('PATCH') }} --}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Review Title</label>
                            <input class="form-control" name="title" placeholder="Review Title here" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="body" placeholder="Your review here" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Review!</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
        <div>
            <p>Please sign in to leave a review</p>
            <div>
                <button class="btn btn-secondary">
                    <a href="/login" class="p2 text-dark">Login</a>
                </button>
            </div>
        </div>
        @endif

        @include ('layouts.errors')
    </div>

    <div class="col-sm-8 blog-pagination">
        <a href="#" class="btn btn-outline-primary">Older</a>
        <a href="#" class="btn btn-outline-secondary disabled">Newer</a>
    </div>
@endsection