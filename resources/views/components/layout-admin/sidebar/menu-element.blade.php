@props(['text', 'icon', 'url'])

<li class="nav-item">
    <a href="{{$url}}" class="nav-link px-2 text-decoration-none text-light">
        <i class="{{$icon}}"></i>
        <span class="d-none d-sm-inline">{{$text}}</span>
    </a>
</li>

