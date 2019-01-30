@extends('layouts.app')

@section('content')
 
<style>

.tab {
    list-style: none;
    margin: 0;
    padding: 0;
    /* overflow: hidden; */
}

.tab li {
    display: inline;
    margin-left: 100px;

}

.tab li a {
    display: inline-block;
    color: #3d3d3d;
    text-align: center;
    text-decoration: none;
    font-size: 22px;
    font-weight: bold;
    transition:0.3s;
}

.tabcontent {
    display: none;
    background-color: #ffffff;
    color: #3d3d3d;
    border-bottom-color: #0066ff;
    padding-top: 50px;
}

.clear {
    clear: both;
}

ul.tab li.current{
    background-color: #ffffff;
    color: #0066ff;
    border-bottom-color: #0066ff;
}



.tabcontent.current {
    display: block;
    color: #3d3d3d;
}

.servicesmall {
    font-size: 30px;
    color: #3d3d3d;
}

.servicebig {
    font-size: 43px;
    color: #3d3d3d;
    font-weight: bold;
}

.workprocesstitle {
    font-size:25px;
    color: #707070;
    font-weight: bold;
}

.workprecesscontent {
    color: #3d3d3d;
    font-size: 15px;
    font-weight: lighter;
}

.workprocesslist {
    list-style-type: circle;
    color: #0066ff;
}

.freeservicetitle {
    color: #3d3d3d;
    font-size: 30px;
    font-weight: bold;
}

.freeserviceconent {
    font-size: 20px;
    color: #3d3d3d;
}

</style>

{{-- 가로 리스트 생성 jquery --}}
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(document).ready(function(){
 
    $('.tab li a').each(function(index,elem){
        $(elem).click(function(){
            $('.tab li').children().css('color','#3d3d3d');
            $(elem).css('color',' #0066ff');
        })
       
    })

    $('.tab li').click(function() {
        var activeTab = $(this).attr('data-tab');
        $('.tab li').removeClass('current');
        $('.tabcontent').removeClass('current');
        $(this).addClass('current');
        $('#' + activeTab).addClass('current');
    })

});
</script>
<div class="row" style="background-image:url('https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/4EDDC055-F8A6-44F9-8923-ADD2729E4BFB.png');width:1920px;height:733px;margin:0px auto;">
    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-5" style="margin-top:190px;">
                <span class="servicesmall" style="color:#ffffff;">Website Development</span><br>
                <span class="servicebig" style="color:#ffffff;">웹사이트 개발 및 제작</span>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-5" style="margin:40px 0px 40px 0px;position:relative;left:10px;">
                <span class="workprocesscontent" style="color:#ffffff; white-space:nowrap">
                    비즈니스 목적에 맞는 경쟁력있는 웹사이트를 제작합니다.<br>
                    고객의 니즈를 정확하게 이해하고 최신 트렌드를 반영한 웹사이트 제작을 목표로 합니다.
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-1">
                <hr style="border-width:4px;border-color:#ffffff;" noshade>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-2" style="margin-top:5px;margin-bottom:15px;">
                <span style="color:#ffffff;font-size:17px;font-weight:600">Website Category</span>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-4">
                <span class="workprocesscontent" style="color:#ffffff;">
                    Arts &amp; Entertainment · Community · Education · Events · Health &amp; Fitness ·
                    Hospitality &amp; Tourism · Personal · Property &amp; Construction · E-COMMERCE · 
                    Fashion · Music · Food · Travel · Beauty · Living · Services etc
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="padding-top:66px;">
        <span class="servicesmall" style="position:relative;left:10px;">Price Information</span>
    </div>
    <div class="row">
        <span class="servicebig" style="position:relative;left:10px;">MAKEIT에서는 고객에게<br>
        4가지 방식을 제안해드립니다.</span>
    </div>
    <div class="row" style="padding-top:60px;">
        <div class="col-10">
            <ul class="tab">
                <li data-tab="tab1"><a href="#">BASIC</a></li>
                <li data-tab="tab2"><a href="#">GENERAL</a></li>
                <li data-tab="tab3"><a href="#">SHOPPING MALL</a></li>
                <li data-tab="tab4"><a href="#">CUSTOM</a></li>
                <li data-tab="tab5"><a href="#">PREMIUM</a></li>
            </ul>
            <div id="tab1" class="tabcontent current">
                <div class="row">
                    <div class="col-1">
                        <hr style="border-width:9px;border-bottom-color:#3d3d3d;" noshade>
                    </div>
                    <div class="col-9" style="position:relative;right:10px;">
                        <p>
                            <span style="font-size:25px;color:#3d3d3d;font-weight:lighter;">기본 웹사이트 제작</span><br>
                            <span style="font-size:40px;font-weight:bold;color:#3d3d3d;">Basic Website</span>
                        </p>
                    </div>
                    <div class="col-3" style="position:relative;right:10px;padding-top:30px;">
                        <span style="font-size:30px;font-weight:bold;color:#3d3d3d;">1,200,000원</span><br>
                        <span style="font-size:20px;color:#0066ff;">모바일웹 제작 추가시 800,000원 추가</span>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <span style="font-size:21px;color:#3d3d3d;position:relative;top:40px;">
                                기본 웹사이트로 내용이 복잡하지 않고 전체 15page 내외로 제작하시는 경우에 적합합니다.<br>
                                빠른 제작 기간과 저렴한 가격을 원하시는 고객께 추천드리며 프랜차이즈 웹사이트, 회사소개 사이트, 이벤트 웹페이지, <br>
                                포트폴리오 사이트 등 소개 및 홍보 목적을 가진 사이트에 적합합니다.
                            </span>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2" style="margin:86px 0px 40px 0px;">
                            - 메인화면 1 page<br>
                            - 서브화면 10 page<br>
                            - 게시판 4 page<br>
                            - 제작기간 2~4주<br>
                        </div>
                    </div>
                </div>
                    {{-- @include('service.process') --}}
                <div class="row" style="padding-top:66px;">
                    <p>
                        <span class="servicesmall">Free Service</span><br>
                        <span class="servicebig">웹 사이트 제작 시 7가지의 무료 서비스를 제공합니다.</span>
                    </p>
                    <div class="col-4">
                        <p class="freeservicetitle">1. 유지보수 1년 무상제공</p><br>
                        <span class="freeservicecontent" style="position:relative;bottom:25px;">
                            -간단한 텍스트 수정 및 이미지 교체 작업<br>
                            -홈페이지 최적화 유지<br>
                            -실시간 미러링(Mirroring) 1일 1회 백업 시스템 제공<br>
                        </span>
                    </div>
                    <div class="col-6">
                        <p class="freeservicetitle">2. 웹호스팅 1년 무상 제공</p>
                        <span class="freeservicecontent">
                            -1년간 호스팅 무료지원(HDD 용량 500MB + 트랙픽 800MB 업그레이드 별도)
                        </span>
                    </div>
                    <div class="col-6">
                        <p class="freeservicetitle">3. 도메인 1년 무료 등록 및 관리</p>
                        <span class="freeservicecontent">
                            -.com, .co.kr, .net, .kr 등 원하는 도메인으로 검색 등록 및 1년간 무료서비스 제공
                        </span>
                    </div>
                    <div class="col-5">
                        <p class="freeservicetitle">4. 홈페이지 원본 소스 제공</p>
                        <span class="freeservicecontent">
                            -포토샵, 프로그램 등 개발 시 산출된 경로가 일체 원본 제공
                        </span>
                    </div>
                    <div class="col-8">
                        <p class="freeservicetitle">5. 검색엔진 등록 지원 서비스</p>
                        <span class="freeservicecontent">
                            구글, 네이버, 다음 등 포털 사이트에 회사명으로 쉽게 노출이 될 수 있도록 사이트 등록을 도와드립니다.<br>
                            <span style="font-size:15px;font-weight:lighter;">*사이트 등록이란, 회사명을 검색하면 사이트 등록된 업체의 홈페이지 주소와
                            간략한 설명, 지도, 관련 앱문서 등 정보를 볼 수 있어서 고객들이 쉽게 회사 관련 정보를 찾을 수 있도록 하는 것을 말합니다.</span>
                        </span>
                    </div>
                    <div class="col-8">
                        <p class="freeservicetitle">6. 웹 표준 크로스 브라우징 무료 적용</p>
                        <span class="freeservicecontent">
                            주요 웹 브라우저(익스플로러, 크롬, 사파리, 파이어폭스 등)와 모바일 접속 시 웹 호환성을 고려하여 웹 표준 크로스
                            브라우징 코딩을 무료로 적용해드립니다. 각종 스마트폰(안드로이드, IOS) 및 아이패드, 갤럭시탭 등에서 PC에서 보여지는
                            것과 동일하게 서비스됩니다.
                        </span>
                    </div>
                    <div class="col-7" style="margin-bottom:70px;">
                        <p class="freeservicetitle">7. 기업메일 계정 무료 제공</p>
                        <span class="freeservicecontent">
                            고객의 도메인으로 다음(Daum)의 무료 기업메일 계정을 쓰실 수 있도록 세팅하여 드립니다.<br>
                            <span style="font-size:15px;font-weight:lighter;">*네이버/구글은 유료이며 고객님 요청 시 연결 작업 가능</span>
                        </span>
                    </div>
                </div>
                @include('main.6')
            </div>

            <div id="tab2" class="tabcontent">
                <h3>Portfolio</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>

            <div id="tab3" class="tabcontent">
                <h3>Contact</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>

            <div id="tab4" class="tabcontent">
                <h3>Travel</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</div>

@endsection