@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Recipe Costs</h1>

            <hr>

            <form action="" method="post">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Recipe_UID" id="Recipe_UID"
                        class="form-control @error('Recipe_UID') is-invalid @enderror" placeholder="Recipe_UID"
                        value="{{ old('Recipe_UID') }}" autocomplete="on" required>
                    <label for="Recipe_UID">Recipe UID:</label>
                    @error('Recipe_UID')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Recipe_Name" id="Recipe_Name"
                        class="form-control @error('Recipe_Name') is-invalid @enderror" placeholder="Recipe_Name"
                        value="{{ old('Recipe_Name') }}" autocomplete="on" required>
                    <label for="Recipe_Name">Recipe Name:</label>
                    @error('Recipe_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Date_At" id="Date_At"
                        class="form-control @error('Date_At') is-invalid @enderror" placeholder="Date_At"
                        value="{{ old('Date_At') }}" autocomplete="on" required>
                    <label for="Date_At">Date At:</label>
                    @error('Date_At')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">The Thumbnail uplaod</label>
                    <input class="form-control form-control-lg @error('Thumbnail_Id') is-invalid @enderror" type="file"
                        name="Thumbnail_Id" id="Thumbnail_Id">
                    @error('Thumbnail_Id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <select name="Category_Id" id="Category_Id" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg">

                    <option selected>Open this select menu</option>

                    @foreach ( $data['Categories'] as $Category )
                        <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
                    @endforeach

                </select>

                <div class="form-floating mb-3">
                    <input type="text" name="Patch" id="Patch"
                        class="form-control @error('Patch') is-invalid @enderror" placeholder="Patch"
                        value="{{ old('Patch') }}" autocomplete="on" required>
                    <label for="Patch">Patch:</label>
                    @error('Patch')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Serves" id="Serves"
                        class="form-control @error('Serves') is-invalid @enderror" placeholder="Serves"
                        value="{{ old('Serves') }}" autocomplete="on" required>
                    <label for="Serves">Serves:</label>
                    @error('Serves')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Menu_Recipe" id="Menu_Recipe"
                        class="form-control @error('Menu_Recipe') is-invalid @enderror" placeholder="Menu_Recipe"
                        value="{{ old('Menu_Recipe') }}" autocomplete="on" required>
                    <label for="Menu_Recipe">Menu Recipe:</label>
                    @error('Menu_Recipe')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Menu_Recipe" id="Menu_Recipe"
                        class="form-control @error('Menu_Recipe') is-invalid @enderror" placeholder="Menu_Recipe"
                        value="{{ old('Menu_Recipe') }}" autocomplete="on" required>
                    <label for="Menu_Recipe">Menu Recipe:</label>
                    @error('Menu_Recipe')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Food_Cost_Prcentage" id="Food_Cost_Prcentage"
                        class="form-control @error('Food_Cost_Prcentage') is-invalid @enderror"
                        placeholder="Food_Cost_Prcentage" value="{{ old('Food_Cost_Prcentage') }}" autocomplete="on"
                        required>
                    <label for="Food_Cost_Prcentage">Food Cost %:</label>
                    @error('Food_Cost_Prcentage')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Gross_Profit" id="Gross_Profit"
                        class="form-control @error('Gross_Profit') is-invalid @enderror" placeholder="Gross_Profit"
                        value="{{ old('Gross_Profit') }}" autocomplete="on" required>
                    <label for="Gross_Profit">Gross Profit:</label>
                    @error('Gross_Profit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Margin" id="Margin"
                        class="form-control @error('Margin') is-invalid @enderror" placeholder="Margin"
                        value="{{ old('Margin') }}" autocomplete="on" required>
                    <label for="Margin">Margin:</label>
                    @error('Margin')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Margin" id="Margin"
                        class="form-control @error('Margin') is-invalid @enderror" placeholder="Margin"
                        value="{{ old('Margin') }}" autocomplete="on" required>
                    <label for="Margin">Margin:</label>
                    @error('Margin')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="COGS" id="COGS"
                        class="form-control @error('COGS') is-invalid @enderror" placeholder="COGS"
                        value="{{ old('COGS') }}" autocomplete="on" required>
                    <label for="COGS">Costs of Goods Sold (COGS):</label>
                    @error('COGS')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="COGS_Prcentage" id="COGS_Prcentage"
                        class="form-control @error('COGS_Prcentage') is-invalid @enderror" placeholder="COGS_Prcentage"
                        value="{{ old('COGS_Prcentage') }}" autocomplete="on" required>
                    <label for="COGS_Prcentage">Costs of Goods Sold (COGS) %:</label>
                    @error('COGS_Prcentage')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Yield_Prcentage" id="Yield_Prcentage"
                        class="form-control @error('Yield_Prcentage') is-invalid @enderror" placeholder="Yield_Prcentage"
                        value="{{ old('Yield_Prcentage') }}" autocomplete="on" required>
                    <label for="Yield_Prcentage">Yield %:</label>
                    @error('Yield_Prcentage')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Ideal_Gross_Selling_Recipe" id="Ideal_Gross_Selling_Recipe"
                        class="form-control @error('Ideal_Gross_Selling_Recipe') is-invalid @enderror"
                        placeholder="Ideal_Gross_Selling_Recipe" value="{{ old('Ideal_Gross_Selling_Recipe') }}"
                        autocomplete="on" required>
                    <label for="Ideal_Gross_Selling_Recipe">Ideal Gross Selling Recipe:</label>
                    @error('Ideal_Gross_Selling_Recipe')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="reset" value="reset" class="btn btn-danger">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark">Save</button>

            </form>
            <hr>
            <h1>Recipe Costs</h1>
            <p>
                Note: The Add Costing Ingredients Auto Calculator It
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add Ingredients
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Costing</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">

                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" name="Ingredients" id="Ingredients"
                                        class="form-control @error('Ingredients') is-invalid @enderror"
                                        placeholder="Ingredients" value="{{ old('Ingredients') }}" autocomplete="on"
                                        required>
                                    <label for="Ingredients">Ingredients:</label>
                                    @error('Ingredients')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="AP_Quantity" id="AP_Quantity"
                                        class="form-control @error('AP_Quantity') is-invalid @enderror"
                                        placeholder="AP_Quantity" value="{{ old('AP_Quantity') }}" autocomplete="on"
                                        required>
                                    <label for="AP_Quantity">As-Purchased Quantity (APQ):</label>
                                    @error('AP_Quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="AP_Recipe_Unit" id="AP_Recipe_Unit"
                                        class="form-control @error('AP_Recipe_Unit') is-invalid @enderror"
                                        placeholder="AP_Recipe_Unit" value="{{ old('AP_Recipe_Unit') }}"
                                        autocomplete="on" required>
                                    <label for="AP_QuaAP_Recipe_Unitntity">As-Purchased (AP) Recipe Unit:</label>
                                    @error('AP_Recipe_Unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="AP_Recipe_Unit_Name" id="AP_Recipe_Unit_Name"
                                        class="form-control @error('AP_Recipe_Unit_Name') is-invalid @enderror"
                                        placeholder="AP_Recipe_Unit_Name" value="{{ old('AP_Recipe_Unit_Name') }}"
                                        autocomplete="on" required>
                                    <label for="AP_Recipe_Unit_Name">As-Purchased (AP) Recipe Unit Name:</label>
                                    @error('AP_Recipe_Unit_Name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="AP_Unit_Cost" id="AP_Unit_Cost"
                                        class="form-control @error('AP_Unit_Cost') is-invalid @enderror"
                                        placeholder="AP_Unit_Cost" value="{{ old('AP_Unit_Cost') }}" autocomplete="on"
                                        required>
                                    <label for="AP_Unit_Cost">As-Purchased (AP) Unit Cost:</label>
                                    @error('AP_Unit_Cost')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="EP_Recipe_Unit" id="EP_Recipe_Unit"
                                        class="form-control @error('EP_Recipe_Unit') is-invalid @enderror"
                                        placeholder="EP_Recipe_Unit" value="{{ old('EP_Recipe_Unit') }}"
                                        autocomplete="on" required>
                                    <label for="EP_Recipe_Unit">As Purchased (EP) Recipe Unit:</label>
                                    @error('EP_Recipe_Unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="EP_Recipe_Unit_Name" id="EP_Recipe_Unit_Name"
                                        class="form-control @error('EP_Recipe_Unit_Name') is-invalid @enderror"
                                        placeholder="EP_Recipe_Unit_Name" value="{{ old('EP_Recipe_Unit_Name') }}"
                                        autocomplete="on" required>
                                    <label for="EP_Recipe_Unit_Name">As Purchased (EP) Recipe Unit Name:</label>
                                    @error('EP_Recipe_Unit_Name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="EP_Unit_Cost" id="EP_Unit_Cost"
                                        class="form-control @error('EP_Unit_Cost') is-invalid @enderror"
                                        placeholder="EP_Unit_Cost" value="{{ old('EP_Unit_Cost') }}" autocomplete="on"
                                        required>
                                    <label for="EP_Unit_Cost">As Purchased (EP) Unit Cost</label>
                                    @error('EP_Unit_Cost')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="EP_Yield_Percentage" id="EP_Yield_Percentage"
                                        class="form-control @error('EP_Yield_Percentage') is-invalid @enderror"
                                        placeholder="EP_Yield_Percentage" value="{{ old('EP_Yield_Percentage') }}"
                                        autocomplete="on" required>
                                    <label for="EP_Yield_Percentage">As Purchased (EP) Yield %</label>
                                    @error('EP_Yield_Percentage')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="Extension" id="Extension"
                                        class="form-control @error('Extension') is-invalid @enderror"
                                        placeholder="Extension" value="{{ old('Extension') }}" autocomplete="on"
                                        required>
                                    <label for="Extension">As Purchased (EP) Extension</label>
                                    @error('Extension')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-dark">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ingredients</th>
                        <th scope="col">As-Purchased (AP) Quantity (APQ)</th>
                        <th scope="col">As-Purchased (AP) Recipe Unit</th>
                        <th scope="col">As-Purchased (AP) Recipe Unit</th>
                        <th scope="col">As-Purchased (AP) Recipe Unit Name</th>
                        <th scope="col">As-Purchased (AP) Unit Cost</th>
                        <th scope="col">As Purchased (EP) Recipe Unit</th>
                        <th scope="col">As Purchased (EP) Recipe Unit Name</th>
                        <th scope="col">As Purchased (EP) Unit Cost</th>
                        <th scope="col">As Purchased (EP) Yield Percentage</th>
                        <th scope="col">Extension</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
                <tfoot>
                    <td scope="col">Total Extension</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>@mdo</td>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
