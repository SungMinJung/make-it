@extends('gentelella.app')

@section('pagetitle', "Contact us 관리")

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
                <h2>Contact us 목록</h2>
            @endslot

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>#</th>
                    <th class="column-title">번호 </th>
                    <th class="column-title">이름 </th>
                    <th class="column-title">이메일 </th>
                    <th class="column-title">작성일 </th>
                    <th class="column-title">비고 </th>
                    </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contacts as $item)
                        <td class="a-center ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="a-center ">{{ $item->id }}</td>
                        <td class="">{{ $item->contact_name }}</td>
                        <td class="">{{ $item->contact_email }}</td>
                        <td class="">{{ $item->created_at }}</td>
                        <td class="">
                            <button class="btn btn-warning btn-xs" onclick="location.href='{{ route('admin.contact.show', $item->id) }}'">보기</button>
                            {{-- <form action="{{ route('admin.contact.destroy', $item->id) }}" method="post" style="float:left;">
                                @csrf
                                @method('delete')
                                <button type="submit">삭제</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
            </table>
            <div class="paging">
                {{ $contacts->render() }}
            </div>
        </div>
        @endcomponent
    </div>
</div>
@endsection