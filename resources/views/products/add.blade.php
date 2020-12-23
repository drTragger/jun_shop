@extends('layouts.default')

@section('content')
    @include('common.errors')
    <form action="{{ route('products.add') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Description</label>

            <div class="col-sm-6">
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="manufacturer" class="col-sm-3 control-label">Manufacturer</label>

            <div class="col-sm-6">
                <input type="text" name="manufacturer" id="manufacturer" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Price</label>

            <div class="col-sm-6">
                <input type="number" step="0.01" name="price" id="price" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="website" class="col-sm-3 control-label">Website</label>

            <div class="col-sm-6">
                <input type="text" name="website" id="website" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add
                </button>
            </div>
        </div>
    </form>
@endsection
