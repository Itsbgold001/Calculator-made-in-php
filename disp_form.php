<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Answer</title>
</head>
<body><h1><div class="blog-form">
<p>The answer is: 
<?php
$first = $_POST['first'];
$second= $_POST['second'];
if($_POST['group1'] == 'add') {
echo $first + $second;
}
else if($_POST['group1'] == 'subtract') {
echo $first - $second;
}
else if($_POST['group1'] == 'times') {
echo $first * $second;
}

else if($_POST['group1'] == 'divide') {
echo $first / $second;
}
else {
    echo "Enter the numbers properly";
}
?>
</p> </h1></div>
<div class="blog-form">crystal zone groups|#toolspad</div>
</body>
</html>
<style>
body{background:#E5E4E2; max-width:650px; margin:0px auto 0px; color:#000; font-size:.9em; font-weight:400;font-family:sans-serif;}






a,a:visited{color:#005580; text-decoration:none; padding:2px}




.link a{color:#808080;font-weight:700;}



a:hover{font-weight:bold}


#head{height:auto;-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    background-color: #005B5B;
    background-image: linear-gradient(to bottom, #005858, #0f1818 130%);
padding:14px; vertical-align:top;}



ul{list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    z-index:99999;}




button.btn-download{display:none;}






#head img{vertical-align:middle;padding:2px;}











#foot{height:auto;-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    background-color: #005B5B;
    background-image: linear-gradient(to bottom, #005858, #0f1818 130%);text-align:center; padding:10px; text-shadow:-1px 1px 1px #000;font-weight:700;color:#fff;}




#nav{padding:1px;height:auto;-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    background-color: #005B5B;
    background-image: linear-gradient(to bottom, #005858, #0f1818 150%);color:#fff;}




div#nav a{
  display: inline-block;
  color: #fff;
  text-align: center;
  padding:none;
  text-decoration: none;
}



div#nav a:hover,div#nav a:active{display:inline-block;padding:none;
}




.newchat {
	position: relative;
	background: #555;
	border-radius:.6em;
color:#E0F2F1;padding:3px;border:1px ridge #00695C;
}

.newchat a{color:#fff;}
.date{font-size:10px;font-style:italic;}

.newchat:after {
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	width: 0;
	height: 0;
	border: 7px solid transparent;
	border-bottom-color: #555;
	border-top: 0;
	margin-left: -7px;
	margin-top: -7px;}


#glow{box-shadow:0 0 3px #555;}




.blink-two{
      animation: blinker-two 3s linear infinite;
      }
      @keyframes blinker-two {  
      100% { opacity: 0; }
      }


#nav img{width:24px;padding:0px none;}



span.mode a:hover,span.mode img,span.mode img:hover{padding:0px none;}




#nav a:hover{padding:none;}







#nav a{color:#fff;}





#title{height:auto;-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    background-color: #005B5B;
    background-image: linear-gradient(to bottom, #005858, #0f1818 130%);color:#fff; padding:10px; text-shadow:-1px 1px 2px #000; font-weight:700;margin:3.6px;}



.custom-search{position: relative;right:-12px;}
    #express-form-typeahead{background:url('/download/c798005f9c3cb72fd897dacff6e9add5/26192/ifriends+4webku+com/c2VhcmNoLTEyLTEyOC5wbmc=');background-position:5px center;background-repeat:no-repeat;background-size:15px;border:none;cursor:pointer;height:30px;padding:0 0 0 34px;position:relative;-webkit-transition:width 1.1s ease, background 1.1s ease;transition:width 1.1s ease, background 1.1s ease;width:0;}
    .close-search{display:none;-webkit-animation: fadeEffect1 2s;animation: fadeEffect1 2s;
    position: absolute;top:9px;right:9px;background-image: url('/image png');width: 15px;
    height: 15px;background-repeat: no-repeat;background-size: 15px;}
    #express-form-typeahead:focus{color:white;background-color:#808080;border:1px solid #e7e7e7;cursor:text;outline:0;width:190px;border-radius: 3px;}
    .search-btn{display:none;}
    input[type="search"]{-webkit-appearance:textfield;}
   /* Fade in tabs */
    @-webkit-keyframes fadeEffect1 {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @keyframes fadeEffect1 {
        from {opacity: 0;}
        to {opacity: 1;}
    }.absolute{position:absolute;right:60px;top:30px;}




input[type=text],input[type=password],textarea{border-radius:6px;background:#fff; color:#808080;border:1px solid #c0c0c0;padding:10px;width:200px;-o-box-shadow:      12px 12px 29px #555;
-icab-box-shadow:   12px 12px 29px #555;
-khtml-box-shadow:  12px 12px 29px #555;
-moz-box-shadow:    12px 12px 29px #555;
-webkit-box-shadow: 12px 12px 29px #555;
box-shadow:         12px 12px 29px #555;
margin-bottom:4px;font-weight:bold;}



input[type=submit]{height:auto;-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    background-color: #005B5B;
    background-image: linear-gradient(to bottom, #005858, #0f1818 130%); font-weight:bold;padding:2px 10px;border-radius:3px;color:#fff;border:none; height:36px;width:auto;}



input[type=submit]:hover{background:#005858;}



input[type=text]:hover,input[type=password]:hover,textarea:hover{background:#fafafa;font-weight:bold;color:#555;}




input[type=file]{background:#fafafa;border:1px solid #c0c0c0;max-width:90%; padding:2px; color:#555;margin:3px;}





textarea{background:#fff; font-style:italic;color:#808080;border:1px solid #c0c0c0; padding:4px; width:96%; height:80px;-o-box-shadow:12px 12px 29px #555;
-icab-box-shadow:   12px 12px 29px #555;
-khtml-box-shadow:  12px 12px 29px #555;
-moz-box-shadow:    12px 12px 29px #555;
-webkit-box-shadow: 12px 12px 29px #555;
box-shadow:         12px 12px 29px #555; font-weight:bold;}





span.like:hover,span.like a:hover{background-image:url('/download/cadc5ec64be94f3e60c8d3e5cc0c6051/23525/ifriends+4webku+com/a2lzc3BuZy1jaGVjay1tYXJrLWNvbXB1dGVyLWljb25zLWNsaXAtYXJ0LWdyZWVuLXRpY2stNWFiZTZlMmRlMTg3MTMuOTU3Mjg2MjExNTIyNDI5NDg1OTIzOCAoMSljaGVjay5wbmc=');background-repeat:no-repeat;background-position:center;background-size:9px;}




div.scrollmenu{
  background: transparent;
  overflow: auto;
  white-space: nowrap;
}.photo-scroll{background:#000; padding:2px;border-radius:12px;}

div.scrollmenu a {
  display: inline-block;
  color: #fff;
  text-align: center;
  padding: 1px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: transparent;
}




select{border-radius:6px;background:#fff; color:#808080; padding:8px; width:auto;margin-bottom:4px;-o-box-shadow:      12px 12px 29px #555;
-icab-box-shadow:   12px 12px 29px #555;
-khtml-box-shadow:  12px 12px 29px #555;
-moz-box-shadow:    12px 12px 29px #555;
-webkit-box-shadow: 12px 12px 29px #555;
box-shadow:         12px 12px 29px #555; font-weight:bold;}



.legend{display: block;
    padding-inline-start: 2px;
    padding-inline-end: 2px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
}.fieldset{
    display: block;
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: threedface;
    border-image: initial;
}



.fieldset img{max-width:65%;}



.signal{position:absolute;margin-left:34px;margin-top:26px;border-radius:50%;padding:1px;background:#fff;}




.error{color:red; font-style:italic;}



.icon img,.icon{max-width:60%;}




div.picture img{background:#000;border:0.5px solid #c0c0c0;border-radius:5px;}





span.notifs,span.notifs:hover{border-radius:50%; text-align:center;font-family:monospace;position:absolute;color:#fff;font-size:9px;vertical-align:top;a-index:1;text-align:center;margin-right:18px;font-weight:bold;text-shadow:-1px 0.1px 0.1px #000;padding:0px none;
    border-radius: 50%;display:inline-block;}






form{margin:4px;}



.time{color:#566573; font-size:12px;font-style:italic;}





img{max-width:90%; border:none 0px;}







.page{padding:12px;}





.page a{height:auto;-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    background-color: #005B5B;
    background-image: linear-gradient(to bottom, #005858, #0f1818 130%);
    z-index: 1;border:1px solid #005858; color:#fff; padding:6px; padding-left:8px; padding-right:8px; font-weight:bold;}





.page span{border:1px solid #808080; color:#808080; padding:6px; padding-left:8px; padding-right:8px;font-weight:bold;}





.login-form,.blog-form,.shout-form{background:#fff;border:0.5px solid #A09587; padding:8px; margin:6px;border-radius:5px;}



.chat-form{border:0.5px solid #A09587; border-radius:5px; padding:8px; margin:6px;-webkit-box-shadow: 0px 2px 34px -7px rgba(85,85,85,0.53);
-moz-box-shadow: 0px 2px 34px -7px rgba(85,85,85,0.53);
box-shadow: 0px 2px 34px -7px rgba(85,85,85,0.53);}




.error,.announce{background:#fff;border:0.5px solid #A09587;padding:8px; margin:6px;border-radius:5px;}



.wows{background:#FAFAFA;border-radius:15px;padding:6px;border:1px solid #D8D8D8;color:#000;}


.wow a{color:#000;}


b{font-size:14px;}




.closed{font-style:italic;font-size:small;}



.center{text-align:center;}





.blog-comment{background:
#F4F6F6;color:#000;padding:8px;border-bottom:0.5px solid #D4D4D2;}



.blog-comment a{color:#000;}




.ok a:hover{font-weight:bold;}



.top_avatar{padding:3px; background:#fff;border-radius:50%;}



.border{border-bottom:1px solid #EAEDED;margin-bottom:3px;}




.text img{max-width:80%; padding:2px; margin-top:2px;overflow: hidden;}





.text{overflow:hidden;display:inline-block;}





.img,.img img{background:#000;padding:1px;border-radius:5px;}





.imgs,.imgs img{background:#000;padding:0px;border-radius:3px;border:1px solid #fff;-o-box-shadow:      12px 12px 29px #555;
-icab-box-shadow:   12px 12px 29px #555;
-khtml-box-shadow:  12px 12px 29px #555;
-moz-box-shadow:    12px 12px 29px #555;
-webkit-box-shadow: 12px 12px 29px #555;
box-shadow:         12px 12px 29px #555; up
}







#shadow,#shadow img,#two,.two button{-o-box-shadow:      12px 12px 29px #555;
-icab-box-shadow:   12px 12px 29px #555;
-khtml-box-shadow:  12px 12px 29px #555;
-moz-box-shadow:    12px 12px 29px #555;
-webkit-box-shadow: 12px 12px 29px #555;
box-shadow:         12px 12px 29px #555;
}






button{height:auto;-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    background-color: #005B5B;
    background-image: linear-gradient(to bottom, #005858, #0f1818 130%);
    z-index: 1;padding:12px; margin-top:5px; margin-bottom:5px; color:#fff; text-shadow:-1px 1px 1px #000;border:none;width:150px;border-radius:25px;font-weight:bold; height:34px;}






.pict{border-radius:50%; padding:2px; background:#fff;border:0.5px solid #808080;}






.hidden{display:none;}


span.del,span.del a{font-size:12px; color:#808080; font-weight:bold;}





span.del:hover a,.del:hover{color:red}





.forums{background:#FDF2E9;border:1px solid #c0c0c0; padding:6px;margin:4px;}



.blog-forms{background:#fff;color:#555;border-radius:3px;padding:8px;border:1px solid #ABB2B9;margin:5px;-webkit-box-shadow: 10px 10px 151px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 10px 10px 151px 0px rgba(0,0,0,0.31);
box-shadow: 10px 10px 151px 0px rgba(0,0,0,0.31);}


.blog-forms a{color:#555;}



.forums a{padding:6px;font-weight:bold;margin:2px;}


.announce img{max-width:65%;}




#create{display:none;}





.code{background:#CA6F1E;padding:6px;color:#fff;font-size:1em;font-weight:bold; overflow:scroll;}






.code textarea{width:96%; height:100px; padding:2px;border:3px solid #c0c0c0; overflow:scroll;}





hr{top:0;border: none;height:1px;background:#D4D4D2; }





.send a{background: #006F6F;
background: -moz-linear-gradient(top, #006F6F 0%, #002727 100%, #232914 100%);
background: -webkit-linear-gradient(top, #006F6F 0%, #002727 100%, #232914 100%);
background: linear-gradient(to bottom, #006F6F 0%, #002727 100%, #232914 100%);
    z-index: 1;padding:7px 10px;margin-bottom:3px; display:inline-block;width:auto;font-weight:700;border-radius:3px;text-shadow:-1px 1px 1px #000;-o-box-shadow:      12px 12px 29px #555;
-icab-box-shadow:   12px 12px 29px #555;
-khtml-box-shadow:  12px 12px 29px #555;
-moz-box-shadow:    12px 12px 29px #555;
-webkit-box-shadow: 12px 12px 29px #555;
box-shadow:         12px 12px 29px #555;color:#fff;}







.send a:hover{background:green;color:#fff;}




.aqua,.aqua a{text-transform: uppercase;font-size: 13px; font-weight : medium; color: #C0C0DD;
font-family:monospace;font-weight: normal; 
text-shadow:1px 0px 1px #005081, -1px 0px 1px #005081, 0px 1px 1px #005081, 0px -1px 1px #005081, 1px 0px 0px #005081, 0px 1px 0px #005081;
background-image: url(/download/d28bac99124c1b6cc6e159bb5e7f20b9/c8ffe9a587b126f152ed3d89a146b445/124/wapster+wapka+live/1454772389_2015.gif);
background-position: left center;
background-size: 38px;
background-repeat: repeat-x;}





.fire,.fire a{text-transform:uppercase;font-size: 13px; 
color: #E8C100;
padding:1px 1px; 
border-radius:5px;
font-family:monospace;
font-weight: bold;text-shadow:1px 1px 0px #FF0000, 0px 1px 0px #FF0000, 1px 0px 0px #730000, 1px 1px 1px #FF4B4B, 1px 1px 2px #ff0000;background-image: url(/download/d28bac99124c1b6cc6e159bb5e7f20b9/3def184ad8f4755ff269862ea77393dd/125/wapster+wapka+live/803038934_2015.gif);
background-position: left center;
background-size: 55px;
background-repeat: repeat-x;}





.alien,.alien a{text-transform:uppercase;font-size: 13px;
font-weight : medium;
color: #fff;
font-family: monospace;
font-weight: normal;
text-shadow:1px 0px 0px #0B8849, -1px 0px 0px #0B8849, 0px 1px 0px #0B8849, 0px -1px 0px #0B8849, 1px 0px 1px #0B8849, -1px 0px 1px #0B8849, 0px 1px 1px #0B8849, 0px -1px 0px #0B8849, 0px 0px 4px #0B8849, 0px 0px 4px #0B8849, 0px 0px 5px #00ff7e;
background-image: url(/download/d28bac99124c1b6cc6e159bb5e7f20b9/202cb962ac59075b964b07152d234b70/123/wapster+wapka+live/573564489_2015.gif);
background-position: left center;
background-size: 85px;
background-repeat: repeat-x;}





.ghost,.ghost a{text-transform: uppercase;color:#C7FFF9; font-size:13px; font-weight : medium; font-family:Times New Roman, Times, serif;font-weight: bold; text-shadow:1px 0px 1px #07006E, -1px 0px 1px #07006E, 0px 1px 1px #07006E, 0px -1px 1px #07006E, 0px -1px 2px #0E00D9, 0px -1px 2px #0D8EFF, 0px -1px 2px #00F7FF, 0px -1px 3px #99F5FF;
background-image:url(/download/d28bac99124c1b6cc6e159bb5e7f20b9/4c56ff4ce4aaf9573aa5dff913df997a/121/wapster+wapka+live/1459782000_2015.gif);
background-position: left center;background-size:120px;
background-repeat: repeat-x;border-radius:4px;}





.girly,.girly a{text-transform: uppercase;color:Yellow ; font-family:Comic Sans MS, sans-serif;font-weight:bold;text-shadow: 1px 1px 2px red, 0 0 25px #008800 , 0 0 8px #8400C1;background-image: url(); background-position:center; background-repeat: repeat; margin:0px 0px;padding: 1px 1px 1px 1px; border-radius:3px;}




.boy,.boy a{text-transform: uppercase;font-size: 14px; 
font-weight : medium; 
color: #FFF78A;
font-family:monospace;
font-weight: bold; 
text-shadow:0px 1px 2px #2B00FF, 0px -1px 2px #00FF66, 1px 0px 2px #FF0000, -1px 0px 2px #B545FF;
padding:1px 1px; 
border-radius:3px;
background-image: url(/download/d28bac99124c1b6cc6e159bb5e7f20b9/a0a080f42e6f13b3a2df133f073095dd/122/wapster+wapka+live/1285223403_2015.gif);
background-position:center center; 
background-size: 35px;
background-repeat: repeat-x;}











body {font-family: Arial, Helvetica, sans-serif;}




.vis{display:none:my_name:;}





/* Set a style for all buttons */
button,.button{
width:auto;
  color: white;
  padding: 5
}






/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}






/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}






img.avatar {
  width: 35%;
  border-radius: 50%;
}






.container {padding: 5px;
}






span.psw {
  float: right;
  padding-top: 16px;
}






/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index:1; /* Sit on top */
  left: 0;
  top: 10%;
  width: 100%; /* Full width */
  height: 95%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 50px;
}


.modals{max-width:600px;margin:auto;background:#FDF2E9;-o-box-shadow;border: 0.5px solid #000;padding:2px;border-radius:10px;margin-top:15px;}



/* Modal Content/Box */
.modal-content {
max-width:550px;border-radius:10px;
  background-color: #FDF2E9;-o-box-shadow:      12px 12px 29px #555;
-icab-box-shadow:   12px 12px 29px #555;
-khtml-box-shadow:  12px 12px 29px #555;
-moz-box-shadow:    12px 12px 29px #555;
-webkit-box-shadow: 12px 12px 29px #555;
box-shadow:         12px 12px 29px #555;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 0.5px solid #000;
  width: 80%; /* Could be more or less, depending on screen size */
}









/* The Close Button (x) */
.close{background:#fff;border-radius:50%;border:1px solid #808080;padding-bottom:0px;padding-top:0px;padding-left:7px;padding-right:7px;
  position:absolute;
  right: 18px;
  top:0;
  color: #000;
  font-size: 24px;
  font-weight: bold;
margin-bottom:150px;
vertical-align:top;
}






.close:hover,
.close:focus {background:#FF8A80;
  color: #D50000;
  cursor: pointer;
}






/* Add Zoom Animation */
.animate{
  -webkit-animation: animatezoom 0.9s;
  animation: animatezoom 0.9s
}






@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}




 
  to {-webkit-transform: scale(1)}





}





  
@keyframes animatezoom {
  from {transform: scale(0)}




 
  to {transform: scale(1)}





}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }




}




}




}




}




}





}
</style>
