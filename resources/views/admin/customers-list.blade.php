<x-layout
    title="Lista Clientes"
    meta-description="Lista clientes meta description"
>
    <x-layout-admin>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-light text-center ms-auto">

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
                                    {{ $user->id }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->created_at }}
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </x-layout-admin>
</x-layout>
