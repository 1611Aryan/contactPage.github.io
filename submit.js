let error;
let val;    
$('#submit').click(function () {
    $('#errors').html('');
    error = [''];
    error.pop();
    if ($('#email').val() == "") {
        error.push("Please Enter Your Email Address");
    }
    if ($('#subject').val() == "") {
        error.push("Please Enter Subject");
    }
    if ($('#message').val() == "") {
        error.push("Please Enter Your Message");
    }
    if (error != "") {
        let i=0;
        let t=error.length;
        for(;i<t;i++){
             val=$('#errors').html() + error[i] + "<br>"
            $('#errors').html(val);
        }
        return false;
    }
    else {
        return true;
    }
});