@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADD NEW COMPANY
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
                        <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="company_id">Company</label>
                                    <select name="company_id" required class="form-control">
                                        <option value="">Choose Company</option>
                                        @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">
                                            {{$company->name}}
                                        </option>        
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
