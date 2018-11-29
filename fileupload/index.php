<?php
require_once($_SERVER['DOCUMENT_ROOT']."/service/constant.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<style>
 body {
  background-color: #363940;
  display: flex;
  flex-direction: column;
  padding: 20px;
  position: relative;
}

.wrapper  {
  background-color: #fff;
  padding: 25px;
  border-radius: 5px;
  width: 360px;
  max-width: 100%;
  margin: 50px auto;
  align-self: center;
  box-sizing: border-box;
}

header {
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
  margin-bottom: 20px;
  display: flex;
}
h1 {
  flex: 1;
  padding: 0;
  margin: 0;
  font-size: 16px;
  letter-spacing: 1px;
  font-weight: 700;
  color: #7A7B7F;
}
header span {
  flex: 1;
  text-align: right;
  font-size: 12px;
  color: #999;
}
.ways ul {
  display: flex;
  list-style: none;
  padding: 0;
  border-radius: 5px;
  overflow: hidden;
}
.ways li {
  align-self: center;
  flex: 1;
  background-color: #F5F7FA;
  text-align: center;
  cursor: pointer;
  padding: 15px 0;
  color: #999;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 12px;
  letter-spacing: 1px;
  border: 1px solid #ddd;
}

.ways li:first-child {
  border-right: 0;
}
.ways li:last-child {
  border-left: 0;
}
.ways li.active {
  border: 2px solid #1AA1E5;
  color: #66676C;
}
.ways li.active::before {
  content: '\f00c';
  font-family: 'fontawesome';
  color: #1AA1E5;
}
.ways li:not(.active) {
  padding: 16px 0;
}
section {
  display: none;
}
section.active {
  display: block;
}
section input,
section select,
section textarea {
  display: block;
  width: 100%;
  box-sizing: border-box;
  border: 1px solid #ddd;
  outline: 0;
  background-color: #F5F7FA;
  padding: 10px;
  margin-bottom: 10px;
  letter-spacing: 1.4px;
}
section textarea {
  min-height: 200px;
}


.select-option {
  background-color: #F5F7FA;
  color: #999;
  font-size: 15px;
  position: relative;
  cursor: pointer;
}
.select-option::before {
  content: '\f107';
  font-family: 'fontawesome';
  position: absolute;
  right: 0;
  top: 0;
  margin-top: 9px;
  margin-right: 10px;
  font-size: 20px;
}
.select-option div:not(.option) {
  padding: 10px 10px;
  border: 1px solid #ddd;
}
.select-option div:last-child,
.select-option .head {
  border-bottom: 1px solid #ddd;
}
.select-option .option {
  display: none;
}
.select-option .option div {
  text-transform: capitalize;
}
.select-option.active .option {
  display: block;
  position: absolute;
  width: 100%;
  background-color: #F5F7FA;
  box-sizing: border-box;
  padding: 0;
  margin-top: -1px;
  z-index: 2;
}
.select-option .option div {
  border-bottom: 0;
}
.images {
  display: flex;
  flex-wrap:  wrap;
  margin-top: 20px;
}
.images .img,
.images .pic {
  flex-basis: 31%;
  margin-bottom: 10px;
  border-radius: 4px;
}
.images .img {
  width: 112px;
  height: 93px;
  background-size: cover;
  margin-right: 10px;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
.images .img:nth-child(3n) {
  margin-right: 0;
}
.images .img span {
  display: none;
  text-transform: capitalize;
  z-index: 2;
}
.images .img::after {
  content: '';
  width: 100%;
  height: 100%;
  transition: opacity .1s ease-in;
  border-radius: 4px;
  opacity: 0;
  position: absolute;
}
.images .img:hover::after {
  display: block;
  background-color: #000;
  opacity: .5;
}
.images .img:hover span {
  display: block;
  color: #fff;
}
.images .pic {
  background-color: #F5F7FA;
  align-self: center;
  text-align: center;
  padding: 40px 0;
  text-transform: uppercase;
  color: #848EA1;
  font-size: 12px;
  cursor: pointer;
}

@media screen and (max-width: 400px) {
  .wrapper {
    margin-top: 0;
  }
  header {
    flex-direction: column;
  }
  header span {
    text-align: left;
    margin-top: 10px;
  }
  .ways li,
  section input, 
  section select,
  section textarea,
  .select-option .head, 
  .select-option .option div {
   font-size: 8px;
  }
  .images .img,
  .images .pic {
    flex-basis: 100%;
    margin-right: 0;
  }
}

.wrapper footer ul {
  margin: 0;
  margin-top: 30px;
  display: flex;
  list-style: none;
  padding: 0;
}
.wrapper footer ul li {
  flex: 1;
}
.wrapper footer li span {
  text-transform: capitalize;
  cursor: pointer;
}
.wrapper footer li:first-child {
  color: #999;
  text-align: left;
  font-size: 12px;
}
.wrapper footer li:first-child span {
  display: inline-block;
  border-bottom: 1px solid #ddd;
}
.wrapper footer li:last-child {
  text-align: right;
}
.wrapper footer li:last-child span {
  background-color: #22A4E6;
  padding: 10px 20px;
  color: #fff;
  border-radius: 3px;
}

.notification {
  position: absolute;
  left: 20px;
  bottom: 20px;
  top: auto;
  right: auto;
}

.notification p {
  margin: 0;
  padding: 0;
}
.notification .btn {
  padding: 16px 20px;
  border-radius: 5px;
  display: flex;
  margin-bottom: 10px;
  font-size: 12px;
  align-items: center;
  animation: fadeIn .4s ease-in;
}
@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
.notification .btn::before {
  margin-right: 12px;
  font-family: 'fontawesome';
  font-size: 15px;
}
.notification span {
  margin-left: 10px;
  cursor: pointer;
  flex: 1;
  text-align: right;
}

.notification .error {
  background-color: #ECC8C5;
  border: 1px solid #BD8181;
}
.notification .error span {
  color: #C79995;
}
.notification .error::before {
  content: '\f05c';
  color: #B2312F;
  
}
.notification .success {
  background-color: #DEF2D6;
  border: 1px solid #B3CEA9;
}
.notification .success span {
  color: #AFC7A7;
}
.notification .success::before {
  content: '\f00c';
  color: #5A7052;
}

footer {
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #fff;
  font-size: 12px;
}
footer a {
  color: #fff;
  text-decoration: none;
  border-bottom: 1px solid #fff;
  padding-bottom: 5px;
}
#category{
    height:35px;
    font-size: 14px;
}
</style>
</head>
<body>
 <div class="wrapper">
  <header>
    <h1>Stock photo</h1>
    <span>ID: 5988014</span>
  </header>
  
  
  <form id="fileUploadForm" >
  <div class="sections">
    
    <section class="active">
    
      <select id="category" >
        <option>Select Category</option>
      </select>
      
      <input type="file" name="file" id="file" accept="image/*">
      
    </section>

  
  </div>
  
  <footer>
    <ul>
      <li><span id="reset">reset</span></li>
      <li><span id="send">send</span></li>
    </ul>
  </footer> 
  </form>
</div>
<div class="notification"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
var host = '<?php echo HOST ?>';

$(document).ready(function () {


$.ajax({
        type: "GET",
        url: host+"/data/image/getCategory",
        contentType: false,
        processData: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
            console.log("SUCCESS : ", data);
            var option="";
            $.each(data,function(i,v){
                option+="<option>"+v+"</option>";
               });
            $( "#category" ).append( option );
            $("#send").prop("disabled", false);
        },
        error: function (e) {
            console.log("ERROR : ", e);
            $("#send").prop("disabled", false);

        }
    });

$("#reset").click(function(){
    $("#file").val("");
    $("#category").val("Select Category");
});

$("#send").click(function (event) {

    event.preventDefault();
    var form = $('#fileUploadForm')[0];

    // Create an FormData object 
    var data = new FormData(form);

    // disabled the submit button
    $("#send").prop("disabled", true);

    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: host+"/data/image/upload/category/"+$('#category :selected').text(),
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
            console.log("SUCCESS : ", data);
            $("#send").prop("disabled", false);
            $("#reset").click();

        },
        error: function (e) {
            console.log("ERROR : ", e);
            $("#send").prop("disabled", false);

        }
    });

});

});
</script>
</body>
</html>