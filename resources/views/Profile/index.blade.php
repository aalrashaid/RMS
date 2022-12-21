@extends('layouts.dashboards')


@section('content')
    <h1>Profile Setting</h1>
    <hr>
    <a href="{{ route('Profile.create') }}"> Setting</a>
    <hr>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Email Notifilion</label>
    </div>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Notifilion</label>
    </div>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Reports</label>
    </div>

    <div>
        <label class="form-check-label" for="Countries">
            Country
        </label>
        <select name="Countries" id="Countries" class="form-select form-select-lg mb-3"
            aria-label=".form-select-lg Countries">
            <option selected>Open this select menu</option>
            @foreach ($data['Countries'] as $Country)
                <option value="{{ $Country->id }}">{{ $Country->Name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="form-check-label" for="Languages">
            Languages
        </label>
        <select name="Languages" id="Languages" class="form-select form-select-lg mb-3"
            aria-label=".form-select-lg Languages">
            <option selected>Open this select menu</option>
            @foreach ($data['Languages'] as $Language)
                <option value="{{ $Language->Id }}">{{ $Language->Name }}</option>
            @endforeach

        </select>
    </div>

    <div>
        <label class="form-check-label" for="Currency">
            Currency
        </label>
        <select name="Currency" id="Currency" class="form-select form-select-lg mb-3"
            aria-label=".form-select-lg Currency">
            <option selected>Open this select menu</option>
            @foreach ($data['Currency'] as $Currency)
                <option value="{{ $Currency->Id }}">{{ $Currency->Currency }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="form-check-label" for="UnitsOfMeasure">
            Units Of Measure
        </label>
        <select name="UnitsOfMeasure" id="UnitsOfMeasure" class="form-select form-select-lg mb-3"
            aria-label=".form-select-lg UnitsOfMeasure">
            <option selected>Open this select menu</option>
            @foreach ($data['UnitsOfMeasure'] as $Unit)
                <option value="{{ $Unit->Id }}">{{ $Unit->Region }}</option>
            @endforeach
        </select>
    </div>

    <hr>

@endsection
