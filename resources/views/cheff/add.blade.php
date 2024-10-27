@extends('web')

@section('main-content')
    <div class="m-sm-3">

        @if (session('success'))
            <div class="alert alert-success">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <form action="{{ route('cheff.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Fulname</label>
                <input class="form-control form-control-lg" type="text" name="name" value="{{ old('name') }}"
                    placeholder="Enter your Fulname" />
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control form-control-lg" value="{{ old('email') }}" type="email" name="email"
                    placeholder="Enter your Email" />
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Specialty</label>
                <input class="form-control form-control-lg" type="text" value="{{ old('specialty') }}" name="specialty"
                    placeholder="Enter your specialty" />
                @error('specialty')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nationality</label>
                <input class="form-control form-control-lg" type="text" value="{{ old('nationality') }}"
                    name="nationality" placeholder="Enter your Nationality" />
                @error('nationality')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Experience</label>
                <input class="form-control form-control-lg" type="text" value="{{ old('experience') }}"
                    name="experience" placeholder="Enter your experience" />
                @error('experience')
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
