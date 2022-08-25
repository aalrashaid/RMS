<!-- resources/views/child.blade.php -->

@extends('layouts.dashboards')


@section('content')
    <div class="container-fluid">
        <ul>
            <li><a href="{{ route('Brands.index') }}">Brands</a></li>
            <li><a href="{{ route('Inventory.index') }}">Inventory</a></li>
            <li><a href="{{ route('Menu.index') }}">Menu</a></li>
            <li><a href="{{ route('RecipeCard.index') }}">RecipeCard</a></li>
            <li><a href="{{ route('RecipeCosts.index') }}">RecipeCosts</a></li>
            <li><a href="{{ route('Supplier.index') }}">Supplier</a></li>
            <li><a href="{{ route('SupplierItem.index') }}">SupplierItem</a></li>

        </ul>

    </div>
@endsection
