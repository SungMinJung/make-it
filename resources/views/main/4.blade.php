<div class="container reldiv">
    <div class="row" style="margin-top:50px;">
        
        <img src="//placehold.it/166x83">
        <div class="reldiv">
            <p class="port-title">포트폴리오</p>
        </div>
    </div>
    <div class="row" style="margin:30px 0 30px 0;">
        <ul class="port-li">
            <li class="btn fil-cat" data-rel="all">All</li>
            <li class="btn fil-cat" data-rel="app">App</li>
            <li class="btn fil-cat" data-rel="web">Web</li>
            <li class="btn fil-cat" data-rel="response">Responsive</li>
        </ul>
    </div>

    
    
    <div id="portfolio" class="row " >
        @foreach ($portfolio as $item)
        <div>
            <div class="tile col-2 port-box scale-anm {{ $item['category'] }} all" style="background: url('{{$item['main_image'] }}')">
                <div class="port-hover">
                    <p class="title-p">{{ $item['title'] }}</p>
                    <div class="reldiv" style="height:100px;">
                        <p class="link-p"><a href="{{$item['link']}}">링크이동</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>