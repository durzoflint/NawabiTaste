function toggleCheckbox(element)
{
	var cart = document.getElementById("myCart");
	var index = cart.innerText.indexOf(element.value);
	var item = element.value;
	if(element.checked && index == -1)
	{
		cart.innerText = cart.innerText + item + "\n";
	}
	else if (index != -1)
	{
		cart.innerText = cart.innerText.substring(0,index) + cart.innerText.substring(index+(item.length)+1);
	}
}