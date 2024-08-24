<x-frontend.layout.master>
    <main class="main">
        <div class="user-profile mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <x-frontend.sidebar.sidebar/>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <x-slot:js>
        {{ $jsScripts ?? null }}
    </x-slot:js>
</x-frontend.layout.master>
