﻿<?php
$id=rand(1,5);
$image[1]='图片地址/1.png';
$image[2]='图片地址/2.png';
$image[3]='图片地址/3.png';
$image[4]='图片地址/ַ4.png';
$image[5]='图片地址/5ַ.png';
header("location:$image[$id]");
?>