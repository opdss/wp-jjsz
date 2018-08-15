
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
    <script type="text/javascript">
        var JJSZ = {
            'path' : '<?php echo esc_url( get_template_directory_uri() ); ?>',
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"  style="box-shadow: 0px 0px 20px rgba(0,0,0,.3)">
                <div class="row">
                    <!--<div class="col-md-6">
                        <h3>HI, 欢迎来到我的站点！</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <span>
                            <img class="user-qr" src="<?php /*echo esc_url( get_template_directory_uri() ); */?>/image/user-0.png" style="width: 32px;margin: 10px;">
                        </span>
                    </div>-->
                    <div class="col-md-12">
                        <nav class="navbar" style="margin-bottom: 0px;">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="#">HI,欢迎来到寂静生长！</a>
                                </div>
                                <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
                                <div>
                                    <ul class="nav navbar-nav navbar-menu">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><div class="user-qr"></div></li>
                                    </ul>
                                    <form class="navbar-form navbar-right">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search" id="search_box">
                                        </div>
                                    </form>
                                </div><!--/.nav-collapse -->
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"
                         style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/image/index-bg.png') no-repeat;background-size:100% 100%;min-height: 400px">

                    </div>
                </div>
                <div class="row">
                    <a href="#" class="col-md-4 index-tool-box index-tool-box-1"></a>
                    <a href="#" class="col-md-4 index-tool-box index-tool-box-2"></a>
                    <a href="#" class="col-md-4 index-tool-box index-tool-box-3"></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 40px;border-top: 1px solid #ddd"">
            <div class="col-md-12">
                <div class="navbar ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    <p class="text-muted">© 2018 寂静生长 — <a href="http://www.miibeian.gov.cn/">粤ICP备18038279号</a></p>
                </footer>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/style.js"></script>
</html>
