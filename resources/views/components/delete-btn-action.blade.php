@props([
    'route' => '',
    'id' => '',
])
<li>
    <a href="#" class="remove" data-id="{{ $id }}" data-route="{{ $route }}">
        <i class="uil uil-trash-alt"></i>
    </a>
</li>

