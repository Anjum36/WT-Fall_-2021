<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error{color: #f00;}
        </style>
</head>
<body>  

<?php
$idErr = $nameErr = $minimumErr = $maximumErr = "";
$id = $name = $minimum = $maximum = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["id"])) {
    $idErr = "id is required";
  } else {
    $id = test_input($_POST["id"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

   if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["minimum"])) {
        $minimum = "";
      } else {
        $minimum = test_input($_POST["minimum"]);
        if (!preg_match("!< 50000",$minimum)) {
          $minimumErr = "not found";
        }
      }

      if (empty($_POST["maximum"])) {
        $maximum = "";
      } else {
        $maximum = test_input($_POST["maximum"]);
        if (!preg_match("!> 150000",$minimum)) {
          $minimumErr = "not found";
        }
      }

  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Search Employee</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Search By ID: <input type="number" id="id" value="<?php echo $id;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
Search By Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Search By Salary:
  <br><br>
  Minimum: <input type="number" name="minimum" value="<?php echo $minimum;?>">
  <span class="error"><?php echo $minimumErr;?></span>
  <br><br>
  Maximum: <input type="number" name="maximum" value="<?php echo $maximum;?>">
  <span class="error"><?php echo $maximumErr;?></span>
 
  <br><br>
  <input type="submit" name="search" value="Search">  
</form>
</body>
</html>