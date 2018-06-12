<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">


    <link href="assets/js/textEditor/editor.css" rel="stylesheet">
    <link href="assets/js/textEditor/sceditor/minified/themes/square.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/js/textEditor/src/bootstrap-wysihtml5.css">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
<div id="awwwards" class="right black"><a
            href="" target="_blank">best
        websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- TOP NAVBAR -->
@include('admin.menu.top')
<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
@include('admin.menu.menu')
<!-- END OF SIDE MENU -->


<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">


        <!-- CONTENT -->
        <!--TITLE -->
    @include('admin.menu.title')
    <!--/ TITLE -->

        <!-- BREADCRUMB -->
    @include('admin.menu.breadcrumb')
    <!-- END OF BREADCRUMB -->


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">
                    <div class="nest" id="headerClose">
                        <div class="title-alt">
                            <h6>
                                Editor</h6>
                            <div class="titleClose">
                                <a class="gone" href="#headerClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#header">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="header">

                            <form>
                                <div id="toolbar" style="display: none;">
                                    <a class="btn" data-wysihtml5-command="bold" title="CTRL+B">
                                        <span class="fontawesome-bold"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="italic" title="CTRL+I">
                                        <span class="fontawesome-italic"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="createLink">
                                        <span class="fontawesome-link"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="insertImage">
                                        <span class="fontawesome-picture"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="formatBlock"
                                       data-wysihtml5-command-value="h1">h1</a>
                                    <a class="btn" data-wysihtml5-command="formatBlock"
                                       data-wysihtml5-command-value="h2">h2</a>
                                    <a class="btn" data-wysihtml5-command="insertUnorderedList">
                                        <span class="fontawesome-list-ul"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="insertOrderedList">
                                        <span class="fontawesome-list-ol"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="foreColor"
                                       data-wysihtml5-command-value="red">red</a>
                                    <a class="btn" data-wysihtml5-command="foreColor"
                                       data-wysihtml5-command-value="green">green</a>
                                    <a class="btn" data-wysihtml5-command="foreColor"
                                       data-wysihtml5-command-value="blue">blue</a>
                                    <a class="btn" data-wysihtml5-command="undo">
                                        <span class="fontawesome-backward"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="redo">
                                        <span class="fontawesome-forward"></span>
                                    </a>
                                    <a class="btn" data-wysihtml5-command="insertSpeech">speech</a>
                                    <a class="btn" data-wysihtml5-action="change_view">switch to html view</a>

                                    <div data-wysihtml5-dialog="createLink" style="display: none;">
                                        <label>
                                            Link:
                                            <input data-wysihtml5-dialog-field="href" value="http://">
                                        </label>
                                        <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a
                                                data-wysihtml5-dialog-action="cancel">Cancel</a>
                                    </div>

                                    <div data-wysihtml5-dialog="insertImage" style="display: none;">
                                        <label>
                                            Image:
                                            <input data-wysihtml5-dialog-field="src" value="http://">
                                        </label>
                                        <label>
                                            Align:
                                            <select data-wysihtml5-dialog-field="className">
                                                <option value="">default
                                                <option value="wysiwyg-float-left">left
                                                <option value="wysiwyg-float-right">right
                                            </select>
                                        </label>
                                        <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a
                                                data-wysihtml5-dialog-action="cancel">Cancel</a>
                                    </div>

                                </div>
                                <textarea style="width: 100%; height: 300px" id="textarea"
                                          placeholder="Enter text ..."></textarea>
                                <br>
                                <button class="btn btn-default" type="reset" value="Reset form!">Reset form!</button>
                            </form>


                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="elClose">
                        <div class="title-alt">
                            <h6>
                                wysihtml5</h6>
                            <div class="titleClose">
                                <a class="gone" href="#elClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#el">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="el">


                            <textarea class="textarea form-control" placeholder="Enter text ..."
                                      style="width: 100%; height: 300px"></textarea>


                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- /END OF CONTENT -->


        <!-- FOOTER -->
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
        <!-- / END OF FOOTER -->


    </div>
</div>
<!--  END OF PAPER WRAP -->
<!-- RIGHT SLIDER CONTENT -->
<div class="sb-slidebar sb-right">
    <div class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
            </h3>
            <div class="col-sm-12">

                <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Distance traveled</b>
                    <br>
                    <i>86% to the check point</i>
                </div>

                <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>The average speed</b>
                    <br>
                    <i>30KM/h avarage speed</i>
                </div>


                <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Overall result</b>
                    <br>
                    <i>30KM/h avarage Result</i>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:0;" class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
            </h3>
            <div class="col-sm-12">
                <span class="label label-warning label-chat">Online</span>
                <ul class="chat">
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/20.jpg">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>


                </ul>

                <span class="label label-chat">Offline</span>
                <ul class="chat">
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/women/24.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/25.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/women/25.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/26.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>

<!-- END OF RIGHT SLIDER CONTENT-->


<!-- MAIN EFFECT -->
<script type="text/javascript" src="assets/js/preloader.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/load.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script src="assets/js/textEditor/parser_rules/advanced.js"></script>
<script src="assets/js/textEditor/dist/wysihtml5-0.4.0pre.js"></script>


<script src="assets/js/textEditor/sceditor/minified/jquery.sceditor.bbcode.min.js"></script>


<script src="assets/js/textEditor/lib/js/wysihtml5-0.3.0.js"></script>


<script src="assets/js/textEditor/src/bootstrap3-wysihtml5.js"></script>

<script>
    $('.textarea').wysihtml5();
</script>

<script type="text/javascript">
    $(prettyPrint);
</script>
<script>
    // Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
    var loadCSS = function (url, callback) {
        var link = document.createElement('link');
        link.type = 'text/css';
        link.rel = 'stylesheet';
        link.href = url;
        link.id = 'theme-style';

        document.getElementsByTagName('head')[0].appendChild(link);

        var img = document.createElement('img');
        img.onerror = function () {
            if (callback) callback(link);
        }
        img.src = url;
    }

    $(document).ready(function () {
        var initEditor = function () {
            $(".sceditor").sceditor({
                plugins: 'bbcode',
                style: "assets/js/textEditor/sceditor/minified/square.min.css"
            });
        };

        initEditor();
    });
</script>


<script>
    var editor = new wysihtml5.Editor("textarea", {
        toolbar: "toolbar",
        stylesheets: "assets/js/textEditor/examples/css/stylesheet.css",
        parserRules: wysihtml5ParserRules
    });

    var log = document.getElementById("log");

    editor
        .on("load", function () {
            log.innerHTML += "<div>load</div>";
        })
        .on("focus", function () {
            log.innerHTML += "<div>focus</div>";
        })
        .on("blur", function () {
            log.innerHTML += "<div>blur</div>";
        })
        .on("change", function () {
            log.innerHTML += "<div>change</div>";
        })
        .on("paste", function () {
            log.innerHTML += "<div>paste</div>";
        })
        .on("newword:composer", function () {
            log.innerHTML += "<div>newword:composer</div>";
        })
        .on("undo:composer", function () {
            log.innerHTML += "<div>undo:composer</div>";
        })
        .on("redo:composer", function () {
            log.innerHTML += "<div>redo:composer</div>";
        });
</script>

</body>

</html>
