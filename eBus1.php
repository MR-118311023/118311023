<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE>
<html lang="en" xmlns="http.//ww.w3.org/1999/xhtml">
    
     <head>
        <meta charset="utf-8" />
        <title>eBusiness 1</title>
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
            <form name="intCalc" method="post" action="ebus2.php">
                 <div class="header">
                <h1>Please Choose a Consulting Service</h1>
                 </div>
                <hr />
                
                 <div class="content">
                <center>
                    <table cellspacing="10">
                        <tr>
                        <td><b>Consulting Service</b></td>
                        </tr>
                        <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" required="" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things(Robots) @ $2000</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" required=""/></td>
                        </tr>
                            <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" required="" /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center><table cellspacing="10">
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr><td>-Discount @30%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly/>   </td>
                        </tr>
                        <tr>
                            <td>+VAT @40%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly</td>
                        </tr>
                        </table>
                </center>
        
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
                 </div>
            </form>
        </div>
        <script type="text/javascript">
            function calcSub() {
                //Assigning variablesto the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
             
                // If radio buttons are clicked, values are assigned
                if (document.getElementById("Blockchain").checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById("AutonomousThings").checked) {
                    document.intCalc.txtSubTot.value = AutonomousThings;
                    subAmount = AutonomousThings;
                    calculation(subAmount);
                }
                else if (document.getElementById("ImmersiveExperience").checked) {
                    document.intCalc.txtSubTot.value = ImmersiveExperience;
                    subAmount = ImmersiveExperience;
                    calculation(subAmount);
                }
            }
            //function for calculating the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * 0.3);
                var vatCalc = parseFloat(subTotal * 0.4);
                var total = parseFloat(subTotal - discCalc + vatCalc);
             
                //Instering them into the correct feilds
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
            function AmountClear() {
                document.getElementById("txtSubTot").value="";
                document.getElementById("txtDisc").value="";
                document.getElementById("txtVat").value="";
                document.getElementById("txtTotal").value="";
            }
            </script>
           
             <div>
          <a href="consultancy.html" class="button">Return to Main Menu</a>
  </div>
    </body>
</html>



<!--<link rel="stylesheet" href="style.css" type="text/css" /> -->