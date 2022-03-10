
<?php
    if(isset($_POST['username']) && isset($_POST['std_id'])){
        $host = "us-cdbr-east-05.cleardb.net";
        $user = "b86f1f666b16da";
        $password = "60c89eb7";
        $database = "heroku_8321f7eb84ba79a";
        $conn = mysqli_connect($host,$user,$password,$database);
        $conn->set_charset("utf8");
        $std_id = $_POST['std_id'];
        $user = $_POST['username'];
        $sql1 = "SELECT * FROM user WHERE std_id='$std_id' and username ='$user'";
        $res = mysqli_query($conn,$sql1);
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res);
        if($count==1){
            if($_POST['password']!=$_POST['password2']){
                echo "<script>alert('รหัสผ่านไม่ตรงกันกรุณากรอกใหม่');</script>"; 
                echo "<script>window.location.href='update.php'</script>"; 
            }else{
                $newpass = $_POST['password'];
                $npass = md5($_POST['password']);
                $sql2 ="UPDATE user SET password='$npass' WHERE std_id='$std_id' and username ='$user'";
                if(mysqli_query($conn,$sql2)){
                    echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อย  Username : $user  Password : $newpass ');</script>"; 
                    echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
    
                }
               
            }
        }else{
            echo "<script>alert('ไม่มีสมาชิกนี้อยู่ในระบบ');</script>"; 
            echo "<script>window.location.href='index.php'</script>"; 
        }
    }else{
        echo "<script>window.location.href='index.php'</script>"; 
    }
   
   

?>
้