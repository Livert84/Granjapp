<x-layout title="Control Panel" meta-description="Control Panel meta description">

    <x-layout-admin>

        <div class="container">
            <div class="row justify-content-center pt-5">

                <x-layout-admin.table-top-orders :orders="$orders"/>

                <x-layout-admin.table-stock :products="$products"/>

                <x-layout-admin.table-top-users :users="$users"/>

            </div>
        </div>

    </x-layout-admin>

</x-layout>
