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
    $.ajax({
        type: "GET",
        url: host+"/data/image/getContent",
        contentType: false,
        processData: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
            var form = '';
            for(var i=0; i<data.length; i++){
                if(data[i]=="COVER_HEADER"){
                    $('#COVER_HEADER').css('background-image', 'url(' + data[i][0]['url'] + ')');
                }else{
                    $('#'+data[i]).attr('src', data[i][0]['url']);
                    $('#'+data[i]+"_LIGHT").attr('href', data[i][0]['url']);
                }
            }            
            
        },
        error: function (e) {
            console.log("ERROR : ", e);
            

        }
    });
}