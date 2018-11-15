<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Reviewer</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/services">Find Shop</a>
        <a class="p-2 text-dark" href="/register">Sign up</a>
        @if (Auth::check())
            <a href="/services/create" class="p-2 text-dark">Create Product</a>
            <a class="p-2 text-dark" href="/user" style="text-transform: uppercase">{{ Auth::user()->username }}</a>
            <a class="p2 text-dark" href="/logout">Log out</a>
        @else
            <a class="p-2 text-dark" href="/login">Log in</a>
        @endif
    </nav>
</div>
  