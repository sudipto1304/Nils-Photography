
<div id="divLoading" style="margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%;  z-index: 30001; opacity: 0.8;">

<img style="position: absolute; color: White; top: 40%; left: 45%; width: auto !important; height: 70px !important;" src="img/330.gif">

</div>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/service/constant.php"); 
?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/site.js"></script>

<script>
var host = '<?php echo HOST ?>';
getImageContent();
</script>