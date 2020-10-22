@extends('layout.admin-main')

@section('title', '新增一筆新的車款資料')

@section('subTitle', "在這邊可以輕易增加一台新的車款!")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2>新增車款</h2>
                <form name="addNewCarForm" id="addNewCarForm" method="post" action="{{ route('car.store') }}">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Image Url</label>
                            <input type="url" class="form-control" placeholder="Image Url" name="image_url" id="image_url" required data-validation-required-message="Please enter your Image Url.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Brand</label>
                            <input type="text" class="form-control" placeholder="Brand" name="brand" id="brand" required data-validation-required-message="Please enter your brand.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Model</label>
                            <input type="text" class="form-control" placeholder="Model" name="model" id="model" required data-validation-required-message="Please enter your model.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="NT$ Price" name="price" id="price" required data-validation-required-message="Please enter your price.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Age</label>
                            <input type="text" class="form-control" placeholder="Age 年" name="age" id="age" required data-validation-required-message="Please enter your age.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="addNewCarBtn">Add New Car</button>
                </form>
            </div>
        </div>
    </div>
@endsection
