@extends('layouts.app')
    <style>
.qa {
  background: url("https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/87914826-FC99-4754-96FB-EE7AFAAD5041.png") no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  width: 1920px;
  height: 585px;
  position: relative;
  text-align: center;
}

.qa::before {
  content: "";
  display: block;
  -moz-filter: blur(1px) brightness(0.5);
  -ms-filter: blur(1px) brightness(0.5);
  -o-filter: blur(1px) brightness(0.5);
  filter: blur(1px) brightness(0.5);
  position: absolute;
  left: 1px;
  top: 1px;
  right: 1px;
  bottom: 1px;
  background: inherit;
  z-index: 0;
}

.content {
  position: relative;
  z-index: 10;
  padding-top: 50px;
}

.title {
  font-family: arial;
  font-size: 3em;
  color: white;
  font-weight: 900;
  margin: 20px;
}
.title #it{
  color:#0066ff;
}

.qa_form{
        text-align:center;
        line-height:20px;
    }

.qa_form #form1 img{
    width:21.6px;
    height:21.6px;
}
label {
    width:60px;
    float:left;
    font-size:12px;
    line-height:24px;
    font-weight:bold;

}
input {
    width:954px;
    height:56px;
    margin-bottom:5px;
    line-height:18px;
    padding:2px 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border:1px solid #CCC;
    background:url('/img/search.jpg');
    background-position:top right; 
  background-repeat:no-repeat;

}
/* 여기서부터는 테이블  */
#notice_title{
    margin-top:5%;
    font-size:20px;
    text-align:center;
    margin-bottom:13px;
}

#notice_table td{
    border-bottom:2px solid #707070;
}
#notice_table #notice{
    padding:20px 2px 20px 10px;
    text-align:center;
    width:2%;
}
#notice_table #icon{
    width:80px;
    height:23px;
    color:white;
    border-radius:52px;
    padding:5px 0px 5px 0px;
    background:#0066ff;
    font-weight:bold;

}
#notice_table #question{
    text-align:center;
    padding:15px 0 15px 0;


}

#notice_table #content{

    width:50%;
    padding-left:12px;
}
#horizen{
    border:1px solid #3d3d3d;
}
.qna-btn{
    float:right;
}
.qna-btn-up, .qna-btn-down{
    border:0px;
    background: #fff;
}
.qna-btn-up{
    display: none;
}
.ans-content{
    padding:20px 2px 20px 10px;
    width:50%;
    padding-left:12px;
}
.ans-tr{
    display: none;
}
    </style>


@section('content')

<body>
    <div class='qa'>
        <div class='content'>
          <div class='title'><p id="ask"> MAKE <span id="it"> IT </span> 에게 물어봐주세요</p></div>

     <div class="qa_form">
      
         <form id="form1" name="form1" method="post" action="">
           <input name="name" id="name" type="text" style="background:url('/img/search.jpg');" /><br />
       </form>
   </div>

        </div>
      </div>

{{--  --}}
    <div class="container">
        <div class="row" id="notice_title">
            <div class="col-1">전체</div>
            <div class="col-1">공지사항</div>
            <div class="col-1">Q&A</div>
        </div>
        <hr id="horizen">

        <table id="notice_table">
            <tr>
                <td id="notice"><div id="icon">공지</div></td>
                <td id="content">MAKEIT 업무 휴무 공지. 5월 1일 근로자의 날</td>
                <td>
                    <div class="qna-btn">
                    <button class="qna-btn-down" data-target="board-1">▽</button>
                    <button class="qna-btn-up" data-target="board-1">△</button>
                    <div>
                </td>
            </tr>

            <tr class="ans-tr board-1">
            <td></td>
            <td class="ans-content" colspan="2">5월 1일은 근로자의 날이므로 휴무입니다.<br>감사합니다</td>
            </tr>

            <tr>
                <td id="question"> <img width="24" height="41" src="https://iconsplace.com/wp-content/uploads/_icons/0000ff/256/png/letter-q-icon-2-256.png" alt=""> </td>
                <td id="content" colspan="2">계약을 체결한 뒤에 어떤 절차로 업무가진행되나요?</td>
            </tr>

        </table>
      </div>
    @include('main.6');
@endsection