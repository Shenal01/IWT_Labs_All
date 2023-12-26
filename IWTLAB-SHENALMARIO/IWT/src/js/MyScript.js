document.write("connected to javascript");

function loadData(name){
	
	if (name=="btn111"){
	document.getElementById("paraNew").innerHTML = "The history of iPhone began with a request from Apple Inc. 
	CEO Steve Jobs to the company engineers, asking them to investigate the use  touchscreen devices and tablet computers 
	(which later came to fruition  the iPad). Many have noted the device similarities to Apple previous touch-screen portable device, the Newton MessagePad.
	 Like the MessagePad, the iPhone is nearly  screen. Its  factor is credited to Apple Chief Design Officer, Jonathan Ive. 
	The iPhone beta however was created  to test its ability towards commands  the Apple team and was called the first iPhone ever but was never 
	released to the  so it was not considered as the main first iPhone";
    document.getElementById("image11").src = "img/IPHONE.jpg";
	}
  
	else if (name=="btn112"){
	document.getElementById("paraNew").innerHTML = "Nokia is a Finnish multinational telecommunications and consumer electronics 
	company that was founded  . It is headquartered  Espoo, Finland1. Nokia has been a major contributor to the mobile telephony industry, 
	having assisted  the development  the GSM standard1. Nokia’s current  is on providing  networks and phones";
    document.getElementById("image11").src = "img/Nokiaa.jpg";
	}
	
	else if (name=="btn113"){
	document.getElementById("paraNew").innerHTML = "Samsung is a South Korean multinational manufacturing conglomerate headquartered in 
	Samsung Town, Seoul, South Korea1. It comprises numerous affiliated businesses, most  them united under the Samsung brand1. Samsung 
	produces a wide range  products including mobile phones, home electronics, home appliances and TVs";
    document.getElementById("image11").src = "img/samsung.jpg";
	}
	
	else if (name=="btn114"){
	document.getElementById("paraNew").innerHTML = "Oppo is a Chinese consumer electronics manufacturer headquartered in Dongguan, Guangdong1. 
	It produces smartphones, smart devices, audio devices, power banks, and other electronic products1. Some  the popular Oppo phones are Oppo Find X3 Pro, 
	Oppo Reno5 Pro , Oppo A942. According to its phone specs and Oppo phone reviews, it certainly doesn’t compromise on quality. 
	New Oppo phone users are pleasantly surprised at the overall performance and endurance  their smartphones, especially considering how affordable they are 
	compared to more popular phone brands3.";
    document.getElementById("image11").src = "img/oppo.jpg";
	}
	
	else{
		alert("Invalid!");
	}
	
}



/*You can use both*/

function priceForLoop(){
    var phone = ["IPhone XS = Rs 10000/=","Apple iPhone XR = Rs 5000/=","iPhone 8 = Rs 15000/=","IPhone X = Rs 25000/=","Nova 5 = Rs 10000/=","Nova 5 Pro = Rs 8000/=","P 30 lite = Rs 89000/=","Z 5 Pro = Rs 90000/=","K9 = Rs 18000/=","K8 Plus = Rs 10000/=","3.1 Plus = Rs 36000/="];

    for (i = 0, len = phone.length, list="List of Average Prices (using For Loop) <br/>"; i < len; i++) { 
            list += phone[i] + "<br />";
    }
    document.getElementById("image11").src="img/phones.jpg";
    document.getElementById("paraNew").innerHTML = list;
}

function priceForInLoop(){
    var phone = [];
    phone["IPhone XS"] = "Rs 1000/=";
    phone["Apple iPhone XR"] = "Rs 500/=";
    phone["iPhone 8"] = "Rs 1500/="; 
    phone["IPhone X"] = "Rs 2500/=";
    phone["Nova 5"] = "Rs 100/=";
    phone["Nova 5 Pro"] = "Rs 800/=";
    phone["P 30 lite"] = "Rs 8000/=";
    phone["Z 5 Pro"] = "Rs 9000/="; 
    phone["K9"] = "Rs 1800/=";
    phone["K8 Plus"] = "Rs 100/=";
    phone["3.1 Plus"] = "Rs 360/=";

    var list="List of Average Prices (using For In Loop)<br/>";
    for(var item in phone) {
        list += item + " : " + phone[item] + "<br />";
    }
    document.getElementById("image11").src="img/phones.jpg";
    document.getElementById("paraNew").innerHTML = list;
}

function priceHigher(){
    var phone = [];
    phone["IPhone XS"] = 1000;
    phone["Apple iPhone XR"] = 500;
    phone["iPhone 8"] = 1500; 
    phone["IPhone X"] = 2500;
    phone["Nova 5"] = 100;
    phone["Nova 5 Pro"] = 800;
    phone["P 30 lite"] = 8000;
    phone["Z 5 Pro"] = 9000; 
    phone["K9"] = 1800;
    phone["K8 Plus"] = 100;
    phone["3.1 Plus"] = 360;

    var HighPrice = "List of high cost mobile phones <br/>";
    for(var item in phone) {
        if(phone[item] >1000){
            HighPrice += item + " : " + phone[item] + "<br />";
    }
    }
    document.getElementById("image11").src="img/phones.jpg";
    document.getElementById("paraNew").innerHTML = HighPrice;
}


function priceLower(){
    var phone = [];
    phone["IPhone XS"] = 1000;
    phone["Apple iPhone XR"] = 500;
    phone["iPhone 8"] = 1500; 
    phone["IPhone X"] = 2500;
    phone["Nova 5"] = 100;
    phone["Nova 5 Pro"] = 800;
    phone["P 30 lite"] = 8000;
    phone["Z 5 Pro"] = 9000; 
    phone["K9"] = 1800;
    phone["K8 Plus"] = 100;
    phone["3.1 Plus"] = 360;

    var LowPrice = "List of low cost mobile phones <br/>";
    for(var item in phone) {
        if(phone[item] < 1000){
            LowPrice += item + " : " + phone[item] + "<br />";
    }
    }
    document.getElementById("image11").src="img/phones.jpg";
    document.getElementById("paraNew").innerHTML = LowPrice;
}


/*Lab Sheet 5*/


function checkPassword(){
    if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value){
        alert("Password Mismatch!");
        return false;
    }else{
        alert("Success!");
        return true;
    }    
}

function enableButton(){
    if(document.getElementById("checkBox").checked){
     document.getElementById("submitBtn").disabled=false;
    }
    else{
         document.getElementById("submitBtn").disabled=true;
    }
}