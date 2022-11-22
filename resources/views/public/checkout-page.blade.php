@php
$cart = get_cart();
@endphp

<x-layout
    title="Checkout"
    meta-description="Checkout meta description"
>


    <x-layout-public>
        <div class="container mx-auto row g-5 my-5 px-2 py-3">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-center align-items-center mb-3">
                    <span class="text-light fs-5">Tu carrito</span>
                </h4>
                <ul class="list-group mb-3">

                    @foreach ($cart->products as $product)
                        <li class="list-group-item lh-sm">
                            <div>
                                <h6 class="my-0 fs-5">{{ $product->name }}</h6>
                            </div>
                            <div>
                                <span class="fs-6 text-muted me-0">x {{ $product->pivot->units }}</span>
                            </div>
                            <div class="d-flex justify-content-end">
                                <span class="text-muted text-end">{{ $product->price * $product->pivot->units }}€</span>
                            </div>
                        </li>
                    @endforeach

                    <!-- Precio Total -->
                    <li class="list-group-item d-flex justify-content-between">
                        @php
                        $total = 0;
                        foreach ($cart->products as $product) {
                                $recuento = 0;
                                $recuento += $product->pivot->units;
                                $subTot = $product->price * $recuento;
                                $total += $subTot;
                            }
                        @endphp

                        <span>Total (EUR)</span>
                        <strong>{{ $total }} €</strong>
                    </li>
                    <!-- Precio Total termina -->
                </ul>

            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Dirección</h4>
                <form class="needs-validation" novalidate="" action="{{route('process-checkout')}}" method="POST">
                    @csrf
                    <div class="row g-3">

                        <div class="col-12">
                            <label for="address" class="form-label">Linea 1 de Dirección</label>
                            <input type="text" name="address" class="form-control" id="address"
                                placeholder="Dirección" required="">
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Linea 2 de Dirección <span
                                    class="text-muted">(Opcional)</span></label>
                            <input type="text" name="address2" class="form-control" id="address2"
                                placeholder="Escalera, piso, puerta">
                        </div>

                        <div class="col-md-8">
                            <label for="municipality" class="form-label">Municipio</label>
                            <select name="municipality" class="form-select" id="municipality" required="">
                                <option value="">Elegir Municipio</option>
                                <option value="S/C de Tenerife">Adeje</option>
                                <option value="S/C de Tenerife">Arafo</option>
                                <option value="S/C de Tenerife">Arico</option>
                                <option value="S/C de Tenerife">Arona</option>
                                <option value="S/C de Tenerife">Buenavista del Norte</option>
                                <option value="S/C de Tenerife">Candelaria</option>
                                <option value="S/C de Tenerife">Fasnia</option>
                                <option value="S/C de Tenerife">Garachico</option>
                                <option value="S/C de Tenerife">Granadilla de Abona</option>
                                <option value="S/C de Tenerife">La Guancha</option>
                                <option value="S/C de Tenerife">Guía de Isora</option>
                                <option value="S/C de Tenerife">Güímar</option>
                                <option value="S/C de Tenerife">Icod de los Vinos</option>
                                <option value="S/C de Tenerife">La Matanza de Acentejo</option>
                                <option value="S/C de Tenerife">La Orotava</option>
                                <option value="S/C de Tenerife">Puerto de la Cruz</option>
                                <option value="S/C de Tenerife">Los Realejos</option>
                                <option value="S/C de Tenerife">El Rosario</option>
                                <option value="S/C de Tenerife">San Cristóbal de La Laguna</option>
                                <option value="S/C de Tenerife">San Juan de la Rambla</option>
                                <option value="S/C de Tenerife">San Miguel de Abona</option>
                                <option value="S/C de Tenerife">Santa Cruz de Tenerife</option>
                                <option value="S/C de Tenerife">Santa Úrsula</option>
                                <option value="S/C de Tenerife">Santiago del Teide</option>
                                <option value="S/C de Tenerife">El Sauzal</option>
                                <option value="S/C de Tenerife">Los Silos</option>
                                <option value="S/C de Tenerife">Tacoronte</option>
                                <option value="S/C de Tenerife">El Tanque</option>
                                <option value="S/C de Tenerife">Tegueste</option>
                                <option value="S/C de Tenerife">La Victoria de Acentejo</option>
                                <option value="S/C de Tenerife">Vilaflor de Chasna</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="zip" class="form-label">Código Postal</label>
                            <input type="text" name="zip" class="form-control" id="zip" placeholder="" required="">
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Pago</h4>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Nombre en la tarjeta</label>
                            <input type="text" class="form-control" id="cc-name" placeholder=""
                                required="">
                            <small class="text-muted">Nombre completo como aparece en la tarjeta</small>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Número de la tarjeta</label>
                            <input type="text" class="form-control" id="cc-number" placeholder=""
                                required="">
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Caducidad</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                required="">
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder=""
                                required="">
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-success btn-lg bg-success" type="submit">Completar Pedido</button>
                </form>
            </div>
        </div>
    </x-layout-public>
</x-layout>
