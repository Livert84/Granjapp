@php
    $cart = get_cart();
@endphp

<x-layout title="Carrito" meta-description="Carrito meta description">

    <x-layout-public>

        @auth

            <div class="text-center mt-5 py-5">
                <h4 class="titulo mt-2 fs-1">Tu carrito</h4>

                @if ($cart->products->count() == 0)
                    <p>El carrito està vacío</p>
                @else
                    <div class="col-md-12 col-lg-12 col-xl-12 text-light text-center mx-1">

                        <!-- <h2 class="py-3 display-5">Lista productos</h2> -->
                        <div class="table-responsive rounded-3">
                            <table class="table align-middle table-light table-striped">

                                <thead>
                                    <tr>

                                        <th scope="col">Producto</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col"></th>
                                        <th scope="col">Subtot</th>
                                    </tr>
                                </thead>

                                <tbody class="table-group-divider">

                                    @foreach ($cart->products->sortBy('id') as $product)
                                        <tr>

                                            <td>
                                                {{ $product->name }}
                                            </td>
                                            <td>
                                                {{ $product->price }} €
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-md mx-0 align-items-center">
                                                    @auth
                                                        <form
                                                            action="{{ route('rem-one-from-cart', ['id' => $product->id]) }}"
                                                            method="post">
                                                            @csrf

                                                            <button type="submit"
                                                                class="btn text-muted link-danger border-none">
                                                                <i class="fa-solid fa-circle-minus">

                                                                </i>

                                                            </button>

                                                        </form>

                                                        <input type="text"
                                                            class="form-control align-items-center text-center bg-transparent rounded-3 border-none"
                                                            style="width:50px;" value="{{ $product->pivot->units }}">

                                                        <form
                                                            action="{{ route('add-one-to-cart', ['id' => $product->id]) }}"
                                                            method="post">
                                                            @csrf

                                                            <button type="submit"
                                                                class="btn text-success link-success border-none">
                                                                <i class="fa-solid fa-circle-plus">

                                                                </i>

                                                            </button>

                                                        </form>

                                                    @endauth

                                                </div>
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
                                            foreach ($cart->products as $product) {
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

                            <div class="d-flex justify-content-evenly">
                                <a href="{{ route('show-products') }}" class="btn btn-success rounded-5">Vuelve a productos</a>
                                <a href="{{ route('checkout') }}" class="btn btn-success rounded-5">Ir a la caja</a>

                            </div>

                        </div>
                    </div>
                @endif
            </div>

        @endauth

    </x-layout-public>

</x-layout>
