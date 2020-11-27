$("#sendMail").on("click",function() {
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var info = $("#info").val().trim();
    if(email == ""){
        $("#errorMess").text("Enter email");
        return false;
    }else if(name ==""){
        $("#errorMess").text("Enter name");
        return false;
    }else if(phone==""){
        $("#errorMess").text("Enter phone");
        return false;
    }else if(info.length < 5){
        $("#errorMess").text("Enter info not less than 5 symbols");
        return false;
    }
    $("#errorMess").text("");

    $.ajax({
        url:'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'name': name, 'email': email, 'phone': phone, 'info': info},
        dataType: 'html',
        beforeSend: function () {
            $("#sendMail").prop("disabled", true);
        },
        success: function (data) {
            if(!data){
                alert("Error! Message hasn't sent!")
            }
            else{
                alert(data);
                $("#formMail").trigger("reset");
            }
            $("#sendMail").prop("disabled", false);
        }
    });
});


    /* sticky Header */
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop(),
            hbHeight = $('.header-top').innerHeight(),
            headerBottom = $('.header-bottom');

        if (scroll >= hbHeight ) {
            headerBottom.addClass("sticky-header");
        } else {
            headerBottom.removeClass("sticky-header");
        }
    });
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop(),
            hbHeight = $('.header-top').innerHeight(),
            mobileMenu = $('.mobile-menu');

        if (scroll >= hbHeight ) {
            mobileMenu.addClass("sticky-header");
        } else {
            mobileMenu.removeClass("sticky-header");
        }
    });

