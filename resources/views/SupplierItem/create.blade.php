@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Create Item</h1>
            <hr>
            <form action="" method="post">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Item_UID" id="Item_UID"
                        class="form-control @error('Item_UID') is-invalid @enderror" placeholder="Item_UID"
                        value="{{ old('Item_UID') }}" autocomplete="on" required>
                    <label for="Item_UID">Item UID:</label>
                    @error('Item_UID')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Item_Name" id="Item_Name"
                        class="form-control @error('Item_Name') is-invalid @enderror" placeholder="Item_Name"
                        value="{{ old('Item_Name') }}" autocomplete="on" required>
                    <label for="Item_Name">Item Name:</label>
                    @error('Item_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control @error('Item_Description') is-invalid @enderror" name="Item_Description" id="Item_Description"
                        placeholder="Leave a Description here" style="height: 100px">{!! old('Item_Description') !!}</textarea>
                    <label for="Item_Description">Item Description:</label>
                    @error('Item_Description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Category_Item" id="Category_Item"
                        class="form-control @error('Category_Item') is-invalid @enderror" placeholder="Category_Item"
                        value="{{ old('Category_Item') }}" autocomplete="on" required>
                    <label for="Category_Item">Category_Item:</label>
                    @error('Category_Item')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <select class="form-select form-select-lg @error('Countries_id') is-invalid @enderror"
                        name="Countries_id" id="Countries_id" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        @foreach ($data['Suppliers'] as $Supplier)
                            <option value="{{ $Supplier->id }}">{{ $Supplier->Name }}</option>
                        @endforeach
                    </select>
                    @error('Countries_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Item_Size" id="Item_Size"
                        class="form-control @error('Item_Size') is-invalid @enderror" placeholder="Item_Size"
                        value="{{ old('Item_Size') }}" autocomplete="on" required>
                    <label for="Item_Size">Item_Size:</label>
                    @error('Item_Size')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="SKU" id="SKU"
                        class="form-control @error('SKU') is-invalid @enderror" placeholder="SKU"
                        value="{{ old('SKU') }}" autocomplete="on" required>
                    <label for="SKU">SKU:</label>
                    @error('SKU')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="UPC" id="UPC"
                        class="form-control @error('UPC') is-invalid @enderror" placeholder="UPC"
                        value="{{ old('UPC') }}" autocomplete="on" required>
                    <label for="UPC">UPC:</label>
                    @error('UPC')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Barcode" id="Barcode"
                        class="form-control @error('Barcode') is-invalid @enderror" placeholder="Barcode"
                        value="{{ old('Barcode') }}" autocomplete="on" required>
                    <label for="Barcode">Barcode:</label>
                    @error('Barcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Serial_Number" id="Serial_Number"
                        class="form-control @error('Serial_Number') is-invalid @enderror" placeholder="Serial_Number"
                        value="{{ old('Serial_Number') }}" autocomplete="on" required>
                    <label for="Serial_Number">Serial Number:</label>
                    @error('Serial_Number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Item_Unit_Price" id="Item_Unit_Price"
                        class="form-control @error('Item_Unit_Price') is-invalid @enderror" placeholder="Item_Unit_Price"
                        value="{{ old('Item_Unit_Price') }}" autocomplete="on" required>
                    <label for="Item_Unit_Price">Item Unit Price:</label>
                    @error('Item_Unit_Price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="reset" value="reset" class="btn btn-danger">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark">Submit</button>

            </form>
        </div>
    </div>
@endsection
