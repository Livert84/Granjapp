<x-layout title="Tus pedidos" meta-description="Tus pedidos meta description">

    <x-layout-public>

        <div class="container text-center mt-5 py-5">
            @if (auth()->user()->orders->where('status', '!=', 'cart')->count() == 0)
                <div class="container">
                    <p class="titulo fs-4">{{ auth()->user()->name }} aún no tienes pedidos</p>
                    <a href="{{ route('show-products') }}">
                        <p class="btn btn-success rounded-5 mt-5">Vuelve a productos</p>
                    </a>
                </div>
            @else
                <h4 class="text-center text-success fs-1 py-5" style="font-family: 'Signika', sans-serif;">
                    {{ auth()->user()->name }} estos son tus pedidos:
                </h4>

                <div class="col-md-12 col-lg-12 col-xl-12 text-light text-center mt-5">

                    <!-- <h2 class="py-3 display-5">Lista productos</h2> -->
                    <div class="table-responsive rounded-3">
                        <table class="table align-middle table-light">

                            <thead>
                                <tr>
                                    <th scope="col"># Pedido</th>
                                    <th scope="col">Importe</th>
                                    <th scope="col">Estado pedido</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">

                                @foreach ($orders->where('status', '!=', 'cart')->sortByDesc('id') as $order)
                                    <tr>

                                        <td>
                                            <a href="{{ route('show-order', ['id' => $order->id]) }}">

                                                {{ $order->id }}
                                            </a>
                                        </td>

                                        <td>
                                            @php
                                                $total = 0;
                                                foreach ($order->products as $product) {
                                                    $recuento = 0;
                                                    $recuento += $product->pivot->units;
                                                    $subTot = $product->price * $recuento;
                                                    $total += $subTot;
                                                }
                                            @endphp


                                            {{ $total }} €
                                        </td>

                                        <td>
                                            @if ($order->status == 'processing')
                                                <p>En proceso</p>
                                            @else
                                                <p>Enviado</p>
                                            @endif



                                        </td>
                                        <td>
                                            {{ $order->updated_at }}
                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                    <div class="d-flex justify-content-center my-5">
                        <a href="{{ route('show-products') }}" class="btn btn-success rounded-5">Vuelve a productos</a>
                    </div>
                </div>
            @endif
        </div>

    </x-layout-public>

</x-layout>
