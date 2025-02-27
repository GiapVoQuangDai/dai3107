@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Country</h1>
    <form action="{{ route('countries.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Country Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter country name" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
