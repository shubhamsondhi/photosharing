<?php
include 'header.php';



$error="";
include("dbconfig.php");

if(isset($_POST["submit"]))
{

    extract($_POST);


    $sql="SELECT * FROM `admin` WHERE `e_mail`='$username' AND `password`='$pass'";
	$rs=mysqli_query($conn,$sql) ;
    
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["admin"]=$username;
        
        header("location:index.php");
	}
    if($found=="N"){
        
        $error="<lebal class='alert alert-danger'>Wrong Email or Password!</div>";
    }

}


?>
   <!-- Header -->
    <header>
        <div class="container" style="positio">
         
            <div class="intro-texts">
             <div class="bb">
                 <form method="post">
                <table class="table">
<tr>
<td>username</td>
     <td><input class="form-control" type="text" id="username" name="username">
     </tr>
  <tr>
    <td>password</td>  
        <td><input  class="form-control" type="password" id="pass" name="pass">
       </tr>  <tr><td>
                    <?php echo $error; ?>
                    
                    </td><td><input value="Login"  class="btn btn-info" type="submit" id="sub" name="submit">
                    
                    </td></tr>
         </table> </form>
                </div>
            </div> 
        </div>
           
            
    </header>