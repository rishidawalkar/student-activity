<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$conn = mysqli_connect('127.0.0.1','root','');

if(!$conn)
{
  echo 'Not connected to serer'; 
}

if(!mysqli_select_db($conn,'teacher'))
{
  echo 'Database not selected';
}
$name = empty($_POST['name']) ? '' : $_POST['name'];
$field = empty($_POST['field']) ? '' : $_POST['field'];
$rollno = empty($_POST['rollno']) ? '' : $_POST['rollno'];
$year = empty($_POST['year']) ? '' : $_POST['year'];
$sql = "INSERT INTO adding (name,field,rollno,year) VALUES ('$name','$field','$rollno','$year')";  
if(!mysqli_query($conn,$sql))
  {
    echo '';
  }
  else
  {
      echo '';
  }

 // header("refresh:10; url=signup.htm");  

?>
    <!DOCTYPE html>
    <html>

        
 <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" nonce="98EA9E4007549B4FA2D39A59696E11FC" charset="UTF-8"></script><style>

.footer {
   margin: auto;
  width: 100%;
  padding: 20px;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   font-size: 100;
}
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>

    <body style="background-color: #64B5F6">
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-orange">
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
              <li class="nav-item active">
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
        <a class="nav-link" href="students.php">Display student record<span class="sr-only">(current)</span></a>
    </ul>
               
         </div>  
         </div>   
</nav> <br>
       <img src="https://learnworthy.net/wp-content/uploads/2019/10/10-things-every-programmer-should-know.jpg"  align="right" alt width="800" height="500">
    <center><h1>&nbsp&nbspStudent Form</h1></center> <form name="myForm" action="form.php" method="POST" onsubmit="return validateForm()"><font style="font-size: 5pt"><br><br>
    <div>
      <h4>&nbsp &nbsp Name:</h4><div class="col" style="width :25rem;"><hr align="width-right">
    <div class="col">
      <input type="text" class="form-control" name="name" placeholder="your name">
    </div><br>
<br>
        <h4>&nbsp Field:</h4><div class="col" style="width :25rem;"><hr align="width-right">
    <div class="col">
      <input type="text" class="form-control" name="field" placeholder=" your field">
    </div><br>

    <h4>Rollno:</h4><div class="col" style="width :25rem;"><hr align="width-right">
      <input type="int" class="form-control" name="rollno" placeholder="your roll no">
       </div><br>
       

  <h4>Year:</h4><div class="col" style="width :25rem;"><hr align="width-right">
      <input type="int" class="form-control" name="year" placeholder="your year of degree">
       </div><br>
  <br>
  
<br><br>
<button onclick="validateForm()" class="btn btn-link" type="submit" value="send">Submit</button>

<head>
<script>

    
    function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["field"].value;
  var z = document.forms["myForm"]["rollno"].value;
  var a = document.forms["myForm"]["year"].value;

  if (x == "" && y == "" && z == "" && a== "") {
    alert("Full form must be filled out");
        return false;
  }
        if(x == ""){
            alert("please fill the Name section");
            return false;
        }
        if(y == ""){
            alert("please fill the field section");
            return false;
        }
        if(z== ""){
            alert("please fill the roll no section");
            return false;
        }
         if(a== ""){
            alert("please fill the year section");
            return false;
        }
      else
           alert("Congrats ! your participation has been accepted");
        return true;
  
    }
</script>
        </head>     </div>
    <br>
  </div>
<br><br>
<div class="footer" style="background-color: #64B5F6">
    <font color="075A9D"> <a><h6>Terms and Conditions</h6></a>
    <font color="black"> <h6>Project by the <b>Student Activity team</b> .All rights researved © 2020</h6></font>
</div>
</body>
    </html>
<?php
    ?>