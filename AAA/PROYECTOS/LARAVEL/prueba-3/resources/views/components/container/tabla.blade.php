<div class="container pt-4">
    <table class="table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                @yield('tabla-header')
            </tr>
        </thead>
        <tbody>
            <!--Debería ir un loop-->
            <tr>
                @yield('tabla-body')
            </tr>
        </tbody>
    </table>
</div>
