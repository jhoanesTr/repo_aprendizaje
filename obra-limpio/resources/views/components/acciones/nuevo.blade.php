<h2 class="text-center text-primary fw-bold">Datos de la @yield('nuevo')</h2>
<div class="container px-5">
    <div class="container px-5">
        <div class="container px-5">
            <div class="container px-5">
                <nav class="container">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @yield('tab-header')
                    </div>
                </nav>

                <form action="@yield('post')" method="post" class="container bg-light rounded-3 py-4 px-4">
                @csrf
                    {{ $slot }}
                </form>
            </div>
        </div>
    </div>
</div>
