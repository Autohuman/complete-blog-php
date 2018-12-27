<?php
  if ($_SESSION['user']) {}
  else{
    echo "<script type='text/javascript'>alert('尚未登录，请先登录');</script>";
    echo "<script type='text/javascript'>window.location = 'http://47.101.196.53/CMS';</script>";
    exit(0);
  }
 ?>
