@props(['order'])

<div class="container text-center mt-5 py-5">

    <h4 class="titulo my-2 fs-1">Pedido n° {{ $order->id }}</h4>

    <div class="col-md-12 col-lg-12 col-xl-12 text-light text-center mx-1">

        <div class="table-responsive rounded-3">
            <table class="table align-middle table-light table-striped">

                <thead>
                    <tr>

                        <th scope="col">Producto</th>
                        <th scope="col">Precio/Ud</th>
                        <th scope="col">Uds</th>
                        <th scope="col">Subtot</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">

                    @foreach ($order->products->sortBy('id') as $product)
                        <tr>

                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->price }} €
                            </td>
                            <td>
                                {{ $product->pivot->units }}
                            </td>
                            <td>
                                {{ $product->price * $product->pivot->units }} €
                            </td>

                        </tr>
                    @endforeach

                </tbody>

                <tfoot>
                    <tr style="font-weight: bolder">
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        @php
                            $total = 0;
                            foreach ($order->products as $product) {
                                $recuento = 0;
                                $recuento += $product->pivot->units;
                                $subTot = $product->price * $recuento;
                                $total += $subTot;
                            }
                        @endphp

                        <td class="p-1"> {{ $total }} €</td>

                    </tr>
                </tfoot>
            </table>

            <div class="d-flex justify-content-center my-5">
                <a href="{{ route('public-orders-list') }}">
                    <p class="p-2 mb-3 mx-5 bg-success text-light rounded-5 fs-6">Vuelve a tus pedidos</p>
                </a>
            </div>

        </div>
    </div>
