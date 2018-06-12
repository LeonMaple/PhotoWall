<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng v1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link href="assets/js/colorPicker/bootstrap-colorpicker.css" rel="stylesheet">
    <link href="assets/js/validate/validate.css" rel="stylesheet">
    <link href="assets/js/idealform/css/jquery.idealforms.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/js/timepicker/bootstrap-timepicker.css">
    <link rel="stylesheet" href="assets/js/datepicker/datepicker.css">
    <link rel="stylesheet" href="assets/js/datepicker/clockface.css">
    <link rel="stylesheet" href="assets/js/datepicker/bootstrap-datetimepicker.css">

    <link rel="stylesheet" type="text/css" href="assets/js/tag/jquery.tagsinput.css">


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
@include('admin.top')
<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
@include('admin.menu')
<!-- END OF SIDE MENU -->


<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">


        <!-- CONTENT -->
        <!--TITLE -->
    @include('admin.title')
    <!--/ TITLE -->

        <!-- BREADCRUMB -->
    @include('admin.breadcrumb')
    <!-- END OF BREADCRUMB -->


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="validationClose">
                        <div class="title-alt">
                            <h6>
                                Form Validation</h6>
                            <div class="titleClose">
                                <a class="gone" href="#validationClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#validation">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>


                        <div class="body-nest" id="validation">
                            <div class="form_center">

                                <form action="contact" id="contact-form" class="form-horizontal">
                                    <fieldset>


                                        <div class="control-group">
                                            <label class="control-label" for="name">Your Name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email Address</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="subject">Subject</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="subject" id="subject">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="message">Your Message</label>
                                            <div class="controls">
                                                <textarea class="form-control" name="message" id="message"
                                                          rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions" style="margin:20px 0 0 0;">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn">Cancel</button>
                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="maskedClose">
                        <div class="title-alt">
                            <h6>
                                Masked Input</h6>
                            <div class="titleClose">
                                <a class="gone" href="#maskedClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#masked">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>


                        <div class="body-nest" id="masked">
                            <div class="form_center">
                                <div class="well">
                                    <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i class="fa fa-calendar"></i>
                                            </span>
                                        <input type="text" class="form-control" id="date">
                                        <span class="input-group-addon ">99/99/9999</span>
                                    </div>
                                </div>

                                <div class="well">
                                    <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i
                                                        class="fa fa-phone-square"></i>
                                            </span>
                                        <input type="text" class="form-control" id="phone">
                                        <span class="input-group-addon ">eg.(021) 751-2789</span>
                                    </div>
                                </div>

                                <div class="well">
                                    <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                            </span>
                                        <input type="text" class="form-control" id="money">
                                        <span class="input-group-addon ">eg.20.000.000</span>
                                    </div>
                                </div>
                                <div class="well">
                                    <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i
                                                        class="fa fa-phone-square"></i>
                                            </span>
                                        <input type="text" class="form-control" id="ssn">
                                        <span class="input-group-addon ">eg.99-AAA-9999</span>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="labelClose">
                        <div class="title-alt">
                            <h6>
                                Date Picker</h6>
                            <div class="titleClose">
                                <a class="gone" href="#dateClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#date_1">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>


                        <div class="body-nest" id="date_1">
                            <div class="form_center">
                                <p>Attached to a field with the format specified via options.</p>

                                <div class="well">
                                    <input type="text" class="form-control" id="dp1" value="02-16-2012">
                                </div>
                                <p>Start with years viewMode.</p>


                                <div class="well">
                                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"
                                         id="dpYears" class="input-group date">

                                        <input type="text" value="12-02-2012" class="form-control" id="ssn2">
                                        <span class="input-group-addon add-on entypo-calendar "></span>
                                    </div>

                                </div>
                                <p>Default behavior in pt-BR, picks date/time with fast masked input typing (need only
                                    to type the numbers, the static part of the mask is inserted automatically if
                                    missing) or via the popup widget, which supports year, month, day, hour and minute
                                    views:</p>

                                <div class="well">
                                    <div id="datetimepicker1" class="input-group date">
                                        <input class="form-control" data-format="dd/MM/yyyy hh:mm:ss" type="text">

                                        <span class="input-group-addon add-on">
                                                <i style="font-style:normal;" data-time-icon="entypo-clock"
                                                   data-date-icon="entypo-calendar">
      </i>
                                            </span>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="timeClose">
                        <div class="title-alt">
                            <h6>
                                Time picker</h6>
                            <div class="titleClose">
                                <a class="gone" href="#timeClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#time">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>


                        <div class="body-nest" id="time">
                            <div class="form_center">


                                <div class="well">
                                    <div class="input-group bootstrap-timepicker">

                                        <input id="timepicker1" type="text" class="form-control">
                                        <span class="input-group-addon add-on entypo-clock"></span>
                                    </div>

                                </div>


                                <div class="well">
                                    <input id="t1" value="2:30 PM" data-format="hh:mm A" class="form-control"
                                           type="text">
                                </div>


                                <div class="well">
                                    <div class="input-group">
                                        <input id="t2" value="14:30" class="form-control" readonly="" type="text">
                                        <span style="cursor:pointer;" id="toggle-btn"
                                              class="input-group-addon add-on entypo-calendar "></span>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="colorClose">
                        <div class="title-alt">
                            <h6>
                                Color picker</h6>
                            <div class="titleClose">
                                <a class="gone" href="#colorClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#color">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>


                        <div class="body-nest" id="color">
                            <div class="form_center">

                                <div class="well">
                                    <input type="text" class="form-control" value="#8fff00" id="cp1">
                                </div>

                                <div class="well">
                                    <input type="text" class="form-control" value="rgb(0,194,255,0.78)" id="cp2"
                                           data-color-format="rgba">
                                </div>

                                <div class="well">
                                    <div class="input-group colorpicker-component bscp" data-color="rgb(255, 146, 180)"
                                         data-color-format="rgb" id="cp3">
                                        <input type="text" value="" readonly="" class="form-control">
                                        <span class="input-group-addon"><i
                                                    style="background-color: rgb(255, 146, 180)"></i>
                                            </span>
                                    </div>
                                </div>

                                <div class="well">
                                    <a href="#" class="btn btn-info" id="cp4" data-color-format="hex"
                                       data-color="rgb(255, 255, 255)">Change background color</a>

                                </div>
                                <hr>

                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="tagInputClose">
                        <div class="title-alt">
                            <h6>
                                Tag Input</h6>
                            <div class="titleClose">
                                <a class="gone" href="#tagInputClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#tagInput">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>


                        <div class="body-nest" id="tagInput">
                            <div class="form_center">

                                <div class="well">

                                    <label>Defaults:</label>
                                    <input id="tags_1" type="text" class="form-control tags" value="foo,bar,baz,roffle">
                                </div>

                                <div class="well">
                                    <label>Technologies: (Programming languages in yellow)</label>
                                    <input id="tags_2" type="text" class="tags"
                                           value="php,ios,javascript,ruby,android,kindle">

                                </div>


                            </div>


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


<!-- /MAIN EFFECT -->

<script type="text/javascript" src="assets/js/colorPicker/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="assets/js/inputMask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/js/switch/bootstrap-switch.js"></script>
<script type="text/javascript" src="assets/js/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/idealform/jquery.idealforms.js"></script>

<script type="text/javascript" src="assets/js/timepicker/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/js/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/js/datepicker/clockface.js"></script>
<script type="text/javascript" src="assets/js/datepicker/bootstrap-datetimepicker.js"></script>


<script type="text/javascript" src="assets/js/tag/jquery.tagsinput.js"></script>

<script type="text/javascript">
    $('#datetimepicker1').datetimepicker({
        language: 'pt-BR'
    });
    $('#dp1').datepicker()
    $('#dpYears').datepicker();
    $('#timepicker1').timepicker();
    $('#t1').clockface();
    $('#t2').clockface({
        format: 'HH:mm',
        trigger: 'manual'
    });

    $('#toggle-btn').click(function (e) {
        e.stopPropagation();
        $('#t2').clockface('toggle');
    });
</script>
<script>
    $(document).ready(function () {
        //Validation
        $('#contact-form').validate({
            rules: {
                name: {
                    minlength: 2,
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    minlength: 2,
                    required: true
                },
                message: {
                    minlength: 2,
                    required: true
                }
            },
            highlight: function (element) {
                $(element).closest('.control-group').removeClass('success').addClass('error');
            },
            success: function (element) {
                element
                    .text('OK!').addClass('valid')
                    .closest('.control-group').removeClass('error').addClass('success');
            }
        });

        // MASKED INPUT

        $("#date").mask("99/99/9999", {
            completed: function () {
                alert("Your birthday was: " + this.val());
            }
        });
        $("#phone").mask("(999) 999-9999");

        $("#money").mask("99.999.9999", {
            placeholder: "*"
        });
        $("#ssn").mask("99--AAA--9999", {
            placeholder: "*"
        });


        //COLOR PICKER
        window.prettyPrint && prettyPrint();

        // Code for those demos
        var _createColorpickers = function () {
            $('#cp1').colorpicker({
                format: 'hex'
            });
            $('#cp2').colorpicker();
            $('#cp3').colorpicker();
            var bodyStyle = $('body')[0].style;
            $('#cp4').colorpicker().on('changeColor', function (ev) {
                bodyStyle.backgroundColor = ev.color.toHex();
            });
        }

        _createColorpickers();

        $('.bscp-destroy').click(function (e) {
            e.preventDefault();
            $('.bscp').colorpicker('destroy');
        });

        $('.bscp-create').click(function (e) {
            e.preventDefault();
            _createColorpickers();
        });


    });
</script>

<script type="text/javascript">
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function () {

        $('#tags_1').tagsInput({
            width: 'auto'
        });
        $('#tags_2').tagsInput({
            width: 'auto',
            onChange: function (elem, elem_tags) {
                var languages = ['php', 'ruby', 'javascript'];
                $('.tag', elem_tags).each(function () {
                    if ($(this).text().search(new RegExp('//b(' + languages.join('|') + ')//b')) >= 0)
                        $(this).css('background-color', '#FBB44C');
                });
            }
        });
        $('#tags_3').tagsInput({
            width: 'auto',

            //autocomplete_url:'test/fake_plaintext_endpoint' //jquery.autocomplete (not jquery ui)
            autocomplete_url: 'test/fake_json_endpoint' // jquery ui autocomplete requires a json endpoint
        });


        // Uncomment this line to see the callback functions in action
        //          $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});       

        // Uncomment this line to see an input with no interface for adding new tags.
        //          $('input.tags').tagsInput({interactive:false});
    });
</script>

</body>

</html>
