<style>
img.img{
    padding: 20px; 30px; 30px; 40px;
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

.blue {
    border-color: #0066FF;
    background-color: #ffffff;
    color:#0066FF;
}

.blue:active {
    background-color: #0066FF;
    color: #ffffff;
}
.about{
    width: 1920px;
    height: 1500px;
    background-color: var(--white);
}
</style>    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="row" style="background-image:url('/image/mask36.jpg'); width:1920px; height:695px;">
        <div class="container"> 
            <div clss="col-5">
            <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/A6DF6D13-F136-47B6-BBDA-EC3ACD303339.png" style="width:595.4px; height:473px;" class="img">
            <button type="submit" class="btn blue" style="margin:0px auto;" onclick="location.href='{{ url('/main') }}'">Portfolio</button>
        </div>
    </div>
</div>
    
    <div class="row">
        <div class="about">            
            <div class="container">
            <div class="col-4">
                <img id="" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/E788CFC0-2C6B-4413-978F-FD68FF882C5F.png" style="width:166.5px; height:83px;"><strong>를 이끌어나가는 사람들</strong><br>
            </div>
            <div class="row">
            <div class="col-2">
            <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/7514DEC9-776B-4113-BD77-BE2B6854FFA2.png" style="width:224px; height:224px;" class="img">
            </div>
            <div class="col-2"></div>
            <div class="col-2">
            <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/B95EFB51-D909-4990-8586-AF88A072F67C.png" style="width:224px; height:224px;" class="img">
            </div>
            <div class="col-2"></div>
            <div class="col-2">
            <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/2A50D7AA-02B8-4EAF-9663-3BBCC4D6253A.png" style="width:224px; height:224px;" class="img">
            </div>
        </div>
    </div>
