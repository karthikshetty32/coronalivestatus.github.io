<style>

html{
scroll-behavior: smooth;

}


*{
margin:0;
padding:0;
box-sizing:border-box;
font-family: 'Balsamiq Sans', cursive;
}
.row{
margin-left:0!important;
margin-right:0!important;
}

.nav_style{
background-color:#000000 !important;

}

.nav_style a{
color:#ffffff !important;

}

/*header*/
.main_header{
height:450px;
width:100%;

}

.rightside h1{
font-size:3rem;
}

.corona_rot img{
animation : gocorona 3s linear infinite;
}

@keyframes gocorona{
0% { transform:rotate(0);}
100% { transform:rotate(360deg);}
}

.leftside img{
animation : heartbeat 5s linear infinite;

}

@keyframes heartbeat{
0% { transform:scale(.75);}
20% { transform:scale(1);}
40% { transform:scale(.75);}
60% { transform:scale(1);}
80% { transform:scale(.75);}
100% { transform:scale(.75);}
}

/*corona update*/

.corona_update{
margin:0 0 30px 0;

}

.corona_update h3{
color:#ff7675;

}

.corona_update h1{
font-size:2rem;
text-align:center;

}

/*about section*/
.sub_section{

background-color:#FFCCFF;
}

/*footer*/

.footer_style{
background-color:#000000 !important;
}

.footer_style p{
 margin-bottom: 0 !important;
}

/*scroll button*/
#myBtn{
display:none;  /*hidden by default*/
position: fixed; /*fixed / sticky position*/
bottom: 30px;   /*place the button at the bottom of the page*/
right: 40px;  /*place the button 40px from right*/ 
z-index: 99;    /*make sure it does not overlap*/
border: none;    /*remove borders*/
outline:none;   /*remove outline*/
background-color:#00A8FF; /*set a background color*/
color:white;  /*text color*/
cursor:pointer;   /*add amouse pointer on hover*/
padding:10px;     /*some padding*/
border-radius:10px;   /*rounded corners*/


}

#myBtn:hover {
background-color: #606060;  /*add a dark grey background on hover*/
}


/*responsive*/


@media(max-width:768px){

.main_header{
height:600px;
text-align:center;

}

.main_header h1{
padding:0px;
text-align:center;
width:100%;
font-size:30px;
}

.count_style{
display:inline !important;

}

.count_style p{
text-align:center !important;

}

.about_res{
margin-left:0 !important;
}
}







</style>