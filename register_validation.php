<?php

    session_start();
    
    $_SESSION["fname"] = $_POST['fname'];
    if($_SESSION["fname"]==""){
            header('location:register.php');
    }
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    $host = "";
    $user = "a";
    $password = ";
    $database = "";
    $conn = mysqli_connect($host,$user,$password,$database);
    $conn->set_charset("utf8");

    
    if($conn->connect_errno){
        echo "Failed to connect to mysql".$conn->connect_errno;
    }
    $checksec= $_POST['sec'];
    $std_id = $_POST['std_id'];
    $qry = "SELECT * FROM $checksec WHERE  std_id ='$std_id'";
    $result = mysqli_query($conn,$qry);
    $resultcheck = mysqli_fetch_array($result);
    if($resultcheck[0]==null){
        echo "<script>alert('กรุณาใส่ Section ให้ถูกต้อง');</script>"; 
        echo "<script>window.location.href='register.php'</script>"; 
    }else{
        if($_POST['password']!=$_POST['password2']){
            echo "<script>alert('รหัสผ่านไม่ตรงกันกรุณากรอกใหม่');</script>"; 
            echo "<script>window.location.href='register.php'</script>"; 
        }else{
            $std_id = $_POST['std_id'];
            $user = $_POST['username'];
            $password = md5($_POST['password']);
            $section = $_POST['sec'];
    
            $check ="SELECT * FROM user WHERE username = '$user' or std_id ='$std_id'";
            $res = mysqli_query($conn,$check);
            $row = mysqli_fetch_array($res);
            $count = mysqli_num_rows($res);
            if($count==1){
                echo "<script>alert('มีสมาชิกนี้แล้ว กรุณาสมัครใหม่');</script>"; 
                echo "<script>window.location.href='register.php'</script>"; 
            }else{
                $sql = "INSERT INTO user(username,password,std_id,section) VALUES ('$user','$password','$std_id','$section')";
                mysqli_query($conn,$sql);
                // $yourmail = $_POST['mail'];
                // $email = $yourmail;
                // $detail = "<h2>Username : ".$_POST['username']."<br>"."Password : ".$_POST['password']."</h2>";
                // $mail = new PHPMailer();
                // $mail->isSMTP();
                // $mail->Host = "smtp.gmail.com";
                // $mail->SMTPAuth= true;
                // $mail->Port="587";
                // $mail->Username="phuthanet1372@gmail.com";
                // $mail->Password="0852235913";
                // $mail->Subject = "Username and Password for login HCI-sumonta [2/64]";
                // $mail->setFrom($email );
                // $mail->isHTML(true);
                // $mail->Body=$detail;
                // $mail->addAddress($email );
                // if($mail->send()){
                //     echo "Sent";
                // }else{
                //     echo "";
                // }
                echo "<script>alert('สมัครสมาชิกสำเร็จ');</script>"; 
                echo "<script>window.location.href='index.php'</script>"; 
    
    
    
            }
    
        }
        
    }

   


 
  
    



 
        // if(isset($_POST['mail']) && isset($_POST['content'])){
            // $email = $_POST['mail'];
            // $detail = $_POST['content'];



         
    
  



?>
