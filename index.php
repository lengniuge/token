<?php
    $str = file_get_contents('https://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');  //读取必应api
    $str = json_decode($str,true);  //接受JSON 编码的字符串并且把它转换为 PHP变量
    $imgurl = 'https://cn.bing.com'.$str['images'][0]['url'];  //获取图片url
    header("Location: {$imgurl}");  // 跳转至目标图像
?>