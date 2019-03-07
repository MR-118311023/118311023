<!DOCTYPE html>
        <html>
            
                <head>
    <meta charset="utf-8" />
        <title>eBusiness 3</title>
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
    
    
    <div class ="header">
                     
                  
              <h1> Payment Receipt</h1>
              
                </div>
                
                
              
    <div class ="content"
         
         <center>
             <?php
                
   
                session_start() ;
                $totalValue2 = $_POST['txtTotal'];
                $fullNameValue = $_POST['txtName'] ;
                
                echo "The name is : " ,$fullNameValue.", ";
                
                echo "<br></br>";
                
                echo "The total value is : ".$totalValue2.".";
             
                
                ?>
        </center>
         
          </div>
    </body>
        </html>

