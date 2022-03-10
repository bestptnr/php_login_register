<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก HCI-sumonta [2/64]</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="font.css">
    <style>
        body{
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            margin-top: 100px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 10px;
            margin-bottom: 100px;
        }
        .flex-box{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        input[type="text"],input[type="password"],select{
            height: 50px;
        }
        .box-1,.box-2{
           width: 45%;
           margin: 5px;
        }
        .box{
            width: 85%;
            margin-left: auto;
            margin-right: auto;
        }
        @media only screen and (max-width:768px){
                form{
                width: 80%;
            
            }
            .box-1,.box-2{
                width: 100%;

            }
        }
    </style>
</head>
<body>
    
    <div class="container">
        <form action="register_validation.php" method="post" class="pt-3">
            <h1 class="text-center">สมัครสมาชิก</h1>
            <div class="flex-box">
                <div class="box-1">
                    <div class="box mt-5">
                        <label for="username">ชื่อผู้ใช้</label>
                        <input type="text" name="username" placeholder="กรอกชื่อผู้ใช้"  class="form-control mt-2" required>
                    </div>
                    <div class="box mt-3">
                        <label for="password">รหัสผ่าน</label>
                        <input type="password" name="password" placeholder="กรอกรหัสผ่าน"  class="form-control mt-2" required>
                    </div>
                    <div class="box mt-3">
                        <label for="password2">ยืนยันรหัสผ่าน</label>
                        <input type="password" name="password2" placeholder="ยืนยันรหัสผ่าน"  class="form-control mt-2" required>
                    </div>
            
                </div>
                <div class="box-2">
                    <div class="box mt-5">
                        <label for="mail">Email </label>
                        <input type="email" name="mail" placeholder="กรอกอีเมล" class="form-control mt-2" required>
                    </div>
                    <div class="box mt-3">
                        <label for="std_id">รหัสนักศึกษามีขีด </label>
                        <input type="text" name="std_id" placeholder="เช่น 643020xxx-x" pattern="[0-9]{9}-[0-9]{1}" class="form-control mt-2" required autocomplete="off" >
                    </div>
                    <div class="box mt-3">
                        <label for="fname">ชื่อ - นามสกุล (มีคำนำหน้า)</label>
                        <input type="text" name="fname" placeholder="เช่น นายภูธเนศ รูปสูง"  class="form-control mt-2" required autocomplete="off" >
                    </div>
                    <div class="box mt-3">
                    <label for="sec">เลือกกลุ่มเรียน</label>
                        <select name="sec" class="form-select mt-2" required>
                            <option value="sec1">sec1</option>
                            <option value="sec2">sec2</option>
                            <option value="sec3">sec3</option>

                        </select>
                    </div>
                    
                </div>
            </div>
            <div class="box">
            
                <input type="submit" value="ยืนยันสมัครสมาชิก" class="form-control mt-3 btn btn-success">
    
            </div>
            <hr>
            <div class="box pb-3">
                <a href="index.php" class="form-control mt-2  btn btn-primary">เข้าสู่ระบบ</a>
            </div>
           
  
        </form>
    </div>





<script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>