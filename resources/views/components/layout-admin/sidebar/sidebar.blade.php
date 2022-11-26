<aside class="col-sm-4 col-md-3 col-lg-2 col-xl-2 flex-grow-md-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-1 pb-3">
    <div class="bg-dark rounded-3 p-3 h-100 sticky-top">

        @php
            $menu_elements = [
                'Home' => [
                    'text' => 'Inicio',
                    'icon' => 'fa-solid fa-house-chimney',
                    'url' => route('admin-page'),
                ],
                'Clientes' => [
                    'text' => 'Clientes',
                    'icon' => 'fa-solid fa-users',
                    'url' => route('list-customers'),
                ],
                'Pedidos' => [
                    'text' => 'Pedidos',
                    'icon' => 'fa-solid fa-list',
                    'url' => route('list-orders'),
                ],
                'Productos' => [
                    'text' => 'Productos',
                    'icon' => 'fa-solid fa-cart-shopping',
                    'url' => route('list-products'),
                ],
                'Categorías' => [
                    'text' => 'Categorías',
                    'icon' => 'fa-solid fa-certificate',
                    'url' => route('list-categories'),
                ],
                'Crear Producto' => [
                    'text' => 'Nuevo Producto',
                    'icon' => 'fa-solid fa-file-circle-plus',
                    'url' => route('new-product-form'),
                ],
                'Crear Categoría' => [
                    'text' => 'Nueva Categoría',
                    'icon' => 'fa-solid fa-folder-plus',
                    'url' => route('new-category-form'),
                ],
                'Creditos' => [
                    'text' => 'Creditos',
                    'icon' => 'fa-solid fa-folder-plus',
                    'url' => route(('credits')),
                ],

            ];
        @endphp
        <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
            @foreach ($menu_elements as $element)
                @php
                    $text = $element['text'];
                    $url = $element['url'];
                    $icon = $element['icon'];
                @endphp
                <x-layout-admin.sidebar.menu-element :text="$text" :url="$url" :icon="$icon" />
            @endforeach


        </ul>
    </div>
</aside>
