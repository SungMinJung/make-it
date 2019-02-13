@extends('gentelella.app')

@section('pagetitle', 'Q&A 및 공지사항')

@section('title_right')
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <form class="input-group" action="">
      <input type="text" class="form-control" placeholder="Search for..." name="search">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </form>
  </div>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        @component('gentelella.panel')
            @slot('title')
                <h2>전체 목록</h2>
                <a >
                    <button class="btn btn-primary pull-right">회원 추가 </button>
                </a>
            @endslot

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>#</th>
                    <th class="column-title">번호 </th>
                    <th class="column-title">가입일 </th>
                    <th class="column-title">소속클럽 </th>
                    <th class="column-title">이름 </th>
                    <th class="column-title">이메일 </th>
                    <th class="column-title">휴대전화 </th>
                    <th class="column-title">비고 </th>
                    </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
            </thead>
{{-- 
            <tbody>
                @foreach ($items as $index => $item)
                    <tr class="{{ ($index % 2) ? 'odd' : 'evan' }} pointer">
                        <td class="a-center ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="a-center ">{{ $item->id }}</td>
                        <td class="">{{ $item->created_at }}</td>
                        <td class="">{{ $item->club }}</td>
                        <td class="">{{ $item->name }}</td>
                        <td class="">{{ $item->email }}</td>
                        <td class="">{{ $item->tel }}</td>
                        <td>
                            <button class="btn btn-warning btn-xs">수정</button>
                            <button class="btn btn-success btn-xs">보기</button>
                            <button class="btn btn-danger btn-xs">삭제</button>
                        </td>
                    </tr>
                @endforeach

            </tbody> --}}
            </table>
            <div class="paging">
                {{-- {{ $items->appends($_GET)->links() }} --}}
            </div>
        </div>
        @endcomponent
    </div>
</div>
@include('admin.notice.notice')
@include('admin.notice.qna')

@endsection
