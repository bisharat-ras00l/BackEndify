@extends('web')

@section('main-content')
    <table class="table table-hover">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $type)
            <tr>
                <th>{{ $type->id }}</th>
                <th>{{ $type->name }}</th>
                <th>{{ $type->detail }}</th>
                <th>{{ $type->price }}</th>
                <th><img src="{{ asset($type->image) }}" width="100px" height="100px"></th>
                <th>
                    <a href="{{ route('menu.edit', $type->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('menu.delete', $type->id) }}"><i class="fa fa-trash"></i></a>
                </th>
            </tr>
        @endforeach
    </table>
@endsection
