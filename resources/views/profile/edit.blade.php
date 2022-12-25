<x-app-layout>
    <x-slot:title>
        Profile Edit
    </x-slot:title>

    <x-slot:header>
        Profile Edit
    </x-slot:header>

    <div class="row row-cards">
        <div class="col-12">
            <form action="{{ route('profile.update', $profile) }}" method="post" id="createPostForm" class="card">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4 class="card-title">Profile Edit</h4>
                </div>

                <div class="card-body">
                    <textarea rows="20" class="form-control" name="body">{{ $profile->body }}</textarea>
                    @error('body')
                    <small class="form-hint text-red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="card-footer text-end">
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary ms-auto">Send data</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
