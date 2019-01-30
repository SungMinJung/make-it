@extends('layouts.app')
<style>
img.img{
    padding: 20px; 30px; 30px; 40px;
}

.btn {
  
    width: 224px;
    height: 51px;
    text-align: center;
    font-size: 15px;
    font-family: inherit;
    font-weight: bold;
}

.blue {
    border-color: #0066FF;
    background-color: #ffffff;
    color:#0066FF;
}

.blue:active {
    background-color: #0066FF;
    color: #ffffff;
}

.my-box { 
    border:1px solid; padding:10px; background-color:#707070;
}
.bluetitle {
    font-weight: 500;
    color: #0066FF;
}

.btn {
    width: 224px;
    height: 51px;
    text-align: center;
    font-size: 15px;
    font-family: inherit;
    font-weight: bold;
}

.gray {
    background-color: #ffffff;
    color: #3d3d3d;
}

.gray:active {
    background-color: #3d3d3d;
    color: #ffffff;
}
#solution{
    padding-top:30px;
}
</style>
@section('content')    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="row" style="background-image:url('/image/mask36.jpg'); width:1920px; height:695px;">
        <div class="container"> 
            <div clss="col-5">
            <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/A6DF6D13-F136-47B6-BBDA-EC3ACD303339.png" style="width:595.4px; height:473px;" class="img">
            <button type="submit" class="btn blue" style="position:relative; left:-450px; top:100px;" onclick="location.href='{{ url('/main') }}'">Portfolio</button>
        </div>
    </div>
</div>
    
    <div class="row">
        <div class="container">
            <div class="col-4">
                <img id="" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/E788CFC0-2C6B-4413-978F-FD68FF882C5F.png" style="width:166.5px; height:83px; margin-top:40px;"><strong>를 이끌어나가는 사람들</strong><br>
            </div>
            <div class="row">
                <div class="col-2" style="text-align:center; font-size:15px;margin-bottom:100px;">
                <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/7514DEC9-776B-4113-BD77-BE2B6854FFA2.png" style="width:224px; height:224px;" class="img">
                <strong>KIM JINHYUNG</strong><br>
                <strong>MAKEIT 대표</strong><br>
                </div>
                <div class="col-2"></div>
                <div class="col-2"style="text-align:center; font-size:15px;margin-bottom:100px;">
                <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/B95EFB51-D909-4990-8586-AF88A072F67C.png" style="width:224px; height:224px;" class="img">
                <strong>KIM SEONGYEOM</strong><br>
                <strong>MAKEIT 기획/디자인 팀장</strong><br>
                </div>
                <div class="col-2"></div>
                <div class="col-2"style="text-align:center; font-size:15px;margin-bottom:100px;">
                <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/2A50D7AA-02B8-4EAF-9663-3BBCC4D6253A.png" style="width:224px; height:224px;" class="img">
                <strong>KANG</strong><br>
                <strong>MAKEIT 개발 팀장</strong><br>
                </div>
            </div>
        </div>
    </div>
        
    <div class="row" style="background-color:lightgray;">
    <div class="container">
        <div class="col-4">
            <img id="" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/E788CFC0-2C6B-4413-978F-FD68FF882C5F.png" style="width:166.5px; height:83px;margin-top:40px;"><strong>작업필드</strong><br>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-5" style=" margin-top:20px; margin-bottom:10px; position:relative; background:#707070;">
            <img id=""src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/5254EE88-94F6-4492-AC0B-FE14E65C03B1.png">
            <p style="position:absolute; top:20px; left:270px; text-align:center; font-size:25px; color:white;">WEB SERVICE</p><br>
            <p style="position:absolute; top:70px; left:270px;  text-align:center; font-size:20px; color:white;">- 홈페이지 제작</p>
            <p style="position:absolute; top:90px; left:270px; text-align:center; font-size:20px; color:white;">- 쇼핑몰 제작</p>
            <p style="position:absolute; top:110px; left:270px; text-align:center; font-size:20px; color:white;">- 반응형 웹 서비스 제작</p>
            <p style="position:absolute; top:130px; left:270px; text-align:center; font-size:20px; color:white;">- 프렌차이즈 홈페이지 제작</p>
            <p style="position:absolute; top:150px; left:270px; text-align:center; font-size:20px; color:white;">- 고객 맞춤형 홈페이지 제작</p>
        </div>
        <div class="col-5" style="margin-top:20px;margin-left:0px; margin-bottom:10px; position:relative; background:#707070;">
            <img id="" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/4E05FA52-102E-4DAE-B953-F86C514FDD33.png">
            <p style="position:absolute; top:20px; left:270px; text-align:center; font-size:25px; color:white;">MOBILE/APPLICATION</p><br>
            <p style="position:absolute; top:70px; left:270px; text-align:center; font-size:20px; color:white;">- 아이폰,안드로이드 앱 제작</p>
            <p style="position:absolute; top:90px; left:270px; text-align:center; font-size:20px; color:white;">- 모바일 웹 제작</p>
            <p style="position:absolute; top:110px; left:270px; text-align:center; font-size:20px; color:white;">- 하이브리드 앱 제작</p>
            <p style="position:absolute; top:130px; left:270px; text-align:center; font-size:20px; color:white;">- 다양한 모바일 플랫폼 제작</p>
        </div>
    </div>
    <div class="row">
        <div class="col-5" style="margin-bottom:100px;position:relative; background:#707070;">
            <img id=""src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/F9E6AE40-C6B8-4959-B9A0-4269C7D01C62.png">
            <p style="position:absolute; top:20px; left:270px; text-align:center; font-size:25px; color:white;">PLANNING & DESIGN</p><br>
            <p style="position:absolute; top:70px; left:270px;  text-align:center; font-size:20px; color:white;">- 웹 서비스 기획</p>
            <p style="position:absolute; top:90px; left:270px; text-align:center; font-size:20px; color:white;">- 고객 요구사항 분석</p>
            <p style="position:absolute; top:110px; left:270px; text-align:center; font-size:20px; color:white;">- Web,App 디자인</p>
            <p style="position:absolute; top:130px; left:270px; text-align:center; font-size:20px; color:white;">- UI & UX</p>
        </div>
        <div class="col-5" style="margin-bottom:100px;margin-left:0px; position:relative; background:#707070;">
            <img id="" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/7800432E-45FB-41CA-AC3E-9BC0F2B7AB5F.png">
            <p style="position:absolute; top:20px; left:270px; text-align:center; font-size:25px; color:white;">MANAGEMENT</p><br>
            <p style="position:absolute; top:70px; left:270px; text-align:center; font-size:20px; color:white;">- 디자인 유지보수</p>
            <p style="position:absolute; top:90px; left:270px; text-align:center; font-size:20px; color:white;">- 프로그램 유지보수</p>
            <p style="position:absolute; top:110px; left:270px; text-align:center; font-size:20px; color:white;">- 정기점검</p>
            <p style="position:absolute; top:130px; left:270px; text-align:center; font-size:20px; color:white;">- 하자보수</p>
        </div>
    </div>
</div>
</div>
</div>
  

    <div class="container">
        <div class="row" >  
            <div class="col-4">        
            <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/FCD5CFD2-1C45-498D-9782-5EE08604DF19.png" class="img">
        </div>
         <div class="col-1"></div>
         <div class="col-4">
            <h4><p id="solution"><strong>항상 최고의 솔루션을 제공합니다.<br>
            <br>
             Always Successful Partner with Clients.</strong></p></h4><br>
            <br>
            <button type="submit" class="btn blue" style="margin:0px auto;" onclick="location.href='/Contact_us'">CONTACT US</button>
        </div>
    </div>
</div>


@endsection