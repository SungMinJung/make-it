@extends('layouts.app')

@section('content')
    
<style>

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

.blue {
    border-color: #0066FF;
    background-color: #ffffff;
    color:#0066FF;
}

.blue:active {
    background-color: #0066FF;
    color: #ffffff;
}

.gray {
    background-color: #ffffff;
    color: #3d3d3d;
}

.gray:active {
    background-color: #3d3d3d;
    color: #ffffff;
}

.title1 {
    font-family:inherit;
    font-size:20px;
    line-height:1.45;
    font-weight:500;
    font-family: inherit;
}

.content1 {
    font-size:15px;
    font-weight:300;
    line-height:1.67;
    color:#707070;
    font-family: inherit;
}

</style>

<div class="row" style="background-image:url('/image/마스크 그룹 39.jpg');width:1920px;height:480px;padding-top:150px;background-size:contain">
    <div class="container">
        <div class="row" >
            <div class="col-5">

            </div>
            <div class="row">
                <div class="col-3">
                    <img src="/image/그룹 103.png" alt="" srcset="">
                </div>
            </div>
            <div class="col-5">

            </div>
            <div class="row">
                <div class="col-4">
                    <p class="title1" style="margin-top:20px;margin-bottom:20px">
                        메이크아이티는 고객의 목적에 맞는 웹과 어플리케이션을
                        효율적이고 합리적으로 제작하는 전문업체입니다.
                    </p>
                </div>
            </div>
            <div class="col-5">

            </div>
            <div class="row">
                <div class="col-5">
                    <p class="content1">
                        MAKE IT는<br>
                        고객의 이상적인 웹과 앱을 구현하는 <span class="bluetitle">고객맞춤형(Clinent customized)</span> 제작 서비스입니다. 
                        아울러, <span class="bluetitle">사용자 중심(UX:User experience)</span>의 홈페이지부터 쇼핑몰, 웹 서비스, 어플리케이션 등 사용자가 보다 나은 경험을 할 수 있도록 합니다.
                    </p>
                </div>
            </div>
            <div class="col-5">
                
            </div>
            <button type="submit" class="btn blue" style="margin:0px auto;">Portfolio</button>
            <button type="submit" class="btn gray" style="margin:0px auto;">Portfolio</button>
        </div>
    </div>
</div>

@endsection

