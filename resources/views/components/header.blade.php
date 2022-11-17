<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">{{ config('app.name', 'RMS') }}</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('faq') }}" class="nav-link">FAQs</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
        </ul>
 

    </header>


</div>
