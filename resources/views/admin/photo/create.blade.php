<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/13
 * @Time: 上午10:18
 * @File: fileUpload.blade.php
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.menu.layouts')
    <link rel="stylesheet" href="{{ URL::asset('admin/js/button/ladda/ladda.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('admin/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/css/loader-style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/js/upload/demos/css/uploader.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/js/upload/demos/css/demo.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/js/dropZone/downloads/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/js/textEditor/src/bootstrap-wysihtml5.css') }}">
</head>

<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
{{--top--}}
@include('admin.menu.top')

{{--menu--}}
@include('admin.menu.menu')
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
        {{--title--}}
        @include('admin.menu.title')
        {{--breadcrumb--}}
        @include('admin.menu.breadcrumb')

        <div class="content-wrap">
            <div class="col-sm-12">
                <div class="title-alt"><h6>图片上传</h6></div>
                {{--标题--}}
                <div class="body-nest" id="Blank_Page_Content">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-1 col-sm-1 control-label" for="name">标题</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="标题" id="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-1 col-sm-1 control-label" for="doc">内容</label>
                            <div class="col-lg-10">
                                <textarea style="width: 100%; height: 100px" id="doc" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-1 col-sm-1 control-label" for="category">分类</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="分类" id="category" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-1 col-sm-1 control-label" for="tag">标签</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="标签" id="tag" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                {{--图片上传--}}
                <div class="body-nest" id="DropZone">
                    <input type="file" name="file" id="file" />
                    <button style="margin-top:10px;" class="btn btn-info" id="submit-all" type="submit" onclick="submit();">添加</button>
                </div>
            </div>
        </div>
    </div>

    {{--right--}}
    @include('admin.menu.right')

    {{--bottom--}}
    @include('admin.menu.bottom')
</div>
</body>

</html>

<script src="{{ URL::asset('admin/js/dropZone/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/upload/demos/js/demo.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/upload/src/dmuploader.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/dropZone/lib/dropzone.js') }}"></script>

<script>
    Dropzone.options.myDropzone = {
        // 防止Dropzone立即上载已删除的文件
        autoProcessQueue: false,
        init: function() {
            var submitButton = document.querySelector("#submit-all");
            // closure
            myDropzone = this;

            submitButton.addEventListener("click", function() {
                // 告诉Dropzone处理所有排队的文件。
                myDropzone.processQueue();
            });

            // 您可能希望仅在以下情况下才显示“提交”按钮
            // 文件放在这里：
            this.on("addedfile", function() {
                // 在这里显示提交按钮和/或通知用户单击它。
            });
        }
    };
</script>

{{--提交--}}
<script>

    function submit() {
        var name = $('#name').val();
        var doc = $('#doc').val();
        var category = $('#category').val();
        var tag = $('#tag').val();
        var file = $('#file').val();

        $.ajax({
            url:"{{ url('admin/photo/create') }}",
            type:'GET',
            data:{
                name:name,
                doc:doc,
                category:category,
                tag:tag,
                file:file
            },
            success:function (data) {
                console.log(data);
                if(data === 1) {
                    self.location="{{ url('admin/photo') }}";
                }
            }
        });
    }

</script>