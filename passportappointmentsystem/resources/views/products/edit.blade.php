@extends('layout.master')
@section('content')
    <h2>Sửa sản phẩm</h2><br  />
    <form method="post" action="{{action('ProductController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="Name">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="price">Giá bán</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <label for="Number">Mô tả</label>
                <input type="text" class="form-control" name="description" value="{{$product->description}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                @if($product->imagePath)
                    <img src="{{url('/images')}}/{{$product->imagePath}}" width="65px" height="40px " alt="Không có ảnh"/>
                    @endif
                <input type="file" name="imagePath" value="{{$product->imagePath}}">

            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <strong>Date : </strong>
                <input class="date form-control"  type="text" id="datepicker" name="date" value="{{date('d-m-Y', $product->date)}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <strong>Số lượng : </strong>
                <input class="date form-control"  type="text"  name="number" value="{{$product->number}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-8">
                <strong>Danh mục : </strong>
                <select class="date form-control"  name="categoryId">
                    <option value="0">Chọn danh mục</option>
                    @foreach($categories as $c)
                        <option
                                @if($product->categoryId == $c->id)
                                    {{'selected'}}
                                @endif
                                value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Sửa</button>
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