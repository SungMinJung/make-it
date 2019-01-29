<style>
    #header{
        width: 1920px;
        height: 100px !important;
        border-bottom: 1px solid #707070;
    }


    #menu{
        text-align:right;
        padding:36px 0px 36px 0px;
        /* font-family: NotoSansCJKkr-Regular; */
        font-size:20px;
        color:#707070 !important;
        text-decoration: none;
    }
    #menu a{
        text-decoration: none;
        color: #707070;
    }
    #logo{
        margin-left:80px;
        padding: 10px 0px 20px  24px;
    }


    /*  */



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

} 



 #navBar1 ul li a {
 display: block;

 text-decoration: none;
 font-family: Tahoma, Geneva, sans-serif;
 text-align:right;
 padding-left:16px;
 }
 #navBar1 ul li a:hover {
 color: black;
 text-decoration: none;
}


 #navBar1 ul ul {

 position: absolute;
 top: 30px;
 background: rgb(255,255,255);
 opacity:0.7;
 width: 487px;
 height:48px;
 border: thin solid #849c92;
 font-size: 70%;
 display: none;}

 #navBar1 ul li:hover ul {
 position: absolute;
 display: block;
 border-radius:30px;
 text-decoration:none;
 box-shadow: 5px 10px 18px #888888;
 
}

 #navBar1 ul ul li {

    padding: 11px 15px 12px 0px;

}

 #navBar1 ul ul li a {
 border: none;
 color: #707070;
 font-size:17px;

}

</style>
    
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
                            <li class = "headerList1"> <span> <a href="#">Service
                                <img src="/img/dropdown.png" alt="">  </a> </span>
                            <ul>
                            <li> <a href="{{route('service.web')}}"> WebSite </a> </li>
                            <li> <a href="{{route('service.mobile')}}"> Mobile Application </a> </li>
                            <li> <a href="{{route('service.responsive')}}"> Responsive Website </a> </li>
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
