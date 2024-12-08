@extends('layouts.back')
@section('title', 'Dashboard')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Contact</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('displays') }}">Contact display</a></div>
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
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        @if (count($contact) > 0)
            @foreach ($contact as $con)
                <tr>
                    <th>{{ $con->id }}</th>
                    <th>{{ $con->name }}</th>
                    <th>{{ $con->email }}</th>
                    <th>{{ $con->message }}</th>
                    <th>
                        <a href="/del/{{ $con->id }}" class="btn btn-danger">Delete</a>
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
