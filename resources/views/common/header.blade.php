<style>
    #header{
        width: 100%;
        height: 100px !important;
        border-bottom: 1px solid #707070;
        margin:0 auto;
    }


    #menu{
        /* margin-left:5%; */
        /* margin: 0 auto; */
        padding:36px 2px 36px 0px;
        /* font-family: NotoSansCJKkr-Regular; */
        font-size:20px;
        color:#707070 !important;
        text-decoration: none;
    }
    #menu a:hover{
        color:#0066ff;
    }
    #menu a{
        text-decoration: none;
        color: #707070;
    }
    #logo{
        /* margin-left:12%; */
        margin: 0 auto;
        padding-top:1%;
        padding-left:5%;
    }
    </style>
        <script>
            $(document).ready(function(){
      $('ul li a').click(function()
      {
        $('li a').removeClass("active");
        $(this).addClass("active");
    });
    });
    
        </script>
            <div class="row" id="header">
                <div id="logo" class="col-2">
                    <a href="{{route('home')}}"> <img id="logo" src="/img/logo.png" alt=""></a>

                </div>
                <div id="menu" class="col-1" style="color:#0066ff;">
                        <a style="padding-left:44%;" href="{{route('home')}}">Home</a> 
                </div>
                <div id="menu" class="col-1">
                        <a style="padding-left:15%;" href="{{route('about')}}">About us </a> 
                </div>
                <div id="menu" class="col-1">
                        <div id = "navBar1">
                                <ul>
                                <li class = "headerList1"> <span> <a href="#">Service
                                    <img src="/img/dropdown.png" alt="">  </a> </span>
                                <ul>
                                <li> <a class="menunav "href="{{route('service.web')}}"> WebSite </a> </li>
                                <li> <a class="menunav" href="{{route('service.mobile')}}"> Mobile Application </a> </li>
                                <li> <a class="menunav" href="{{route('service.responsive')}}"> Responsive Website </a> </li>
                                </ul>
                                </li>
                                    
                                
                            
                            </ul>
                        </div>
           </div>
           <div id="menu" class="col-1">
                   <a style="padding-left:22%;" class="menunav" href="{{route('portfolio')}}"> Portfolio </a>
           </div>
           <div  id="menu" class="col-1" style="text-align:center;">
                 <a style="padding-left:6%;" class="menunav" href="{{route('qna')}}"> Q&A</a>
           </div>
            <div id="menu" class="col-1">
                   <a class="menunav" href="{{route('contact')}}">Contact us</a>  
            </div>
            <div class="col-2"></div>
        </div>
