

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รีเซตรหัสผ่าน</title>
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
        .txt{
            background-color: red;
            color: white;
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
        <form action="updated.php" method="post" class="pt-3">
        <h1 class="text-center">รีเซตรหัสผ่าน </h1>
            <div class="box mt-5">
                <input type="text" name="username" placeholder="ชื่อผู้ใช้"  class="form-control" required>
            </div>
            <div class="box mt-3">
                <input type="text" name="std_id" placeholder="รหัสนักศึกษามีขีด" pattern="[0-9]{9}-[0-9]{1}" class="form-control" required>
            </div>
            <div class="box mt-3">
                <input type="password" name="password" placeholder="รหัสผ่านใหม่"  class="form-control" required>
            </div>
            <div class="box mt-3">
                <input type="password" name="password2" placeholder="ยืนยันรหัสผ่านใหม่"  class="form-control" required>
            </div>
            
            <div class="box mt-3">
            <input type="submit" value="ยืนยัน" class="btn btn-success form-control" >
                <!-- <button type="button" class="btn btn-warning form-control" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    ยืนยัน
                </button>

               
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">ยืนยันการเปลี่ยนรหัสผ่าน</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            กรุณากดยืนยันเพื่อเป็นการเปลี่ยนรหัสผ่าน
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger form-control" data-bs-dismiss="modal">ยกเลิก</button>
                            <input type="submit" value="ยืนยัน" class="btn btn-success form-control" >
                        </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="line mt-3"></div>
            <a href="index.php" class="btn btn-primary form-control mt-3">เข้าสู่ระบบ</a>
        </form>
    </div>






    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>