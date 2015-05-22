<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>

        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="utf-8">
        <title>Fraley Excavating : Home</title>
        
        <!-- Mobile Specific Metas
  ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
  ================================================== -->
        <link rel="stylesheet" href="/assets/css/base.css">
        <link rel="stylesheet" href="/assets/css/irespond.css">
        <link rel="stylesheet" href="/assets/css/fraley.css">

        <!--[if lt IE 8]><link rel="stylesheet" href="/css/ieBS.css" type="text/css"><![endif]-->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

        <!-- Favicons
	================================================== -->
        <link rel="shortcut icon" href="favicon.ico">
        <!--
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        -->
        <style>
            html {
                background-color:#3a3a3a;
                background-color:#323a2f;
                /*background-image: url("gray-bar.jpg");*/
                /*background-position: top left;*/
                background-repeat: repeat-x;
            }
            body {
                color:#efefef;
                background: transparent;
                min-height: 600px;
            }
            h1 {
                font-size: 6em;
                color:#3a3a3a;
                margin-bottom:.125em;
            }
            p {
                font-size: 1.5em;
            }
            #main, .row { margin-top:0; padding-top: 0 }
        </style>
            </head>
    <body id="">
        <div class="container" id="main" style="min-width:978px">
            <div class="row" style="margin:0">
<!--            	<div class="three columns">&nbsp;</div>-->
<!--            	<div id="msg" class="six columns" style="text-align:center">-->
        			<img src="home-mock.jpg" style="width:100%; max-width: 100%">
<!--        		</div>-->
        	</div>
        </div>
        <script type="text/javascript" src="/assets/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var bH = $(window).innerHeight(), mH = $('#msg').innerHeight(), margin = (bH-mH)/2+'px';
                $('#msg').css('margin-top',margin);
            });
        </script>
	</body>
</html>