$("#sendMail").on("click",function() {
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var info = $("#info").val().trim();

    if(email == ""){
        $("$errorMess").text("Enter email");
        return false;
    }else if(name ==""){
        $("$errorMess").text("Enter name");
        return false;
    }else if(phone==""){
        $("$errorMess").text("Enter phone");
        return false;
    }else if(message.length < 5){
        $("$errorMess").text("Enter info not less than 5 symbols");
        return false;
    }
    $("#errorMess").text("");
});
