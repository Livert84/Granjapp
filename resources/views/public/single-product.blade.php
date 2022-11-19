<x-layout title="{{ $product->name }}" meta-description="Checkout meta description">
    <x-layout-public>
        <div class="container bg-transparent text-start">
            <div class="row text-center text-secondary my-4 g-5">

                <h3 class="titulo display-6 mt-5">{{ $product->category->name }}</h3>


                <div class="col-12 col-md-6 position-relative">
                    <img src="{{ $product->picture }}" class="img-fluid mx-auto my-auto rounded-3"
                        style="background-position: center center;" alt="">
                    <p class="fs-2 bg-success text-white w-25 rounded-3 text-center position-absolute top-0 start-0">
                        {{ number_format($product->price, 2, ',', '.') }} €
                    </p>


                </div>
                <div class="col-12 col-md-4 py-4 bg-light rounded-3 text-center mx-auto text-secondary position-relative">

                    <h1 class="display-6 fs-4 bg-success rounded-3 text-light mt-4">{{ $product->name }}</h1>

                    <div class="row p-3">

                        <!-- <h3 class="titulo mt-0 text-muted fs-3">Descripción</h3> -->

                        <p class="titulo text-muted m-4 px-3 fs-5">{{ $product->short_description }}</p>

                    </div>
                    @auth
                        <form action="{{ route('product-add-to-cart', ['id' => $product->id]) }}" method="post">
                            @csrf
                            <div class="btn position-absolute bottom-0 start-0">
                                <button type="submit" class="btn btn-lg btn-outline-success bg-success link-light">
                                    <i class="bi bi-cart-plus" style="font-size: 30px">
                                    </i>
                                </button>
                            </div>
                        </form>
                    @endauth

                </div>
            </div>


            <h3 class="display-6 m-3 titulo">Productos relacionados</h3>
            @php
                $name = 'related';
            @endphp
            <x-layout-public.product-grid :products="$related_products" :name="$name" />



        </div>
    </x-layout-public>
</x-layout>
