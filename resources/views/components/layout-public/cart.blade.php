@props(['cart'])
@auth

    <div class="offcanvas offcanvas-end col-10" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header mx-auto">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">
                <a href="{{ route('cart-index') }}">
                    <i class="display-5 fa-solid fa-cart-shopping text-success">
                    </i>
                </a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body text-center">
            @if ($cart->products->count() == 0)
                <p>Tu carrito està vacío</p>
            @else
                <ul class="list-group">
                    @foreach ($cart->products->sortBy('id') as $product)
                        <li class="list-group-item">
                            <div class="text-center display-6 fs-6">
                                {{ $product->name }}
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="btn-group text-start" style=" width:100px ;">
                                    @auth
                                        <form action="{{ route('rem-one-from-cart', ['id' => $product->id]) }}"
                                            method="post">
                                            @csrf
                                            <div class="btn btn-default">
                                                <button type="submit"
                                                    class="btn btn-lg btn-outline-success bg-success link-light">
                                                    <i class="fa-solid fa-circle-minus"></i>
                                                    </i>
                                                </button>
                                            </div>
                                        </form>

                                        <input type="text rounded-3" class="form-control align-items-center text-center"
                                            style="width:50px;" value="{{ $product->pivot->units }}">

                                        <form action="{{ route('add-one-to-cart', ['id' => $product->id]) }}"
                                            method="post">
                                            @csrf
                                            <div class="btn btn-default">
                                                <button type="submit"
                                                    class="btn btn-lg btn-outline-success bg-success link-light">
                                                    <i class="fa-solid fa-circle-plus"></i>
                                                    </i>
                                                </button>
                                            </div>
                                        </form>

                                    @endauth

                                </div>

                                <div class="my-auto text-end">
                                    {{ $product->price }} €
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @php
                    $recuento = 0;
                    foreach ($cart->products as $product) {
                        $recuento += $product->pivot->units;
                    }
                @endphp
                <p>{{ $recuento * $product->price }} €</p>

                <a href="{{ route('checkout') }}" class="btn btn-primary ms-auto">Checkout</a>
            @endif
        </div>
    </div>

@endauth
