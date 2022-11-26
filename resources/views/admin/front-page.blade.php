<x-layout title="Control Panel" meta-description="Control Panel meta description">

    <x-layout-admin>

        <div class="container">
            <h1 class="text-center fs-1 py-5" style="color:rgb(66, 65, 65); font-family: 'Signika', sans-serif;">
                <i class="fa-solid fa-house-chimney"></i> Administración</h1>
            <div class="row justify-content-center">

                <x-layout-admin.table-top-orders :orders="$orders"/>

                <x-layout-admin.table-stock :products="$products"/>

                <x-layout-admin.table-top-users :users="$users"/>

            </div>
        </div>

    </x-layout-admin>

</x-layout>
