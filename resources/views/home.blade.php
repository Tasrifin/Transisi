@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="card-body text-center">
                       <h5>Welcome, {{ Auth::user()->name }} !</h5>
                        <a class="btn btn-primary" href="{{route('company.index')}}">Companies Data</a>
                        <a class="btn btn-primary" href="{{route('employee.index')}}">Employees Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
