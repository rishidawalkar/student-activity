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
$sql = "INSERT INTO submittion (name,field,rollno,year) VALUES ('$name','$field','$rollno','$year')";  
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

        
 <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" nonce="98EA9E4007549B4FA2D39A59696E11FC" charset="UTF-8">
      
        </script>
        
        <style>
                .footer {
   margin: auto;
  width: 50%;
  padding: 35px;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;
}
        </style>
    
        
    <body style="background-color: white">
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
        <li class="nav-item active">
        <a class="nav-link" href="completion.php">Completion status<span class="sr-only">(current)</span></a>
    </ul>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="students.php">Display student record<span class="sr-only">(current)</span></a>
    </ul>
              
         </div>  </div>   
</nav> 
<br>
                      <h3><center>Form for submitting the assignments.</center></h3><br>
         <form name="myForm" action="completion.php" method="POST" onsubmit="return validateForm()"><font style="font-size: 5pt"><br><br>
    <div>
      <h5>&nbsp &nbsp Name:</h5><div class="col" style="width :25rem;"><hr align="width-right">
    <div class="col">
      <input type="text" class="form-control" name="name" placeholder="your name">
    </div><br>
<br>
        <h5>&nbsp Field:</h5><div class="col" style="width :25rem;"><hr align="width-right">
    <div class="col">
      <input type="text" class="form-control" name="field" placeholder=" your field">
    </div><br>

    <h5>Rollno:</h5><div class="col" style="width :25rem;"><hr align="width-right">
      <input type="int" class="form-control" name="rollno" placeholder="your roll no">
       </div><br>
       

  <h5>Year:</h5><div class="col" style="width :25rem;"><hr align="width-right">
      <input type="int" class="form-control" name="year" placeholder="your year of degree">
       </div><br>
  <br>
        
     <br><br>
     <h5>Please upload the image file of your code.</h5><br>
        &nbsp&nbsp &nbsp&nbsp <h6><input type="file" name="fileToUpload" id="fileToUpload"></h6>
        <br>
   <br>
     &nbsp&nbsp &nbsp&nbsp <button onclick="validateForm()" class="btn btn-link" type="submit" value="send">Submit</button>

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
        </head>      </div></div></form>
    <br>
     <br><br><br><br><br> 
 <div class="footer" style="background-color: white">
    <h6> <a href="/terms">Terms and Conditions</a></h6>
     <h6><font color="black"> <p>Project by the <b>Student Activity team</b> .All rights researved © 2020</p></font></h6>
</div>

</body>
    </html>
<?php
    ?>