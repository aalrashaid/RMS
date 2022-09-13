@extends('layouts.dashboards')


@section('content')
    <div>
        <div>

            <h1>Create Recipe Card</h1>

            <hr>

            <form action="" method="post">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Title" id="Title"
                        class="form-control @error('Title') is-invalid @enderror" placeholder="Title"
                        value="{{ old('Title') }}" autocomplete="on" required>
                    <label for="Title">Title</label>
                    @error('Title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Slug" id="Slug"
                        class="form-control @error('Slug') is-invalid @enderror" placeholder="Slug"
                        value="{{ old('Slug') }}" autocomplete="on" required>
                    <label for="Slug">Slug</label>
                    @error('Slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea name="Description" id="Description" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">The Thumbnail uplaod</label>
                    <input class="form-control form-control-lg @error('Thumbnail_Id') is-invalid @enderror" type="file"
                        name="Thumbnail_Id" id="Thumbnail_Id">
                    @error('Thumbnail_Id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Youtube_Video" class="form-label">Youtube Video</label>
                    <textarea name="Youtube_Video" id="Youtube_Video" class="form-control" rows="3"></textarea>
                </div>

                {{-- The Loads files Array Json cooking Method --}}
                <select name="Recipe_Method" id="Recipe_Method" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">Dry heat</option>
                    <option value="2">Medium of fat or oil</option>
                    <option value="3">Medium of liquids</option>
                </select>

                <select name="Difficulty" id="Difficulty" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">Level 1 (easiest)</option>
                    <option value="2">Level 2 (Very easy)</option>
                    <option value="3">Level 3 (Average)</option>
                    <option value="4">Level 4 (Above-Average) </option>
                    <option value="5">Level 5 (Difficult)</option>
                </select>

                <div class="form-floating mb-3">
                    <input type="text" name="Prep_Time" id="Prep_Time"
                        class="form-control @error('Prep_Time') is-invalid @enderror" placeholder="Prep_Time"
                        value="{{ old('Prep_Time') }}" autocomplete="on" required>
                    <label for="Prep_Time">Prep Time</label>
                    @error('Prep_Time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Cook_Time" id="Cook_Time"
                        class="form-control @error('Cook_Time') is-invalid @enderror" placeholder="Cook_Time"
                        value="{{ old('Cook_Time') }}" autocomplete="on" required>
                    <label for="Cook_Time">Cook Time</label>
                    @error('Cook_Time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Serves" id="Serves"
                        class="form-control @error('Serves') is-invalid @enderror" placeholder="Serves"
                        value="{{ old('Serves') }}" autocomplete="on" required>
                    <label for="Serves">Serves</label>
                    @error('Serves')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Directions" class="form-label">Directions</label>
                    <textarea name="Directions" id="Directions" class="form-control" rows="3"></textarea>
                </div>

                <button type="reset" value="reset" class="btn btn-danger mb-3">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>
            </form>

            <hr>

            <h1>Create A Ingredients</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Ingredients
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Ingredients</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <form action="" method="post">

                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" name="Ingredients_Name" id="Ingredients_Name"
                                        class="form-control @error('Ingredients_Name') is-invalid @enderror"
                                        placeholder="Ingredients_Name" value="{{ old('Ingredients_Name') }}"
                                        autocomplete="on" required>
                                    <label for="Ingredients_Name">Ingredients Name</label>
                                    @error('Ingredients_Name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="Ingredients_Unit" id="Ingredients_Unit"
                                        class="form-control @error('Ingredients_Unit') is-invalid @enderror"
                                        placeholder="Ingredients_Unit" value="{{ old('Ingredients_Unit') }}"
                                        autocomplete="on" required>
                                    <label for="Ingredients_Unit">Ingredients Unit</label>
                                    @error('Ingredients_Unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <select name="" id="" class="form-select form-select-lg mb-3"
                                    aria-label=".form-select-lg example">

                                    <option selected>Open this select menu</option>
                                    <option value="1">U.S.</option>
                                    <option value="2">British</option>

                                </select>

                                <select name="" id="" class="form-select form-select-lg mb-3"
                                    aria-label=".form-select-lg example">

                                    <option selected>Open this select menu</option>
                                    <option value="1">U.S.</option>
                                    <option value="2">British</option>

                                </select>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-dark">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ingredients Name</th>
                        <th scope="col">Ingredients Unit</th>
                        <th scope="col">Ingredients Unit Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ingredients Name</td>
                        <td>Ingredients Unit</td>
                        <td>Ingredients Unit Name</td>
                    </tr>
                </tbody>
            </table>

            <hr>

            <h1>Create A NutritionFacts</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#NutritionFactsModal">
                Add NutritionFacts
            </button>

            <!-- Modal -->
            <div class="modal fade" id="NutritionFactsModal" tabindex="-1" aria-labelledby="NutritionFactsModal"
                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="NutritionFactsModalLabel">NutritionFacts</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="" method="post">

                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" name="Ingredients_Name" id="Ingredients_Name"
                                        class="form-control @error('Ingredients_Name') is-invalid @enderror"
                                        placeholder="Ingredients_Name" value="{{ old('Ingredients_Name') }}"
                                        autocomplete="on" required>
                                    <label for="Ingredients_Name">Ingredients Name</label>
                                    @error('Ingredients_Name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="Calories_Unit" id="Calories_Unit"
                                        class="form-control @error('Calories_Unit') is-invalid @enderror"
                                        placeholder="Calories_Unit" value="{{ old('Calories_Unit') }}" autocomplete="on"
                                        required>
                                    <label for="Calories_Unit">Calories Unit</label>
                                    @error('Calories_Unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="Carbs_Unit" id="Carbs_Unit"
                                        class="form-control @error('Carbs_Unit') is-invalid @enderror"
                                        placeholder="Carbs_Unit" value="{{ old('Carbs_Unit') }}" autocomplete="on"
                                        required>
                                    <label for="Carbs_Unit">Carbs Unit</label>
                                    @error('Carbs_Unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="Protein_Unit" id="Protein_Unit"
                                        class="form-control @error('Protein_Unit') is-invalid @enderror"
                                        placeholder="Protein_Unit" value="{{ old('Protein_Unit') }}" autocomplete="on"
                                        required>
                                    <label for="Protein_Unit">Protein Unit</label>
                                    @error('Protein_Unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="Fat_Unit" id="Fat_Unit"
                                        class="form-control @error('Fat_Unit') is-invalid @enderror"
                                        placeholder="Fat_Unit" value="{{ old('Fat_Unit') }}" autocomplete="on" required>
                                    <label for="Fat_Unit">
                                        Fat Unit
                                    </label>
                                    @error('Protein_Unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <select name="" id="" class="form-select form-select-lg mb-3"
                                    aria-label=".form-select-lg example">

                                    <option selected>Open this select menu</option>
                                    <option value="1">U.S.</option>
                                    <option value="2">British</option>

                                </select>

                                <select name="" id="" class="form-select form-select-lg mb-3"
                                    aria-label=".form-select-lg example">

                                    <option selected>Open this select menu</option>
                                    <option value="1">U.S.</option>
                                    <option value="2">British</option>

                                </select>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-dark">Save</button>
                        </div>

                    </div>

                </div>

            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Calories Serving</th>
                        <th scope="col">Carbs Serving</th>
                        <th scope="col">Protein Serving</th>
                        <th scope="col">Fat Serving</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Calories Serving</td>
                        <td>Carbs Serving</td>
                        <td>Protein Serving</td>
                        <td>Fat Serving</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
