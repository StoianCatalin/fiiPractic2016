$(document).ready(function() {
    $('#despre .buttons .button').popup();
    if ($('#top')[0]) if($(window).scrollTop() > $('#top').offset().top + $('#top').height()) {
        $('header').addClass('scrolled');
    }
    else if ($('header').hasClass('scrolled')) {
        $('header').removeClass('scrolled');
    }
    $(window).scroll(function() {
        if($(window).scrollTop() > $('#top').offset().top + $('#top').height()) {
            $('header').addClass('scrolled');
        }
        else if ($('header').hasClass('scrolled')) {
            $('header').removeClass('scrolled');
        }
    });
    $('.responsive-menu .dropdown').dropdown();
    $('.selectArie').dropdown();
    $('.selectTrainer').dropdown();
    $('.vectorGraphic').addClass('animated bounceInUp');

    $('.loginIndividual').form({
        fields: {
            email : ['email', 'empty'],
            password : ['empty', 'minLength[6]']
        }
    });
    $('.registerIndividual').form({
        fields: {
            email : ['email', 'empty'],
            name : ['empty', 'minLength[6]'],
            address : ['empty'],
            password : ['empty', 'minLength[6]'],
            cnp : ['exactLength[13]'],
            phone : ['empty', 'exactLength[10]']
        }
    });
    $('.changeAccountInfo').form({
        fields: {
            email : ['email', 'empty'],
            name : ['empty', 'minLength[6]'],
            address : ['empty'],
            password : ['empty', 'minLength[6]'],
            repeatPassword : ['empty', 'minLength[6]'],
            phone : ['empty', 'exactLength[10]']
        }
    });
    $(document).on('click', '.switchForms', function() {
        var form = $('.'+$(this).attr('data-form')).show().css('position', 'relative').addClass('animated bounceInLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('animated bounceInLeft');
        });
        var formOld = $('.'+$(this).attr('data-formOld')).css('position', 'absolute').css('top', 0).addClass('animated zoomOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('animated zoomOut').hide();
        });
    });
});