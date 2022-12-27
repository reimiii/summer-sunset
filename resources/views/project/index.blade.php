<x-app-layout>
    <x-slot:title>
        Project
    </x-slot:title>

    <x-slot:header>
        Project
    </x-slot:header>


    <div class="row row-cards">
        @foreach($projects as $project)
            <div class="col-md-2 col-md-4">
                <div class="card card-sm">

                    @if($project->is_public)
                        <div class="ribbon bg-green-lt">Public</div>
                    @else
                        <div class="ribbon bg-red-lt">Private</div>
                    @endif

                    <div class="card-body">
                        <a href="{{ route('project.show', $project) }}"
                           class="card-title text-black">{{ str($project->name)->limit(30) }}</a>
                        <p class="text-muted">{{ str($project->body)->limit(85) }}</p>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex">
                            <a href="{{ route('project.show', $project) }}"
                               class="btn btn-ghost-info">View</a>

                            @auth()
                                <div class="ms-auto">
                                    <a href="{{ route('project.edit', $project) }}" class="btn btn-link">Edit</a>

                                    <form action="{{ route('project.destroy', $project) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                onclick="return confirm('Are you sure?')"
                                                class="btn btn-ghost-danger">Delete
                                        </button>
                                    </form>
                                </div>
                            @endauth


                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-center mt-3">
        <div class="pagination">
            {{ $projects->links() }}
        </div>
    </div>

    @push('scripts')

    @endpush

</x-app-layout>
