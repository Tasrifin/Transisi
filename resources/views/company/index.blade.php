@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Companies
                <a href="{{route('employee.index')}}">&nbsp;&nbsp;Employees</a> 
                <a class="badge badge-primary float-right" href="{{route('company.create')}}">Add New Company</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>*</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $dat)
                            <tr>
                                <td>{{ $data->firstItem() + $index }}</td>
                                <td>{{ $dat->name }}</td>
                                <td>{{ $dat->email }}</td>
                                <td>
                                    <img src="{{ Storage::url($dat->logo)}}" style="width: 75px" class="img-thumbnail"/>
                                </td>
                                <td>
                                    <a href="{{route('company.edit', [$dat->id])}}" class="badge badge-success">
                                        <i class="fa fa-pencil-alt">Edit</i>
                                    </a>
                                        <form onsubmit="return confirm('Delete this data permanently?')" class="d-inline"
                                        action="{{route('company.destroy', [$dat->id])}}"  method="POST" >
                                        @csrf
                                        @method('delete')
                                        <button class="badge badge-danger">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                </form>
                                </td>
                                
                            </tr>
                            @empty
                             <tr>
                                 <td colspan="7" class="text-center">Data is Empty</td>
                             </tr>
                            @endforelse
                        </tbody>
                        
                    </table>
                    {{$data->links()}}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
