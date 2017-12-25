var today = new Date();
var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
for (var i = 0; i < 30; i++)
{
	var priorDate = new Date().setDate(today.getDate()+i);
	var mydate = new Date(priorDate);
	var tableData = document.getElementsByClassName("mydiv")[i];
	var month = (mydate.getMonth()+1);
	var monthMM = month + "";
	if(month < 10)
		monthMM = "0" + month;
	var date = mydate.getDate();
	var dateDD = date + "";
	if(date < 10)
		dateDD = "0" + date;
	document.getElementsByClassName("Lunch")[i].value = "Lunch " + dateDD+"/"+monthMM+"/"+mydate.getFullYear();
	document.getElementsByClassName("Dinner")[i].value = "Dinner " + dateDD+"/"+monthMM+"/"+mydate.getFullYear();
	tableData.innerHTML = dateDD+"/"+monthMM+"/"+mydate.getFullYear()+"<br>"+days[mydate.getDay()] + "<br>" + tableData.innerHTML;
}