@extends ('layouts.master')

@section ('content')
    <h2>Create a product!</h2>
        
    <hr>

    <form method="POST" action="/services">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Product Title</label>
            <input type="text" name ="title" class="form-control" id="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="emailAddress">Product Industry</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email@gmail.com" required>
            <select>
                <option> 
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="service_price">Service Price</label>
            <input type="number" name="service_price" class="form-control" id="service_price" placeholder="$0.00" required>
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div> --}}
        {{-- <div class="checkbox">
            <label>
            <input type="checkbox"> Check me out
            </label>
        </div> --}}
        <select>
            <option value="buyer">Buyer</option>
            <option value="seller">Seller</option>
        </select>

        @include ('layouts.errors')

        <button type="submit" class="btn btn-primary">Create account!</button>
    </form>
@endsection