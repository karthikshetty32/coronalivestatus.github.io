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


<!--corona header-->
<div class="main_header">
 <div class="row w-100 h-100">
 
   <div class="col-lg-5 col-md-5 col-12  order-lg-1 order-2">
 
  <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
  <img src="images/img6.jpg" alt="img1" width="400" height="300"/>
  
  </div>
   
 
 </div>
 
 
 <div class="col-lg-7 col-md-7 col-12  order-lg-2 order-1">
 <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
  
  <h1>COVID-19 Live Updates of the India</h1>
  </div>
 
   
 
 </div>
 
 </div>
 

 
 </div>


<!--corona latest updates-->
<?php 
$data = file_get_contents('https://api.covid19india.org/data.json');
$indiacoronalive = json_decode($data,true);
$i=0;

$incltotalconfirmed =  $indiacoronalive['statewise'][$i]['confirmed'];
$incltotalactive =  $indiacoronalive['statewise'][$i]['active'];
$incltotalrecovered =  $indiacoronalive['statewise'][$i]['recovered'];
$incltotaldeaths = $indiacoronalive['statewise'][$i]['deaths'];





?>

<section class="corona_update">
<div class="mb-3">
<h3 class="text-uppercase text-center">covid-19 updates</h3>
</div>

<div class="d-flex justify-content-around align-items-center count_style ">

<div class="pb-3">
<h2 class="count text-center"><?php echo $incltotalconfirmed; ?></h2>
<p>Total Confirmed</p>
</div>


<div class="pb-3">
<h2 class="count text-center"><?php echo $incltotalactive; ?></h2>
<p>Total Active</p>
</div>


<div class="pb-3">
<h2 class="count text-center"><?php echo $incltotalrecovered; ?></h2>
<p>Total Recovered</p>
</div>


<div class="pb-3">
<h2 class="count text-center"><?php echo $incltotaldeaths; ?></h2>
<p>Total Deaths</p>
</div>


</div>


</section>


<!--corona latest updates-->
<section class="corona_update container-fluid">
<div class="my-5">
<h3 class="text-uppercase text-center">covid-19 Live updates of the india</h3>
</div>

<div class="table-responsive">
<table class="table table-bordered table-striped text-center" id="tbval">
<tr>
<th class="text-capitalize">No</th>
<th class="text-capitalize">Date</th>
<th class="text-capitalize">State</th>
<th class="text-capitalize">Confirmed</th>
<th class="text-capitalize">Active</th>
<th class="text-capitalize">Recovered</th>
<th class="text-capitalize">Deaths</th>

</tr>
<?php 
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data,true);

/*echo "<pre>";

print_r($coronalive);

echo "</pre>";*/
$statecount =  count($coronalive['statewise']);


$i=1;
while($i < $statecount){
?>

<tr>
<td><?php echo $i; ?></td>
<td style="background-color:#a55eea;color:#ffffff;"><?php echo $coronalive['statewise'][$i]['lastupdatedtime']; ?></td>
<td style="background-color:#4b7bec;color:#ffffff;"><?php echo $coronalive['statewise'][$i]['state']; ?></td>
<td style="background-color:#2bcbba;color:#ffffff;"> <?php echo $coronalive['statewise'][$i]['confirmed']; ?></td>
<td style="background-color:#fd9644;color:#ffffff;"><?php echo $coronalive['statewise'][$i]['active']; ?></td>
<td style="background-color:#45aaf2;color:#ffffff;"><?php echo $coronalive['statewise'][$i]['recovered']; ?></td>
<td style="background-color:#fc5c65;color:#ffffff;"><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>


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

/*number count script*/
$('.count').counterUp({
 delay:10,
 time:3000
});




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
