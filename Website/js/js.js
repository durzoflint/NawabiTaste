var lunchCost = 150;
var dinnerCost = 150;
function revieworder()
{
    var myCart = document.getElementById("myCart");
    var cart = document.getElementById("cart");
    if (myCart.innerText == "")
    {
    	$('.alert').fadeIn("slow").delay(3000).fadeOut("slow");
       	return false;
	}
    cart.value = myCart.innerText;
    return true;
}
function increaseCost(cost)
{
    var costP = document.getElementById("totalCost");
    var costT = costP.innerText;
    var num = parseInt(costT.substring(costT.indexOf("Rs. ")+4));
    num = num + cost;
    costP.innerText = "Total = Rs. " + num;
}
function decreaseCost(cost)
{
    var costP = document.getElementById("totalCost");
    var costT = costP.innerText;
    var num = parseInt(costT.substring(costT.indexOf("Rs. ")+4));
    num = num - cost;
    costP.innerText = "Total = Rs. " + num;
}
function removeLunch()
{
    var lunchP = document.getElementById("lunchNum");
    var lunch = lunchP.innerText;
    var num = parseInt(lunch.substring(lunch.indexOf(" X ")+3, lunch.indexOf(" = ")));
    num = num - 1;
    lunchP.innerText = "Lunch X " + num + " = Rs. " + (num*lunchCost);
    decreaseCost(lunchCost);
}
function removeDinner()
{
    var dinnerP = document.getElementById("dinnerNum");
    var dinner = dinnerP.innerText;
    var num = parseInt(dinner.substring(dinner.indexOf(" X ")+3, dinner.indexOf(" = ")));
    num = num - 1;
    dinnerP.innerText = "Dinner X " + num + " = Rs. " + (num*dinnerCost);
    decreaseCost(dinnerCost);
}
function addLunch()
{
    var lunchP = document.getElementById("lunchNum");
    var lunch = lunchP.innerText;
    var num = parseInt(lunch.substring(lunch.indexOf(" X ")+3, lunch.indexOf(" = ")));
    num = num + 1;
    lunchP.innerText = "Lunch X " + num + " = Rs. " + (num*lunchCost);
    var costP = document.getElementById("totalCost");
    var cost = costP.innerText;
    increaseCost(lunchCost);
}
function addDinner()
{
    var dinnerP = document.getElementById("dinnerNum");
    var dinner = dinnerP.innerText;
    var num = parseInt(dinner.substring(dinner.indexOf(" X ")+3, dinner.indexOf(" = ")));
    num = num + 1;
    dinnerP.innerText = "Dinner X " + num + " = Rs. " + (num*dinnerCost);
    var costP = document.getElementById("totalCost");
    var cost = costP.innerText;
    increaseCost(dinnerCost);
}
function selectAllLunch()
{
    var cart = document.getElementById("myCart");
    var allLunch = document.getElementsByClassName("Lunch");
    for (var i = 0; i < allLunch.length; i++)
    {
        allLunch[i].checked = true;
        var item = allLunch[i].value;
        var index = cart.innerText.indexOf(item);
        if (index == -1)
        {
            cart.innerText = cart.innerText + item + "\n";
            addLunch();
        }
    }
}
function selectAllDinner()
{
    var cart = document.getElementById("myCart");
    var allDinner = document.getElementsByClassName("Dinner");
    for (var i = 0; i < allDinner.length; i++)
    {
        allDinner[i].checked = true;
        var item = allDinner[i].value;
        var index = cart.innerText.indexOf(item);
        if (index == -1)
        {
            cart.innerText = cart.innerText + item + "\n";
            addDinner();
        }
    }
}
function selectAll()
{
    selectAllDinner();
    selectAllLunch();
}
function clearAll()
{
    var allLunch = document.getElementsByClassName("Lunch");
    for (var i = 0; i < allLunch.length; i++)
    {
        allLunch[i].checked = false;
    }
    var allDinner = document.getElementsByClassName("Dinner");
    for (var i = 0; i < allDinner.length; i++)
    {
        allDinner[i].checked = false;
    }
    var cart = document.getElementById("myCart");
    cart.innerText = "";
    document.getElementById("lunchNum").innerText = "Lunch X 0 = Rs. 0";
    document.getElementById("dinnerNum").innerText = "Dinner X 0 = Rs. 0";
    document.getElementById("totalCost").innerText = "Total = Rs. 0";
}
function toggleCheckbox(element)
{
    var cart = document.getElementById("myCart");
    var item = element.value;
    var index = cart.innerText.indexOf(item);
    if(element.checked && index == -1)
    {
        cart.innerText = cart.innerText + item + "\n";
        if (item.includes("Lunch"))
            addLunch();
        else
            addDinner();
    }
    else if (index != -1)
    {
        cart.innerText = cart.innerText.substring(0,index) + cart.innerText.substring(index+(item.length)+1);
        if (item.includes("Lunch"))
            removeLunch();
        else
            removeDinner();
    }
}
$(function(){
$(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");                
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");                
        });
});