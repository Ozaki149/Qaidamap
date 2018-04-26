<title>QaidA</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300|Raleway:300" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="login.js"></script>
<style>
html, body {
font-family: 'Raleway', sans-serif;
height: 100%;
}
#header{
	color:#ffffff;
	font-size: 1.5em;
	font:bold;
	font-family: 'Josefin Sans', sans-serif;
}
body {
background: linear-gradient(to bottom right, #033d6c,#033d6c,#065860,#065860,#065860, #be4141);
margin: 0;
background-repeat: no-repeat;
background-attachment: fixed;
font-size: 1.3em;
color: #fff;
}
.link{
left:2px;
top:2px;
position:absolute;
width:48px;
height:48px;
}
#map{height: 91%;
float: left;
width: 70%;
}
#imagerss img {border: 0.3px black solid;
margin: 0 auto;
height: 100%;
width: 100%;
}
#smborder a{color:black;}
.thumbnail{
border-style: groove;
border-width: 2px;
}
#right-panel {
line-height: 30px;
color:black;
padding-left: 10px;
}
#right-panel select, #right-panel input {
font-size: 15px;
}
#right-panel select {
width: 100%;
}
#right-panel i {
font-size: 12px;
}
#right-panel {
margin: 0 20px;
border-width: 2px;
width: 25%;
height: 400px;
float: left;
text-align: left;
padding-top: 1%;
}
.row.content {height: 450px}
#directions-panel {
margin-top: 10px;
background-color: white;
padding: 10px;
color: black;
}
/*input{
color:black;
}*/
/*
.row.content {height: 450px}*/
.item{
position:relative;
background-color:#f0f0f0;
float:right;
width:52px;
margin:0px 5px;
height:52px;
border:2px solid #ddd;
-moz-border-radius:30px;
-webkit-border-radius:30px;
border-radius:30px;
-moz-box-shadow:1px 1px 3px #555;
-webkit-box-shadow:1px 1px 3px #555;
box-shadow:1px 1px 3px #555;
cursor:pointer;
overflow:hidden;
}
.item_content{
position:absolute;
height:52px;
width:220px;
overflow:hidden;
left:56px;
color:black;
top:7px;
background:transparent;
display:none;
}
.item_content h2{
color:#aaa;
text-shadow: 1px 1px 1px #fff;
background-color:transparent;
font-size:14px;
}
.item_content a{
background-color:transparent;
float:left;
margin-right:7px;
margin-top:3px;
color:#bbb;
text-shadow: 1px 1px 1px #fff;
text-decoration:none;
font-size:12px;
}
.item_content a:hover{
color:#0b965b;
}
.item_content p {
background-color:transparent;
display:none;
}
.item_content p input{
border:1px solid #ccc;
padding:1px;
width:155px;
float:left;
margin-right:5px;
}
.sidenav {
padding-top: 20px;
background-color: #f1f1f1;
height: 100%;
}
@media screen and (max-width: 767px) {
.sidenav {
height: auto;
padding: 15px;
}
.navbar {
margin-bottom: 0;
border-radius: 0;
}
.row.content {height:auto;}
}
@media only screen and (min-width : 481px) {
.row.equal-height {
display: flex;
flex-wrap: wrap;
}
.row.equal-height > [class*='col-'] {
display: flex;
flex-direction: column;
}
.row.equal-height.row:after,
.row.equal-height.row:before {
display: flex;
}
.row.equal-height > [class*='col-'] > .thumbnail,
.row.equal-height > [class*='col-'] > .thumbnail > .caption {
display: flex;
flex: 1 0 auto;
flex-direction: column;
}
.row.equal-height > [class*='col-'] > .thumbnail > .caption > .flex-text {
flex-grow: 1;
}
.row.equal-height > [class*='col-'] > .thumbnail > img {
width: 100%;
height: 200px;
-webkit-object-fit: cover;
-moz-object-fit: cover;
-ms-object-fit: cover;
-o-object-fit: cover;
object-fit: cover;
}
}
#ducks{padding-bottom: 51px;}
#er{color: red;}
.cmys{width: 95%; margin-top: 1%;
display: block;
border-radius:10px;
-moz-border-radius:6px;
}
#myNavbar, .navbar-header{
	margin: 0.2em;
}
h3,h4{color:black;}
#directions-panel::-webkit-scrollbar-track
{
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
border-radius: 10px;
background-color: #F5F5F5;
}
#directions-panel::-webkit-scrollbar
{
width: 12px;
background-color: #F5F5F5;
}
#directions-panel::-webkit-scrollbar-thumb
{
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
background-color: #555;
}
#waypoints::-webkit-scrollbar-track
{
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
border-radius: 10px;
background-color: #F5F5F5;
}
#waypoints::-webkit-scrollbar
{
width: 12px;
background-color: #F5F5F5;
}
#waypoints::-webkit-scrollbar-thumb
{
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
background-color: #555;
}
#ppBody
{
    font-size:11pt;
    width:100%;
    margin:0 auto;
    text-align:justify;
}

#ppHeader
{
    font-family:verdana;
    font-size:21pt;
    width:100%;
    margin:0 auto;
}

.ppConsistencies
{
    display:none;
}
.helpu{font:16px/26px Georgia, Garamond, Serif;}
</style>