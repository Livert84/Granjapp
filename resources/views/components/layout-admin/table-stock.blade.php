<div class="col-sm-12 col-md-12 col-lg-4">
    <div class="table-responsive">
        <table class="table align-middle table-dark table-striped text-center">

            <h1 class="text-center bg-light text-success fs-4 p-3">
                <i class="fa-solid fa-warehouse mx-2">

                </i>
                Almacén
                <br>
                Ultimas unidades
            </h1>
            <thead>
                <tr>
                    <th scope="col">Lista productos</th>

                    <th scope="col">Uds</th>

                </tr>
            </thead>

            <tbody class="table-group-divider">

                @foreach ($products->sortBy('stock')->take(10) as $product)
                    <tr>

                        <td>

                            {{ $product->name }}

                        </td>

                        <td>
                            {{ $product->stock }}
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

