<x-layout
    title="Lista Clientes"
    meta-description="Lista clientes meta description"
>
    <x-layout-admin>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-light text-center ms-auto">
            <h1 class="titleAdmin"><i class="fa-solid fa-users"></i> Clientes</h1>
            <!-- <h2 class="py-3 display-5">Lista productos</h2> -->
            <div class="table-responsive rounded-3">
                <table class="table align-middle table-dark table-striped">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Cliente</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Fecha de alta</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">

                        @foreach ($users as $user)
                            <tr>

                                <td>
                                    <a class="text-decoration-none text-light link-info" href="{{ route('admin-customer-orders', ['id' => $user->id]) }}">
                                        {{ $user->id }}

                                    </a>
                                </td>
                                <td>
                                    <a class="text-decoration-none text-light link-info" href="{{ route('admin-customer-orders', ['id' => $user->id]) }}">

                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td>
                                    <a class="text-decoration-none text-light link-info" href="{{ route('admin-customer-orders', ['id' => $user->id]) }}">

                                        {{ $user->email }}
                                    </a>
                                </td>
                                <td>
                                    <a class="text-decoration-none text-light link-info" href="{{ route('admin-customer-orders', ['id' => $user->id]) }}">

                                        {{ $user->created_at }}
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </x-layout-admin>
</x-layout>
