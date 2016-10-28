<?php
include "model/m_adminpage.php";
$total_product=count_product();
$total_order=count_order1();
$total_news=count_news();
$total_customer=count_khachang();
$order_chuaxl=count_order1_chuaxl();
$order_daxl=count_order1_daxl();
$order_new=count_order1_new();
$get_order=get_order();
include "view/v_adminpage.php";
?>