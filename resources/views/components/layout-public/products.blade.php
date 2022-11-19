@props(['products'])
<!-- Productos -->
<div id="productos" class="container pt-2 px-5">

    <h2 class="titulo display-3">BIOSTORE</h2>
    <ul class="nav nav-tabs display-6 fs-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link text-success active" id="frutas-tab" data-bs-toggle="tab"
                data-bs-target="#frutas-tab-pane" type="button" role="tab" aria-controls="frutas-tab-pane"
                aria-selected="true">Frutas</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-success" id="verduras-tab" data-bs-toggle="tab"
                data-bs-target="#verduras-tab-pane" type="button" role="tab"
                aria-controls="verduras-tab-pane" aria-selected="false">Verduras</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-success" id="salsas-tab" data-bs-toggle="tab"
                data-bs-target="#salsas-tab-pane" type="button" role="tab"
                aria-controls="salsas-tab-pane" aria-selected="false">Salsas y mojos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-success" id="vinos-tab" data-bs-toggle="tab"
                data-bs-target="#vinos-tab-pane" type="button" role="tab"
                aria-controls="vinos-tab-pane" aria-selected="false">Vinos</button>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="frutas-tab-pane" role="tabpanel"
            aria-labelledby="frutas-tab" tabindex="0">
            @php
                $name = 'categoria-frutas';
            @endphp
            <x-layout-public.product-grid :products="$products->where('category_id', '=', 1)" :name="$name" />
        </div>
        <div class="tab-pane fade" id="verduras-tab-pane" role="tabpanel" aria-labelledby="verduras-tab"
            tabindex="0">
            @php
                $name = 'categoria-verduras';
            @endphp
            <x-layout-public.product-grid :products="$products->where('category_id', '=', 2)" :name="$name" />
        </div>
        <div class="tab-pane fade" id="salsas-tab-pane" role="tabpanel" aria-labelledby="salsas-tab"
            tabindex="0">@php
                $name = 'categoria-salsas-y-mojos';
            @endphp
            <x-layout-public.product-grid :products="$products->where('category_id', '=', 3)" :name="$name" />
        </div>
        <div class="tab-pane fade" id="vinos-tab-pane" role="tabpanel" aria-labelledby="vinos-tab"
            tabindex="0">
            @php
                $name = 'categoria-vinos';
            @endphp
            <x-layout-public.product-grid :products="$products->where('category_id', '=', 5)" :name="$name" />
        </div>

    </div>

</div>
