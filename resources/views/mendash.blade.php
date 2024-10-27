@extends('web')

@section('main-content')
    <div class="container mt-5">
        <h2 class="text-center mb-4 display-5 fw-bold text-dark" style="font-family: 'Georgia', serif;">Our Menu</h2>

        <table class="table table-bordered table-hover align-middle shadow-sm rounded">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Price (PKR)</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $type)
                    <tr>
                        <td class="text-center">{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td class="text-wrap" style="max-width: 300px;">{{ $type->detail }}</td>
                        <td class="text-end">{{ number_format($type->price, 2) }}</td>
                        <td class="text-center">
                            @if ($type->image)
                                <img src="{{ asset($type->image) }}" width="120" height="120"
                                    class="img-fluid img-thumbnail rounded shadow-sm"
                                    style="object-fit: cover; border-radius: 12px;">
                            @else
                                <span class="text-muted fst-italic">No Image Available</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">
                            No menu items available.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-4">
            {{ $data->links() }}
        </div>
    </div>
@endsection
