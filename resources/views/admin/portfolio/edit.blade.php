@extends('gentelella.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @component('gentelella.panel')
            @slot('title')
                <h2>포트폴리오 수정</h2>
            @endslot

            <form method="POST" action="{{ route('admin.portfolio.update', $port->id)}}" class="form-horizontal form-label-left">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="카테고리">
                        카테고리 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="select2_group form-control" name="category">
                            <option selected value="WEB">Web</option>
                            <option value="APP">App</option>
                            <option value="RESPON">Responsive</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                       제목 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12" value= {{$port->title}}>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        썸네일 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        s
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        메인사진 <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        s
                    </div>
                </div>


                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">수정</button>
                        <a href="">
                            <button class="btn btn-primary" type="button">취소</button>
                        </a>
                    </div>
                </div>


            </form>
        @endcomponent

    </div>
</div>
@endsection
