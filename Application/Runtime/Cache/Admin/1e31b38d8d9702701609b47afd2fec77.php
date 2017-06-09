<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/unot/Public/style/bootstrap.css" rel="stylesheet">
    <link href="/unot/Public/style/font-awesome.css" rel="stylesheet">
    <link href="/unot/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/unot/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/unot/Public/style/demo.css" rel="stylesheet">
    <link href="/unot/Public/style/typicons.css" rel="stylesheet">
    <link href="/unot/Public/style/animate.css" rel="stylesheet">
    <link href="/unot/Public/style/page.css" rel="stylesheet">


    <link href='https://www.hanyi.studio/WebFonts/C3DB971E-443B-4D37-887D-530EE441EB6B/201705/css/ADAB1E56D69B0F14.css' rel='stylesheet' type='text/css'/>

</head>
<body>
	<!-- 头部 -->

<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/unot/Public/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/unot/Public/images/Unot.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>Unot</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                                基础管理                            </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/unot/index.php/Admin/cate/lst">
                                    <span class="menu-text">
                                        栏目类型管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/unot/index.php/Admin/article/lst">
                                    <span class="menu-text">
                                        文章管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                                系统                            </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/user/index.html">
                                    <span class="menu-text">
                                        用户管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/auth_group/index.html">
                                    <span class="menu-text">
                                        角色管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/auth_rule/index.html">
                                    <span class="menu-text">
                                        权限列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li class="active">商品分类管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加商品" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '/unot/index.php/Admin/Cate/add'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="20%">ID</th>
                                <th class="text-center" width="40%">栏目名称</th>
                                <th class="text-center" width="20%">是否开放</th>
                                <th class="text-center" width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td align="center"><?php echo ($vo["id"]); ?></td>
                                <td align="center" ><?php echo ($vo["catename"]); ?></td>
                                <td align="center" ><?php if($vo['open'] == 0): ?>开放<?php else: ?>私密<?php endif; ?></td>
                                <td align="center">
                                    <a href="/unot/index.php/Admin/Cate/edit/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="/unot/index.php/Admin/Cate/del/id/<?php echo ($vo["id"]); ?>" onClick="warning('确实要删除吗')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                        <div class="navigation">
                            <ol class="wp-paginate">
                                <?php echo ($page); ?>
                            </ol>
                        </div>
                    </table>
                </div>
                <div>
                	                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="/unot/Public/style/jquery_002.js"></script>
    <script src="/unot/Public/style/bootstrap.js"></script>
    <script src="/unot/Public/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/unot/Public/style/beyond.js"></script>
    


</body></html>