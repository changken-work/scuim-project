@extends('layout.admin-main')

@section('title', '簽署車況維護紀錄')

@section('subTitle', "在此可以簽署車況維護紀錄!")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="text-center mb-3">Sign Repair Log</h2>
                <div class="alert alert-warning">
                    <p class="text-center">提醒! 簽署車況維護紀錄(里程數)及平均轉速為不可逆的動作，在簽署前請再三確認簽署對象、里程數及平均轉速是否正確!</p>
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
                            <input type="number" class="form-control" placeholder="Mileages" name="mileages" id="mileages" required data-validation-required-message="Please enter your mileages." required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Average RPM</label>
                            <input type="number" class="form-control" placeholder="Average RPM" name="avg_rpm" id="avg_rpm" required data-validation-required-message="Please enter your average rpm." required>
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

@section('custom-js')
    <script>
        const getLastRepairLog = async id => {
            const res = await axios.get(`/api/getlastrepairlog/${id}`);
            return res.data;
        }

        $(function (){
            // page on load
            getLastRepairLog($('#car_id').val()).then(data => {
                $('#mileages').attr('min', data.mileages);
            });

            $("#car_id").change(function (){
                getLastRepairLog(this.value).then(data => {
                    $('#mileages').attr('min', data.mileages);
                });
            });
        });
    </script>
@endsection
