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
            <label for="service_type">Product Type:</label>
            <div>
                <select name="service_type" id="service_type" required>
                    <option value="wood">Wood</option>
                    <option value="metal">Metal</option>
                    <option value="plastic">Plastic</option>
                    <option value="fabric">Fabric</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="service_price">Service Price</label>
            <input type="number" name="service_price" class="form-control" id="service_price" placeholder="$0.00" min="1" step="1" required>
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
        <select required>
            <option value="buyer">Buyer</option>
            <option value="seller">Seller</option>
        </select>

        @include ('layouts.errors')

        <button type="submit" class="btn btn-primary">Create account!</button>
    </form>
@endsection