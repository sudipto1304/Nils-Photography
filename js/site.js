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
    var html="";
    console.log("getImageContent called");
    $.ajax({
        type: "GET",
        url: "../service/ImportInsta.php",
        contentType: false,
        processData: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
            console.log("data received");
            var json = $.parseJSON(data);
            $.each(json , function(i, val){
                
                html+='<div class="adjustdiv"><a href='+val.postLink+'target="_blank"><img src='+val.imageLink+' class="adjust"></a></div>'
            });
            
            $(".instagram_image").html(html);
        },
        error: function (e) {
            console.log("ERROR : ", e);
        }
    });
}