@extends('layouts.app')
<head>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYR3HOUCckMRzV1ko1HnAudr2k8WkZXhs"></script>
</head>
@section('content')

{{-- <script src="http://code.jquery.com/jquery-1.7.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=AIzaSyBYR3HOUCckMRzV1ko1HnAudr2k8WkZXhs"></script> --}}


<script>
var myCenter=new google.maps.LatLng(37.482189, 126.996703);

function initialize() {

var mapProp = {
    center:myCenter,
    zoom:16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
    position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="row" style="background-image:url(https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/7BAA5789-D65E-4606-8293-13F748184125.png);padding-top:100px;width:1920px;height:820px;background-repeat:no-repeat;margin:0px auto;">
    <div class="container">
        <div class="row">
            <p class="contacttitle">Contact us</p>
        </div>
        <div class="row"><br></div>
        <div class="row">
            <p class="contactcontent">항상 고객과의 좋은 인연을 기다리고 있습니다.</p>
        </div>
        <div class="row"><br><br><br><br></div>
        <div class="row">
            <div class="col-3">
                <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/B2DCFDBB-FE7F-4F5C-8BDB-E7DF088B1235.png" alt="" style="width:368px;height:184;margin-bottom:40px;">
                <div class="row" style="margin-bottom:60px;">
                    <div class="col-1 contactneed">
                        Tel<br><br>
                        Email<br><br>
                        Address
                    </div>
                    <div class="col-1 contactinfo" style="white-space:nowrap;">
                        02 - 6081 - 1933<br><br>
                        contact@make-it.co.kr<br><br>
                        서울시 서초구 방배로89 성지빌딩 402호
                    </div>
                </div>
                <div class="row" style="margin-left:100px;">
                    <img src="/img/insta.png" alt="" style="margin-right:20px;">
                    <img src="/img/facebook.png" alt="" style="margin-right:20px;">
                    <img src="/img/twitter.png" alt="">
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <input type="text" name="contact_name" placeholder="Name">
                        </div>
                        <div class="col-2">
                            <input type="text" name="contact_tel" placeholder="Telephone Number">
                        </div>
                    </div>
        
                    <div class="row"><br><br></div>
        
                    <div class="row">
                        <div class="col-2">
                            <input type="email" name="contact_email" placeholder="Email Address">
                        </div>
                        <div class="col-2">
                            <input type="text" name="contact_refsite" placeholder="Reference Site or App">
                        </div>
                    </div>
        
                    <div class="row"><br><br></div>
        
                    <div class="row">
                        <div class="col-4">
                            <textarea name="contact_content" placeholder="Message" style="width:100%"></textarea>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <button type="submit" class="btn blue" style="margin-left:245px;margin-top:50px;">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="googleMap" style="width:1920px;height:444px;margin:0px auto;"></div>


@endsection