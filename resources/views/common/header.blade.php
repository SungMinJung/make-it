<style>
    #header{
        width: 1920px;
        height: 100px !important;
    }


    #menu{
        text-align:right;
        padding:36px 0px 36px 0px;
        /* font-family: NotoSansCJKkr-Regular; */
        font-size:20px;
        color:#707070;
    }
    #logo{
        padding: 10px 0px 20px  24px;
    }


    /*  */
    #navBar1 {
border-radius: 13px;
-moz-border-radius: 13px;
-webkit-border-radius: 13px;
background: -moz-linear-gradient (bottom, #596a63, # 829a90);
background: -webkit-gradient (linear, left bottom, left top, from (#596a63), to (# 829a90));
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
 padding-bottom: 9px;
} 



 #navBar1 ul li a {
 display: block;

 text-decoration: none;
 font-family: Tahoma, Geneva, sans-serif;
 }
 #navBar1 ul li a:hover {
 color: black;
 text-decoration: underline;}

 #navBar1 ul ul {
 position: absolute;
 top: 42px;
 /* background:url(menuDropBG.png); */
 background: rgb(255,255,255);
 opacity:0.5;
 width: 310px;
 border: thin solid #849c92;
 font-size: 70%;
 display: none;}

 #navBar1 ul li:hover ul {
 position: absolute;
 display: block;
 border-radius:30px;
}

 #navBar1 ul ul li {
    padding: 11px 11px 11px 11px;
 /* padding: 0;
 padding-top: 3px;
 padding-bottom: 2px; */
}

 #navBar1 ul ul li a {
 border: none;
 color: red;}

</style>
<div class="container">
    
        <div class="row" id="header">
            <div id="logo" class="col-3">
                        <img id="logo" src="/img/logo.png" alt="">

            </div>
            <div id="menu" class="col-1" style="color:#0066ff">
                <a href="home">Home</a> 
            </div>
            <div id="menu" class="col-1">
                    <a href="{{route('about')}}">About us </a> 
            </div>
            <div id="menu" class="col-1">
                    <div id = "navBar1">
                            <ul>
                            <li class = "headerList1"> <span> <a href="#"> Service </a> </span>
                            <ul>
                            <li> <a href="#"> Basics </a> </li>
                            <li> <a href="#"> Links </a> </li>
                            <li> <a href="#"> Images </a> </li>
                           <li> <a href="#"> Lists </a> </li>
                            <li> <a href="#"> Forms </a> </li>
                            </ul>
                            </li>
            

                                
                            
                            </ul>
                        </div>
           </div>
           <div id="menu" class="col-1">
                   <a href="{{route('portfolio')}}"> Portfolio </a>
           </div>
           <div  id="menu" class="col-1">
                 <a href="{{route('qna')}}"> Q&A</a>
           </div>
            <div id="menu" class="col-2" style="text-align:center;">
                   <a href="{{route('contact')}}">Contact us</a>  
            </div>
        </div>

</div>