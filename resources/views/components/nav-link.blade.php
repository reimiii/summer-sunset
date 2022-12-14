<li {{ $attributes->merge(['class' => 'nav-item'.($active ? ' active' : '')]) }}>
    <a {{ $attributes->merge(['class' => 'nav-link', 'href' => $href,]) }}>
        {{ $slot }}
    </a>
</li>