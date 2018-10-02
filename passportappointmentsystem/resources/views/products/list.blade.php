@extends('layout.master')
@section('content')
<br />
@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
@endif
<div><h3>Danh sách sản phẩm</h3></div>
<div><a href="{{action('ProductController@create')}}" class="btn btn-success">Thêm mới</a></div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Ngày </th>
        <th>Miêu tả</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($products as $product)
        @php
            $date=date('Y-m-d', $product['date']);
        @endphp
        <tr>
            <td>{{$product['id']}}</td>
            <td>{{$product['name']}}</td>
            <td>{{$date}}</td>
            <td>{{$product['description']}}</td>
            <td>{{$product['number']}}</td>
            <td>
                <img src="{{url('/images')}}/{{$product['imagePath']}}" width="65px" height="40px " alt="Không có ảnh"/>
            </td>
            <td><a href="{{action('ProductController@edit', $product['id'])}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
