<x-layout
    title="Control Panel"
    meta-description="Control Panel meta description"
>
    <x-layout-admin>

        <h1 class="titulo mt-0 pt-3 display-4 p-5">Administración</h1>

        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="table-responsive">
                        <table class="table align-middle table-dark table-striped">

                            <h1 class="text-center text-success fs-4 p-3">
                                <i class="fa-solid fa-warehouse mx-2">

                                </i>
                                Almacén
                            </h1>
                            <thead>
                                <tr>
                                    <th scope="col">Lista productos</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Uds</th>

                                </tr>
                            </thead>

                            <tbody class="table-group-divider">

                                @foreach ($products->sortBy('stock')->take(10) as $product)
                                    <tr>

                                        <td>
                                            <a class="text-decoration-none text-light link-info"
                                                href="{{ route('edit-product-form', $product->id) }}">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <th scope="row">
                                            {{ $product->price }}
                                        </th>
                                        <td>
                                            {{ $product->stock }}
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </x-layout-admin>
</x-layout>
