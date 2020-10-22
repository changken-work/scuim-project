@extends('layout.admin-main')

@section('title', '簽署車況維護紀錄')

@section('subTitle', "在此可以簽署車況維護紀錄!")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="text-center mb-3">Sign Repair Log</h2>
                <div class="alert alert-warning">
                    <p class="text-center">提醒! 簽署車況維護紀錄(里程數)為不可逆的動作，在簽署前請再三確認簽署對象及里程數是否正確!</p>
                </div>
                <form name="signRepairLogsForm" id="signRepairLogsForm" method="post" action="{{ route('admin.signRepairLogsc') }}">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Sign Object</label>
                            <select name="car_id" id="car_id" class="custom-select">
                                @foreach($cars as $car)
                                    <option value="{{ $car->id }}">{{ $car->id }} {{ $car->name }}</option>
                                @endforeach
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Mileages</label>
                            <input type="number" class="form-control" placeholder="Mileages" name="mileages" id="mileages" required data-validation-required-message="Please enter your mileages.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="signRepairLogsBtn">Sign</button>
                </form>
            </div>
        </div>
    </div>
@endsection
