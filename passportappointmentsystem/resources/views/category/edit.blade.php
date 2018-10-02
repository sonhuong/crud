@extends('layout.master')
@section('content')
<div class="container">
    <h2>Sửa danh mục</h2><br  />
    <form method="post" action="{{action('CategoryController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="Name">Tên danh mục</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="brief">Mô tả</label>
                <input type="text" class="form-control" name="brief" value="{{$category->brief}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection