<?php
    require_once ('./db/db.php');
    $sql = "select * from employee";
    $mysqli_result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>

<!--Some UI components were taken from https://uiverse.io/-->

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Users</title>
  <link rel="stylesheet" href="./css/manage_users.css">
  <link rel="stylesheet" href="css/resetCss.css">
    <script defer src="./js/manage_user.js"></script>
</head>
<body>
  <header>

  <div id="businessName">
    <span>PillBox</span>
  </div>

    <div id="svgWrapper">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
    </div>

</header>

  <div id="bodyWrapper">
    <div id="buttonArray">
      <div class="mydict">
        <div>
          <label>
            <input type="radio" name="radio">
            <span>Manage Customers</span>
          </label>
          <label>
            <input type="radio" name="radio" checked="">
            <span>Manage Users</span>
          </label>
        </div>
      </div>
    </div>

    <div id="cardsWrapper">
        <?php
        while ($row = mysqli_fetch_array($mysqli_result)) {
        ?>
          <div class="cards">
            <div class="card colour">
              <div class="user-svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2Zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1.202Z"/>
                </svg>
                <span><?php echo $row['first_name'] . " " .  $row['last_name']; ?></span>
              </div>
              <div class="manage-user-card">
                <span>Age</span>
                <span><?php echo $row['age']; ?></span>
              </div>
              <div class="manage-user-card">
                <span>Gender</span>
                <span><?php echo $row['gender']; ?></span>
              </div>
              <div class="manage-user-card">
                <span>Role</span>
                <span><?php
                    $sqlRole = "select * from role where role_id=". $row['role_id'];
                    $resultRole = mysqli_query($conn, $sqlRole);
                    $role = mysqli_fetch_assoc($resultRole);
                    echo $role['role_name'];
                    ?></span>
              </div>
              <div class="manage-user-card">
                <button onclick="manageUser(<?php echo $row['eid']; ?>)" class="button-manage-user">
                  <span class="spn-manage-user">Manage User</span>
                </button>
                <button onclick="deleteUser(<?php echo $row['eid']; ?>)" class="button-manage-user btn-delete">
                  <span class="spn-manage-user">Delete</span>
                </button>
              </div>
            </div>
          </div>
        <?php
            }
        ?>
    </div>


  </div>

  <footer>

      <div class="rights">2023 All Rights Reserved &copy;PillBox</div>

  </footer>

</body>
</html>