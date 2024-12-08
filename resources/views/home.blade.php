@extends('layouts.back')
@section('title', 'Dashboard')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                        <div class="card-header-form">

                        </div>
                    </div>
                    <div class="card-body">
                    <table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">Progress</th>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
            <th scope="col">Budget</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if (count($project) > 0)
            @foreach ($project as $pro)
                <tr>
                    <th>{{ $pro->progress }}</th>
                    <th>{{ $pro->name }}</th>
                    <th>{{ $pro->location }}</th>
                    <th>{{ $pro->budget }}</th>
                    <th><a href="/edit/{{ $pro->id }}" class="btn btn-primary">Edit</a>
                        <a href="/delete/{{ $pro->id }}" class="btn btn-danger">Delete</a>
                    </th>
                </tr>
            @endforeach
        @else
            <tr>
                <th>No Data</th>
            </tr>
        @endif
    </tbody>
</table>
<div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Projects</h4>

                    </div>
                    <div class="card-body">
                        <form action="/addproject" method="post">
                            @csrf
                            @method("POST")

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                                <input type="name" class="form-control" name="name" placeholder="Enter name">
                            </div>

                            <div class="mb-3 row">
                                <label for="location" class="col-md-4 col-form-label text-md-end text-start">Location</label>
                                <input type="name" class="form-control" name="location" placeholder="Enter location">
                            </div>
                            <div class="mb-3 row">
                                <label for="image" class="col-md-4 col-form-label text-md-end text-start">image</label>
                                <input type="name" class="form-control" name="pro_image" placeholder="Enter location">
                            </div>
                            <div class="mb-3 row">
                                <label for="budget" class="col-md-4 col-form-label text-md-end text-start">Budget</label>
                                <input type="name" class="form-control" name="budget" placeholder="Enter name">
                            </div>
                            <div class="mb-3 row">
                                <label for="progress" class="col-md-4 col-form-label text-md-end text-start">Progress</label>
                                <input type="name" class="form-control" name="progress" placeholder="Enter name">
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add project">
                            </div>

                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
