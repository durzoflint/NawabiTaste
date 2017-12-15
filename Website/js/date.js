var today = new Date();
var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
for (var i = 0; i < 30; i++)
{
	var priorDate = new Date().setDate(today.getDate()+i);
	var mydate = new Date(priorDate);
	var tableData = document.getElementsByClassName("mydiv")[i];
	document.getElementsByClassName("Lunch")[i].value = "Lunch " + mydate.getDate()+"/"+(mydate.getMonth()+1)+"/"+mydate.getFullYear();
	document.getElementsByClassName("Dinner")[i].value = "Dinner " + mydate.getDate()+"/"+(mydate.getMonth()+1)+"/"+mydate.getFullYear();
	tableData.innerHTML = mydate.getDate()+"/"+(mydate.getMonth()+1)+"/"+mydate.getFullYear()+"<br>"+days[mydate.getDay()] + "<br>" + tableData.innerHTML;
}