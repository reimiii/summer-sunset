<x-app-layout>
    <x-slot:title>
        Create Project
    </x-slot:title>

    <x-slot:header>
        {{ $project->name }} Edit
    </x-slot:header>

    <div class="row row-cards">
        <div class="col-12">
            <form action="{{ route('project.update', $project) }}" method="POST" class="card" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4 class="card-title">Form Edit Project</h4>
                </div>

                <div class="card-body">

                    <div class="mb-3">
                        <div class="form-label">Name</div>
                        <input type="text" name="name" value="{{ $project->name }}" class="form-control">
                        @error('name')
                        <small class="form-hint text-red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Body</div>
                        <textarea rows="20" class="form-control @error('body') is-invalid @enderror" name="body">{{ $project->body }}</textarea>
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
                                       {{ $project->is_public ? 'checked' : '' }}
                                       value="1"
                                       name="is_public">
                                <span class="form-check-label">Public</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input"
                                        {{ $project->is_public ? '' : 'checked' }}
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
                        <button type="submit" class="btn btn-primary ms-auto">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
