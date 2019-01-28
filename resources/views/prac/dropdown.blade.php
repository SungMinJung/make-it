<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #navBar1 {
float: left;
border: solid 2px #49c92;
border-radius: 13px;
-moz-border-radius: 13px;
-webkit-border-radius: 13px;
background: -moz-linear-gradient (bottom, #596a63, #829a90);
background: -webkit-gradient (linear, left bottom, left top, from (#596a63), to (#829a90));
-moz-box-shadow: 2px 5px 7px #161617;
box-shadow: 2px 5px 7px #161617;}

#navBar1 ul ul {
display: none;
}

#navBar1 ul {
 padding: 0;
 margin: 0;
 list-style: none;
 position: relative;}

 #navBar1 ul li {
 display: block;
 float: left;
 padding-top: 9px;
 padding-bottom: 9px;} 

#navBar1 ul li span a {
 border-left: solid #8cab9e thin;}


 .headerList1 a {
 border-right: solid #505e58 thin;}

 #navBar1 ul li a {
 display: block;
 padding: 4px;
 padding-left: 13px;
 padding-right: 13px;
 color: #000000;
 text-decoration: none;
 font-family: Tahoma, Geneva, sans-serif;
 font-size: 80%;}

 #navBar1 ul li a:hover {
 color: black;
 text-decoration: underline;}

 #navBar1 ul ul {
 position: absolute;
 top: 42px;
 background:url(menuDropBG.png);
 width: 310px;
 border: thin solid #849c92;
 font-size: 70%;
 display: none;}

 #navBar1 ul li:hover ul {
 position: absolute;
 left: 60px;
 display: block;
 border-radius:22px;
}

 #navBar1 ul ul li {
 padding: 0;
 padding-top: 3px;
 padding-bottom: 2px;}

 #navBar1 ul ul li a {
 border: none;
 color: red;}

    </style>
</head>
<body>
        <div id = "navBar1">
                <ul>
                <li class = "headerList1"> <a href="#"> Home </a> </li>
                <li class = "headerList1"> <span> <a href="#"> Html </a> </span>
                <ul>
                <li> <a href="#"> Basics </a> </li>
                <li> <a href="#"> Links </a> </li>
                <li> <a href="#"> Images </a> </li>
               <li> <a href="#"> Lists </a> </li>
                <li> <a href="#"> Forms </a> </li>
                </ul>
                </li>
                <li class = "headerList1"> <span> <a href="#"> Photoshop </a> </span>
                <ul>
                <li> <a href="#"> Basics </a> </li>
                <li> <a href="#"> Buttons </a> </li>
                <li> <a href="#"> Logos </a> </li>
                <li> <a href="#"> Web layouts </a> </ li>
                </ul>
                </li>
                <li class = "headerList1"> <span> <a href="#"> CSS </a> </span>
                <ul>
                <li> <a href="#"> Basics </a> </li>
                <li> <a href="#"> Links </a> </li>
                <li> <a href="#"> Images </a> </li>
                <li> <a href="#"> Navigation </a> </li>
                <li> <a href="#"> Forms </a> </li>
                </ul>
                </li>
                <li> <span> <a href="#"> Javascript </a> </span>
                <ul>
                <li> <a href="#"> Basics </a> </li>
                <li> <a href="#"> Operators </a> </li>
                <li> <a href="#"> Functions </a> </li>
                <li> <a href="#"> Loops </a> </li>
                <li> <a href="#"> Scripts </a> </li>
                </ul>
                </li>
                </ul>
            </div>

</body>
</html>