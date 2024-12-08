@extends('layouts.back')
@section('title', 'Dashboard')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>

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

<div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Projects</h4>

                    </div>
                    <div class="card-body">
                        <form action="/edit/{{$project->id}}" method="post">
                            @csrf
                            @method("POST")
                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                                <input type="name" class="form-control" name="name" placeholder="Enter name" value="{{$project->name}}">
                            </div>

                            <div class="mb-3 row">
                                <label for="location" class="col-md-4 col-form-label text-md-end text-start">Location</label>
                                <input type="name" class="form-control" name="location" placeholder="Enter location" value="{{$project->location}}">
                            </div>
                            <div class="mb-3 row">
                                <label for="budget" class="col-md-4 col-form-label text-md-end text-start">Budget</label>
                                <input type="name" class="form-control" name="budget" placeholder="Enter name" value="{{$project->budget}}">
                            </div>
                            <div class="mb-3 row">
                                <label for="progress" class="col-md-4 col-form-label text-md-end text-start">Progress</label>
                                <input type="name" class="form-control" name="progress" placeholder="Enter name" value="{{$project->progress}}">
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Project">
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
