
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
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>HI, 欢迎来到我的站点！</h3>
            </div>
            <div class="col-md-6 text-right">
                    <span>
                        <img class="user-qr" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/user-0.png" style="width: 32px;margin: 10px;">
                    </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"
                 style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/image/lunbo.png');min-height: 180px;px">
            </div>
        </div>
        <div class="row">
            <a href="#">
                子栏目
            </a>
            <a href="#">
                子栏目
            </a>
            <a href="#">
                子栏目
            </a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="wangye" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/d3.png">
            </div>
            <div class="col-md-4">
                <img class="wangye" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/d3.png">
            </div>
            <div class="col-md-4">
                <img class="wangye" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/d3.png">
            </div>
            <div class="col-md-4">
                <img class="wangye" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/d3.png">
            </div>
            <div class="col-md-4">
                <img class="wangye" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/d3.png">
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/style.js"></script>
</html>
