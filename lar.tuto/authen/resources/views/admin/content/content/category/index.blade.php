@extends('admin.layouts.glance')
@section('title')
    Quản trị danh mục
@endsection
@section('content')
    <h1>Quản trị danh mục sản phẩm</h1>
    <div style="margin: 20px 0">
        <a href="{{url('admin/content/category/create  ')}}"class="btn btn-success">Thêm danh mục</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số:</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Slug</th>
                    <th style="width:150px; ">Images</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cats as $cat)
                    <tr>
                        <th scope="row">{{$cat->id}}</th>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->slug}}</td>
                        <td><?php
                            $images= isset($cat->images) ? json_decode($cat->images) : array();
                            ?>
                            @if(!empty($images))
                                @foreach ($images as $image)
                                    <img src="{{asset($image)}}" style="margin-top:15px;max-height:100px;">
                                @endforeach
                            @endif</td>
                        <td>
                            <a href="{{url('admin/content/category/'.$cat->id.'/edit')}}"class="btn btn-warning">Sửa</a>
                            <a href="{{url('admin/content/category/'.$cat->id.'/delete')}}"class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $cats->links() }}
        </div>
    </div>


@endsection
