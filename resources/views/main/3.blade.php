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

</style>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <div class="row" style="background-image:url('/image/mask17.png'); width:1920px; height:330px;">
        <div class="container"> 
            <h1><p><strong>Mobile Appilcation</h1></strong>
            <h2>모바일 어플리케이션</p></h2><br>
            <button type="submit" class="btn gray" style="margin:0px auto;" onclick="location.href='{{ route('service.mobile') }}'">자세히 알아보기</button>
        </div>
    </div>

    <div class="row" style="background-image:url('/image/mask18.jpg'); width:1920px; height:330px;">
        <div class="container"> 
            <h1><p><strong>Website</p></h1></strong>
            <h2><p>웹사이트</p></h2><br>
            <button type="submit" class="btn gray" style="margin:0px auto;" onclick="location.href='{{ route('service.web') }}'">자세히 알아보기</button>
        </div>
    </div>
    
    <div class="row" style="background-image:url('/image/mask19.jpg'); width:1920px; height:330px;">
        <div class="container"> 
            <h1><p><strong>Responsive Website</p></h1></strong>
            <h2><p>반응형 웹사이트</p></h2><br>
            <button type="submit" class="btn gray" style="margin:0px auto;" onclick="location.href='{{ route('service.responsive') }}'">자세히 알아보기</button>
        </div>
    </div>