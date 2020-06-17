<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Corona Live Satus</title>
<?php  include('links.php'); ?>
<?php  include('coronastyle.php'); ?>
</head>

<body >


<!--navbar-->
<?php  include('navbar.php'); ?>

<!--corona latest updates-->
<section class="corona_update container-fluid">
<div class="my-5">
<h3 class="text-uppercase text-center">covid-19 Live updates of the india day wise</h3>
</div>

<div class="table-responsive">
<table class="table  text-center" id="tbl">


<?php 

$data = file_get_contents('https://api.covid19india.org/data.json');

$daywise = json_decode($data,true);

/*echo "<pre>";
print_r($daywise);*/


$totalcount= count($daywise['cases_time_series']);

$i = 0;
while($i < $totalcount){
?>

<tr>
<th class="text-left" colspan="6">Date & Month</th>
</tr>
<tr>
<td colspan="6" class="text-left"><?php echo $daywise['cases_time_series'][$i]['date']. "<br>";  ?></td>
</tr>
<tr  class="text-captalize text-white">
<th style="color:#FFFFFF;background:#2196f3;">total confirmed</th>
<th style="color:#FFFFFF;background:#ffc107;">daily confirmed</th>
<th style="color:#FFFFFF;background:#008c76;">daily recovered</th>
<th style="color:#FFFFFF;background:#e91e7f;">daily deceased</th>
<th style="color:#FFFFFF;background:#4caf50;">total recovered</th>
<th style="color:#FFFFFF;background:#ee2737;">total deceased</th>
</tr>

<tr class="mb-5">
<td style="background:#2196f3;"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed']."<br>"; ?></td>
<td style="background:#ffc107;"><?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']."<br>"; ?></td>
<td style="background:#008c76;"><?php echo $daywise['cases_time_series'][$i]['dailyrecovered']."<br>"; ?></td>
<td style="background:#e91e7f;"><?php echo $daywise['cases_time_series'][$i]['dailydeceased']."<br>"; ?></td>
<td style="background:#4caf50;"><?php echo $daywise['cases_time_series'][$i]['totalrecovered']."<br>"; ?></td>
<td style="background:#ee2737;"><?php echo $daywise['cases_time_series'][$i]['totaldeceased']."<br>"; ?></td>

</tr>



<?php
$i++;
}

?>
</table>

</div>


</section>

<!--top cursor-->

<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>

</div>



<!--footer-->

<footer class="mt-5 ">

<div class="footer_style text-center text-white container-fluid p-4">
<p>Copyright &copy; <span id="year"></span> | Karthik Shetty</p>
</p>

</div>

</footer>
<script>

//copyright year
$('#year').text(new Date().getFullYear());




//top arrow script

mybutton = document.getElementById("myBtn");
// when the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction(){

if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){

mybutton.style.display = "block";
}else{
mybutton.style.display = "none";
}
}

//when the user clicks on the button, scroll to the top of the document

function topFunction(){
document.body.scrollTop = 0; //for safari
document.documentElement.scrollTop = 0;//for chrome,firefox,IE and Opera


}





</script>
</body>
</html>
