<x-frontend.layout.master>
    <main class="main">
        <x-frontend.banner.banner/>
        <div class="user-profile py-120">
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
