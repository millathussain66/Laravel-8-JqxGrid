<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DBBL OMS</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset('') }}css/style.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}css/form.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.summer.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.fresh.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.energyblue.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.light.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.ui-sunny.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.energyblue.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}jqwidgets/styles/jqx.darkblue.css" type="text/css" />

    <link rel="stylesheet" href="{{ asset('') }}css/multiple-select.css" type="text/css" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">



    {{-- STYLE CSS LINK --}}

    {{-- STYLE JS LINK --}}



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}scripts/simple-chart.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/moment.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/rpie.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/jquery.multiple.select.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxchart.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxexpander.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxvalidator.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxmaskedinput.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxcombobox.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxswitchbutton.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxradiobutton.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxinput.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxgrid.edit.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxdata.export.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxgrid.export.js"></script>
    <script type="text/javascript" src="{{ asset('') }}scripts/gettheme.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="{{ asset('') }}jqwidgets/jqxtabs.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    {{-- STYLE JS LINK --}}

    <!---- Left Side Menu Start ------>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .active {
            background: #93CDDD !important;
            font-weight: bold;
        }


        .navigation {
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            top: 0px;
            max-width: 200px;
            width: 200px;
            min-width: 200px;
            top: 380px;
            outline: none;
            background: transparent;
            display: block;
            border: 1px solid #e9e9e9;
            border-top: none;
            border-bottom: none;
            height: 100%;
            -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
            padding: 0px;
            border-color: transparent;
            border-color: rgba(233, 233, 233, 1);
            background: transparent;
            background: rgba(255, 255, 255, 1);
            background: transparent\9;
            *background: transparent;
            *border-color: transparent;
        }


        .navigationTitle {
            -webkit-border-top-right-radius: 4px;
            -webkit-border-top-left-radius: 4px;
            -moz-border-top-right-radius: 4px;
            -moz-border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
            font-family: Verdana, Arial, sans-serif;
            font-style: normal;
            text-shadow: 0 1px 1px #FFFFFF;
            font-size: 12px;
            text-align: left;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.02) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.02)));
            background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.02) 100%);
            background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.02) 100%);
            background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.02) 100%);
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.02) 100%);
            background-color: #fdfdfd;
            color: #3F3F3F;
            border-bottom: 5px solid #00a2e8;
            border-top: 1px solid #e9e9e9;
            padding: 12px 5px 13px 14px;
            _margin-top: 28px;
        }

        .navigationContent {
            padding-top: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            margin: 0px;
        }

        .navigationItemContent,
        .navigationItemContentParent {
            border: 0px;
            text-align: left;
            vertical-align: middle;
            padding: 9px 3px 9px 25px;
            list-style: none;
            border-bottom: 1px solid #e9e9e9;
            -moz-transition: all 0.3s ease-in-out, color 0.1s ease 0s;
            -webkit-transition: all 0.3s ease-in-out, color 0.1s ease 0s;
            transition: all 0.3s ease-in-out, color 0.1s ease 0s;
            color: #3F3F3F;
            background: #fff;
        }

        .content {
            margin-right: 10px;
            _height: 950px;
            _max-height: 950px;
            padding: 10px;
            position: relative;
            padding-top: 3px;
            width: 100%;
        }
        #jqxWidget{
            background: #af5fff;
            padding: 0.5rem;
        }
    </style>


</head>

<body>




    <div id='content'>
        <script type="text/javascript">
            $(document).ready(function() {
                // Create a jqxMenu
                $("#jqxMenu").jqxMenu({
                    width: '310',
                    height: '30',
                    mode: 'horizontal',
                    showTopLevelArrows: true
                });
                // Set up the open directions.
                $("#jqxMenu").jqxMenu('setItemOpenDirection', 'Services', 'left', 'down');
                $("#jqxMenu").jqxMenu('setItemOpenDirection', 'ContactUs', 'left', 'down');
                $("#jqxMenu").jqxMenu('setItemOpenDirection', 'AboutMe', 'left', 'down');
                $("#jqxMenu").css('visibility', 'visible');
            });
        </script>

        <div id='jqxWidget' style='margin-top: 50px;'>
            <div id='jqxMenu' style="visibility: hidden;">
                <ul>
                    <li style="width: 80px;"><a href="#">About Us</a>
                        <ul>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">The Team</a>
                                <ul>
                                    <li><a href="#">Brigita</a></li>
                                    <li><a href="#">John</a></li>
                                    <li><a href="#">Michael</a></li>
                                    <li><a href="#">Peter</a></li>
                                    <li><a href="#">Sarah</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </li>

                    <li id='ContactUs'><a href="#">Contact Us</a>
                        <ul>
                            <li><a href="#">Enquiry Form</a></li>
                            <li><a href="#">Map &amp; Driving Directions</a></li>
                            <li><a href="#">Your Feedback</a></li>
                        </ul>
                    </li>

                    <li id='AboutMe'><a href="#">About Us</a>
                        <ul>
                            <li><a href="#">Enquiry Form</a></li>
                            <li><a href="#">Map &amp; Driving Directions</a></li>
                            <li><a href="#">Your Feedback</a></li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>
    </div>

    <div id="examplePath" class="examplePath" style="margin-left: 5px; margin-top:3px;color:#002596; float: left; font-family:arial; font-size:12px">
        <div id="pathElement">
            <div class="jqx-icon-arrow-right" style="color:#002596; float: left; width: 15px; height: 15px;"></div>
            <span style="margin-left: 2px; float: left;">Legal Team</span>
            <div class="jqx-icon-arrow-right" style="float: left; width: 16px; height: 16px;"></div>
            <span style="margin-left: 2px; float: left;">Expenses</span>
            <div class="jqx-icon-arrow-right" style="float: left; width: 16px; height: 16px;"></div>
        </div>
    </div>
<br/>
    <div id="container">
        <div id="body">
            <table class="">
                <tbody>
                    <tr id="widgetsNavigationTree">
                        <td valign="top" align="left" class="navigation">

                            <style>
                                #active {
                                    background: #93CDDD !important;
                                    font-weight: bold;
                                }
                            </style>
                            <div id="navigationTitle" class="navigationTitle">
                                <div style="float: left; margin-right: 4px;" class="widget-icon jqx-navigationbar-icon"></div>
                                <a>Documents</a>
                            </div>
                            <div class="navigationItem">
                                <ul class="navigationContent">

                                    <li class="navigationItemContent" id="active"><a href="">Add Main Data</a>
                                    </li>


                                </ul>
                            </div>
                            <!----====== Left Side Menu End==========-----> <!----====== Left Side Menu End==========----->

                        </td>
                        <td class="content">
                            @yield('content')
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

















</body>

</html>