<!DOCTYPE html>

<!--Some UI components were taken from https://uiverse.io/-->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PillBox</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/resetCss.css">
    <link rel="stylesheet" href="css/sign_in.css">

    <script src="./js/sign_in.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script src="./js/main.js"></script>

</head>
<body>
<header>
    <div class="search">
        <input type="text" class="search_input" placeholder="Type your text">
        <button class="search_button">
            <svg class="search_icon" aria-hidden="true" viewBox="0 0 24 24">
                <g>
                    <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                </g>
            </svg>
        </button>
    </div>

    <div id="businessName">
        <span>PillBox</span>
    </div>

    <div id="iconsWrapper">
        <div id="cartIcon" onclick="redirectCart()">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                 class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z"/>
            </svg>
        </div>
        <div id="callIcon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone"
                 viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
        </div>
        <div>
            <button class="sign_in_button" onclick="window.location = './sign_up.php'"> Sign Up
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor"
                              d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                    </svg>
                </div>
            </button>
        </div>
    </div>

</header>

<div id="bodyWrapper">
    <div id="buttonArray">
        <div class="wrapper">
            <div class="option">
                <input class="input" type="radio" name="btn" value="option1">
                <div class="btn">
                    <span class="span">Medicine</span>
                </div>
            </div>
            <div class="option">
                <input class="input" type="radio" name="btn" value="option2">
                <div class="btn">
                    <span class="span">Medical Devises</span>
                </div>
            </div>
            <div class="option">
                <input class="input" type="radio" name="btn" value="option3">
                <div class="btn">
                    <span class="span">Wellness</span>
                </div>
            </div>
            <div class="option">
                <input class="input" type="radio" name="btn" value="option3">
                <div class="btn">
                    <span class="span">Personal Care</span>
                </div>
            </div>
            <div class="option">
                <input class="input" type="radio" name="btn" value="option4">
                <div class="btn">
                    <span class="span">GNC</span>
                </div>
            </div>
            <div class="option">
                <input class="input" type="radio" name="btn" value="option5">
                <div class="btn">
                    <span class="span">SWISSE</span>
                </div>
            </div>
        </div>
    </div>

    <div id="loginFormWrapper">
        <div id="login_form">
            <form method="post" class="form" id="sign_in_form" action="sign_in.php">
                <p class="form-title">Sign in to your account</p>
                <div class="input-container">
                    <input id="inputEmail" placeholder="Enter email" type="email" name="email" required>
                    <span>
                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                                stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </span>
                </div>
                <div id="inputPassword" class="input-container">
                    <input placeholder="Enter password" type="password" name="password" required>

                    <span>
                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round"
                                stroke-linecap="round"></path>
                          <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                      </span>
                </div>
                <button id="submitButton" class="submit" type="submit">
                    Sign in
                </button>

                <p class="signup-link">
                    No account?
                    <a href="./sign_up.php">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="rights">2023 All Rights Reserved &copy;PillBox</div>
</footer>
<?php
    require_once('./db/db.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customer WHERE email='" . $email . "' AND password='" . $password . "'";
    $mysqli_result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($mysqli_result);
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $result == '') {
        echo "
        <script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'No user Found!'
            });
        </script>";
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    }
?>
</body>
</html>