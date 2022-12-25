<div {{ $attributes->class(['navbar-expand-md']) }}>
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">

                    <x-nav-link :active="request()->routeIs('home')"
                                :href="route('home')">
                        <x-icon.profile name="Home"/>
                    </x-nav-link>

                    <x-nav-link :active="request()->routeIs('project.index')"
                                :href="route('project.index')">
                        <x-icon.project name="Project"/>
                    </x-nav-link>

                </ul>
            </div>
        </div>
    </div>
</div>
