<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<Style>
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
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="banner">
         <div class="feature-inner">
             <marquee scrollamount="10"
direction="up"
behavior="scroll">
 <h1>WEBSITE UNDERGOING REFACTORING...........</h1>
                                <h1>THANK YOU FOR YOUR TIME</h1>
                                <h1>TATAAAAAAAA</h1>
                                <img src="Images/ALP.gif" />
                                <h1>REQUIREMENTS LEFT, REQUIREMENTS RIGHT, REQUIREMENTS CENTRE</h1>
 
</marquee>
				
				</div>
             
        </div>
    </body>
</html>