@extends('layout.master')
@section('content')
    <h2>Thêm mới danh mục</h2><br/>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('admin/categories')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="Name">Tên danh mục *</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="brief">Mô tả</label>
                <input type="text" class="form-control" name="brief">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
        </div>
    </form>
@endsection

