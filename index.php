
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ HCI-sumonta [2/64]</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="font.css">
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            width: 40%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 10px;
        }
        .line{
            height: 2px;
            width: 70%;
            background-color: black;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.6;
        }
        input[type="text"],input[type="password"]{
            height: 50px;
        }
        @media only screen and (max-width:768px){
            form{
            width: 80%;
          
        }
        }
    </style>
</head>
<body>
    
    <div class="container">
        <form action="check_login.php" method="post" class="pt-3">
        <h1 class="text-center">เข้าสู่ระบบ </h1>

            <h1 class="text-center"> HCI-sumonta [2/64]</h1>
            <div class="box mt-5">
                <input type="text" name="username" placeholder="ชื่อผู้ใช้"  class="form-control" required>
            </div>
            <div class="box mt-3">
                <input type="password" name="password" placeholder="รหัสผ่าน"  class="form-control" required>
            </div>
            
            <div class="box mt-3">
                <input type="submit" value="เข้าสู่ระบบ" class="btn btn-primary form-control">
            </div>
            <div class="line mt-3"></div>
            <a href="register.php" class="btn btn-success form-control mt-3">สมัครสมาชิก</a>
            <a href="update.php" class="btn btn-warning form-control mt-3">ลืมรหัสผ่าน</a>
        </form>
    </div>





<script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>