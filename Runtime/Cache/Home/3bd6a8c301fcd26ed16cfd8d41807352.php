<?php if (!defined('THINK_PATH')) exit();?><!-- 这个是默认的上下布局文件-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>南京邮电大学通达学院在线问卷调查</title>
    <link rel="stylesheet" href="<?php echo (C("CSS_URL")); ?>base.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (C("CSS_URL")); ?>global.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (C("CSS_URL")); ?>login.css" type="text/css">

</head>
<body>
<div style="clear:both;"></div>
<!-- 页面头部 start -->
<div class="header w990 bc mt15">
    <div class="logo w990">
        <!--登陆页面 logo-->
        <h2 class="fl"><a href="<?php echo U('Index/index');?>"><img src="<?php echo (C("IMG_URL")); ?>logo.png" alt="logo"></a></h2>
    </div>
</div>
<!-- 页面头部 end -->
<!-- 登录主体部分start -->
<div class="login w990 bc mt10">
    <div class="login_hd">
        <h2>调查问卷  新生登陆</h2>
        <br/>
    </div>
    <div class="login_bd">
        <div class="login_form fl">
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="">用户名：</label>
                        <input type="text" class="txt" name="username" value="<?php echo ($user["username"]); ?>"/>
                    </li>
                    <li>
                        <label for="">密码：</label>
                        <input type="password" class="txt" name="password" value="<?php echo ($user["password"]); ?>"/>

                    </li>

                    <li class="checkcode">
                        <label for="">验证码：</label>
                        <input type="text"  name="checkcode" />
                        <img src="<?php echo U('Login/verifyImg');?>" onclick="this.src='<?php echo U('Login/verifyImg');?>'" />

                    </li>

                    <li>
                        <input type="submit" value="登陆" class="reg_btn" />

                    </li>
                </ul>
            </form>
            <div style="color:#F00 ;font-size:20px;"><?php echo ($error); ?></div>
            <div class="coagent mt15">
                <dl>
                    <dt>登陆小提示：账号是你高考的准考证，密码你身份证的后面6位</dt>

                </dl>
            </div>
        </div>

        <div class="guide fl">
           <img src="<?php echo (C("IMG_URL")); ?>img1.jpeg" style="height: 100% ;width: 100%"/>
        </div>

    </div>
</div>
<!-- 登录主体部分end -->

</body>
</html>