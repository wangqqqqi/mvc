<?php
/* Smarty version 3.1.30, created on 2017-10-30 10:01:11
  from "D:\wamp\www\web\mvcyyy\template\index\guanzhu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f6f867d10a76_23777711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cbd7e6c375df3e5765ac6ce443d33b623a47425' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\guanzhu.html',
      1 => 1509357667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f6f867d10a76_23777711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1186159f6f867ccde76_14822481';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关注</title>
</head>
<style>
    *{
        padding:0;
        margin:0;
        text-decoration: none;
        list-style: none;
    }
    .authors{
        width:700px;
        height:auto;
    }
    .authors>li{
        width:100%;
        height:55px;
        padding:20px 0px;
        border-bottom: 1px solid #DFDFDF;
    }
    .head{
        width:55px;
        height:55px;
        float: left;
        border-radius: 50%;
        border:1px solid #9d9d9d;
        box-sizing: border-box;
    }
    .head>a{
        display: block;
        width:100%;
        height:100%;
    }
    .head>a>img{
        width:100%;
        height:100%;
        border-radius: 50%;
    }
    .message{
        width:auto;
        height:55px;
        float: left;
        line-height: 18px;
        margin-left: 20px;
    }
    .message>span{
        font-size: 10px;
        color: #9d9d9d;
    }
    .guanzhu{
        width:100px;
        height:30px;
        background: green;
        margin-top:20px;
        float: right;
        text-align: center;
        line-height: 30px;
        font-size: 14px;
        color: #fff;
        border-radius: 20px;
    }
</style>
<body>
    <ul class="authors">
        <li>
            <div class="head">
                <a href="">
                    <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                </a>
            </div>
            <div class="message">
                <h4>心碎之人</h4>
                <span>关注 12 | 粉丝 9981 | 文章 89</span><br>
                <span>写了15篇文章，获得了10个喜欢</span>
            </div>
            <div class="guanzhu">+ 关注</div>
        </li>
    </ul>
</body>
</html><?php }
}
