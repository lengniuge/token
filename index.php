<?php
    $str = file_get_contents('https://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');  //��ȡ��Ӧapi
    $str = json_decode($str,true);  //����JSON ������ַ������Ұ���ת��Ϊ PHP����
    $imgurl = 'https://cn.bing.com'.$str['images'][0]['url'];  //��ȡͼƬurl
    header("Location: {$imgurl}");  // ��ת��Ŀ��ͼ��
?>