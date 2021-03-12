@extends('layouts.frontend')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Your listings</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($listings))
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Website</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Description</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($listings as $listing)
                                        <tr>
                                            <td><a href="{{ route('listing.show', $listing->id) }}" class="nav-link">{{$listing->name}}</a></td>
                                            <td>{{$listing->address}}</td>
                                            <td>{{$listing->website}}</td>
                                            <td>{{$listing->email}}</td>
                                            <td>{{$listing->phone}}</td>
                                            <td>{{$listing->bio}}</td>
                                            <td><a href="{{ route('listing.edit', $listing->id) }}" class="nav-link">Edit</a></td>
                                            <td>
                                            <form action="{{ route('listing.destroy', $listing->id) }}" method="post" onsubmit="return confirm('Delete this listing?')">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input class="nav-link" type="submit" value="Delete">
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach

                            </tbody>

                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection