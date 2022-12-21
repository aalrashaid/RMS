@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Recipe Costs</h1>
            <hr>
            <a href="{{ route('RecipeCosts.create') }}">Recipe Costs</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Recipe UID</th>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Menu Recipe</th>
                        <th scope="col">Date At</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <tr>
                        <th scope="row">1</th>
                        <td>Recipe UID</td>
                        <td>Recipe Name</td>
                        <td>Menu Recipe</td>
                        <td>Date At</td>
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
