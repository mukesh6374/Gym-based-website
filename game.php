<!DOCTYPE html>
<!--
Created using JS Bin
http://jsbin.com
Copyright (c) 2017 by anonymous (http://jsbin.com/vedozifore/1/edit)
Released under the MIT license: http://jsbin.mit-license.org
-->

<meta name="robots" content="noindex">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
<style id="jsbin-css">
html{
  height: 100%;
}
#one{
  background-color: blue;
  height:50px;
  width:50px;
  position:fixed;
}
</style>
</head>
<body>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3><center> Catch me If You can..</center></h3>
  </div>
</div>
<div id="one">
  </div>
<script id="jsbin-javascript">
function init(){
   var obj=document.getElementsByTagName('html')[0];
   var obj1=document.getElementById('one');
   var w=obj.offsetWidth;
   var h=obj.offsetHeight;
   var l=Math.floor(Math.random()*w);
   var t=Math.floor(Math.random()*h);
if(l>w-obj1.offsetWidth){
   l=w-obj1.offsetWidth;
 }
if(t>h-obj1.offsetHeight){
   t=h-obj1.offsetHeight;
 }
   obj1.style.left=l+'px';
   obj1.style.top=t+'px';
 }
window.addEventListener('mouseover',init);
</script>
</body>
</html>
