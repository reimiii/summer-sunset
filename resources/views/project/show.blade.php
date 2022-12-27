<x-app-layout>
    <x-slot:title>
        Project Name
    </x-slot:title>

    <x-slot:header>
        {{ $project->name }}
    </x-slot:header>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9">
            <div class="card card-lg">
                <div class="card-body markdown">
                    {!! str($project->body)->markdown()  !!}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
