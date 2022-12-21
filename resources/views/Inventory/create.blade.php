@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Create Item</h1>
            <hr>
            <form action="" method="post">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Inventory_UID" id="Inventory_UID"
                        class="form-control @error('Inventory_UID') is-invalid @enderror" placeholder="Inventory_UID"
                        value="{{ old('Inventory_UID') }}" >
                    <label for="Inventory_UID">Inventory UID:</label>
                    @error('Inventory_UID')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Name_Item" id="Name_Item"
                        class="form-control @error('Name_Item') is-invalid @enderror" placeholder="Name_Item"
                        value="{{ old('Name_Item') }}" >
                    <label for="Name_Item">Name Item:</label>
                    @error('Name_Item')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="SKU" id="SKU"
                        class="form-control @error('SKU') is-invalid @enderror" placeholder="SKU"
                        value="{{ old('SKU') }}" >
                    <label for="SKU">SKU:</label>
                    @error('SKU')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Barcode" id="Barcode"
                        class="form-control @error('Barcode') is-invalid @enderror" placeholder="Barcode"
                        value="{{ old('Barcode') }}" >
                    <label for="Barcode">Barcode:</label>
                    @error('Barcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Barcode" id="Barcode"
                        class="form-control @error('Barcode') is-invalid @enderror" placeholder="Barcode"
                        value="{{ old('Barcode') }}" >
                    <label for="Barcode">Barcode:</label>
                    @error('Barcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Serial_Number" id="Serial_Number"
                        class="form-control @error('Serial_Number') is-invalid @enderror" placeholder="Serial_Number"
                        value="{{ old('Serial_Number') }}" >
                    <label for="Serial_Number">Serial Number:</label>
                    @error('Serial_Number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Category_Item" id="Category_Item"
                        class="form-control @error('Category_Item') is-invalid @enderror" placeholder="Category_Item"
                        value="{{ old('Category_Item') }}" >
                    <label for="Category_Item">Category:</label>
                    @error('Category_Item')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Item_Size" id="Item_Size"
                        class="form-control @error('Item_Size') is-invalid @enderror" placeholder="Item_Size"
                        value="{{ old('Item_Size') }}" >
                    <label for="Item_Size">Item Size:</label>
                    @error('Item_Size')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Item_Unit_Price" id="Item_Unit_Price"
                        class="form-control @error('Item_Unit_Price') is-invalid @enderror" placeholder="Item_Unit_Price"
                        value="{{ old('Item_Unit_Price') }}" >
                    <label for="Item_Unit_Price">Item Unit Price:</label>
                    @error('Item_Unit_Price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Item_Unit_Price" id="Item_Unit_Price"
                        class="form-control @error('Item_Unit_Price') is-invalid @enderror" placeholder="Item_Unit_Price"
                        value="{{ old('Item_Unit_Price') }}" >
                    <label for="Item_Unit_Price">Item Unit Price:</label>
                    @error('Item_Unit_Price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Quantity_In_Stock" id="Quantity_In_Stock"
                        class="form-control @error('Quantity_In_Stock') is-invalid @enderror" placeholder="Quantity_In_Stock"
                        value="{{ old('Quantity_In_Stock') }}" >
                    <label for="Quantity_In_Stock">Quantity In Stock:</label>
                    @error('Quantity_In_Stock')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Inventory_Value" id="Inventory_Value"
                        class="form-control @error('Inventory_Value') is-invalid @enderror" placeholder="Inventory_Value"
                        value="{{ old('Inventory_Value') }}" >
                    <label for="Inventory_Value">Inventory Value:</label>
                    @error('Inventory_Value')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Stock_Status" id="Stock_Status"
                        class="form-control @error('Stock_Status') is-invalid @enderror" placeholder="Stock_Status"
                        value="{{ old('Stock_Status') }}" >
                    <label for="Stock_Status">Stock Status:</label>
                    @error('Stock_Status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Reorder_Level" id="Reorder_Level"
                        class="form-control @error('Reorder_Level') is-invalid @enderror" placeholder="Reorder_Level"
                        value="{{ old('Reorder_Level') }}" >
                    <label for="Reorder_Level">Reorder Level:</label>
                    @error('Reorder_Level')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Reorder_Time_In_Days" id="Reorder_Time_In_Days"
                        class="form-control @error('Reorder_Time_In_Days') is-invalid @enderror" placeholder="Reorder_Time_In_Days"
                        value="{{ old('Reorder_Time_In_Days') }}" >
                    <label for="Reorder_Time_In_Days">Reorder Time In Days:</label>
                    @error('Reorder_Time_In_Days')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Quantity_In_Reorder" id="Quantity_In_Reorder"
                        class="form-control @error('Quantity_In_Reorder') is-invalid @enderror" placeholder="Quantity_In_Reorder"
                        value="{{ old('Quantity_In_Reorder') }}" >
                    <label for="Quantity_In_Reorder">Quantity In Reorder:</label>
                    @error('Quantity_In_Reorder')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="reset" value="reset" class="btn btn-danger">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark">Submit</button>

            </form>
        </div>
    </div>
@endsection
