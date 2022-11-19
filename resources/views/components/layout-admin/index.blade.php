<x-layout-admin.header />

<div class="container-fluid pb-3 flex-grow-1 d-flex flex-column flex-sm-row overflow-auto mt-5">
    <div class="row flex-grow-sm-1 flex-grow-1 mt-5 g-1">

        <x-layout-admin.sidebar.sidebar />

        <main class="col overflow-auto h-100">
            <div class="bg-light h-100 bg-opacity-50 rounded-3">

                {{ $slot }}

            </div>
        </main>

    </div>
</div>





<!-- class="col-6 col-md-9 col-xl-10 p-3" -->
