<!DOCTYPE html>
<html>
    <head>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
            
        <style>
            ﻿
        body,td,th {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 11px;
        }


        .master_style
        { 
              background-image: url('./assets/img/line1.png');
              background-repeat: repeat-x;

        }

        #tblBg
        {
            background-image: url(./assets/img/embos2.jpg);
            background-repeat: repeat-y;
            padding-left: 15px;
            padding-right: 15px;
        }

        .page_style
        {
            margin: 0 auto 0 auto;
            width: 800px;
          /*  padding-left: 15px;
            padding-right: 15px;*/
            background-color: white;


        }

        .student_field
        {
            padding: 0 20px 0 20px;
            width:300px;
        }

        .studentno_field
        {
            text-align:center;
            width:100px;
        }

        .TableHeader
        {
            background-color: #007F64;
            color:#fff;
            text-align:center;
        }

        .TableBg
        {
            background-color:#fff;
        }

        .color1
        {
            color:crimson;
        }

        .GridHeader
        {
           background-color: #007F64;
           color: #fff;
           font-weight:normal;
        }

        .GridFooter
        {
            background-color: gainsboro;
        }

        .clTitle
        {
            color: crimson;
            font-family: Verdana, Arial;
            font-size: 14pt;
        }

        .clTextBox
        {
            border: solid 1px #999999;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .clButton
        {
            border: solid 1px #999999;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 11px;
            cursor: pointer;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .clButton:hover, .clTextBox:hover
        {
            border: solid 1px crimson;
        }


        /* MODAL POPUP **************************************** */


        .popupDragHandle
        {
            background-color: Blue;
            color:White;
            cursor: move;
        }

        .modalBackground {
                background-color:Gray;
                filter:alpha(opacity=70);
                opacity:0.7;
        }

        .modalPopup {
                /*background-color:#ffffdd;*/
                background-color: aliceblue;
                border-width:3px;
                border-style:solid;
                border-color:Gray;
                padding:3px;
                width:250px;
        }

        /* ****************************************************** */

        .parent_panel
        { 
            background-color:#333333;
            color:#fff;
            padding: 5px;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .info_separator
        {
            border-bottom: solid 1px #c0c0c0;
        }

        .fieldcell
        {
            background-color: #007F64;
            color:#fff;
            padding: 0 3px 0 3px;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
              @yield('content')
            </div>
        </div>
    </body>
</html>
