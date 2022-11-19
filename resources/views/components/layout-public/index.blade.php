@php
    $cart = get_cart();
@endphp

<x-layout-public.header :cart="$cart"/>




<div>
    {{ $slot }}
</div>

<x-layout-public.footer />
