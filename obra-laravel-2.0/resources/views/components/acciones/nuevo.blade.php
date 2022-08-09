<h2 class="text-center text-primary fw-bold">Datos de la @yield('nuevo')</h2>
<div class="container px-7">
    <div class="bg-light rounded-3">
    <nav class="container-fluid p-0 bg-gray">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            @yield('tab-header')
        </div>
    </nav>

    <form action="@yield('post')" method="post" class="container py-4 px-4">
    @csrf
        {{ $slot }}
    </form>
    </div>
</div>
