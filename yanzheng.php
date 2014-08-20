
<?php 
    //接受参数
    $username = $_POST['username'];
    $password = $_POST['userpass'];
    //定义前缀
    $u = "user:";
    $p = "pwd:";
    //获取文件数据
    $FileData = file("1.txt");
    //定义数组
    $name = array();
    $pass = array();
    $Paw = array();
    //循环遍历处理数据
    foreach($FileData as $fd){
        list($user,$pwd) = explode("|",$fd);
        $name[] = substr($user,strlen($u));
        $pass[] = substr($pwd,strlen($p));
    }
    
    //去除预定义字符
    foreach($pass as $p){
        $Paw[] = rtrim(rtrim($p,"\n"),"\r");
    }
    //合并数组  第一个作为键 另一个作为值
    $NameAndPass = array_combine($name,$Paw);
    //判断传来的参数是否存在
    if(in_array($password,$NameAndPass) && array_key_exists($username,$NameAndPass)){
        echo "OK 登陆成功！";
    }else{
        echo "error 密码或用户名错误！";
    }


?>
