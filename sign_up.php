<!DOCTYPE html>

<!--Some UI components were taken from https://uiverse.io/-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/signup.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script src="./js/signup.js"></script>
    <link rel="icon" href="./Images/logo.png">
</head>

<body>
    <header>
        <div class="content">
            <div class="buttons">
                <a href="login.html"><button class="btn">Login</button></a>
            </div>
        </div>
    </header>
    <form method="post" name="frm" onsubmit="return validateform(this);">
        <div class="title">Sign Up</div>
        <hr style="height: 2px; background-color: white; border: 0px;"><br>
        <div class="subtitle">Fill in this form to sign up</div>
        <div class="form">
            <div class="titles">
                <div><label for="userid">User ID : </label></div>
                <div><label for="password">Password : </label></div>
                <div><label for="re-password">Re-type Password : </label></div>
                <div><label for="name">Name : </label></div>
                <div><label for="address">Address : </label></div>
                <div><label for="contact">Contact : </label></div>
                <div><label for="country">Country : </label></div>
                <div><label for="zipcode">ZIP Code :</label></div>
                <div><label for="email">Email :</label></div>
                <div><label for="sex">Sex :</label></div>
                <div><label for="language">Language :</label></div>
                <div><label for="about">About :</label></div>
            </div>
            <div class="options">
                <div><input class="inputbox" type="text" name="userid" id="userid"></div>
                <div><input class="inputbox" type="password" name="password1" id="password"></div>
                <div><input class="inputbox" type="password" name="password2" id="password"></div>
                <div><input class="inputbox" type="text" name="name" id="name"></div>
                <div><input class="inputbox" type="text" name="address" id="address"></div>
                <div><input class="inputbox" type="text" name="contact" id="contact"></div>
                <div>
                    <select class="dropdown" name="coutry" id="country">
                        <option value="none" selected>--Select your country--</option>
                        <option value="sl">Sri Lanka</option>
                        <option value="ind">India</option>
                        <option value="eng">England</option>
                        <option value="aus">Australia</option>
                        <option value="cnd">Canada</option>
                    </select>
                </div>
                <div><input class="inputbox" type="text" name="zipcode" id="zipcode"></div>
                <div><input class="inputbox" type="text" name="email" id="email"></div>
                <div>
                    <input type="radio" name="sex" id="male"><label class="text1" for="male">Male</label>
                    <input type="radio" name="sex" id="female"><label class="text1" for="female">Female</label>
                </div>
                <div>
                    <input class="box2" type="checkbox" name="english" id="english"><label class="text1"
                        for="english">English</label>
                    <input class="box2" type="checkbox" name="non-english" id="non-english"><label class="text1"
                        for="non-english">Non-English</label>
                </div>
                <div>
                    <textarea name="about" id="about" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
        <input type="submit" id="Submit" value="Sign Up">

        <div class="reg">Already registerd ? Login <a href="./sign_in.php">Here</a></div>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('./db/db.php');

    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];

    $sql = "INSERT INTO customer (gender, first_name, last_name, contact_number, email, address, age, password, dob) 
    VALUES ('".$sex."', '". $name ."', '', '".$contact."', '".$email."', '".$address."', 0, '".$password."', '')";

    if (mysqli_query($conn, $sql)) {

        $token = "PillBoxUser_".$result['cid'];
        $encodedToken =  base64_encode($token);

        echo "
            <script>
                sessionStorage.removeItem('tokenPillBox');
                sessionStorage.setItem('tokenPillBox', '$encodedToken');
            </script>";
        echo "
            <script>
            Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Succesfully Logged In',
                  showConfirmButton: false,
                  timer: 1500
                });
            setTimeout(function () {
                window.location ='./index.php'
            }, 1500);
            
            </script>";
    } else {
        echo "
        <script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Sign Up Failed!'
            });
        </script>";
    }
}

?>
</body>

</html>