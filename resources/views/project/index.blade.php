<x-app-layout>
    <x-slot:title>
        Project
    </x-slot:title>

    <x-slot:header>
        Project
    </x-slot:header>

    <div class="row row-cards">

        @foreach($projects as $project)
            <div class="col-md-10 col-lg-4">
                <div class="card card-sm">
                    <!-- Photo -->
                    <div class="img-responsive img-responsive-21x9 card-img-top" style="background-image: url({{ $project->thumbnail }})"></div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $project->name }}</h3>
                        <p class="text-muted">{{ str($project->body)->limit(90) }}</p>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('project.show', $project) }}" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
