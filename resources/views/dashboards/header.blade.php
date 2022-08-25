<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <a class="navbar-brand" href="{{ route('dashboard') }}">{{ config('app.name', 'Laravel') }}</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('Brands.index') }}">Brands</a></li>
                        <li><a class="dropdown-item" href="{{ route('Inventory.index') }}">Inventory</a></li>
                        <li><a class="dropdown-item" href="{{ route('Menu.index') }}">Menu</a></li>
                        <li><a class="dropdown-item" href="{{ route('RecipeCard.index') }}">RecipeCard</a></li>
                        <li><a class="dropdown-item" href="{{ route('RecipeCosts.index') }}">RecipeCosts</a></li>
                        <li><a class="dropdown-item" href="{{ route('Supplier.index') }}">Supplier</a></li>
                        <li><a class="dropdown-item" href="{{ route('SupplierItem.index') }}">SupplierItem</a></li>
                    </ul>
                </li>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">log out</a>
                    </li>
                </form>
            </ul>
        </div>
    </div>
</nav>
