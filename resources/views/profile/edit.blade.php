<x-app-layout>
    <x-slot:title>
        Profile Edit
    </x-slot:title>

    <x-slot:header>
        Profile Edit
    </x-slot:header>

    <div class="row row-cards">
        <div class="col-12">
            <form action="" method="post" id="createPostForm" class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile Edit</h4>
                </div>

                <div class="card-body">
                    <div id="editor">{{ $profile->body }}</div>
                    <div>
                        <input type="hidden" name="content" id="content">
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
