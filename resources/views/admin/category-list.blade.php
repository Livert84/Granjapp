<x-layout
    title="Categorías"
    meta-description="Categorías meta description"
>
    <x-layout-admin>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-light text-center ms-auto">
            <h1 class="fs-2 text-muted py-2" style="letter-spacing: 3px">CATEGORIAS</h1>

            <!-- <h2 class="py-3 display-5">Lista productos</h2> -->
            <div class="table-responsive rounded-3">
                <table class="table align-middle table-dark table-striped">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Lista de categorías</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">

                        @foreach ($categories as $category)
                            <tr>


                                <th scope="row">
                                    {{ $category->id }}
                                </th>
                                <th scope="row">
                                    {{ $category->name }}
                                </th>


                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </x-layout-admin>
</x-layout>
