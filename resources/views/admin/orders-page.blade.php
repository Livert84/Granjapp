<x-layout title="Pedidos" meta-description="Pedidos meta description">
    <x-layout-admin>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-light text-center ms-auto">
            <h1 class="titulo-f"><i class="fa-solid fa-list"></i> Pedidos</h1>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-muted active" id="processing-tab" data-bs-toggle="tab"
                        data-bs-target="#processing-tab-pane" type="button" role="tab"
                        aria-controls="processing-tab-pane" aria-selected="false">Procesando</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-muted" id="sent-tab" data-bs-toggle="tab" data-bs-target="#sent-tab-pane"
                        type="button" role="tab" aria-controls="sent-tab-pane"
                        aria-selected="false">Enviados</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="processing-tab-pane" role="tabpanel"
                    aria-labelledby="processing-tab" tabindex="0">

                    <div class="table-responsive rounded-3">

                        <table class="table align-middle table-dark table-striped">

                            <thead>
                                <tr>
                                    <th scope="col"># Pedido</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Fecha de compra</th>
                                    <th scope="col">N° Tracking</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">

                                @foreach ($orders_processing->sortByDesc('updated_at') as $order)
                                    <tr>
                                        <form action="{{ route('send-order') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$order->id}}">

                                            <td>
                                                <a class="text-decoration-none text-light link-info"
                                                    href="{{ route('admin-show-order', $order->id) }}">
                                                    {{ $order->id }}
                                                </a>
                                            </td>

                                            <td scope="row">
                                                <a class="text-decoration-none text-light link-info"
                                                    href="{{ route('admin-show-order', $order->id) }}">
                                                    {{ $order->user->name }}
                                                </a>

                                            </td>
                                            <td>

                                                <a class="text-decoration-none text-light link-info"
                                                href="{{ route('admin-show-order', $order->id) }}">
                                                {{ $order->updated_at }}
                                            </a>
                                            </td>
                                            <td>

                                                <input type="text" name="traking" id="traking" class="form-control"
                                                    placeholder="nº de traking">
                                            </td>
                                            <td class="d-flex justify-content-center py-5 gap-2">
                                                <button type="submit" class="btn btn-success">Enviar</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

                <div class="tab-pane fade" id="sent-tab-pane" role="tabpanel" aria-labelledby="sent-tab" tabindex="0">
                    <div class="table-responsive rounded-3">

                        <table class="table align-middle table-dark table-striped">

                            <thead>
                                <tr>
                                    <th scope="col"># Pedido</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">N° Tracking</th>
                                    <th scope="col">Fecha de envío</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">

                                @foreach ($orders_sent->sortByDesc('updated_at') as $order)
                                    <tr>
                                            <td>
                                                <a class="text-decoration-none text-light link-info"
                                                    href="{{ route('admin-show-order', $order->id) }}">
                                                    {{ $order->id }}
                                                </a>
                                            </td>
                                            <td scope="row">
                                                <a class="text-decoration-none text-light link-info"
                                                    href="{{ route('admin-show-order', $order->id) }}">
                                                    {{ $order->user->name }}

                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-decoration-none text-light link-info"
                                                    href="{{ route('admin-show-order', $order->id) }}">
                                                    {{ $order->traking_number}}
                                                </a>

                                            </td>
                                            <td>
                                                <a class="text-decoration-none text-light link-info"
                                                href="{{ route('admin-show-order', $order->id) }}">
                                                {{ $order->updated_at }}
                                                </a>

                                            </td>

                                            <td class="d-flex justify-content-evenly py-5 gap-2">
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>



    </x-layout-admin>
</x-layout>
