var isShow = true;
 var isPoor = isFair = isGood = isVeryGood = isExcellent = true;
$(document).ready(function(){
    $('#btn-more').click(function(){
        $('#less').removeClass('btn-hide');
        $('#less').addClass('btn-show');
        $('#more').addClass('btn-hide')
    });
    $('#btn-less').click(function(){
        $('#more').removeClass('btn-hide');
        $('#more').addClass('btn-show');
        $('#less').addClass('btn-hide')
    });
    $('#sign-in').click(function(){
        if(isShow){
            $('#form-sign-in').removeClass('btn-hide');
            $('#form-sign-in').addClass('btn-show');
        }
        else{
            $('#form-sign-in').removeClass('btn-show');
            $('#form-sign-in').addClass('btn-hide');
        }
        isShow = !isShow;
    });
    $('#poor').click(function(){
        if(isPoor){
            $('#poor').addClass('color-red');
        }
        else{
            $('#poor').removeClass('color-red');
        }
        isPoor = !isPoor;
    });
    $('#fair').click(function(){
        if(isFair){
            $('#fair').addClass('color-red');
        }
        else{
            $('#fair').removeClass('color-red');
        }
        isFair = !isFair;
    });
    $('#good').click(function(){
        if(isGood){
            $('#good').addClass('color-red');
        }
        else{
            $('#good').removeClass('color-red');
        }
        isGood = !isGood;
    });
    $('#very-good').click(function(){
        if(isVeryGood){
            $('#very-good').addClass('color-red');
        }
        else{
            $('#very-good').removeClass('color-red');
        }
        isVeryGood = !isVeryGood;
    });
    $('#excellent').click(function(){
        if(isExcellent){
            $('#excellent').addClass('color-red');
        }
        else{
            $('#excellent').removeClass('color-red');
        }
        isExcellent = !isExcellent;
    });
});



    $('#str-5').hover(function(){
        $('#str-5').addClass('str-gold');
        $('#str-4').addClass('str-gold');
        $('#str-3').addClass('str-gold');
        $('#str-2').addClass('str-gold');
    });
    $('#str-4').hover(function(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').addClass('str-gold');
        $('#str-3').addClass('str-gold');
        $('#str-2').addClass('str-gold');
    });
    $('#str-3').hover(function(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').removeClass('str-gold');
        $('#str-3').addClass('str-gold');
        $('#str-2').addClass('str-gold');
    });
    $('#str-2').hover(function(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').removeClass('str-gold');
        $('#str-3').removeClass('str-gold');
        $('#str-2').addClass('str-gold');
    });
    $('#str-1').hover(function(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').removeClass('str-gold');
        $('#str-3').removeClass('str-gold');
        $('#str-2').removeClass('str-gold');
    });

   

  var str5=str4=str3=str2=false;
    $('#str-5').click(function(){
        str5 = true;
        str4 = false;
        str3 = false;
        str2 = false;
    });
    $('#str-4').click(function(){
        str5 = false;
        str4 = true;
        str3 = false;
        str2 = false;
    });
    $('#str-3').click(function(){
        str5 = false;
        str4 = false;
        str3 = true;
        str2 = false;
    });
    $('#str-2').click(function(){
        str5 = false;
        str4 = false;
        str3 = false;
        str2 = true;
    });
    
    function str5_show(){
        $('#str-5').addClass('str-gold');
        $('#str-4').addClass('str-gold');
        $('#str-3').addClass('str-gold');
        $('#str-2').addClass('str-gold');
    }
    function str4_show(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').addClass('str-gold');
        $('#str-3').addClass('str-gold');
        $('#str-2').addClass('str-gold');
    }
    function str3_show(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').removeClass('str-gold');
        $('#str-3').addClass('str-gold');
        $('#str-2').addClass('str-gold');
    }
    function str2_show(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').removeClass('str-gold');
        $('#str-3').removeClass('str-gold');
        $('#str-2').addClass('str-gold');
    }
    function str1_show(){
        $('#str-5').removeClass('str-gold');
        $('#str-4').removeClass('str-gold');
        $('#str-3').removeClass('str-gold');
        $('#str-2').removeClass('str-gold');
    }
    
    if(str5){
        str5_show();
    }
    if(str4){
        str4_show();
    }
    if(str3){
        str3_show();
    }
    if(str2){
        str2_show();
    }
    if(str1){
        str1_show();
    }


    
