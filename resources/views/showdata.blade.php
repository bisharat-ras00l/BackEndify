@extends('web')

@section('main-content')
    <div class="container mt-5" style="overflow-y: auto;">
        <h2 class="mb-4 text-center" style="font-family: 'Georgia', serif; font-size: 2rem; font-weight: bold;">Cheff Details
        </h2>

        <div class="row">
            @foreach ($data as $type)
                <div class="mb-4 col-md-3">
                    <div class="card"
                        style="border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); height: 280px;">
                        <img src="{{ asset($type->image) }}" class="card-img-top" alt="{{ $type->name }}"
                            style="height: 150px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                        <div class="card-body" style="padding: 1rem;">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 1.0rem; font-weight: bold; color: black;">
                                {{ $type->name }}
                            </h5>
                            <p class="card-text" style="font-size: 0.6rem; margin: 0;">
                                <strong>Email:</strong> {{ $type->email }}
                            </p>
                            <p class="card-text" style="font-size: 0.6rem; margin: 0;">
                                <strong>Nationality:</strong> {{ $type->nationality }}
                            </p>
                            <p class="card-text" style="font-size: 0.6rem; margin: 0;">
                                <strong>Specialty:</strong> {{ $type->specialty }}
                            </p>
                            <p class="card-text" style="font-size: 0.6rem; margin: 0;">
                                <strong>Experience:</strong> {{ $type->experience }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $data->links() }}
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Georgia', serif;
            overflow-y: hidden;
            /* Prevents scrolling on the body */
        }

        .card {
            margin-bottom: 20px;
            height: 500px;
            transition: transform 0.2s;
        }
    </style>
@endsection
