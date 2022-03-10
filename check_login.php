<?php   
        session_start();
        $_SESSION["username"]=$_POST['username'];
        if($_SESSION["username"]==""){
               header('location:index.php');
        }
       
        $host = "us-cdbr-east-05.cleardb.net";
        $user = "b86f1f666b16da";
        $password = "60c89eb7";
        $database = "heroku_8321f7eb84ba79a";
        
        $conn = mysqli_connect($host,$user,$password,$database);
        $conn->set_charset("utf8");
        if(isset($_POST['username']) && isset($_POST['password'])){
            
            $username = $_POST['username'];
            $pass = md5($_POST['password']);
            $sql = "SELECT * FROM user WHERE username ='$username' AND password = '$pass'";
            $res = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($res);
            $count = mysqli_num_rows($res);
            if($count==1){
                $_SESSION["username"] =  $username ;
                $_SESSION["std_id"] = $row[3];
                header("location:home.php");
            }else{
                echo "<script type='text/javascript'>alert('username or password is not correct');</script>";
                echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
            }
           
        }
      

?>