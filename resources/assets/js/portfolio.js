

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
        });
    });
    // $('#li-click-1').css('opacity','1');
    // $('#li-click-1').css('z-index','10');

    // $('#li-1').click(function(){
    //     $('#li-click-1').css('z-index','10');
    //     $('#li-click-1').css('opacity','1');
    //     $('#li-click-2').css('z-index','0');
    //     $('#li-click-2').css('opacity','0');
    //     $('#li-click-3').css('z-index','0');
    //     $('#li-click-3').css('opacity','0');
    //     $('#li-click-4').css('z-index','0');
    //     $('#li-click-4').css('opacity','0');
        
    // })
    // $('#li-2').click(function(){
    //     $('#li-click-1').css('z-index','0');
    //     $('#li-click-1').css('opacity','0');
    //     $('#li-click-2').css('z-index','10');
    //     $('#li-click-2').css('opacity','1');
    //     $('#li-click-3').css('z-index','0');
    //     $('#li-click-3').css('opacity','0');
    //     $('#li-click-4').css('z-index','0');
    //     $('#li-click-4').css('opacity','0');
        
    // })
    // $('#li-3').click(function(){
    //     $('#li-click-1').css('z-index','0');
    //     $('#li-click-1').css('opacity','0');
    //     $('#li-click-2').css('z-index','0');
    //     $('#li-click-2').css('opacity','0');
    //     $('#li-click-3').css('z-index','10');
    //     $('#li-click-3').css('opacity','1');
    //     $('#li-click-4').css('z-index','0');
    //     $('#li-click-4').css('opacity','0');
    // })
    // $('#li-4').click(function(){
    //     $('#li-click-1').css('z-index','0');
    //     $('#li-click-1').css('opacity','0');
    //     $('#li-click-2').css('z-index','0');
    //     $('#li-click-2').css('opacity','0');
    //     $('#li-click-3').css('z-index','0');
    //     $('#li-click-3').css('opacity','0');
    //     $('#li-click-4').css('z-index','10');
    //     $('#li-click-4').css('opacity','1');
    // })

})

