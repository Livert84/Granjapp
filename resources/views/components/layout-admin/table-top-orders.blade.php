<div class="col-sm-12 col-md-12 col-lg-10">
    <div class="table-responsive">
        <table class="table align-middle table-dark table-striped text-center">

            <h1 class="text-center bg-light text-success fs-4 p-3">
                <i class="fa-solid fa-dollar mx-2">

                </i>
                Top 5
                <br>
                Pedidos
            </h1>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">

                @foreach ($orders->where('status', 'processing')->sortByDesc('total_price')->take(5) as $order)
                    <tr>

                        <td>

                            {{ $order->id }}

                        </td>

                        <td>
                            {{ $order->user->name }}
                        </td>
                        <td>
                            {{ $order->total_price }} €
                        </td>
                        <td>
                            {{ $order->updated_at }}
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>
