<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>

</head>
    <body>
        <form method="post" action="">
            user:<input type="text" name="username"><br />
            password:<input type="password" name="userpass"><br />
            <input type="submit" value="OK">

            <?php 
                    $name = $_POST['username'];
                    $pwd = $_POST['userpass'];
                    $file_path = '1.txt';
                    $file = file($file_path);
                    $exituser = false;
                    foreach($file as $f){
                          $array = explode("|", $f);
                          $user['name'] = $array[0];
                          $user['pwd'] = $array[1];
                          $users[] = $user;

                    }
                    foreach ($users as $user) {
                        $userpass = trim($user['pwd']);
                        if(($user['name'] == $name) && ($userpass == $pwd)){
                                $exituser = true;
                                break;
                        }
                    }
                    if ($exituser) {
                        echo 'ok';
                    }else{
                        echo 'no';
                    }
                
            
            ?>
        </form>
    </body>
</html>