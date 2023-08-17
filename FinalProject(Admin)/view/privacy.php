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
<h1>Privacy&Policy</h1>
<p> Our student management website takes the privacy and security of personal information seriously. When using our website,
     we collect specific types of personal data, including student names, contact information, and academic records. 
     The information is collected for the sole purpose of managing student enrollment, facilitating communication between students, parents, and faculty, and ensuring the effective administration of our educational institution. We obtain consent from students or their parents/guardians before collecting any personal data. Rest assured, we implement stringent security measures to protect this information from unauthorized access, loss, or misuse. We utilize encryption, access controls, and regularly update our security protocols. 
     We may share student data with trusted third-party service providers only when necessary for system functionality, ensuring they adhere to privacy and security standards. We retain student data for a specified period and have processes in place for securely deleting or anonymizing it when it is no longer needed. Users have the right to access, review, correct, or delete their personal information, and we provide a straightforward process for making such requests. 
     Our website fully complies with applicable data protection laws and regulations.
      We may update our privacy policy periodically to reflect any changes in data handling practices or legal requirements. 
    If you have any questions or concerns regarding your privacy or personal information, please feel free to contact us.</p>

    <div id="test"></div>

<script>
const jsonStr = '{"name":"","type": "NSMS"}'; 
const jsonObject = JSON.parse(jsonStr); 

document.getElementById("test").innerHTML = jsonObject["type"];
</script>

  </fieldset>
<?php include_once 'footer.php';?>
