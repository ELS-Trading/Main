<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
        <Style>
        /* W3.CSS 4.04 Apr 2017 by Jan Egil and Borge Refsnes */
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
  
 
</Style>

    </head>
     <div id="banner">
         <div class="feature-inner">
				<h1>My name is Ilaku.</h1>
				</div>
        </div>
    
    <body>
       
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        
        
        <div id="wrapper">
             
            
            
            <nav id="navigation">
              
            </nav>
                </nav> <marquee behavior="alternate" direction="left"> 
            <img src="Images/W7.jpg" width="250" height="252" alt="D2"/>
            <img src="Images/IMG-20170306-WA0034.jpg" width="252" height="248" alt="IMG-20170306-WA0034"/>  
            <img src="Images/W9.jpg" width="250" height="252" alt="VictoriaSuite4_Banquet_PPVL"/>
            <img src="Images/C1.jpg" width="250" height="252" alt="D2"/>
            <img src="Images/C2.jpg" width="250" height="252" alt="IMG-20170306-WA0034"/>  
            <img src="Images/C3.jpg" width="250" height="252" alt="VictoriaSuite4_Banquet_PPVL"/>
            <img src="Images/CH1.jpg" width="250" height="252" alt="D2"/>
            <img src="Images/D1.png" width="250" height="252" alt="IMG-20170306-WA0034"/>  
            <img src="Images/D3.jpg" width="250" height="252" alt="VictoriaSuite4_Banquet_PPVL"/>
            <img src="Images/D4.jpg" width="250" height="252" alt="D4"/>
            <img src="Images/D5.jpg" width="250" height="252" alt="IMG-20170306-WA0034"/>  
            <img src="Images/R3.jpg" width="250" height="252" alt="R3"/>
            <img src="Images/W10.jpg" width="250" height="252" alt="IMG-20170306-WA0034"/>  
            <img src="Images/W4.jpg" width="250" height="252" alt="VictoriaSuite4_Banquet_PPVL"/>
       </marquee>
                
                
    </div> 
         <nav>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li>
      <a href="home.php">Categories <span class="caret"></span></a>
            <div>
                <ul>
                    <li><a href="Events.php">Decor</a></li>
                    <li><a href="weddings.php">Wedding Dresses</a></li>
                    
                </ul>   
            </div>
        <li><a href="About Us.php">About Us</a></li>
        <li><a href="Contact Us.php">Contact Us</a></li>
    </ul>
</nav>
          
            <div id="content_area">
                <!--<?php echo $content; ?>-->
        <footer>
            
            <div class="container">
            <div class="text-center">
                
                <hr>
                <p>Copyright © 2017 ELS Events. All Rights Reserved</p>
                <hr>
                <!--Copyright-->
                <p>Website by <a href="Alpha.php" target="_blank" style="color: whitesmoke;">Alpha</a>.</p>
            </div>
        </div>
            
        </footer>
        </div>
        
    </body>
      
</html>
 