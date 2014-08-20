<?php 
    header("Content-type: text/html; charset=utf-8");
    mysql_connect('localhost', 'root', 'root');
    mysql_query("SET NAMES utf8");
    mysql_select_db('test');
    $sql = "SELECT * FROM news";
    $rs = mysql_query($sql);
    while ($row = mysql_fetch_array($rs)) {
        $list[] = $row;
        //echo '<pre>';
        //print_r($list);
    }
    foreach ($list as $l) {
        

    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
    <head>
    <title></title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
        <body>
            <div class="container">
            <h1><?php echo $l['title']; ?></h1>
            <p><?php echo $l['comment']; ?></p>
            <h6>文章发布时间:<?php echo date("Y-m-d",$l['date']); ?></h6>
            </div>
        </body>
        <?php     }?>
    </html>

