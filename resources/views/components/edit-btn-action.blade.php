@props([
    'route' => '',
    'id' => '',
])
<li>
    <a href="{{ $route != '' ? route($route, $id) : '' }}" class="edit">
        <i class="uil uil-edit"></i>
    </a>
</li>
