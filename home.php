<?php
    session_start();
    if($_SESSION["username"]==""){
        header('location:index.php');
    }
        
  $host = "";
    $user = "a";
    $password = ";
    $database = "";
    $conn = mysqli_connect($host,$user,$password,$database);
    $conn->set_charset("utf8");
    $user = $_SESSION['username'];
    $stdid =  $_SESSION["std_id"];
    $sql = "SELECT * FROM user WHERE username='$user' and std_id='$stdid'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
    $sql2 = "SELECT * FROM $row[4] WHERE std_id='$row[3]'";
    $res2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_array($res2);
    if($row2== null){
        echo "";
        $fname = "ไม่มีชื่ออยู่ในระบบ";
        $id = "ไม่มีรหัสอยู่ในระบบ";
        $passfilezilla ="ไม่มีรหัสอยู่ในระบบ";
        $group = "ไม่มีรหัสอยู่ในระบบ";
        $passgroup = "ไม่มีรหัสอยู่ในระบบ";
    }else{
        $fname = $row2[1];
        $id = $row2[0];
        $passfilezilla = $row2[2];
        $group = $row2[3];
        $passgroup = $row2[4];
    }



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION["username"];   ?> </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="font.css"> 
    <style>
        .font{
            color:white;
        }
   
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">HCI-sumonta [2/64]</a>
    <div class="d-flex font">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo "Welcome ".$_SESSION["username"]; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
            </ul>
            </li>
        </ul>
        
    </div>
  </div>
</nav>
<h1 class="mt-5 text-center" ><?php echo $id." <br> ".$fname; ?></h1>
<div class="container flex">

        <div>
            <div class="card mt-5">
                <div class="card-header  bg-dark text-white fs-2">
                    รหัสส่งงานเดี่ยว
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>HOST : 202.28.94.18</p>
                    <p>USERNAME : <?php echo $id; ?></p>
                    <p>PASSWORD : <?php echo $passfilezilla ;?></p>
                    </blockquote>
                </div>
                </div>
            </div>
        <div>
        <div class="card mt-5 ">
                <div class="card-header  bg-dark text-white fs-2">
                    รหัสส่งงานกลุ่ม
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>HOST : 202.28.94.18</p>
                    <p>USERNAME : <?php echo $group; ?></p>
                    <p>PASSWORD : <?php echo $passgroup; ?></p>
                    </blockquote>
                </div>
                </div>
            </div>
        <div class="mt-5">
            <h3>**** Readme ****</h3>
            <p style="color:red;" class="mt-2"> - ก่อนส่งต้อง VPN ด้วยกรณีไม่ได้ใช้เน็ตของมหาวิทยาลัย</p>
            <p style="color:red;" class="mt-2"> - ลิ้งตรวจสอบงาน ว่าเราอัปไฟล์สำเร็จไหม </p>
            <p style="color:red;" class="mt-2"> - งานกลุ่ม : http://202.28.94.18/hci64/s#/รหัสนักศึกษามีขีด  หมายเหตุ # คือเลขเซต </p>
            <p style="color:red;" class="mt-2"> - งานกลุ่ม : http://202.28.94.18/hci64/group/G#  หมายเหตุ # คือเลขกลุ่มเช่น 01 </p>
            <h3>**** FileZila ****</h3>
            <p style="color:red;" class="mt-2"> - โหลด FileZila ได้ที่ <a href="https://filezilla-project.org/download.php">https://filezilla-project.org/download.php</a></p>
            <p style="color:red;" class="mt-2"> - ห้ามส่งไฟล์ zip </p>
            <p style="color:red;" class="mt-2"> - ตั้งชื่อด้วยภาษาอังกฤษพิมพ์เล็กเท่านั้น</p>
            <p style="color:red;" class="mt-2"> - ชื่อห้ามเว้นวรรคให้ใช้_</p>
            <p style="color:red;" class="mt-2"> - ชื่อห้ามมีสัญลักษณ์พิเศษ </p>
            <p style="color:red;" class="mt-2"> - สามารถอัปได้หลายโฟลเดอร์ เช่น pic_mockup </p>


            <p style="color:red;" class="mt-2"> ปล . สำหรับงานกลุ่มให้ตัวแทนส่งคนเดียว</p>
        </div>
        </div>
        
        <div style="height: 50px;"></div>
</div>


    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
