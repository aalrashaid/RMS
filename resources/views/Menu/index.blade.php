@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Menu's</h1>
            <hr>
            <a href="{{ route('Menu.create') }}">Create</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <tr>
                        <th scope="row">1</th>
                        <td>Name</td>
                        <td>Slug</td>
                        <td>Description</td>
                        <td>Price</td>
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
@endsection
