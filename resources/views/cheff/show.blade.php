@extends('web')

@section('main-content')
    <table class="table table-hover">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Nationality</th>
            <th>Specialty</th>
            <th>Experience</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $type)
            <tr>
                <th>{{ $type->id }}</th>
                <th>{{ $type->name }}</th>
                <th>{{ $type->email }}</th>
                <th>{{ $type->nationality }}</th>
                <th>{{ $type->specialty }}</th>
                <th>{{ $type->experience }}</th>
                <th><img src="{{ asset($type->image) }}" width="100px" height="100px"></th>
                <th>
                    <a href="{{ route('cheff.edit', $type->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('cheff.delete', $type->id) }}"><i class="fa fa-trash"></i></a>
                </th>
            </tr>
        @endforeach
    </table>
@endsection
