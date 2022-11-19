<x-layout title="En proceso" meta-description="En proceso meta description">

    <x-layout-public>

        <div class="container-fluid" style="margin-top: 7rem;">
            <div
                class="col-sm-12 col-md-10 col-lg-8 text-center text-light bg-success rounded-3 mx-auto p-5 bg-opacity-50">

                <h1 class="display-5">Enhorabuena 
                    <br> 
                    {{ auth()->user()->name }}
                </h1>

                <p class="display-6 mt-5">Tu pedido se está procesando
                    <br>
                    y pronto estarà en camino.
                </p>
                <br>
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                </div><i class="fa-solid fa-truck display-6 mt-2 mb-5 px-5"></i>
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <br>
                <a href="{{ route('store') }}"><i class="fa-solid fa-house my-5 px-3"></i>Vuelve a la home</a>

            </div>



        </div>

    </x-layout-public>

</x-layout>
