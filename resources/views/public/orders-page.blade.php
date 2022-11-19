<x-layout title="Tus pedidos" meta-description="Tus pedidos meta description">

    <x-layout-public>

        <div class="container text-center mt-5 py-5">
            <h4 class="titulo mt-2 fs-2">
                {{ auth()->user()->name }}: tus pedidos
            </h4>

            <div class="col-md-12 col-lg-12 col-xl-12 text-light text-center mt-5">

                <!-- <h2 class="py-3 display-5">Lista productos</h2> -->
                <div class="table-responsive rounded-3">
                    <table class="table align-middle table-light">

                        <thead>
                            <tr>
                                <th scope="col"># Pedido</th>
                                <th scope="col">Importe</th>
                                <th scope="col">Fecha</th>
                            </tr>
                        </thead>

                        <tbody class="table-group-divider">

                            @foreach ($orders->where('status', 'processing')->sortByDesc('id') as $order)
                                <tr>

                                    <td>
                                        <a href="{{ route('show-order', ['id' => $order->id]) }}">

                                            {{ $order->id }}
                                        </a>
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
                <div class="d-flex justify-content-center mt-3">
                    <a href="{{ route('show-products') }}" class="btn btn-success rounded-5">Vuelve a productos</a>
                </div>
            </div>

        </div>

    </x-layout-public>

</x-layout>
