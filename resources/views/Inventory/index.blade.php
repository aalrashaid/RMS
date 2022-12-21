@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Inventory</h1>
            <hr>
            <a href="{{ route('Inventory.create')}}">Create Inventory</a>
            <hr>
        </div>
        <div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Inventory UID</th>
                            <th scope="col">Name Item</th>
                            <th scope="col">Category Item</th>
                            <th scope="col">SKU</th>
                            <th scope="col">Serial Number</th>
                            <th scope="col">Stock Status</th>
                            <th scope="col">Quantity In Stock</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>

                    </tbody>
                </table>
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
