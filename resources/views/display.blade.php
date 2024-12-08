@extends('layouts.back')
@section('title', 'Dashboard')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Display</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('display') }}">Display</a></div>
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
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Former Role</th>
            <th scope="col">New Role</th>
        </tr>
    </thead>
    <tbody>
        @if (count($career) > 0)
            @foreach ($career as $car)
                <tr>
                    <th>{{ $car->id }}</th>
                    <th>{{ $car->name }}</th>
                    <th>{{ $car->email }}</th>
                    <th>{{ $car->frole }}</th>
                    <th>{{ $car->nrole }}</th>
                    <th><a href="/edit/{{ $car->id }}" class="btn btn-primary">Edit</a>
                        <a href="/delete/{{ $car->id }}" class="btn btn-danger">Delete</a>
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
