<div class="container reldiv">
    <div class="row" style="margin-top:50px;">
        
        <img src="/image/sublogo.png">
        <div class="reldiv">
            <strong  class="port-title">포트폴리오</strong>
        </div>
    </div>
    <div class="row" style="margin:30px 0 30px 0;">
        <div class="col-5">
        <ul class="port-li">
            <li class="btn fil-cat" data-rel="all">All</li>
            <li class="btn fil-cat" data-rel="app">App</li>
            <li class="btn fil-cat" data-rel="web">Web</li>
            <li class="btn fil-cat" data-rel="response">Responsive</li>
        </ul>
    </div>
    </div>

    
    
    <div id="portfolio" class="row" >
        @foreach ($portfolio as $item)
        <div>
            <div class="tile col-2 port-box scale-anm {{ $item['category'] }} all" style="background: url('{{$item['main_image'] }}')">
                <div class="port-hover">
                    <p class="title-p">{{ $item['title'] }}</p>
                    
                    <p class="link-p"><a href="{{ route('port',['seq'=>$item['title']]) }}">이동</a></p>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
