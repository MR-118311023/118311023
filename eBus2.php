<?php
session_start() ;
$fullNameValue = "";
$totalValue2 = "";

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION[ 'txtTotal'] = $totalValue2;

?>

<!DOCTYPE html>
<html>
      <head>
        <title>eBusiness 2</title>
    </head>
    
    <body>
        
       <style>
                /* Style the body */
body {
  background: #F6F4D2;
  font-family: Vintage;
  color: #28262C;
  text-align: center;
  margin: 0;
}



/* Header/Logo Title */
.header {
  padding: 30px;
  text-align: center;
  background: #F0C479;
  color: #28262C;
  font-size: 20px;
}


/* Page Content */
.content {padding:20px;}
       
        .button {
  background-color: #edd7bb;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
 
  .button:hover {opacity: 1}
}
    </style>
  
   
        <div class="form">
          
            <form name="Details" method="post" action="eBus3.php">
                <div class="header">
                    <h1>Fill In Your Details Below</h1>
                </div>
                <center>
                    
                    <div class="content"
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <br></br>
                        
                        <tr>
                            <td>Name</td>
                            <td><input type="text" pattern="[A-Za-z]{}" id="txtName" name="txtName" value="" required="" /></td>
                        </tr>
                        <br></br>
                        
                         <tr>
                            <td>E-Mail Address</td>
                            <td><input type="email" id="txtMail" name="txtMail" value="" required="" /></td>
                        </tr>
                        <br></br>
                        
                        <tr>
                            <td>Pin</td>
                            <td><input type="password" maxlength="4" id="txtPin" name="txtPin" value="" required="" /></td>
                        </tr>
                        
                        
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                   </center>
                
                <center>
                    
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
</div>
        
            </div>
         </form>
        </body>
    
</html>