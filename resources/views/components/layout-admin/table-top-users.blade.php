@props(['users'])
<div class="col-sm-12 col-md-12 col-lg-6">
    <div class="table-responsive">
        <table class="table align-middle table-dark table-striped">

            <h1 class="text-center bg-light text-success fs-4 p-3">
                <i class="fa-solid fa-heart mx-2">

                </i>
                Top 10
                <br>
                Clientes frecuentes
            </h1>
            <thead>
                <tr class="text-center">
                    <th scope="col">
                        Id Cliente
                    </th>
                    <th scope="col">
                        Nombre
                    </th>
                    <th scope="col">
                        N° Pedidos
                    </th>

                </tr>
            </thead>

            <tbody class="table-group-divider">

                @foreach ($users->sortByDesc('orders')->take(10) as $user)
                    <tr class="text-center">

                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->orders->count() }}
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>