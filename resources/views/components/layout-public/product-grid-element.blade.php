@props(['product'])

@php
    $price = number_format($product->price, 2, ',', '.');
    [$whole, $decimal] = explode(',', $price);
@endphp
<!-- Product List Element -->
<div class="col">
    <div class="card shadow-sm h-100">
        <img id="card" class="rounded img-fluid" src="{{ $product->picture }}">

        <div class="card-body d-flex flex-column">
            <h5 class="card-title fs-4 text-center text-muted">{{ $product->name }}</h5>
            <div class="d-flex justify-content-between align-items-center mt-auto flex-wrap-reverse">

                @auth
                    <div class="btn-group">
                        <form action="{{ route('product-add-to-cart', ['id' => $product->id]) }}" method="post">
                            @csrf

                            <a href="{{ route('show-product', ['slug' => $product->slug]) }}"
                                class="btn btn-lg btn-success">Ver
                                más
                            </a>

                            <button type="submit" class="btn btn-lg btn-outline-success">
                                <i class="bi bi-cart-plus">
                                </i>
                            </button>

                        </form>
                    </div>
                @endauth

                <div class="d-flex align-items-start ms-auto">
                    <span class="fs-2">{{ $whole }}</span>
                    <span class="fs-6">{{ $decimal }}</span> €
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product List Element -->
