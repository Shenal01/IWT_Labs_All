document.write("Connected to first script.");
function loadData(name){
	if(name=="btn111"){
		document.getElementById("paraNew").innerHTML = "iPhone is a line of smartphones produced by Apple Inc. that use Apple's own iOS mobile operating system. The first-generation iPhone was announced by then-Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has annually released new iPhone models and iOS updates. As of November 1, 2018, more than 2.2 billion iPhones had been sold. As of 2022, the iPhone accounts for 15.6% of global smartphone market share.";
		document.getElementById("image11").src = "img/IPHONE.jpg";
	}
	else if(name=="btn112"){
		document.getElementById("paraNew").innerHTML = "paragraph 2 is working now";
		document.getElementById("image11").src = "img/Nokiaa.jpg";
	}
	else if(name=="btn113"){
		document.getElementById("paraNew").innerHTML = "paragraph 3 is working now";
		document.getElementById("image11").src = "img/samsung.jpg";
	}
	else if(name=="btn114"){
		document.getElementById("paraNew").innerHTML = "paragraph 4 is working now";
		document.getElementById("image11").src = "img/oppo.jpg";
	}
	else{
		alert("invalid!!!");
	}
}

function priceForLoop(){
	var phone = ["I Phone XS = Rs. 78 000.00/=", "I Phone XR = Rs. 68 000.00/=", "I Phone 8 Plus = Rs. 78 000.00/=", "I Phone 11 = Rs. 138 000.00/=", "I Phone 12 = Rs. 178 000.00/=", "I Phone 13 = Rs. 278 000.00/=", "I Phone 14 = Rs. 378 000.00/="];
	
	for(i = 0, len = phone.length, list = "List Of Average Prices (Using for loop) <br/>"; i < len; i++) {
		list += phone[i] + "<br/>";
	}
	document.getElementById("image11").src = "img/list.png";
	document.getElementById("paraNew").innerHTML = list;
}

function priceForInLoop() {
	var phone = [];
	phone["I Phone XS"] = "Rs. 60 000.00/=";
	phone["I Phone XR"] = "Rs. 68 000.00/=";
	phone["I Phone 8 Plus"] = "Rs. 75 000.00/=";
	phone["I Phone 11"] = "Rs. 138 000.00/=";
	phone["I Phone 12"] = "Rs. 178 000.00/=";
	phone["I Phone 13"] = "Rs. 278 000.00/=";
	phone["I Phone 14"] = "Rs. 378 000.00/=";
	
	var list = "List Of Average Prices (Using for in loop) <br/>";
	for(var item in phone) {
	list += item + " : " + phone[item] + "<br/>";
	}
	document.getElementById("image11").src = "img/list.png";
	document.getElementById("paraNew").innerHTML = list;
}

function priceHigher() {
	var phone = [];
	phone["I Phone XS"] = 60000;
	phone["I Phone XR"] = 68000;
	phone["I Phone 8 Plus"] = 75000
	phone["I Phone 11"] = 138000;
	phone["I Phone 12"] = 178000;
	phone["I Phone 13"] = 278000;
	phone["I Phone 14"] = 378000;
	
	var HighPrice = "List Of High cost mobile phones <br/>";
	for(var item in phone) {
		if(phone[item] > 75000) {
			HighPrice += item + " : " + phone[item] + "<br/>";
		}
	}
	document.getElementById("image11").src = "img/list.png";
	document.getElementById("paraNew").innerHTML = HighPrice;
}

function priceLower() {
	var phone = [];
	phone["I Phone XS"] = 60000;
	phone["I Phone XR"] = 68000;
	phone["I Phone 8 Plus"] = 75000
	phone["I Phone 11"] = 138000;
	phone["I Phone 12"] = 178000;
	phone["I Phone 13"] = 278000;
	phone["I Phone 14"] = 378000;
	
	var LowPrice = "List Of High cost mobile phones <br/>";
	for(var item in phone) {
		if(phone[item] <= 75000) {
			LowPrice += item + " : " + phone[item] + "<br/>";
		}
	}
	document.getElementById("image11").src = "img/list.png";
	document.getElementById("paraNew").innerHTML = LowPrice;
}

