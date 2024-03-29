<div class="container text-center py-5">

    <h4 class="text-center fs-1 pb-5" style="color:rgb(66, 65, 65); font-family: 'Signika', sans-serif;">
        {{ $user->name }} tiene un total de {{ $user->orders->where('status', '!=', 'cart')->count() }} pedidos
    </h4>

    <div class="col-md-12 col-lg-12 col-xl-12 text-light text-center mt-5">

        <!-- <h2 class="py-3 display-5">Lista productos</h2> -->
        <div class="table-responsive rounded-3">
            <table class="table align-middle table-light">

                <thead>
                    <tr>
                        <th scope="col"># Pedido</th>
                        <th scope="col">Importe</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">

                    @foreach ($user->orders->where('status', '!=', 'cart') as $order)
                        <tr>

                            <td>
                                <a class="text-decoration-none text-dark link-info"
                                    href="{{ route('admin-show-order', ['id' => $order->id]) }}">

                                    {{ $order->id }}
                                </a>
                            </td>

                            <td>
                                <a class="text-decoration-none text-dark link-info"
                                    href="{{ route('admin-show-order', ['id' => $order->id]) }}">

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

                                </a>
                            </td>

                            <td>
                                <a class="text-decoration-none text-dark link-info"
                                    href="{{ route('admin-show-order', ['id' => $order->id]) }}">

                                    @if ($order->status == 'processing')
                                        <p>En proceso</p>
                                    @else
                                        <p>Enviado</p>
                                    @endif

                                </a>
                            </td>

                            <td>
                                <a class="text-decoration-none text-dark link-info"
                                    href="{{ route('admin-show-order', ['id' => $order->id]) }}">

                                    {{ $order->updated_at }}
                                </a>
                            </td>


                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="{{ route('list-customers') }}" class="btn btn-success rounded-5">Atrás</a>
        </div>
    </div>
</div>
