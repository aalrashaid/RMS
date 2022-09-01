@extends('layouts.dashboards')


@section('content')
    <h1>Inventory </h1>
    <a href="{{ route('Inventory.create')}}">Create</a>
    <hr class="">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Inventory UID</th>
                <th scope="col">Name Item</th>
                <th scope="col">SKU</th>
                <th scope="col">Category Item</th>
                <th scope="col">Stock Status</th>
                <th scope="col">Inventory Value</th>
                <th scope="col">Quantity In Stock</th>
                <th scope="col">Reorder Level</th>
                <th scope="col">Reorder Time_In_Days</th>
                <th scope="col">Quantity In_Reorder</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                {{-- @for ($i = 0; $i < $max; $i++) --}}
                <th scope="row">{{-- {{ $i }} --}} 1</th>
                {{-- @endfor --}}
                <td>Inventory UID</td>
                <td>Name Item</td>
                <td>SKU</td>
                <td>Category Item</td>
                <td>Stock Status</td>
                <td>Inventory Value</td>
                <td>Quantity In Stock</td>
                <td>Reorder Level</td>
                <td>Reorder Time In Days</td>
                <td>Quantity In Reorder</td>
            </tr>
        </tbody>
    </table>
    <div>
        {{-- Max Show 25 in Cell in Pages --}}
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
