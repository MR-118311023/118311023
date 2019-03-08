<!DOCTYPE>


<!-- Reference hover buttons -->
<html>
    <head>
        <title>Home Page</title>
    </head>

<style>
 
    /*credit(hover buttons) - https://www.w3schools.com/css/tryit.asp?filename=trycss_buttons_hover*/
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

 /*credit(hover buttons) - https://www.w3schools.com/css/tryit.asp?filename=trycss_buttons_hover*/

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #F0C479;
}

.button1:hover {
  background-color: #F0C479;
  color: white;
}
</style>

<body>
    
<div class="header">
<h1>Home</h1>
</div>

<br></br>

<div class="content">
<a href="tiltedpage_scroll_demo.html"><button class="button button1">Interests</button>
<a href="consultancy.html"><button class="button button1">Consulting Services</button>
<a href="cv.html"><button class="button button1">CV</button>
</div>

<br></br>
<br></br>

<a href="https://github.com/MR-118311023/118311023"<button class="button button1">Github</button>
 <a href="https://mr-phpproject10.herokuapp.com/"<button class="button button1">Heroku</button>
        
</body>
</html>