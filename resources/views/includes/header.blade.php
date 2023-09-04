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


</head>
<body>


@yield('content')
</body>

</html>