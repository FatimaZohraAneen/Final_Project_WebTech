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

</style>
</head>

<fieldset>
<div class="topnav">
<p><a href="Dashboard.php">Dashboard</a></p>
</div>
</fieldset>
<fieldset>
<h1>FAQ</h1>
      <form method="POST" action="../controller/faqCheck.php" enctype="">
      <!-- <td><label>Question: </label></td></br>
      <input type="text" name="question" class="box" required>
    
    </br></br>
      <td><label>Answer: </label></td></br>
      <input type="text" name="answer" class="box" required>
    
    </br></br>
      <input type="submit" name="submit" value="Submit" class="btn"></br></br> -->

      <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="../controller/commonSelectCheck.php">
                                <table  class="table">
                                        <tr align="left">
                                            <td class="select">
                                                <select name="faq"  class="cformat" onchange="change1()" id='id1'>
                                                    <option value="addfaq">Add FAQ</option>
                                                    <option value="faqdetails">FAQ Details</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <td align="center">
                                <form method="post" action="../controller/faqCheck.php">
                                    <fieldset>
                                        <legend>Add FAQ</legend>
                                        <table>
                                            <tr>
                                                <td>Question</td>
                                                <td>:<input type="text" name="question" />
                                                <?php
                                                    if(isset($_SESSION["emtquestion"])){
                                                        echo $_SESSION["emtquestion"];
                                                        unset($_SESSION["emtquestion"]);
                                                    }
                                                    if(isset($_SESSION['questionerr'])){
                                                        echo $_SESSION['questionerr'];
                                                        unset($_SESSION['questionerr']);
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Answer</td>
                                                <td>:<input type="text" name="answer" />
                                                <?php
                                                    if(isset($_SESSION["emtanswer"])){
                                                        echo $_SESSION["emtanswer"];
                                                        unset($_SESSION["emtanswer"]);
                                                    }
                                                    if(isset($_SESSION['answererr'])){
                                                        echo $_SESSION['answererr'];
                                                        unset($_SESSION['answererr']);
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2"><input type="submit" name="insert" value="ADD" ></td>
                                            </tr>
                                        </table>

</fieldset>
<fieldset>
<?php include_once 'footer.php';?>
</fieldset>

<script>
            function change1() {
                let name = document.getElementById('id1').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../controller/commonSelectCheck.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }

            </script>