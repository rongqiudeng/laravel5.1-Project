<!DOCTYPE html>
<html>

<head>
    <title>admin 后台首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
{{--<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>--}}
{{--<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>--}}
<!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/checkbox3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/select2.min.css')}}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/css/themes/flat-blue.css')}}">
</head>

<body class="flat-blue">
<div class="app-container">
    <div class="row content-container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-expand-toggle">
                        <i class="fa fa-bars icon"></i>
                    </button>
                    <ol class="breadcrumb navbar-breadcrumb">
                        <li class="active">首页</li>
                    </ol>
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-th icon"></i>
                    </button>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-times icon"></i>
                    </button>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="title">
                                通知 <span class="badge pull-right">0</span>
                            </li>
                            <li class="message">
                                没有信息
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown danger">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                        <ul class="dropdown-menu danger  animated fadeInDown">
                            <li class="title">
                                通知 <span class="badge pull-right">4</span>
                            </li>
                            <li>
                                <ul class="list-group notifications">
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i>
                                            新注册会员
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge success">1</span> <i class="fa fa-check icon"></i>
                                            订单信息
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge danger">2</span> <i class="fa fa-comments icon"></i>
                                            客户信息
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item message">
                                            查看所有
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">用户信息<span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="profile-img">
                                <img src="{{asset('/admin/images/profile/picjumbo.com_HNCK4153_resize.jpg')}}"
                                     class="profile-img">
                            </li>
                            <li>
                                <div class="profile-info">
                                    <h4 class="username">Emily Hart</h4>
                                    <p>emily_hart@email.com</p>
                                    <div class="btn-group margin-bottom-2x" role="group">
                                        <button type="button" class="btn btn-default"><i class="fa fa-user"></i> 个人中心
                                        </button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i>
                                            退出
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="side-menu sidebar-inverse">
            <nav class="navbar navbar-default" role="navigation">
                <div class="side-menu-container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{asset('/admin/index')}}">
                            <div class="icon fa fa-paper-plane"></div>
                            <div class="title">后台管理系统V2.0</div>
                        </a>
                        <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{asset('/admin/index')}}">
                                <span class="icon fa fa-tachometer"></span><span class="title">数据统计</span>
                            </a>
                        </li>
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-element">
                                <span class="icon fa fa-desktop"></span><span class="title">系统设置</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-element" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="ui-kits/theming.html">主题设置</a>
                                        </li>
                                        <li><a href="ui-kits/grid.html">网站设置</a>
                                        </li>
                                        <li><a href="ui-kits/button.html">数据备份</a>
                                        </li>
                                        <li><a href="ui-kits/card.html">Cards</a>
                                        </li>
                                        <li><a href="ui-kits/list.html">Lists</a>
                                        </li>
                                        <li><a href="ui-kits/modal.html">Modals</a>
                                        </li>
                                        <li><a href="ui-kits/alert.html">Alerts & Toasts</a>
                                        </li>
                                        <li><a href="ui-kits/panel.html">Panels</a>
                                        </li>
                                        <li><a href="ui-kits/loader.html">Loaders</a>
                                        </li>
                                        <li><a href="ui-kits/step.html">Tabs & Steps</a>
                                        </li>
                                        <li><a href="ui-kits/other.html">Other</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-table">
                                <span class="icon fa fa-table"></span><span class="title">订单管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-table" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="table/table.html">Table</a>
                                        </li>
                                        <li><a href="table/datatable.html">Datatable</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-form">
                                <span class="icon fa fa-file-text-o"></span><span class="title">文章管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-form" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="form/ui-kits.html">Form UI Kits</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Dropdown-->
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#component-example">
                                <span class="icon fa fa-cubes"></span><span class="title">广告管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="component-example" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="components/pricing-table.html">Pricing Table</a>
                                        </li>
                                        <li><a href="components/chartjs.html">Chart.JS</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Dropdown-->
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-example">
                                <span class="icon fa fa-slack"></span><span class="title">资源管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-example" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="pages/login.html">Login</a>
                                        </li>
                                        <li><a href="pages/index.html">Landing Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Dropdown-->
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-icon">
                                <span class="icon fa fa-file-picture-o"></span><span class="title">图片管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-icon" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="icons/glyphicons.html">Glyphicons</a>
                                        </li>
                                        <li><a href="icons/font-awesome.html">Font Awesomes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- Dropdown-->
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-icon">
                                <span class="icon fa fa-users"></span><span class="title">用户管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-icon" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="icons/glyphicons.html">Glyphicons</a>
                                        </li>
                                        <li><a href="icons/font-awesome.html">Font Awesomes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="license.html">
                                <span class="icon fa fa-thumbs-o-up"></span><span class="title">网站信息</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body padding-top">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card red summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-inbox fa-4x"></i>
                                    <div class="content">
                                        <div class="title">50</div>
                                        <div class="sub-title">New Mails</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card yellow summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-comments fa-4x"></i>
                                    <div class="content">
                                        <div class="title">23</div>
                                        <div class="sub-title">New Message</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card green summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-tags fa-4x"></i>
                                    <div class="content">
                                        <div class="title">280</div>
                                        <div class="sub-title">Product View</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card blue summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-share-alt fa-4x"></i>
                                    <div class="content">
                                        <div class="title">16</div>
                                        <div class="sub-title">Share</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row  no-margin-bottom">
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card primary">
                                    <div class="card-jumbotron no-padding">
                                        <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                                    </div>
                                    <div class="card-body half-padding">
                                        <h4 class="float-left no-margin font-weight-300">Profits</h4>
                                        <h2 class="float-right no-margin font-weight-300">$3200</h2>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="thumbnail no-margin-bottom">
                                    <img src="{{asset('/admin/images/thumbnails/picjumbo.com_IMG_4566.jpg')}}"
                                         class="img-responsive">
                                    <div class="caption">
                                        <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link"
                                                                                   href="#thumbnail-label"><span
                                                        class="anchorjs-icon"></span></a></h3>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#"
                                                                                                           class="btn btn-default"
                                                                                                           role="button">Button</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="thumbnail no-margin-bottom">
                                    <img src="{{asset('/admin/images/thumbnails/picjumbo.com_IMG_3241.jpg')}}"
                                         class="img-responsive">
                                    <div class="caption">
                                        <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link"
                                                                                   href="#thumbnail-label"><span
                                                        class="anchorjs-icon"></span></a></h3>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</p>
                                        <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#"
                                                                                                           class="btn btn-default"
                                                                                                           role="button">Button</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card primary">
                                    <div class="card-jumbotron no-padding">
                                        <canvas id="jumbotron-bar-chart" class="chart no-padding"></canvas>
                                    </div>
                                    <div class="card-body half-padding">
                                        <h4 class="float-left no-margin font-weight-300">Orders</h4>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card primary">
                                    <div class="card-jumbotron no-padding">
                                        <canvas id="jumbotron-line-2-chart" class="chart no-padding"></canvas>
                                    </div>
                                    <div class="card-body half-padding">
                                        <h4 class="float-left no-margin font-weight-300">Pages view</h4>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="card-header">
                                <div class="card-title">
                                    <div class="title"><i class="fa fa-comments-o"></i> Last Message</div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                            <div class="card-body no-padding">
                                <ul class="message-list">
                                    <a href="#">
                                        <li>
                                            <img src="{{asset('/admin/images/profile/profile-1.jpg')}}"
                                                 class="profile-img pull-left">
                                            <div class="message-block">
                                                <div><span class="username">Tui2Tone</span> <span
                                                            class="message-datetime">12 min ago</span>
                                                </div>
                                                <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula
                                                    sodales.
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li>
                                            <img src="{{asset('/admin/images/profile/profile-1.jpg')}}"
                                                 class="profile-img pull-left">
                                            <div class="message-block">
                                                <div><span class="username">Tui2Tone</span> <span
                                                            class="message-datetime">15 min ago</span>
                                                </div>
                                                <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula
                                                    sodales.
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li>
                                            <img src="{{asset('/admin/images/profile/profile-1.jpg')}}"
                                                 class="profile-img pull-left">
                                            <div class="message-block">
                                                <div><span class="username">Tui2Tone</span> <span
                                                            class="message-datetime">2 hour ago</span>
                                                </div>
                                                <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula
                                                    sodales.
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li>
                                            <img src="{{asset('/admin/images/profile/profile-1.jpg')}}"
                                                 class="profile-img pull-left">
                                            <div class="message-block">
                                                <div><span class="username">Tui2Tone</span> <span
                                                            class="message-datetime">1 day ago</span>
                                                </div>
                                                <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula
                                                    sodales.
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="#" id="message-load-more">
                                        <li class="text-center load-more">
                                            <i class="fa fa-refresh"></i> load more..
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="app-footer">
        <div class="wrapper">
            <span class="pull-right"><a href="#">返回顶部<i class="fa fa-long-arrow-up"></i></a></span> © 2018 Copyright.
        </div>
    </footer>
    <div>
        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{asset('/lib/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/Chart.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/bootstrap-switch.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/jquery.matchHeight-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/dataTables.bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/select2.full.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/ace/ace.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/ace/mode-html.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/ace/theme-github.js')}}"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="{{asset('/admin/js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('/admin/js/index.js')}}"></script>

    </div>
</div>
</body>
</html>