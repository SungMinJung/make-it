

$(document).ready(function(){
    $('#aimg2').css('opacity','1');
    setTimeout(function(){
        $('#aimg3').css('opacity','1');
        setTimeout(function(){
            $('#aimg4').css('opacity','1');
            setTimeout(function(){
                $('#aimg5').css('opacity','1');
                setTimeout(function(){
                    $('#aimg6').css('opacity','1');
                },300);
            },300);
        },300);
    },300);
    
    $('.port-box').each(function(index,elem){
        $(elem).click(function(){
            console.log(index);
        })
        $(elem).mouseover(function(){
            $(elem).find('.port-hover').css('display','block');
        })
        $(elem).mouseleave(function(){
            $(elem).find('.port-hover').css('display','none');
        })
    })


    var selectedClass = "";
    $('.fil-cat').each(function(index, elem){
        $(elem).click(function(){ 
            selectedClass = $(elem).attr("data-rel"); 
            console.log(index);
            console.log(selectedClass);
            $("#portfolio").fadeTo(100, 0.1);
            $("#portfolio .port-box").not("."+selectedClass).fadeOut().removeClass('scale-anm');
            
            setTimeout(function() {
                $("."+selectedClass).fadeIn().addClass('scale-anm');
                $("#portfolio").fadeTo(300, 1);
                console.log('execute setTimeout');
            }, 300); 
        })
    })

    $('#notice_title>.col-1').each(function(index, elem){
        $(elem).click(function(){ 
            selectedClass = $(elem).attr("data-rel"); 
            console.log(index);
            console.log(selectedClass);
            $("."+selectedClass).fadeIn();
            $('.all').not("."+selectedClass).fadeOut();
            
            // setTimeout(function() {
            //     $("."+selectedClass).fadeIn();
            //     $("#notice_table").fadeTo(300, 1);
            //     console.log('execute setTimeout');
            // }, 300); 
        })
    })
    var selectedQNA
    $('.qna-btn-down').each(function(index,elem){
        console.log(index);

        $(elem).click(function(){
            selectedQNA = $(elem).attr("data-target"); 
            $("."+selectedQNA).fadeIn('slow');
            $(elem).css('display','none');
            $(elem).next().css('display','inline');
            $(elem).parents('tr').css('background','#0066FF').css('color','#fff');
            $(elem).parents('tr').find('#icon').css('background',"#fff").css('color','#0066ff');
        })
    })

    $('.qna-btn-up').each(function(index,elem){
        console.log(index);

        $(elem).click(function(){
            selectedQNA = $(elem).attr("data-target"); 
            $("."+selectedQNA).fadeOut('slow');
            $(elem).css('display','none');
            $(elem).prev().css('display','inline');
            $(elem).parents('tr').css('background','#fff').css('color','#000');
            $(elem).parents('tr').find('#icon').css('background',"#0066FF").css('color','#fff');
        })
    })
    
    // service
    $('#bar1').click(function() {  $('#bar').css('transform','translate(0px, 0px)'); })
    $('#bar2').click(function() {  $('#bar').css('transform','translate(232px, 0px)'); })
    $('#bar3').click(function() {  $('#bar').css('transform','translate(464px, 0px)'); })
    $('#bar4').click(function() {  $('#bar').css('transform','translate(696px, 0px)'); })
    $('#bar5').click(function() {  $('#bar').css('transform','translate(928px, 0px)'); })
})

