@extends('web')

@section('main-content')
    <div class="m-sm-3">

        @if (session('success'))
            <div class="alert alert-success">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <form action="{{ route('menupdate', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Item Name</label>
                <input class="form-control form-control-lg" type="text" name="name" value="{{ $data->name }}"
                    placeholder="Enter your Item Name" />
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Detail</label>
                <input class="form-control form-control-lg" type="text" value="{{ $data->detail }}" name="detail"
                    placeholder="Enter your detail" />
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input class="form-control form-control-lg" type="text" value="{{ $data->price }}" name="price"
                    placeholder="Enter your price" />
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input class="form-control form-control-lg" type="file" name="image" />
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="gap-2 mt-3 d-grid">

                <input type="submit" class="btn btn-lg btn-primary" value="Sign In">
            </div>
        </form>
    @endsection
</div>

</div>
