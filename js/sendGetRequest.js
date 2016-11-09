
var menuitems = document.getElementsByClassName("menuitem");
for(var i = 0; i < menuitems.length; i++){
	console.log(menuitems[i]);
	menuitems[i].addEventListener('click', sendGet );
}


function sendGet( ev ){
	console.log(ev.target.id);
	var formvalue = document.getElementById("formvalue");
	var menuform = document.getElementById("menuform");
	if(ev.target.id === "SOAA"){
		formvalue.setAttribute("value", "home");
	}else{
		formvalue.setAttribute("value", ev.target.id);
	}
	menuform.submit();
}

function setFooterPosition(  ){
	/*
	var height = document.querySelector("#maindiv").offsetHeight - document.querySelector("#footer").offsetHeight;
	console.log(height);
	document.querySelector("#footer").style.top = height+"px";
	var contentheight = 
		height-document.querySelector("#menu").offsetHeight -
		document.querySelector("#header").offsetHeight - 
		document.querySelector("#footer").offsetHeight;
	document.querySelector("#contentbody").style.height = contentheight+"px";
	console.log(contentheight);
	*/
}

function init(){
	setFooterPosition();
	window.addEventListener( 'resize', setFooterPosition, false);
}


init();