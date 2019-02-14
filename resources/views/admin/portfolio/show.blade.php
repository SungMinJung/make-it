@extends('gentelella.app')


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @component('gentelella.panel')
            @slot('title')
                <h2>포트폴리오 정보</h2>
            @endslot
            
            제목 : {{ $port->title }} <br>
            카테고리 : {{ $port->category }}
            
        
        
        @endcomponent
    </div>
</div>
@endsection