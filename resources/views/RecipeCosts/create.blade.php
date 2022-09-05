@extends('layouts.dashboards')


@section('content')
    <h1>Create Recipe Costs</h1>
    <hr>
    <form name="" id="" action="" method="post">

        @csrf
        {{-- the will be disabled --}}
        <div class="form-floating mb-3">
            <input type="text" name="Recipe_UID" id="Recipe_UID"
                class="form-control @error('Recipe_UID') is-invalid @enderror" value="{{ old('Recipe_UID') }}"
                placeholder="Recipe UID" >
            <label for="Recipe_UID">Recipe UID:</label>
            @error('Recipe_UID')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Recipe_Name" id="Recipe_Name"
                class="form-control @error('Recipe_Name') is-invalid @enderror" value="{{ old('Recipe_Name') }}"
                placeholder="Recipe_Name">
            <label for="Recipe Name">Recipe Name:</label>
            @error('Recipe_Name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Date_At" id="Date_At"
                class="form-control @error('Date_At') is-invalid @enderror" value="{{ old('Date_At') }}"
                placeholder="Date At">
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
            <input type="text" name="Menu_Recipe" id="Menu_Recipe"
                class="form-control @error('Menu_Recipe') is-invalid @enderror" value="{{ old('Menu_Recipe') }}"
                placeholder="Menu_Recipe">
            <label for="Menu_Recipe">Menu Recipe:</label>
            @error('Menu_Recipe')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Food_Cost_Prcentage" id="Food_Cost_Prcentage"
                class="form-control @error('Food_Cost_Prcentage') is-invalid @enderror" value="{{ old('Food_Cost_Prcentage') }}"
                placeholder="Food_Cost_Prcentage">
            <label for="Food_Cost_Prcentage">Food Cost Prcentage:</label>
            @error('Food_Cost_Prcentage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Gross_Profit" id="Gross_Profit"
                class="form-control @error('Gross_Profit') is-invalid @enderror" value="{{ old('Gross_Profit') }}"
                placeholder="Gross_Profit">
            <label for="Gross_Profit">Gross Profit:</label>
            @error('Gross_Profit')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Margin" id="Margin"
                class="form-control @error('Margin') is-invalid @enderror" value="{{ old('Margin') }}"
                placeholder="Margin">
            <label for="Margin">Margin:</label>
            @error('Margin')
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
            <label for="COGS_Prcentage">COGS Prcentage:</label>
            @error('COGS_Prcentage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Yield_Prcentage" id="Yield_Prcentage"
                class="form-control @error('Yield_Prcentage') is-invalid @enderror" value="{{ old('Yield_Prcentage') }}"
                placeholder="Yield_Prcentage">
            <label for="Yield_Prcentage">Yield Prcentage:</label>
            @error('Yield_Prcentage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Ideal_Gross_Selling_Recipe" id="Ideal_Gross_Selling_Recipe"
                class="form-control @error('Ideal_Gross_Selling_Recipe') is-invalid @enderror" value="{{ old('Ideal_Gross_Selling_Recipe') }}"
                placeholder="Ideal_Gross_Selling_Recipe">
            <label for="Ideal_Gross_Selling_Recipe">Ideal_Gross_Selling_Recipe:</label>
            @error('Ideal_Gross_Selling_Recipe')
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
                placeholder="AP Quantity">
            <label for="AP_Quantity">AP Quantity:</label>
            @error('AP_Quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="AP_Recipe_Unit" id="AP_Recipe_Unit"
                class="form-control @error('AP_Recipe_Unit') is-invalid @enderror" value="{{ old('AP_Recipe_Unit') }}"
                placeholder="AP_Recipe_Unit">
            <label for="AP_Recipe_Unit">AP Recipe Unit:</label>
            @error('AP_Recipe_Unit')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="AP_Recipe_Unit_Name" id="AP_Recipe_Unit_Name"
                class="form-control @error('AP_Recipe_Unit_Name') is-invalid @enderror" value="{{ old('AP_Recipe_Unit_Name') }}"
                placeholder="AP Recipe Unit Name">
            <label for="AP_Recipe_Unit_Name">AP Recipe Unit Name:</label>
            @error('AP_Recipe_Unit_Name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="AP_Unit_Cost" id="AP_Unit_Cost"
                class="form-control @error('AP_Unit_Cost') is-invalid @enderror" value="{{ old('AP_Unit_Cost') }}"
                placeholder="AP Unit Costt">
            <label for="AP_Unit_Cost">AP Unit Cost:</label>
            @error('AP_Unit_Cost')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="EP_Recipe_Unit" id="EP_Recipe_Unit"
                class="form-control @error('EP_Recipe_Unit') is-invalid @enderror" value="{{ old('EP_Recipe_Unit') }}"
                placeholder="EP Recipe Unit">
            <label for="EP_Recipe_Unit">EP Recipe Unit:</label>
            @error('EP_Recipe_Unit')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="EP_Recipe_Unit_Name" id="EP_Recipe_Unit_Name"
                class="form-control @error('EP_Recipe_Unit_Name') is-invalid @enderror" value="{{ old('EP_Recipe_Unit_Name') }}"
                placeholder="EP Recipe Unit Name">
            <label for="EP_Recipe_Unit_Name">EP Recipe Unit Name:</label>
            @error('EP_Recipe_Unit_Name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="EP_Unit_Cost" id="EP_Unit_Cost"
                class="form-control @error('EP_Unit_Cost') is-invalid @enderror" value="{{ old('EP_Unit_Cost') }}"
                placeholder="EP_Unit_Cost">
            <label for="EP_Unit_Cost">EP Unit Cost:</label>
            @error('EP_Unit_Cost')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="EP_Yield_Percentage" id="EP_Yield_Percentage"
                class="form-control @error('EP_Yield_Percentage') is-invalid @enderror" value="{{ old('EP_Yield_Percentage') }}"
                placeholder="EP_Yield_Percentage">
            <label for="EP_Yield_Percentage">EP Yield Percentage:</label>
            @error('EP_Yield_Percentage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Extension" id="Extension"
                class="form-control @error('Extension') is-invalid @enderror" value="{{ old('Extension') }}"
                placeholder="Extension">
            <label for="Extension">Extension:</label>
            @error('Extension')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Total_Extension" id="Total_Extension"
                class="form-control @error('Total_Extension') is-invalid @enderror" value="{{ old('Total_Extension') }}"
                placeholder="Total_Extension">
            <label for="Total_Extension">Total Extension:</label>
            @error('Total_Extension')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="reset" value="reset" class="btn btn-danger mb-3">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark mb-3">Submit</button>
    </form>
@endsection
