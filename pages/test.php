<?php
session_start();
    $arr=$_SESSION['arr'] ;
//echo $arr['name'];
//session_destroy(); 
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/test.css">
</head>
<body>
    
<nav class="navbar">
  <!--brand image-->
  <a href="#" class="brand">
                <img src="https://image.flaticon.com/icons/svg/753/753354.svg" alt="logo">
           </a>
  <!--toggler-->
  <button class="toggler">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

  <div class="nav-list-container">
    <ul class="nav-list">
    <li><a href="main_land.php">Home</a></li>
                    <li><a href="test.php">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="index.php">Log Out</a></li>
    </ul>
  </div>
</nav>

<main>
 
<div  class="contain">
      <!-- <div class="forms-container"> -->
      <div class="img">
			<img src="../img/signup.svg">
    </div>
        <div class="login-content" >
			<form action="edit.php" autocomplete="off" method="POST">
           		<div class="input-div one">
           		   <div class="i">
                              <i class="fas fa-user"></i>
                              
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="name"class="input" value=<?php echo $arr['name'];?> readonly>
           		   </div>
               </div>
               <div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-phone"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="phone"class="input" value=<?php echo $arr['name'];?> readonly>
           		   </div>
               </div>
               <div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-id-badge"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="roll"class="input" value=<?php echo $arr['roll'];?> readonly>
                  </div>
               </div>
               <div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-search-location"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="state"class="input" value=<?php echo $arr['state'];?> readonly>
           		   </div>
               </div>
               <div class="input-div">
           		   <div class="i">
           		   		<i class="far fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="email" name="email"class="input" value=<?php echo $arr['email'];?> readonly>
                  </div>
               </div>
               <div class="input-div">
           		   <div class="i"> 
           		    	<i class="fas fa-birthday-cake"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="date" name="dob" class="input" value=<?php echo $arr['dob'];?> readonly>
                   </div>
                </div>
                <div class="input-div">
           		   <div class="i"> 
                  <i class="fas fa-male"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="text" name="gender" class="input" value=<?php echo $arr['gender'];?> readonly>
                   </div>
                   
                </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="password" class="input" value=<?php echo $arr['pass'];?> readonly>
                   </div>
                </div>
              
              <input type="submit" class="btn" name='Edit'value=Edit>
            </form>
        </div>
       <!-- </div>  -->
</div>
</main>

<script >
    const toggler = document.querySelector('.navbar > .toggler'),
  navListContainer = document.querySelector('.navbar > .nav-list-container');

/*when toggler button is clicked*/
toggler.addEventListener(
  "click",
  () => {
    //convert hamburger to close
    toggler.classList.toggle('cross');
    //make nav visible
    navListContainer.classList.toggle('nav-active');
  },
  true
);

</script>
<script src="../main.js"></script>
</body>
</html>