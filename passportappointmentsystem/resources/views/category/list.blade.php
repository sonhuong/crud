@extends('layout.master')
@section('content')
<br />
@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
@endif
<div><h3>Danh mục sản phẩm</h3></div>
<div><a href="{{action('CategoryController@create')}}" class="btn btn-success">Thêm mới</a></div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Mã</th>
        <th>Tên danh mục</th>
        <th>Miêu tả </th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{$category['id']}}</td>
            <td>{{$category['name']}}</td>
            <td>{{$category['brief']}}</td>
            <td><a href="{{action('CategoryController@edit', $category['id'])}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{action('CategoryController@destroy', $category['id'])}}" method="post">
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
