<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kyle's PHP</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div id=wrapper>
    <ul>
        <li>Name: <?php echo $_GET["name"]; ?></li>
        <li>Email: <?php echo $_GET["email"]; ?></li>
        <li><?php if($_GET["phone"] != ""){
                echo "Phone: "; 
                echo $_GET["phone"];
            }?>
         </li>
        <li><?php if($_GET["state"] != ""){
                echo "State: ";  
                echo $_GET["state"]; 
            }?>
         </li>
    </ul>
  </div> <!--end wrapper-->
</body>
</html>