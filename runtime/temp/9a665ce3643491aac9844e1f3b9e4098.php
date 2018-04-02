<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"D:\wamp64\www\yiyuanchengcai\fenda\public/../application/admin\view\smalltalk\add_edit_audio.html";i:1522640964;s:86:"D:\wamp64\www\yiyuanchengcai\fenda\public/../application/admin\view\public\header.html";i:1522205384;s:86:"D:\wamp64\www\yiyuanchengcai\fenda\public/../application/admin\view\public\footer.html";i:1510056767;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
    <![endif]-->
    <!--[if IE 9]>
    <html lang="en" class="ie9 no-js">
        <![endif]-->
        <!--[if !IE]>
        <!-->
        <html lang="en">
            <!--<![endif]-->
            <!-- BEGIN HEAD -->
<head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta charset="utf-8">
            <title>__SITE_TILTLE__</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta content="Preview page of Metronic Admin Theme #1 for bootstrap inputs, input groups, custom checkboxes and radio controls and more" name="description">
            <meta content="" name="author">
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href="__PUBLIC__/static/admin/css.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/library/fontasome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/simple-line-icons.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/bootstrap-switch.css" rel="stylesheet" type="text/css">
            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN THEME GLOBAL STYLES -->
            <link href="__PUBLIC__/static/admin/components.css" rel="stylesheet" id="style_components" type="text/css">
            <link href="__PUBLIC__/static/admin/plugins.css" rel="stylesheet" type="text/css">
            <!-- END THEME GLOBAL STYLES -->
            <!-- BEGIN THEME LAYOUT STYLES -->
            <link href="__PUBLIC__/static/admin/layout.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/grey.min.css" rel="stylesheet" type="text/css" id="style_color">

            <script src="__PUBLIC__/static/admin/jquery_002.js" type="text/javascript"></script>

            <!-- END THEME LAYOUT STYLES -->
            <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}


table{
    table-layout:fixed;
}
table td{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.self-container{
    width:700px;
}

.img{
    width:150px;
    height:150px;
    background: #fff;
    position: relative;
}
.img .show-img{
    display: block;
    width:100%;
    height:100%;
    text-align: center;
    line-height: 150px;
    font-size: 18px;  
}
.img input[type='file']{
    position: absolute;
    width:150px;
    height:150px;
    opacity: 0;
    top:0;
}

</style>
</head>
            <!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid" cz-shortcut-listen="true">
            <div class="page-wrapper">
                <!-- BEGIN HEADER -->
                <div class="page-header navbar navbar-fixed-top">
                    <!-- BEGIN HEADER INNER -->
                    <div class="page-header-inner ">
                        <!-- BEGIN LOGO -->
                        <div class="page-logo">
                            <a href="<?php echo url('admin/index/index'); ?>" style="color: #fff;padding: 15px;font-size: 16px;">__SITE_TILTLE__</a>
                            <div class="menu-toggler sidebar-toggler">
                                <span></span>
                            </div>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span></span>
                        </a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">

                                <li class="dropdown dropdown-user">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <img alt="" class="img-circle" src="__PUBLIC__/static/admin/avatar3_small.jpg">
                                        <span class="username username-hide-on-mobile">管理员</span>
                                    </a>

                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <li class="dropdown dropdown-quick-sidebar-toggler">
                                    <a href="javascript:;" class="dropdown-toggle"> <i class="icon-logout"></i>
                                    </a>
                                </li>
                                <!-- END QUICK SIDEBAR TOGGLER --> </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU --> </div>
                    <!-- END HEADER INNER --> </div>
                <!-- END HEADER -->
                <!-- BEGIN HEADER & CONTENT DIVIDER -->
                <div class="clearfix"></div>
                <!-- END HEADER & CONTENT DIVIDER -->
                <!-- BEGIN CONTAINER -->
                <div class="page-container">
                    <!-- BEGIN SIDEBAR -->
                    <div class="page-sidebar-wrapper">

                        <div class="page-sidebar navbar-collapse collapse">

                            <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                <li class="sidebar-toggler-wrapper hide">
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                </li>

                                <li class="nav-item <?php echo  is_active('user','active');?>
                                    ">
                                    <a href="<?php echo url('user/index'); ?>" class="nav-link nav-toggle"> <i class="icon-user"></i>
                                        <span class="title">用户管理</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo  is_active('vip','active');?>
                                    ">
                                    <a href="<?php echo url('vip/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-user"></i>
                                        <span class="title">答主管理</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo  is_active('vpcategory','active');?>
                                    ">
                                    <a href="<?php echo url('vpcategory/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-cup"></i>
                                        <span class="title">答主分类管理</span>
                                    </a>

                                </li>
                                <li class="nav-item <?php echo  is_active('slider','active open');?>
                                    <?php echo  is_active('mobilehdp','active open');?>
                                    ">
                                    <a href="<?php echo url('slider/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-cup"></i>
                                        <span class="title">轮播图管理</span>
                                        <span class="arrow"></span>
                                    </a>

                                    <ul class="sub-menu" >
                                        <li class="nav-item start ">
                                            <a href="<?php echo url('mobilehdp/index'); ?>" class="nav-link ">
                                                <i class="icon-bar-chart"></i>
                                                <span class="title">移动端</span>
                                            </a>
                                        </li>
                                        <li class="nav-item start ">
                                            <a href="<?php echo url('slider/index'); ?>" class="nav-link ">
                                                <i class="icon-bulb"></i>
                                                <span class="title">原首页</span>
                                                <span class="badge badge-success">1</span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>

                                <li class="nav-item <?php echo  is_active('myask','active');?>
                                    ">
                                    <a href="<?php echo url('myask/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-question"></i>
                                        <span class="title">提问管理</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo  is_active('listen','active');?>
                                    ">
                                    <a href="<?php echo url('listen/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-cup"></i>
                                        <span class="title">偷听管理</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo  is_active('follow','active');?>
                                    ">
                                    <a href="<?php echo url('follow/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-cup"></i>
                                        <span class="title">关注管理</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo  is_active('headline','active');?>
                                    ">
                                    <a href="<?php echo url('headline/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-cup"></i>
                                        <span class="title">头条管理</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo  is_active('qacategory','active open');?>
                                    <?php echo  is_active('quickask','active open');?>
                                    <?php echo  is_active('answer','active open');?>
                                    ">
                                    <a href="<?php echo url('qacategory/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-cup"></i>
                                        <span class="title">快问分类管理</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu" >
                                        <li class="nav-item <?php echo  is_active('qacategory','active');?>
                                            ">
                                            <a href="<?php echo url('qacategory/index'); ?>" class="nav-link nav-toggle">
                                                <i class="icon-cup"></i>
                                                <span class="title">快问分类管理</span>
                                            </a>
                                        </li>
                                        <li class="nav-item <?php echo  is_active('quickask','active');?>
                                            ">
                                            <a href="<?php echo url('quickask/index'); ?>" class="nav-link nav-toggle">
                                                <i class="icon-cup"></i>
                                                <span class="title">快问管理</span>
                                            </a>
                                        </li>
                                        <li class="nav-item <?php echo  is_active('answer','active');?>
                                            ">
                                            <a href="<?php echo url('answer/index'); ?>" class="nav-link nav-toggle">
                                                <i class="icon-cup"></i>
                                                <span class="title">快问回答管理</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item <?php echo  is_active('smalltalk','active open');?>
                                    <?php echo  is_active('special','active open');?>
                                    ">
                                    <a href="<?php echo url('smalltalk/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-disc"></i>
                                        <span class="title">课程管理</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu" >
                                        <li class="nav-item start ">
                                            <a href="<?php echo url('smalltalk/index'); ?>" class="nav-link ">
                                                <i class="icon-bar-chart"></i>
                                                <span class="title">课程管理</span>
                                            </a>
                                        </li>
                                        <li class="nav-item <?php echo  is_active('special','active');?>
                                            ">
                                            <a href="<?php echo url('special/index'); ?>" class="nav-link nav-toggle">
                                                <i class="icon-disc"></i>
                                                <span class="title">课程专题管理</span>
                                            </a>
                                        </li>

                                        <li class="nav-item <?php echo  is_active('order','active');?>
                                            ">
                                            <a href="<?php echo url('order/index'); ?>" class="nav-link nav-toggle">
                                                <i class="icon-disc"></i>
                                                <span class="title">课程订单管理</span>
                                            </a>
                                        </li>

                                        <li class="nav-item <?php echo  is_active('comment ','active');?>
                                            ">
                                            <a href="<?php echo url('comment/index'); ?>" class="nav-link nav-toggle">
                                                <i class="icon-disc"></i>
                                                <span class="title">课程评论管理</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item <?php echo  is_active('system','active');?>
                                    ">
                                    <a href="<?php echo url('system/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-bell"></i>
                                        <span class="title">系统设置</span>

                                    </a>

                                </li>

                                <li class="nav-item ">
                                    <a href="/" target="_balnk" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">进入首页</span>

                                    </a>

                                </li>

                            </ul>
                            <!-- END SIDEBAR MENU -->
                            <!-- END SIDEBAR MENU --> </div>
                        <!-- END SIDEBAR --> </div>
                    <!-- END SIDEBAR -->
                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <!-- BEGIN CONTENT BODY -->
                        <div class="page-content" style="min-height: 1021px;">
                            <!-- BEGIN PAGE HEADER--> 

<div class="self-container mt-3">
    <h3>小节添加/更新</h3>
     <form action="<?php echo url('add_edit_audio'); ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
            <label >小节名称</label>
            <div  >
                <input type="text" class="form-control" name="audio_name" value="<?php echo $info['audio_name']; ?>">
            </div>
        </div>
        
          <div class="form-group">
            <label >内容</label>
            <div  >
              <input type="file" name="audio">
            </div>
        </div>

       
        <div class="form-group">
          <input type="hidden" name="xiaojie_id" value="<?php echo $id; ?>">
          <input type="hidden" name="mulu_id" value="<?php echo $mulu_id; ?>">
            <input type="submit" class="btn btn-info" value="提交">
        </div>
     </form>
</div>

<!-- 配置文件 -->
    <script type="text/javascript" src="__PUBLIC__/static/library/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="__PUBLIC__/static/library/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('baidu_edit');
    </script>
 <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 © 技术支持
                    <a target="_blank" href="http://www.bslxx.com/contact">smith</a> &nbsp;|&nbsp;
                    
                </div>
                <div class="scroll-to-top" style="display: none;">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
       <!--  <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
             
                <li>
                    <a href="<?php echo url('intelligence/index'); ?>" >
                        <span>资讯管理</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('user/index'); ?>" >
                        <span>用户管理</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
               
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav> -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script async="" src="__PUBLIC__/static/admin/gtm.js"></script><script async="" src="__PUBLIC__/static/admin/analytics.js"></script><script src="__PUBLIC__/static/admin/jquery_002.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/bootstrap.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/js.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/jquery_003.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/jquery.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/bootstrap-switch.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="http://keenthemes.com/preview/metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
       <script src="__PUBLIC__/static/admin/theme2/layout.min.js" type="text/javascript"></script>
           
        <script src="__PUBLIC__/static/admin/quick-sidebar.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/quick-nav.js" type="text/javascript"></script>

        

        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })

            function changeImg(img, div){
                var imgUrl = window.URL.createObjectURL(img);
                $(div).find('img').attr('src', imgUrl);
            }

            $('#sliderimg input').change(function(e){
                var img = e.target.files[0];
                changeImg(img, '#sliderimg');
            })

            $('#userimg input').change(function(e){
                var img = e.target.files[0];
                changeImg(img, '#userimg');
            })

            $('#cateimg input').change(function(e){
                var img = e.target.files[0];
                changeImg(img, '#cateimg');
            })
        </script>
   



</body></html>