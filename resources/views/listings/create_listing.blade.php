@extends('layouts.frontend')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Create a new listing</h2>
                    <a href="{{ route('home') }}" style="float: right" class="btn btn-sm btn-secondary my-3">back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('listing.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="company">Company name</label>
                        <input class="form-control" type="text" name="company" id="company" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address" id="address" required>
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input class="form-control" type="url" name="website" id="website" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="tel" name="phone" id="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="bio">Description</label>
                        <textarea class="form-control" name="bio" id="bio" cols="30" rows="10" required></textarea>
                    </div>

                    <input class="btn btn-success" type="submit" value="Send">

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection