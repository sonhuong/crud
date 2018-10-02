@extends('layout.master')
@section('content')
    <h2>Thêm mới sản phẩm</h2><br/>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('admin/products')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="Name">Tên sản phẩm *</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="Email">Giá bán</label>
                <input type="text" class="form-control" name="price">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="Number">Mô tả</label>
                <input type="text" class="form-control" name="description">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <input type="file" name="imagePath">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <strong>Date : </strong>
                <input class="date form-control"  type="text" id="datepicker" name="date">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <strong>Số lượng : </strong>
                <input class="date form-control"  type="text"  name="number">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <strong>Danh mục : </strong>
                <select class="date form-control"  name="categoryId">
                    <option value="0">Chọn danh mục</option>
                    @foreach($categories as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    </script>
@endsection

