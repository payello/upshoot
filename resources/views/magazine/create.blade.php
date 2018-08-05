@extends('app')
@section('content')
    <div class="container">
        <form method="post" action="{{ url('magazine') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="number" step="0.01" class="form-control" placeholder="Enter Price">
            </div>

            <div class="form-group">
                <label for="cover">Cover</label>
                <input name="cover" type="text" class="form-control" placeholder="Enter cover">
            </div>

            <div class="form-group">
                <label for="colour">Colour</label>
                <input name="colour" type="text" class="form-control" placeholder="Enter Colour">
            </div>

            <div class="form-group">
                <label for="size">Size</label>
                <input name="size" type="text" class="form-control" placeholder="Enter Size">
            </div>

            <div class="form-group">
                <label for="size">Theme</label>
                <input name="theme" type="text" class="form-control" placeholder="Enter Theme">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
