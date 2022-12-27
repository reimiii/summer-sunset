<x-app-layout>
    <x-slot:title>
        Create Project
    </x-slot:title>

    <x-slot:header>
        Create Project
    </x-slot:header>

    <div class="row row-cards">
        <div class="col-12">
            <form action="{{ route('project.store') }}" method="POST" class="card" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4 class="card-title">Form Create Project</h4>
                </div>

                <div class="card-body">

                    <div class="mb-3">
                        <div class="form-label">Name</div>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        @error('name')
                        <small class="form-hint text-red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Body</div>
                        <textarea rows="20" class="form-control" name="body">{{ old('body') }}</textarea>
                        @error('body')
                        <small class="form-hint text-red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Visibility</div>
                        <div>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input"
                                       type="radio"
                                       value="1"
                                       name="is_public">
                                <span class="form-check-label">Public</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input"
                                       checked
                                       value="0"
                                       type="radio"
                                       name="is_public">
                                <span class="form-check-label">Private</span>
                            </label>
                        </div>
                    </div>
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
