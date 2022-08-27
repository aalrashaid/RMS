@extends('layouts.dashboards')


@section('content')
    <h1>Create Inventory Item</h1>

    <hr>

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
            <input type="text" name="Name_Item" id="Name_Item" class="form-control @error('Name_Item') is-invalid @enderror"
                value="{{ old('State') }}" value="{{ old('Name_Item') }}" placeholder="Name Item" required>
            <label for="Name_Item">Name Item:</label>
            @error('Name_Item')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="SKU" id="SKU" class="form-control @error('SKU') is-invalid @enderror" value="{{ old('SKU') }}"
                placeholder="SKU" required>
            <label for="SKU">SKU:</label>
            @error('SKU')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Barcode" id="Barcode" class="form-control @error('Barcode') is-invalid @enderror" value="{{ old('Barcode') }}"
                placeholder="Barcode" required>
            <label for="Barcode">Barcode:</label>
            @error('Barcode')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Serial_Number" id="Serial_Number" class="form-control @error('Serial_Number') is-invalid @enderror" value="{{ old('Serial_Number') }}"
                placeholder="Serial_Number" required>
            <label for="Serial_Number">Serial Number:</label>
            @error('Serial_Number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Serial_Number" id="Serial_Number" class="form-control @error('Serial_Number') is-invalid @enderror" value="{{ old('Serial_Number') }}"
                placeholder="Serial_Number" required>
            <label for="Serial_Number">Serial Number:</label>
            @error('Serial_Number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Category_Item" id="Category_Item" class="form-control @error('Category_Item') is-invalid @enderror" value="{{ old('Category_Item') }}"
                placeholder="Category_Item" required>
            <label for="Category_Item">Category Item:</label>
            @error('Category_Item')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Item_Size" id="Item_Size" class="form-control @error('Item_Size') is-invalid @enderror" value="{{ old('Item_Size') }}"
                placeholder="Item_Size" required>
            <label for="Item_Size">Item Size:</label>
            @error('Item_Size')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Unit_Price" id="Unit_Price" class="form-control @error('Unit_Price') is-invalid @enderror" value="{{ old('Unit_Price') }}"
                placeholder="Unit_Price" required>
            <label for="Unit_Price">Unit Price:</label>
            @error('Unit_Price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Quantity_In_Stock" id="Quantity_In_Stock" class="form-control @error('Quantity_In_Stock') is-invalid @enderror" value="{{ old('Quantity_In_Stock') }}"
                placeholder="Quantity_In_Stock" required>
            <label for="Unit_Price">Unit Price:</label>
            @error('Unit_Price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Inventory_Value" id="Inventory_Value" class="form-control @error('Inventory_Value') is-invalid @enderror" value="{{ old('Quantity_In_Stock') }}"
                placeholder="Inventory_Value" required>
            <label for="Inventory_Value">Inventory Value:</label>
            @error('Inventory Value')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Stock_Status" id="Stock_Status" class="form-control @error('Stock_Status') is-invalid @enderror" value="{{ old('Quantity_In_Stock') }}"
                placeholder="Stock Status" required>
            <label for="Stock_Status">Stock Status:</label>
            @error('Stock_Status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Reorder_Level" id="Reorder_Level" class="form-control @error('Reorder_Level') is-invalid @enderror" value="{{ old('Quantity_In_Stock') }}"
                placeholder="Stock Status" required>
            <label for="Reorder_Level">Reorder Level:</label>
            @error('Reorder_Level')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Reorder_Time_In_Days" id="Reorder_Time_In_Days" class="form-control @error('Reorder_Time_In_Days') is-invalid @enderror" value="{{ old('Quantity_In_Stock') }}"
                placeholder="Reorder_Time_In_Days" required>
            <label for="Reorder_Time_In_Days">Reorder_Time_In_Days:</label>
            @error('Reorder_Time_In_Days')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Quantity_In_Reorder" id="Quantity_In_Reorder" class="form-control @error('Quantity_In_Reorder') is-invalid @enderror" value="{{ old('Quantity_In_Stock') }}"
                placeholder="Quantity_In_Reorder" required>
            <label for="Quantity_In_Reorder">Quantity_In_Reorder:</label>
            @error('Quantity_In_Reorder')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <button type="reset" value="reset" class="btn btn-danger">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
