function sendEmail(){
    var name = $('#name').val();
    var mobile = $('#mobile').val();
    var email = $('#email').val();
    var message = $('#message').val();
    var pattern = /^\d{10}$/;
    if(!name || !mobile || !email || !message){
        alert("All fields are mandatory");
        return;
    }
    if(!mobile.match(pattern))
    {
        alert("Invalid Phone Number");
        return;
    }
  
    $.ajax('service/sendQuery.php', {
        type: 'POST', 
        data: { name: name, email: email, mobile: mobile, message: message },  
        success: function (data, status, xhr) {
            alert(data);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            alert("Please try again!!");
        }
    });
}

function getImageContent(){
   
}