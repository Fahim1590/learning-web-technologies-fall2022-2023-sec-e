<?php include('../controller/viewProfilecheck.php'); ?>

<html>


<body>
    <div class="content"> 
        <h1>  PROFILE </h1>
    <p id="profileError"> </p>
    <form name="profile" action="" method="post">
    <br>
    <label> ID : </label> <input type="text" id="name" name="name" value="<?php echo $idOfUser; ?>"> <br>
    <br>
    Name : <?php echo $nameOfUser; ?> <br>
    <br>
    Email : <input type="text" id="email" name="email" value="<?php echo $emailOfUser; ?>"> <br>
    <br>
    User type : <input type="text" id="contact" name="contact" value="<?php echo $typeOfUser; ?>"> <br>
    <br>
   
    </form>

    <?php echo $errorPrf ; ?>

    <br><br><br> 
    <a href="../view/adminHome.php"> Go home </a> <br>
    
    </div>
</body>
</html>