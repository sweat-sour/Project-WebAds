@extends('Admin.layouts.app')
@section('tittle', 'CATEGORY LIST')
@section('content')

<div class="ml-3">
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <label for="">Add New Category</label>
        <input type="text" name="name">
        <button type="submit" class="btn btn-primary btn-sm">ADD</button>
    </form>
</div>

<table class="table table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $ctg)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ctg->name}}</td>
            <td>
                <form action="{{ route('category.destroy', $ctg->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>




@endsection