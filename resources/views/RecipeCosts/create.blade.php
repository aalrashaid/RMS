@extends('layouts.dashboards')


@section('content')
    <h1>Create Recipe Costs</h1>
    <hr>
    <form name="" id="" action="" method="post">

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
            <input type="text" name="Recipe_Name" id="Recipe_Name"
                class="form-control @error('Recipe_Name') is-invalid @enderror" value="{{ old('Recipe_Name') }}"
                placeholder="Recipe_Name">
            <label for="Recipe_Name">Recipe Name:</label>
            @error('Recipe_Name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Date_At" id="Date_At"
                class="form-control @error('Date_At') is-invalid @enderror" value="{{ old('Date_At') }}"
                placeholder="Date_At">
            <label for="Date_At">Date At:</label>
            @error('Date_At')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Patch" id="Patch"
                class="form-control @error('Patch') is-invalid @enderror" value="{{ old('Patch') }}"
                placeholder="Patch">
            <label for="Patch">Patch:</label>
            @error('Patch')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Patch" id="Patch"
                class="form-control @error('Patch') is-invalid @enderror" value="{{ old('Patch') }}"
                placeholder="Patch">
            <label for="Patch">Patch:</label>
            @error('Patch')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Serves" id="Serves"
                class="form-control @error('Serves') is-invalid @enderror" value="{{ old('Serves') }}"
                placeholder="Serves">
            <label for="Serves">Serves:</label>
            @error('Serves')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Menu_Price" id="Menu_Price"
                class="form-control @error('Menu_Price') is-invalid @enderror" value="{{ old('Menu_Price') }}"
                placeholder="Menu_Price">
            <label for="Menu_Price">Menu_Price:</label>
            @error('Menu_Price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Food_Cost_Prcentage" id="Food_Cost_Prcentage"
                class="form-control @error('Food_Cost_Prcentage') is-invalid @enderror" value="{{ old('Food_Cost_Prcentage') }}"
                placeholder="Food_Cost_Prcentage">
            <label for="Food_Cost_Prcentage">Food_Cost_Prcentage:</label>
            @error('Food_Cost_Prcentage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Gross_Profit" id="Gross_Profit"
                class="form-control @error('Gross_Profit') is-invalid @enderror" value="{{ old('Gross_Profit') }}"
                placeholder="Gross_Profit">
            <label for="Gross_Profit">Gross_Profit:</label>
            @error('Gross_Profit')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="COGS" id="COGS"
                class="form-control @error('COGS') is-invalid @enderror" value="{{ old('COGS') }}"
                placeholder="COGS">
            <label for="COGS">COGS:</label>
            @error('COGS')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="COGS_Prcentage" id="COGS_Prcentage"
                class="form-control @error('COGS_Prcentage') is-invalid @enderror" value="{{ old('COGS_Prcentage') }}"
                placeholder="COGS_Prcentage">
            <label for="COGS_Prcentage">COGS_Prcentage:</label>
            @error('COGS_Prcentage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Yield_Prcentage" id="Yield_Prcentage"
                class="form-control @error('Yield_Prcentage') is-invalid @enderror" value="{{ old('Yield_Prcentage') }}"
                placeholder="Yield_Prcentage">
            <label for="Yield_Prcentage">Yield_Prcentage:</label>
            @error('Yield_Prcentage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Ideal_Gross_Selling_Price" id="Ideal_Gross_Selling_Price"
                class="form-control @error('Ideal_Gross_Selling_Price') is-invalid @enderror" value="{{ old('Ideal_Gross_Selling_Price') }}"
                placeholder="Ideal_Gross_Selling_Price">
            <label for="Ideal_Gross_Selling_Price">Ideal_Gross_Selling_Price:</label>
            @error('Ideal_Gross_Selling_Price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="reset" value="reset" class="btn btn-danger mb-3">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>

    </form>
    <hr>
    <h1>Recipe Costs</h1>
    <button type="submit" value="Submit" class="btn btn-dark mb-3">Add Costing</button>
    <hr>
    <form name="" id="" action="" method="post">

        @csrf

        <div class="form-floating mb-3">
            <input type="text" name="Ingredients" id="Ingredients"
                class="form-control @error('Ingredients') is-invalid @enderror" value="{{ old('Ingredients') }}"
                placeholder="Ingredients">
            <label for="Ingredients">Ingredients:</label>
            @error('Ingredients')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="AP_Quantity" id="AP_Quantity"
                class="form-control @error('AP_Quantity') is-invalid @enderror" value="{{ old('AP_Quantity') }}"
                placeholder="AP_Quantity">
            <label for="Ingredients">AP_Quantity:</label>
            @error('AP_Quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="AP_Recipe_Unit" id="AP_Recipe_Unit"
                class="form-control @error('AP_Recipe_Unit') is-invalid @enderror" value="{{ old('AP_Recipe_Unit') }}"
                placeholder="AP_Recipe_Unit">
            <label for="AP_Recipe_Unit">AP_Recipe_Unit:</label>
            @error('AP_Recipe_Unit')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="AP_Unit_Cost" id="AP_Unit_Cost"
                class="form-control @error('AP_Unit_Cost') is-invalid @enderror" value="{{ old('AP_Unit_Cost') }}"
                placeholder="AP_Unit_Cost">
            <label for="AP_Unit_Cost">AP_Unit_Cost:</label>
            @error('AP_Unit_Cost')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="EP_Recipe_Unit" id="EP_Recipe_Unit"
                class="form-control @error('EP_Recipe_Unit') is-invalid @enderror" value="{{ old('EP_Recipe_Unit') }}"
                placeholder="EP_Recipe_Unit">
            <label for="EP_Recipe_Unit">EP_Recipe_Unit:</label>
            @error('EP_Recipe_Unit')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="EP_Unit_Cost" id="EP_Unit_Cost"
                class="form-control @error('EP_Unit_Cost') is-invalid @enderror" value="{{ old('EP_Unit_Cost') }}"
                placeholder="EP_Unit_Cost">
            <label for="EP_Unit_Cost">EP_Unit_Cost:</label>
            @error('EP_Unit_Cost')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="EP_Yield" id="EP_Yield"
                class="form-control @error('EP_Yield') is-invalid @enderror" value="{{ old('EP_Yield') }}"
                placeholder="EP_Yield">
            <label for="EP_Yield">EP_Yield:</label>
            @error('EP_Yield')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="reset" value="reset" class="btn btn-danger mb-3">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>
    </form>
@endsection
