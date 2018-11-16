@extends ('layouts.master')

@section ('content')
    LOGIN
    <div class="col-md-8">
        <h1>Sign In</h1>
        <form action="/login" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button class="btn btn-primary">Sign in!</button>
        </form>
    </div>
@endsection
