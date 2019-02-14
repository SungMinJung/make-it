<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        @component('gentelella.panel')
            @slot('title')
                <h2>Q&A</h2>
                <a href="">
                    <button class="btn btn-primary pull-right">질문 및 답변추가 </button>
                </a>
            @endslot

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>#</th>
                    <th class="column-title">번호 </th>
                    <th class="column-title">제목 </th>
                    <th class="column-title">비고 </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
            </thead>

            <tbody>
                    {{-- <tr class="{{ ($index % 2) ? 'odd' : 'evan' }} pointer"> --}}
                     <tr>
                        <td class="a-center ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="a-center ">번호</td>
                        <td class="test">질문질문질문</td>
                        <td>
                            <button class="btn btn-warning btn-xs">수정</button>
                            <button class="btn btn-success btn-xs qna_show">답글</button>
                            <button class="btn btn-danger btn-xs">삭제</button>
                        </td>
                        
                    </tr>
            </tbody>

            </table>
            <div class="paging">
                {{-- {{ $items->appends($_GET)->links() }} --}}
            </div>
        </div>

        @endcomponent
    </div>
</div>
<script>
$(document).ready(function(){
    $("qna_show").click(function(){
      $(".test").fadeIn();
    });
  });

    </script>