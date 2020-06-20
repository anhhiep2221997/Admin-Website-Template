@extends('admin.layouts.glance')
@section('title')
    Quản trị danh mục
@endsection
@section('content')
    <h1>Sửa danh mục {{ $cat->id .  ' : ' .$cat->name }}</h1>
    <div class="row">
        <div class="form-three widget-shadow">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form name="category" action="{{url('admin/content/category/'.$cat->id)}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên danh mục</label>
                    <div class="col-sm-8">
                        <input type="text"name="name" class="form-control1" id="focusedinput" value="{{ $cat->name }}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text"name="slug" class="form-control1" id="focusedinput" value="{{ $cat->slug }}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <span class="input-group-btn">
                         <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="lfm-btn btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                            <a class="btn btn-warning remove-image">
                           <i class="fa fa-remove"></i> Xóa
                         </a>
                       </span>
                        <input id="thumbnail1" type="text" name="images[]" value="{{ old('images') }}" class="form-control1" id="focusedinput" placeholder="Default Input">
                        <img id="holder1" style="margin-top:15px;max-height:100px;">
                    </div>
                </div>



                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thêm ảnh</label>
                    <div class="col-sm-8">
                        <a id="plus-image" class="btn btn-success">
                            <i class="fa fa-plus"></i>Thêm</a>
                    </div>
                </div>


                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"> {{ $cat->intro }} </textarea></div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mổ tả</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"> {{ $cat->desc }} </textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button> </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var domain = "http://localhost/lar.tuto/authen/public/laravel-filemanager";
            $('.lfm-btn').filemanager('image', {prefix: domain});

            $('#plus-image').on('click', function (e) {
                e.preventDefault();
                var html = '';

                var lfm_btn_length = $('.lfm-btn').length;
                var lfm_btn_id_next = lfm_btn_length + 1;

                for(var i = 1;i < 1000;i++){
                    if ($('#lfm'+lfm_btn_id_next).length < 1) {
                        html += '<div class="form-group">\n' +
                            '                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>\n' +
                            '                    <div class="col-sm-8">\n' +
                            '\n' +
                            '                        <span class="input-group-btn">\n' +
                            '                             <a id="lfm'+lfm_btn_id_next+'" data-input="thumbnail'+lfm_btn_id_next+'" data-preview="holder'+lfm_btn_id_next+'" class="lfm-btn btn btn-primary">\n' +
                            '                               <i class="fa fa-picture-o"></i> Choose\n' +
                            '                             </a>\n' +
                            '                            <a class="btn btn-warning remove-image">\n' +
                            '                           <i class="fa fa-remove"></i> Xóa\n' +
                            '                         </a>\n' +
                            '                           </span>\n' +
                            '                        <input id="thumbnail'+lfm_btn_id_next+'" class="form-control" type="text" name="images[]" value="" placeholder="Default Input">\n' +
                            '\n' +
                            '                        <img id="holder'+lfm_btn_id_next+'" style="margin-top:15px;max-height:100px;">\n' +
                            '                    </div>\n' +
                            '                </div>';
                        break;
                    }
                    lfm_btn_id_next++;
                }

                var box = $(this).closest('.form-group');

                $( html ).insertBefore( box );

                var domain = "http://localhost/lar.tuto/authen/public/laravel-filemanager";
                $('.lfm-btn').filemanager('image', {prefix: domain});


            });

            $(body).on('click', '.remove-image', function(e){
                e.preventDefault();
                $(this).closest('.form-group').remove();
            });

        });
    </script>


@endsection