@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-lest">
            <h2>Add new product</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong> There wew some problems with your input.
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea name="detail" id="detail" cols="30" rows="10">{{ old('detail') }}</textarea>
            </div>
        </div>
        <div class="col-xs-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection