@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/about',
            'label' => 'Chi siamo',
            'active' => true,
        ],
        [
            'url' => '/movies',
            'label' => 'Movies',
            'active' => true,
        ]
    ];
@endphp

<header>
    <nav class="h-100">
        <ul class="d-flex align-items-center justify-content-around h-100 p-0 m-0">
            @foreach ($links as $link)
                <li class="list-unstyled">
                    <a href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>