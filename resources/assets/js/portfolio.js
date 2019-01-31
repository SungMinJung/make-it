

$(document).ready(function(){
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

    var selectedQNA
    $('.qna-btn-down').each(function(index,elem){
        console.log(index);

        $(elem).click(function(){
            selectedQNA = $(elem).attr("data-target"); 
            $("."+selectedQNA).fadeIn();
            $(elem).css('display','none');
            $(elem).next().css('display','inline');
        })
    })

    $('.qna-btn-up').each(function(index,elem){
        console.log(index);

        $(elem).click(function(){
            selectedQNA = $(elem).attr("data-target"); 
            $("."+selectedQNA).fadeOut();
            $(elem).css('display','none');
            $(elem).prev().css('display','inline');
        })
    })
    
})

