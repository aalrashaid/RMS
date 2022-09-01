@extends('layouts.dashboards')


@section('content')
    <h1>Create Reciper Card</h1>

    <hr class="mb-3">

    <div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <form action="" method="POST">

        @csrf

        <div class="form-floating mb-3">
            <input type="text" name="Recipe_UID" id="Recipe_UID"
                class="form-control @error('Recipe_UID') is-invalid @enderror" value="{{ old('Recipe_UID') }}"
                placeholder="Recipe_UID" disabled>
            <label for="Recipe_UID">Recipe UID:</label>
            @error('Recipe_UID')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Title" id="Title" class="form-control @error('Title') is-invalid @enderror"
                value="{{ old('Title') }}" placeholder="Title" required>
            <label for="Title">Title:</label>
            @error('Title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Slug" id="Slug" class="form-control @error('Slug') is-invalid @enderror"
                value="{{ old('Slug') }}" placeholder="Slug" required>
            <label for="Slug">Slug:</label>
            @error('Slug')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea name="text" name="Description" id="Description"
                class="form-control @error('Description') is-invalid @enderror" placeholder="Leave a Description here"></textarea>
            <label for="Description">Description:</label>
            @error('Description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Youtube_Video" id="Youtube_Video"
                class="form-control @error('Youtube_Video') is-invalid @enderror" value="{{ old('Youtube_Video') }}"
                placeholder="Youtube_Video" required>
            <label for="Youtube_Video">Youtube Video:</label>
            @error('Youtube_Video')
                <span class="text-danger">{{ $message }}</span>
            @enderror
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
                class="form-control @error('Prep_Time') is-invalid @enderror" value="{{ old('Prep_Time') }}"
                placeholder="Prep_Time" required>
            <label for="Prep_Time">Prep Time:</label>
            @error('Prep_Time')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Cook_Time" id="Cook_Time"
                class="form-control @error('Cook_Time') is-invalid @enderror" value="{{ old('Cook_Time') }}"
                placeholder="Cook_Time" required>
            <label for="Cook_Time">Cook Time:</label>
            @error('Cook_Time')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Time_Total" id="Time_Total"
                class="form-control @error('Time_Total') is-invalid @enderror" value="{{ old('Time_Total') }}"
                placeholder="Time_Total" required>
            <label for="Time_Total">Time Total:</label>
            @error('Time_Total')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Servings" id="Servings"
                class="form-control @error('Servings') is-invalid @enderror" value="{{ old('Servings') }}"
                placeholder="Servings" required>
            <label for="Servings">Servings:</label>
            @error('Servings')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea name="text" name="Directions" id="Directions"
                class="form-control @error('Directions') is-invalid @enderror" placeholder="Leave a Directions here"></textarea>
            <label for="Directions">Directions:</label>
            @error('Directions')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="reset" value="reset" class="btn btn-danger mb-3">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>

    </form>
    <hr class="mb-3">
    <h2> Add Ingredients </h2>
    <div>
        <div>

            <a href="" class="btn btn-dark mb-3 ">Adds Ingredients</a>
            <form id="addIngredients" name="addIngredients" action="" method="post">

                @csrf


                <div class="form-floating mb-3">
                    <input type="text" name="Ingredients_Name" id="Ingredients_Name"
                        class="form-control @error('Ingredients_Name') is-invalid @enderror"
                        value="{{ old('Ingredients_Name') }}" placeholder="Ingredients_Name" required>
                    <label for="Ingredients_Name">Ingredients Name:</label>
                    @error('Ingredients_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Servings" id="Servings"
                        class="form-control @error('Ingredients_Unit') is-invalid @enderror"
                        value="{{ old('Ingredients_Unit') }}" placeholder="Ingredients_Unit" required>
                    <label for="Ingredients_Unit">Ingredients Unit:</label>
                    @error('Ingredients_Unit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Ingredients_Unit_Name" id="Ingredients_Unit_Name"
                        class="form-control @error('Ingredients_Unit_Name') is-invalid @enderror"
                        value="{{ old('Ingredients_Unit_Name') }}" placeholder="Ingredients_Unit_Name" required>
                    <label for="Ingredients_Unit_Name">Ingredients Unit Name:</label>
                    @error('Ingredients_Unit_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="reset" value="reset" class="btn btn-danger mb-3">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>

            </form>
        </div>
    </div>

    <hr class="mb-3">
    <h2> Add Nutrition Facts </h2>
    <div>
        <div>
            <button type="submit" value="Submit" class="btn btn-dark mb-3">Adds Nutrition Facts</button>

            <form name="" id="" action="" method="post">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Calories_Serving" id="Calories_Serving"
                        class="form-control @error('Calories_Serving') is-invalid @enderror"
                        value="{{ old('Calories_Serving') }}" placeholder="Calories_Serving" disabled>
                    <label for="Calories_Serving">Calories Serving:</label>
                    @error('Calories_Serving')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Carbs_Serving" id="Carbs_Serving"
                        class="form-control @error('Carbs_Serving') is-invalid @enderror"
                        value="{{ old('Carbs_Serving') }}" placeholder="Carbs_Serving" disabled>
                    <label for="Carbs_Serving">Carbs Serving:</label>
                    @error('Carbs_Serving')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Protein_Serving" id="Protein_Serving"
                        class="form-control @error('Protein_Serving') is-invalid @enderror"
                        value="{{ old('Protein_Serving') }}" placeholder="Protein_Serving" disabled>
                    <label for="Protein_Serving">Protein Serving:</label>
                    @error('Protein_Serving')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Fat_Serving" id="Fat_Serving"
                        class="form-control @error('Fat_Serving') is-invalid @enderror" value="{{ old('Fat_Serving') }}"
                        placeholder="Fat Serving Automatic" aria-label="Disabled input example" disabled>
                    <label for="Fat_Serving">Fat Serving:</label>
                    @error('Fat_Serving')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Ingredients_Name" id="Ingredients_Name"
                        class="form-control @error('Ingredients_Name') is-invalid @enderror"
                        value="{{ old('Ingredients_Name') }}" placeholder="Ingredients_Name" required>
                    <label for="Ingredients_Name">Ingredients Name:</label>
                    @error('Ingredients_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Calories_Unit" id="Calories_Unit"
                        class="form-control @error('Calories_Unit') is-invalid @enderror"
                        value="{{ old('Calories_Unit') }}" placeholder="Calories_Unit" required>
                    <label for="Calories_Unit">Calories Unit:</label>
                    @error('Calories_Unit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Calories_Unit_Name" id="Calories_Unit_Name"
                        class="form-control @error('Calories_Unit_Name') is-invalid @enderror"
                        value="{{ old('Calories_Unit_Name') }}" placeholder="Calories_Unit_Name" required>
                    <label for="Calories_Unit_Name">Calories Unit Name:</label>
                    @error('Calories_Unit_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Carbs_Unit" id="Carbs_Unit"
                        class="form-control @error('Carbs_Unit') is-invalid @enderror" value="{{ old('Carbs_Unit') }}"
                        placeholder="Carbs_Unit" required>
                    <label for="Carbs_Unit">Carbs Unit:</label>
                    @error('Carbs_Unit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Carbs_Unit_Name" id="Carbs_Unit_Name"
                        class="form-control @error('Carbs_Unit_Name') is-invalid @enderror"
                        value="{{ old('Carbs_Unit_Name') }}" placeholder="Carbs_Unit_Name" required>
                    <label for="Carbs_Unit_Name">Carbs Unit Name:</label>
                    @error('Carbs_Unit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Protein_Unit" id="Protein_Unit"
                        class="form-control @error('Protein_Unit') is-invalid @enderror"
                        value="{{ old('Protein_Unit') }}" placeholder="Protein_Unit" required>
                    <label for="Protein_Unit">Protein Unit:</label>
                    @error('Protein_Unit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Protein_Unit_Name" id="Protein_Unit_Name"
                        class="form-control @error('Protein_Unit_Name') is-invalid @enderror"
                        value="{{ old('Protein_Unit_Name') }}" placeholder="Protein_Unit_Name" required>
                    <label for="Protein_Unit_Name">Protein Unit Name:</label>
                    @error('Protein_Unit_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Fat_Unit" id="Fat_Unit"
                        class="form-control @error('Fat_Unit') is-invalid @enderror" value="{{ old('Fat_Unit') }}"
                        placeholder="Fat_Unit" required>
                    <label for="Fat_Unit">Fat Unit:</label>
                    @error('Fat_Unit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Fat_Unit_Name" id="Fat_Unit_Name"
                        class="form-control @error('Fat_Unit_Name') is-invalid @enderror"
                        value="{{ old('Fat_Unit_Name') }}" placeholder="Fat_Unit_Name" required>
                    <label for="Fat_Unit_Name">Fat Unit Name:</label>
                    @error('Fat_Unit_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="reset" value="reset" class="btn btn-danger mb-3">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>

            </form>
        </div>
    </div>
@endsection
