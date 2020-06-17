<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Corona Live Satus</title>
<?php  include('links.php'); ?>
<?php  include('coronastyle.php'); ?>
</head>

<body onload="fetch()">


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
  
  <h1>COVID-19 Live Updates of the World</h1>
  </div>
 
   
 
 </div>
 
 </div>
 

 
 </div>


<!--corona latest updates-->
<?php 
$data = file_get_contents('https://api.covid19api.com/summary');
$worldcoronalive = json_decode($data,true);


 $wcltotalconfirmed =  $worldcoronalive['Global']['TotalConfirmed'];
$wcltotaldeaths =  $worldcoronalive['Global']['TotalDeaths'];
$wcltotalrecovered =  $worldcoronalive['Global']['TotalRecovered'];
$wclnewconfirmed = $worldcoronalive['Global']['NewConfirmed'];
$wclnewdeaths =  $worldcoronalive['Global']['NewDeaths'];
$wclnewrecovered = $worldcoronalive['Global']['NewRecovered'];





?>

<section class="corona_update">
<div class="mb-3">
<h3 class="text-uppercase text-center">covid-19 updates</h3>
</div>

<div class="d-flex justify-content-around align-items-center count_style ">

<div class="pb-3">
<h2 class="count text-center"><?php echo $wcltotalconfirmed; ?></h2>
<p>Total Confirmed</p>
</div>


<div class="pb-3">
<h2 class="count text-center"><?php echo $wcltotaldeaths; ?></h2>
<p>Total Deaths</p>
</div>


<div class="pb-3">
<h2 class="count text-center"><?php echo $wcltotalrecovered; ?></h2>
<p>Total Recovered</p>
</div>


<div class="pb-3">
<h2 class="count text-center"><?php echo $wclnewconfirmed; ?></h2>
<p>New Confirmed</p>
</div>

<div class="pb-3">
<h2 class="count text-center"><?php echo $wclnewdeaths; ?></h2>
<p>New Deaths</p>
</div>

<div class="pb-3">
<h2 class="count text-center"><?php echo $wclnewrecovered; ?></h2>
<p>New Recovered</p>
</div>




</div>


</section>


<!--corona latest updates-->
<section class="corona_update container-fluid">
<div class="mb-3">
<h3 class="text-uppercase text-center">covid-19 Live updates of the world</h3>
</div>

<div class="table-responsive">
<table class="table table-bordered table-striped text-center" id="tbval">
<tr>
<th>Country</th>
<th>TotalConfirmed</th>
<th>TotalDeaths</th>
<th>TotalRecovered</th>
<th>NewConfirmed</th>
<th>NewDeaths</th>
<th>NewRecovered</th>
</tr>
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




function fetch(){

$.get("https://api.covid19api.com/summary",


  function(data){
  
 // console.log(data['Countries'].length);
 
 var tbval = document.getElementById('tbval');
 
 for(var i=1; i<(data['Countries'].length); i++){
 
 var x = tbval.insertRow();
 
 x.insertCell(0); 
 tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
 tbval.rows[i].cells[0].style.background = '#8e44ad';
 tbval.rows[i].cells[0].style.color = '#ecf0f1';
 
 x.insertCell(1);
 tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
 tbval.rows[i].cells[1].style.background = '#16a085'; 
 tbval.rows[i].cells[1].style.color = '#ecf0f1'; 
 
 x.insertCell(2);
 tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalDeaths'];
 tbval.rows[i].cells[2].style.background = '#c0392b';
 tbval.rows[i].cells[2].style.color = '#ecf0f1';
 
 x.insertCell(3);
 tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered'];
 tbval.rows[i].cells[3].style.background = '#f39c12';
 tbval.rows[i].cells[3].style.color = '#ecf0f1';
 
 x.insertCell(4);
 tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
 tbval.rows[i].cells[4].style.background = '#1abc9c';

 
 x.insertCell(5);
 tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
 tbval.rows[i].cells[5].style.background = '#e74c3c';

 
 
 x.insertCell(6);
 tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewRecovered'];
 tbval.rows[i].cells[6].style.background = '#f1c40f';

 
 }
  
  }


     );




}

</script>
</body>
</html>
