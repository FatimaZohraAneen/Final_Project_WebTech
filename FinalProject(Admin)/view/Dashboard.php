<?php 
    session_start();

    if(!isset($_SESSION['flag'])){
       header('location: index.php'); 
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  
  color: white;
}

{
  box-sizing: border-box;
}

.bg-image {

  background-image: url("../asset/uploads/login.jpg");
  
  
  filter: blur(5px);
  -webkit-filter: blur(5px);
  
  
  height: 100%; 
  
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 60%;
  padding: 20px;
  text-align: center;
}



</style>
</head>
<body>
   

    <?php include_once 'welcome_statement.php';?>
	
	<div class="bg-image"></div>


<div class="bg-text">
			<tr>
				
					<hr><br>
					 
					Dashboard:<a href="Dashboard.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Profile:<a href="profile.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Settings:<a href="settings.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Financial Management:<a href="Financial Management.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Enrollment Management:<a href="Enrollment Management.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Report Generate:<a href="reportGenerate.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					FAQ:<a href="FAQ.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Timetable:<a href="timetable.php  "><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					About Section:<a href="about.php "><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Student Clubs:<a href="stdClub.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Library Management:<a href="libManage.php"><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Alumni Record:<a href="alumRec.php "><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Student Health Record:<a href="stdHealthRec.php "><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
					Discipline Management:<a href="displineManage.php  "><img src="../asset/uploads/button.webp" style="width:40px;height:22px;"></a></br>
						<font size="+1">
						<p align="right">
						Logout: <a href="../controller/logout.php"> <img src="../asset/uploads/lgout.png" style="width:40px;height:40px;"></a>
                        </p>
						</font>
						
						
						</form>
						
					</ul>

			</tr>
      
			</div>

	<?php include_once 'footer.php';?>
</body>
</html>