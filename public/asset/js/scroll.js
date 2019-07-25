//img
var img_top = $('#sec4-img').offset().top -400;

//chart
var chart_top = $('#chart').offset().top - 550;

//chart sec6
var sec6_right = $('#sec6-img').offset().top -400;

// sec7
var sec7 = $('#sec71').offset().top -600;

window.onscroll = function() {
    
    //img 
    if (($(document).scrollTop() >= img_top) && ($(document).scrollTop() <= img_top + 600)) {
        $('#sec4-img').addClass('ani-class');
    }
    else
    {
        $('#sec4-img').removeClass('ani-class');
    }
        
    //chart
    if (($(document).scrollTop() >= chart_top) && ($(document).scrollTop() <= chart_top + 400)) {
        $('#chart').addClass('ani-chart-in');
    }
    else
    {
        $('#chart').removeClass('ani-chart-in');
    }

    //sec6

    if (($(document).scrollTop() >= sec6_right) && ($(document).scrollTop() <= sec6_right + 500)) {
        $('#sec6-img').addClass('ani-sec6');
    }
    else
    {
        $('#sec6-img').removeClass('ani-sec6');
    }

    //sec7
    if(($(document).scrollTop() >= sec7) && ($(document).scrollTop() <= sec7+300)){
        $('#sec71').addClass('sec71-ani');
        $('#sec72').addClass('sec72-ani');
        $('#sec73').addClass('sec73-ani');
    }
    else{
        $('#sec71').removeClass('sec71-ani');
        $('#sec72').removeClass('sec72-ani');
        $('#sec73').removeClass('sec73-ani');
    }
}
