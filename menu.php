<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>RAIOT Menu </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="container">
    <div class="nav-wrapper">
      <div class="left-side">
        <div class="nav-link-wrapper">
          <a href="index.html">Home</a>
        </div>

        <div class="nav-link-wrapper active-nav-link ">
          <a href="menu.html">Menu</a>
        </div>

        <div class="nav-link-wrapper">
          <a href="reservation.html">Reservations</a>
        </div>

        <div class="nav-link-wrapper">
          <a href="about.html">About</a>
        </div>

      </div>

      <div class="right-side">
        <div class="brand">
          <img src="images/RAIOT.png" alt="">
        </div>
      </div>
    </div>
    <div class="menu">

      <form method="post" style="float: left;">
        <input type="submit" name="show" value="show items">
      </form>
      <form method="post" action="insert.php" style="float: left;">
        <input type="submit" name="add" value="add item">
      </form>
      <form method="post" action="delete.php" style="float: left;">
        <input type="submit" name="delete" value="delete item">
      </form>
      <form method="post" action="edit.php" style="float: left;">
        <input type="submit" name="edit" value="edit item">
      </form>

      <br>

    </div>
  </div>
</body>
<div class="item-container">
  <?php
  include_once 'database.php';
  if (isset($_POST['show'])) {
    $try = "SELECT * FROM item;";
    $result = mysqli_query($conn, $try);
    $check = mysqli_num_rows($result);
    if ($check > 0) {
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $count += 1;
        if ($count % 3 == 1) {
  ?>
          <section>
          <?php
        }

          ?>
          <div class="item">
            <img src="<?php echo $row['image']; ?>">

            <h1><?php echo $row['title']; ?></h1>
            <p><?php echo $row['id']; ?></p>
            <p><?php echo $row['description']; ?></p>
            <h6><?php echo "€" . $row['price'] . ".00"; ?></h6>
            <span></span>
            <button>Add-cart</button>
          </div>

          <?php
          if ($count % 3 == 0) {
          ?>
          </section>
  <?php
          }
        }
      }
      mysqli_close($conn);
    }
  ?>
</div>

</html>