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

</head>

<body>
<div id="awwwards" class="right black"><a href="" target="_blank">best websites of the world</a></div>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="Blank_PageClose">
                        <div class="title-alt">
                            <h6>图片上传</h6>
                            <div class="titleClose">
                                <a class="gone" href="#Blank_PageClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Blank_Page_Content">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>

                        <div class="body-nest" id="Blank_Page_Content">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">标题</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="标题" id="inputEmail1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">分类</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="分类" id="inputEmail1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">标签</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="标签" id="inputEmail1" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--图片上传--}}
                        <div class="body-nest" id="DropZone">
                            <form action="assets/js/dropZone/upload" class="dropzone" id="my-dropzone"></form>
                            <button style="margin-top:10px;" class="btn btn-info" id="submit-all">添加</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-space"></div>

            <div id="footer">
                <div class="devider-footer-left"></div>
                <div class="time">
                    <p id="spanDate">
                    <p id="clock">
                </div>
                <div class="copyright">Make with Love
                    <span class="entypo-heart"></span>Collect from All Rights Reserved
                </div>
                <div class="devider-footer"></div>

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

<script type="text/javascript">
    $('#drag-and-drop-zone').dmUploader({
        url: '/assets/js/upload/demos/upload.php',
        dataType: 'json',
        allowedTypes: 'image/*',
        /*extFilter: 'jpg;png;gif',*/
        onInit: function() {
            $.danidemo.addLog('#demo-debug', 'default', 'Plugin initialized correctly');
        },
        onBeforeUpload: function(id) {
            $.danidemo.addLog('#demo-debug', 'default', 'Starting the upload of #' + id);

            $.danidemo.updateFileStatus(id, 'default', 'Uploading...');
        },
        onNewFile: function(id, file) {
            $.danidemo.addFile('#demo-files', id, file);
        },
        onComplete: function() {
            $.danidemo.addLog('#demo-debug', 'default', 'All pending tranfers completed');
        },
        onUploadProgress: function(id, percent) {
            var percentStr = percent + '%';

            $.danidemo.updateFileProgress(id, percentStr);
        },
        onUploadSuccess: function(id, data) {
            $.danidemo.addLog('#demo-debug', 'success', 'Upload of file #' + id + ' completed');

            $.danidemo.addLog('#demo-debug', 'info', 'Server Response for file #' + id + ': ' + JSON.stringify(data));

            $.danidemo.updateFileStatus(id, 'success', 'Upload Complete');

            $.danidemo.updateFileProgress(id, '100%');
        },
        onUploadError: function(id, message) {
            $.danidemo.updateFileStatus(id, 'error', message);

            $.danidemo.addLog('#demo-debug', 'error', 'Failed to Upload file #' + id + ': ' + message);
        },
        onFileTypeError: function(file) {
            $.danidemo.addLog('#demo-debug', 'error', 'File /'' + file.name + '/' cannot be added: must be an image');
        },
        onFileSizeError: function(file) {
            $.danidemo.addLog('#demo-debug', 'error', 'File /'' + file.name + '/' cannot be added: size excess limit');
        },
        /*onFileExtError: function(file){
          $.danidemo.addLog('#demo-debug', 'error', 'File /'' + file.name + '/' has a Not Allowed Extension');
        },*/
        onFallbackMode: function(message) {
            $.danidemo.addLog('#demo-debug', 'info', 'Browser not supported(do something else here!): ' + message);
        }
    });
</script>


<script>
    Dropzone.options.myDropzone = {

        // Prevents Dropzone from uploading dropped files immediately
        autoProcessQueue: false,

        init: function() {
            var submitButton = document.querySelector("#submit-all")
            myDropzone = this; // closure

            submitButton.addEventListener("click", function() {
                myDropzone.processQueue(); // Tell Dropzone to process all queued files.
            });

            // You might want to show the submit button only when
            // files are dropped here:
            this.on("addedfile", function() {
                // Show submit button here and/or inform user to click it.
            });

        }
    };
</script>

