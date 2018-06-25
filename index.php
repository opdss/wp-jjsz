
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="bg">
<div id="left">
    <h4>这里是个人的简介信息</h4>
    <h4>这里是个人的简介信息</h4>
    <h4>这里是个人的简介信息</h4>
    <h4>这里是个人的简介信息</h4>
    <h4>这里是个人的简介信息</h4>
    <h4>这里是个人的简介信息</h4>
</div>
<div id="center">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/bg-text.png" width="240px">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/bg-logo.png" height="640px">
</div>
<div id="menu">

</div>
</body>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/bootstrap.min.js"></script>
<script>
    var center = $('#center');
    function jianjie(open) {
        var obj = $('#left');
        if (open) {
            obj.animate({left:'0px'}, 300);
            center.animate({left:'35%'}, 300)
        } else {
            obj.animate({left:'-280px'}, 300);
            center.animate({left:'33%'}, 300)
        }
    }



    function menu(open) {
        var obj = $('#menu');
        if (open) {
            obj.animate({bottom:'0px'}, 300);
            center.animate({'margin-top':'-360px'}, 300)
        } else {
            obj.animate({bottom:'-120px'}, 300);
            center.animate({'margin-top':'-320px'}, 300)
        }
    }


    $(document).mousemove(function(e) {
        e = e || window.event
        var p = 10
        var __xx = parseInt(e.pageX || e.clientX);
        var __yy = parseInt(e.pageY || e.clientY);

        if (!__xx || __xx < p) {
            jianjie(true);
        }

        var offset = parseInt($('#menu').css('bottom'));
        var hd = $(document).height() + (offset > 0 ? 0 : offset);

        if (!__yy || hd-__yy < p) {
            menu(true);
        }
    });
</script>
</html>
