@extends('layouts.app')
<head>

</head>
<style>
    .qa{
        position:relative;

    }
    .qa .qa_bg{
        position:relative;
        background:url('https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/87914826-FC99-4754-96FB-EE7AFAAD5041.png');
        width:1920px;
        height:585px;
        opacity:0.5;
    }
    .ext{
        position:absolute;
        z-index:999;
        width:100%;
    }

    
    .qa_content #ask{
        text-align:center;
        font-size:70px;
        color:white;
        font-weight:bold;
        padding-top:133px;
    }
    .qa_content #it{
        color: #0066ff;
    }
    .qa_form{
        text-align:center;
        line-height:20px;
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
.qa_form #form1 img{
    width:21.6px;
    height:21.6px;
}
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
    border:2px solid #3d3d3d;
}

</style>
@section('content')

<div class="qa">
    <div class="qa_bg">
        <div class="ext">

    <div class="qa_content">
        <p id="ask"> MAKE <span id="it"> IT </span> 에게 물어봐주세요</p>
    </div>

        <div class="qa_form">

                <form id="form1" name="form1" method="post" action="">
                        <label for="name">Name:</label>
                        {{-- <img src="https://st2.depositphotos.com/1007566/11948/v/950/depositphotos_119488544-stock-illustration-lupe-magnifying-glass-icon-vector.jpg" alt="">  --}}
                            <input name="name" id="name" type="text" style="background:url('/img/search.jpg');" /><br />
                        {{-- <input name="submit" type="button" value="Submit" /> --}}
                        </form>

        </div>
</div>
</div>
</div>

    <div class="container">
        <div class="row" id="notice_title">
            <div class="col-1">전체</div>
            <div class="col-1">공지사항</div>
            <div  class="col-1">Q&A</div>
        </div>
        <hr id="horizen">

        <table id="notice_table">
            {{-- <tr id="title">
                <th>전체</th>
                <th>공지사항</th>
                <th>Q&A</th>
            </tr> --}}
            <tr>
                <td id="notice"><div id="icon">공지</div></td>
                <td id="content">MAKEIT 업무 휴무 공지. 5월 1일 근로자의 날</td>
            </tr>
            <tr>
                <td id="question"> <img width="24" height="41" src="https://iconsplace.com/wp-content/uploads/_icons/0000ff/256/png/letter-q-icon-2-256.png" alt=""> </td>
                <td id="content">계약을 체결한 뒤에 어떤 절차로 업무가진행되나요?</td>
            </tr>

        </table>

    </div>



          
@endsection