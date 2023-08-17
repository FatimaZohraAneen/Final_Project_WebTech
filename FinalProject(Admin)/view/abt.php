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

</style>
</head>
<body>

<div class="topnav">
<?php include_once 'extraSection.php';?>
</div>
<fieldset>
<h1>About</h1>
<p>Welcome to our student management system! Our system is designed to 
    streamline the management of student information and support educational institutions in delivering a seamless learning experience. With our user-friendly interface, you can easily navigate through a range of features and functionalities. From student enrollment and attendance tracking to grading, communication tools, scheduling, and robust reporting capabilities, our system covers it all.
     We prioritize data security and privacy,
     implementing stringent measures to safeguard personal information and ensuring compliance with relevant data protection regulations. Our system is customizable to meet the specific needs of your institution and scalable to accommodate educational institutions of all sizes. We offer comprehensive support services and training resources to ensure a smooth implementation and utilization of our system. 
     Join countless satisfied educational institutions that have already experienced the benefits of our student management system. 
     Contact us today to learn more and see how we can assist you in streamlining your administrative processes and enhancing the educational journey for your students.
</p>


<div id="test"></div>

<script>
const jsonStr = '{"name":"","type": "NSMS"}'; 
const jsonObject = JSON.parse(jsonStr); 

document.getElementById("test").innerHTML = jsonObject["type"];
</script>

</fieldset>
<?php include_once 'footer.php';?>