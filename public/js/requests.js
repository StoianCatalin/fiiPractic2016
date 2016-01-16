$(document).on('click', '.loginIndividual .submit', function() {
    if (!$('.loginIndividual').children('.error').length) {
        $(this).addClass('loading');
        var email = $('.loginIndividual input[name=email]').val();
        var password = $('.loginIndividual input[name=password]').val();
        $.post('/requests/login', {email: email, password: password}, function(data){
            $('.loginIndividual .submit').removeClass('loading');
            $('.loginIndividual input[name=email]').val("");
            $('.loginIndividual input[name=password]').val("");
            if (data=="Logare efectuata cu success!") {
                $('.loginIndividual .message.success').html(data);
                setTimeout(function() {
                    window.location.href="/";
                }, 3000);
            }else if (data=="Logare efectuata cu succes!"){
                $('.loginIndividual .message.success').html(data);
                setTimeout(function() {
                    window.location.href="/trainer";
                }, 3000);
            }
            else {
                $('.loginIndividual .message.warning').html(data);
                setTimeout(function(){
                    $('.loginIndividual .message.warning').html("");
                }, 3000);
            }
        });
    }
});
$(document).on('click', '.registerIndividual .submit', function() {
    if (!$('.registerIndividual').children('.error').length) {
        $(this).addClass('loading');
        var obj = this;
        var name = $('.registerIndividual input[name=name]').val();
        var email = $('.registerIndividual input[name=email]').val();
        var address = $('.registerIndividual input[name=address]').val();
        var phone = $('.registerIndividual input[name=phone]').val();
        var password = $('.registerIndividual input[name=password]').val();
        var token = $('.registerIndividual input[name=token]').val();
        $.post('/requests/register', {name: name, email: email, address: address, phone: phone, password: password, _token: token}, function(data){
            $('.registerIndividual .submit').removeClass('loading');
            if (data=="Inregistrarea s-a facut cu succes!") {
                $('.registerIndividual input[name=name]').val("");
                $('.registerIndividual input[name=email]').val("");
                $('.registerIndividual input[name=address]').val("");
                $('.registerIndividual input[name=phone]').val("");
                $('.registerIndividual input[name=password]').val("");
                $('.registerIndividual .message.success').html(data);
                setTimeout(function() {
                    window.location.href="/";
                }, 3000);
            }
            else {
                $('.registerIndividual .message.warning').html(data);
                setTimeout(function(){
                    $('.registerIndividual .message.warning').html("");
                }, 3000);
            }
        });
    }
});
$(document).on('click', '.participaTraining', function() {
        $(this).addClass('loading');
        console.log('trimite request ------->');
});



$(document).on('click', '.changeAccountInfo .submit', function(){
    if (!$('.changeAccountInfo').children('.error').length) {
        $(this).addClass('loading');
        var obj = this;
        var name = $('.changeAccountInfo input[name=name]').val();
        var email = $('.changeAccountInfo input[name=email]').val();
        var address = $('.changeAccountInfo input[name=address]').val();
        var phone = $('.changeAccountInfo input[name=phone]').val();
        var password = $('.changeAccountInfo input[name=repeatPassword]').val();
        var repeatPassword = $('.changeAccountInfo input[name=password]').val();
        $.post('/requests/update', {name: name, email: email, address: address, phone: phone, password: password, repeatPassword: repeatPassword}, function(data){
            $('.changeAccountInfo .submit').removeClass('loading');
            if (data=="Modificarea datelor personale a fost efectuata cu succes!") {
                $('.changeAccountInfo .message.success').html(data);
                setTimeout(function() {
                    $('.changeAccountInfo .message.success').html("");
                }, 3000);
            }
            else {
                $('.changeAccountInfo .message.warning').html(data);
                setTimeout(function(){
                    $('.changeAccountInfo .message.warning').html("");
                }, 3000);
            }
        });
    }
});

$(document).on('click', '.sendQuestionResponses .submit', function(){
    if (!$('.sendQuestionResponses').children('.error').length) {
        $(this).addClass('loading');
        var responses = new Array();
        $(".sendQuestionResponses :input").each(function(){
            var response = new Array();
            response.push($(this).attr('name'));
            response.push($(this).val());
            responses.push(response);
        });
        $.post("/requests/register/user-responses", {data: responses}, function(data){
            $('.sendQuestionResponses .submit').removeClass('loading');
            if(data == "Datele dvs. au fost preluate!"){
                $('.sendQuestionResponses .message.success').html(data);
                setTimeout(function() {
                    window.location.href="/";
                }, 3000);
            }else if(data == "Intrebarile marcate cu * sunt obligatorii!"){
                $('.sendQuestionResponses .message.warning').html(data);
                setTimeout(function() {
                    $('.sendQuestionResponses .message.warning').html("");
                }, 3000);
            }
        });
    }
});

//ADMIN REQUESTS! -----------------------------------------------------------------------------------------


$(document).on('click', '.stergeTrainButt', function() {
    var idTraining = $(this).attr('data-id');
    $('.stergeTraining')
        .modal({
            closable  : false,
            onDeny    : function(){
                return false;
            },
            onApprove : function() {
                //Se face request post catre server.
                console.log("Se sterge " + idTraining);
            }
        })
        .modal('show');
});
$(document).on('click', '.aproabaParticipant', function() {
    var id = $(this).attr('data-id');
    $(this).parent().parent().addClass('animated zoomOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).remove();
    });
    //Request post catre server.
});
$(document).on('click', '.respingeParticipant', function() {
    var id = $(this).attr('data-id');
    $(this).parent().parent().addClass('animated zoomOutRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).remove();
    });
    //Request post catre server.
});
$(document).on('click', '.maiTraziu', function() {
    var id = $(this).attr('data-id');
    $(this).parent().parent().addClass('animated fadeOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).remove();
    });
    //Request post catre server.
});
var idIntrebari = 1;
$(document).on('click', '.adaugaIntrebare', function() {
    idIntrebari++;
    $('.intrebariFields').append('<div class="field"><label>Intrebare '+ idIntrebari +'</label><input placeholder="Intrebare '+ idIntrebari +'" type="text" name="intrebare'+ idIntrebari +'"></div><div class="clearfloat"></div>');
    return false;
});
$(document).on('click', '.addGroup', function() {
    var id = $(this).attr('data-id');
    $('.adaugaGrupaModal input[name=id]').val(id);
    $('.adaugaGrupaModal').modal('show');
});
$(document).on('click', '.adaugaGrupaModal .submitForm', function() {
    if ($('.addGroupForm .field.error').length == 0)
        $('.addGroupForm').submit();
    else return false;
});
$('.addGroupForm').form({
    fields: {
        ziua : ['empty', 'regExp[/[0-9]{2}/[0-9]{2}/[0-9]{4}$/]'],
        ora : ['empty', 'regExp[/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]']
    }
});