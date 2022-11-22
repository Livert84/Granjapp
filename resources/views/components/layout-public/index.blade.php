@php
    $cart = get_cart();
@endphp

<x-layout-public.header :cart="$cart" />

@if (session('status'))
    <div class="status d-flex">
        <span class="mx-auto my-5 bg-light text-success p-3 rounded-3 fs-4">
            {{ session('status') }}
        </span>
    </div>
@endif




<div>
    {{ $slot }}
</div>

<x-layout-public.footer />
