<!DOCTYPE html>
<html>
    <head>
        <title>Student Activity.</title>
</head>

<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" nonce="98EA9E4007549B4FA2D39A59696E11FC" charset="UTF-8"></script><style>

.footer {
   margin: auto;
  width: 50%;
  padding: 20px;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-trans navbar-inverse navbar-toggleable-sm">
  <a class="navbar-brand" href="#"><h4>Student Activity.&nbsp&nbsp</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="home.htm">&nbsp&nbspHome <span class="sr-only">(current)</span></a>
      </li>
    </ul>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="form.php">Add a student<span class="sr-only">(current)</span></a>
    </ul>
             
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="assignment.htm">Assign the task<span class="sr-only">(current)</span></a>
    </ul>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="completion.php">Completion status<span class="sr-only">(current)</span></a>
    </ul>
         
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
        <a class="nav-link" href="students.php">Display student record<span class="sr-only">(current)</span></a>
    </ul>
             
         </div>  </div>   
</nav> <br>
    <h2><center>Students Record</center></h2>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br><br>
<table align="center" border="0px" style="width:600px; line-height:40px;">
    <tr>
        <th>Name</th>
        <th>Field</th>
        <th>Roll no</th>
        <th>year</th>
</tr>
<?php
$conn = mysqli_connect('localhost','root','','teacher');
if($conn->connect_error ){
    die("connection failed:". $conn->connect_error);
}
$sql = "SELECT name,field,rollno,year from adding";
$result = $conn->query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row['name'] ."</td><td>". $row['field'] ."</td><td>". $row['rollno'] ."</td><td>". $row['year'] ."</td></tr>" ;
    }
    echo "</table>";
}
$conn-> close();
?>
</table>
       
         <br><br><br><br>
             <h2><center>Students submission Record</center></h2><br>
<table align="center" border="0px" style="width:600px; line-height:40px;">
    <tr>
        <th>Name</th>
        <th>Field</th>
        <th>Roll no</th>
        <th>year</th>
</tr>
<?php
$conn = mysqli_connect('localhost','root','','teacher');
if($conn->connect_error ){
    die("connection failed:". $conn->connect_error);
}
$sql = "SELECT name,field,rollno,year from submittion";
$result = $conn->query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row['name'] ."</td><td>". $row['field'] ."</td><td>". $row['rollno'] ."</td><td>". $row['year'] ."</td></tr>" ;
    }
    echo "</table>";
}
$conn-> close();
?>
</table>
<br><br><br><br><br><br><br><br><br><br><br>
    <div class="footer" style="background-color: white">
     <a href="/terms">Terms and Conditions</a>
    <font color="black"> <p>Project by the <b>Student Activity team</b> .All rights researved © 2020</p></font>
</div>
</body>
</html>

