$(document).ready(function(){
    $('form').submit(function(event){
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var service = $('#service').val();
        var message = $('#message').val();
        var submit = $('#submit').val();
        $('.form-message').load('contact.php', {
            name: name,
            email: email,
            service: service,
            message: message,
            submit: submit
        })
    })
})