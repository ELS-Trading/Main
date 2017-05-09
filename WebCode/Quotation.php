<!DOCTYPE html>
<html>
<head>
<title>Reqest for Quotation</title>
<style>
body{
	width:610px;
	font-family:lucinda grande, tahoma,arial,sans-serif;
         background-image:url(../Images/D1.png);
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background-image:url(../Images/bg.jpg);
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 10px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 0px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
body {
  background-color: white;
  color: #222;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 400;
  font-size: 25px;
}

nav {
  background-color: chocolate;
  border: 1px solid #dedede;
  border-radius: 4px;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
  color: #FFF;
  display: block;
  margin: 5px 22px 5px 22px;
  overflow: hidden;
  width: 96%; 
}

  nav ul {
    margin: 0;
    padding: 0;
  }

    nav ul li {
      display: inline-block;
      list-style-type: none;
      
      -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s; 
    }
      
      nav > ul > li > a > .caret {
        border-top: 4px solid #aaa;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        content: "";
        display: inline-block;
        height: 0;
        width: 0;
        vertical-align: middle;
  
        -webkit-transition: color 0.1s linear;
          -moz-transition: color 0.1s linear;
        -o-transition: color 0.1s linear;
          transition: color 0.1s linear; 
      }

      nav > ul > li > a {
        color: #aaa;
        display: block;
        line-height: 56px;
        padding: 0 24px;
        text-decoration: none;
      }

        nav > ul > li:hover {
          background-color: rgb( 40, 44, 47 );
        }

        nav > ul > li:hover > a {
          color: rgb( 255, 255, 255 );
        }

        nav > ul > li:hover > a > .caret {
          border-top-color: rgb( 255, 255, 255 );
        }
      
      nav > ul > li > div {
        background-color: rgb( 40, 44, 47 );
        border-top: 0;
        border-radius: 0 0 4px 4px;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
        display: none;
        margin: 0;
        opacity: 0;
        position: absolute;
        width: 165px;
        visibility: hidden;
  
        -webkit-transiton: opacity 0.2s;
        -moz-transition: opacity 0.2s;
        -ms-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        -transition: opacity 0.2s;
      }

        nav > ul > li:hover > div {
          display: block;
          opacity: 1;
          visibility: visible;
        }

          nav > ul > li > div ul > li {
            display: block;
          }

            nav > ul > li > div ul > li > a {
              color: #fff;
              display: block;
              padding: 12px 24px;
              text-decoration: none;
            }

              nav > ul > li > div ul > li:hover > a {
                background-color: rgba( 255, 255, 255, 0.1);
              }
  
  
    body{
    background-color: white;
  color: #222;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 400;
  font-size: 25px;
    }
    .blink {
	-webkit-animation: blink .75s linear infinite;
	-moz-animation: blink .75s linear infinite;
	-ms-animation: blink .75s linear infinite;
	-o-animation: blink .75s linear infinite;
	 animation: blink .75s linear infinite;
}
@-webkit-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-moz-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-o-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: red;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: rosybrown;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 70%;
    }
}
body {margin:0}

 .icon-bar {
    width: 70%;
    background-color: black;
    overflow: auto;
}

.icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: goldenrod;
    font-size: 36px;
}

.icon-bar a:hover {
    background-color: #000;
}

.active {
    background-color: rosybrown !important;
}
 
div.slide-left {
  width:100%;
  overflow:hidden;
}
div.slide-left p {
  animation: slide-left 10s;
}

@keyframes slide-left {
  from {
    margin-left: 100%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}
 
#content_area{
    float: left;
    width: 750px;
    margin: 20px 0 20px 0;
    padding: 10px;
}
html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
/* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{margin:0
}
body {
  background-color: white;
  color: #222;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 400;
  font-size: 25px;
}

nav {
  background-color: chocolate;
  border: 1px solid #dedede;
  border-radius: 4px;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
  color: #888;
  display: block;
  margin: 5px 22px 5px 22px;
  overflow: hidden;
  width: 96%; 
}

  nav ul {
    margin: 0;
    padding: 0;
  }

    nav ul li {
      display: inline-block;
      list-style-type: none;
      
      -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s; 
    }
      
      nav > ul > li > a > .caret {
        border-top: 4px solid #aaa;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        content: "";
        display: inline-block;
        height: 0;
        width: 0;
        vertical-align: middle;
  
        -webkit-transition: color 0.1s linear;
          -moz-transition: color 0.1s linear;
        -o-transition: color 0.1s linear;
          transition: color 0.1s linear; 
      }

      nav > ul > li > a {
        color: #aaa;
        display: block;
        line-height: 56px;
        padding: 0 24px;
        text-decoration: none;
      }

        nav > ul > li:hover {
          background-color: rgb( 40, 44, 47 );
        }

        nav > ul > li:hover > a {
          color: rgb( 255, 255, 255 );
        }

        nav > ul > li:hover > a > .caret {
          border-top-color: rgb( 255, 255, 255 );
        }
      
      nav > ul > li > div {
        background-color: rgb( 40, 44, 47 );
        border-top: 0;
        border-radius: 0 0 4px 4px;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
        display: none;
        margin: 0;
        opacity: 0;
        position: absolute;
        width: 165px;
        visibility: hidden;
  
        -webkit-transiton: opacity 0.2s;
        -moz-transition: opacity 0.2s;
        -ms-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        -transition: opacity 0.2s;
      }

        nav > ul > li:hover > div {
          display: block;
          opacity: 1;
          visibility: visible;
        }

          nav > ul > li > div ul > li {
            display: block;
          }

            nav > ul > li > div ul > li > a {
              color: #fff;
              display: block;
              padding: 12px 24px;
              text-decoration: none;
            }

              nav > ul > li > div ul > li:hover > a {
                background-color: rgba( 255, 255, 255, 0.1);
              }
  
        
        
html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
/* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{margin:0
}
body {
  background-color: white;
  color: #222;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 400;
  font-size: 25px;
}

nav {
  background-color: chocolate;
  border: 1px solid #dedede;
  border-radius: 4px;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
  color: #888;
  display: block;
  margin: 5px 22px 5px 22px;
  overflow: hidden;
  width: 96%; 
}

  nav ul {
    margin: 0;
    padding: 0;
  }

    nav ul li {
      display: inline-block;
      list-style-type: none;
      
      -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s; 
    }
      
      nav > ul > li > a > .caret {
        border-top: 4px solid #aaa;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        content: "";
        display: inline-block;
        height: 0;
        width: 0;
        vertical-align: middle;
  
        -webkit-transition: color 0.1s linear;
          -moz-transition: color 0.1s linear;
        -o-transition: color 0.1s linear;
          transition: color 0.1s linear; 
      }

      nav > ul > li > a {
        color: #aaa;
        display: block;
        line-height: 56px;
        padding: 0 24px;
        text-decoration: none;
      }

        nav > ul > li:hover {
          background-color: rgb( 40, 44, 47 );
        }

        nav > ul > li:hover > a {
          color: rgb( 255, 255, 255 );
        }

        nav > ul > li:hover > a > .caret {
          border-top-color: rgb( 255, 255, 255 );
        }
      
      nav > ul > li > div {
        background-color: rgb( 40, 44, 47 );
        border-top: 0;
        border-radius: 0 0 4px 4px;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
        display: none;
        margin: 0;
        opacity: 0;
        position: absolute;
        width: 165px;
        visibility: hidden;
  
        -webkit-transiton: opacity 0.2s;
        -moz-transition: opacity 0.2s;
        -ms-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        -transition: opacity 0.2s;
      }

        nav > ul > li:hover > div {
          display: block;
          opacity: 1;
          visibility: visible;
        }

          nav > ul > li > div ul > li {
            display: block;
          }

            nav > ul > li > div ul > li > a {
              color: #fff;
              display: block;
              padding: 12px 24px;
              text-decoration: none;
            }

              nav > ul > li > div ul > li:hover > a {
                background-color: rgba( 255, 255, 255, 0.1);
              }
  
 body{
    font-family: lucinda grande, tahoma,arial,sans-serif;
     color: black;
   background-image:url(../Images/bg.jpg);
}

body p{
    font-size: 0.8;
    line-height: 1.28;
}

#wrapper{
    background-image:url(../Images/bg.jpg);
    width: 1080px;
    background-color: chocolate;
    margin: 0 auto;
    padding: 10px;
    border: 15px solid #dedede;
}
 

#banner{
    
    
    background-repeat: no-repeat;
    background-size:cover;
    border: 5px solid #dedede;
    height: 200px;
    
}
#content_area{
    float: left;
    width: 750px;
    margin: 20px 0 20px 0;
    padding: 10px;
}
#top-nav { margin:0 auto; padding:0px 0 0; height:37px; float:right;}
			#top-nav ul { list-style:none; padding:0; height:37px; float:left;}
			#top-nav ul li { margin:0; padding:0 0 0 8px; float:left;}
			#top-nav ul li a { display:block; margin:0; padding:8px 20px; color:red; text-decoration:none;}
			#top-nav ul li.active a, #top-nav ul li a:hover { color:#f8dbdb;}
#sidebar{
    float: right;
    width: 250px;
    height: 400px;
    margin: 20px 0 10px 0;
    padding: 10px;
    border: 2px solid #E3E3E3;
    
}
#footer{
    clear: both;
    width: auto;
    height: 40px;
    padding: 10px;
    border: 3px solid #E3E3E3;
    text-align: center;
    color:#fff;
    text-shadow:0.1em 0.1em #333;
    background-image: url(../Images/bg.jpg);
}

 
     .navbar{
		margin-top: 20px;
	}

#nav{
    list-style: none;
}
#nav ul{
    margin: 0;
    padding:0;
    width:auto;
    display: none;
}
#nav li{
    font-size: 24px;
    float:left;
    position:relative;
    width: 180px;
    height: 50px;
}
#nav a:link, nav a:active, nav a:visited{
    display:block;
    color: #fff;
    text-decoration:none;
}
#nav a:hover{
    color: black;
}
.feature { background:black;padding:12px;}
.feature-inner { margin:auto;width:470px; }
.feature-inner h1 {color:orange;font-size:55px;}

</Style>

    </head>
            <nav>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li>
      <a href="home.php">Categories <span class="caret"></span></a>
            <div>
                <ul>
                    <li><a href="Events.php">Event Materials</a></li>
                    <li><a href="weddings.php">Wedding Dresses</a></li>
                    
                </ul>   
            </div>
        <li><a href="About Us.php">About Us</a></li>
        <li><a href="Contact Us.php">Contact Us</a></li>
    </ul>
</nav>
     <div id="banner">
         <div class="feature-inner">
             
				<h1>Quotation Request Form.</h1>
				</div>
        </div>
    
    <body>
       
        <h3></h3>


 
<div id="wrapper">
             
       
</nav>

<form name="frmRegistration" method="post" action="Q2.php">
<table border="3" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) {echo $success_message; }?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)){ echo $error_message;} ?></div>
<?php } ?>
<tr>
<td>Name:</td>
<td><input type="text" class="demoInputBox" name="name" value=" "></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" class="demoInputBox" name="email" value=" "></td>
</tr>
<tr>
<td>Start Date:</td>
<td><input type="text" class="demoInputBox" name="date1" value=" "></td>
</tr>
<tr>
<td>End Date:</td>
<td><input type="text" class="demoInputBox" name="date2" value=""></td>
</tr>
<tr>
<td>Event Time:</td>
<td><input type="text" class="demoInputBox" name="time" value=""></td>
</tr>
<td>Number of guests:</td><td><input type="text" name="number_of_guests" class="demoInputBox"></td>
</tr>
<td>Additional Details:</td>
		<td><input type="text" name="additional_details" class="demoInputBox"></td>
		</tr>
		<td>Physical Address:</td>
		<td><input type="text" name="physical_address" class="demoInputBox"></td>
		</tr>
		<td>City:</td>
		<td><input type="text" name="city" class="demoInputBox"></td>
		</tr>
		<td>Region:</td>
		<td><input type="text" name="region" class="demoInputBox"></td>
		</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="signup" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>  
    </div> 

 
</body>
        
        
        
            
        </footer>
        </div>
        
    </body>
      
</html>

 

 
