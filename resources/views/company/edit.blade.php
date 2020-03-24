@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT COMPANY
                </div>
                @if ($errors->any())
                    <div class="alert btn-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="card-body">
                    <div class="card-shadow">
                        <div class="card-body">
                        <form action="{{route('company.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                </div>
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
