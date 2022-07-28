/*
		This fucntion beeing called from HTML file based on some Events
	 */ 
function showContent(){

 	document.getElementById("default").style.display  = "block";

};
/*
		This fucntion beeing called from HTML file based on some Events
	 */
function getCuisinId( item ) {

 		var descDivs = document.getElementsByClassName('item-desc');

		for (var i = 0; i < descDivs.length; i ++) {

			descDivs[i].style.display = 'none';	
		    
		}
		document.getElementById(item.value).style.display  = "block";

		for (var i = 0; i < document.getElementsByClassName('list-item').length; i ++) {

			document.getElementsByClassName('list-item')[i].classList.remove("active");	
		    
		}

		item.classList.add("active");

	}
	/*
		This fucntion beeing called from HTML file based on some Events
	 */
	function findRestaurants(e){
		var rest = document.getElementById('selectResraurant').value;
		var cat = document.getElementById('selectAmbience').value;
		if(rest==''||cat==''){
			alert('Please select options');
			return false;
		}
		else {
			console.log('111');
			document.getElementById('resForm').submit();

		}
	}
	/*
		This fucntion beeing called from HTML file based on some Events
	 */
	function showRecipies(res) {
		var recDivs = document.getElementsByClassName('recipeData');
		for (var i = 0; i < recDivs.length; i ++) {

			recDivs[i].style.display = 'none';	
		    
		}
		document.getElementById(res).style.display  = "block";

	}
	/*
		This fucntion beeing called from HTML file based on some Events
	 */
	
	function getUserData() {
		//document.getElementById('homeContent').style.display  = "none";
		//Prompting user to enter a value and we are defaulting it to Guest
		var person = prompt("Please enter your name", "Guest");
		/Prompting user to enter a value for age and we are defaulting it to 25
		var age = prompt("Please enter your age", "25");

		document.getElementById('name').innerHTML = person;
		document.getElementById('age').innerHTML = age;

		var recDivs = document.getElementsByClassName('diet');

		for (var i = 0; i < recDivs.length; i ++) {

			recDivs[i].style.display = 'none';	
		    
		}
		//IF Check
		if(age >0 && age<=25){
			document.getElementById('diet25').style.display  = "block";
			document.getElementById('homeContent').style.visibility  = "visible";
		}
		//IF Check
		if(age >25 && age<=50){
			document.getElementById('diet50').style.display  = "block";
			document.getElementById('homeContent').style.visibility  = "visible";
		}
		//IF Check
		if(age >50 && age<=100){
			document.getElementById('diet100').style.display  = "block";
			document.getElementById('homeContent').style.visibility  = "visible";
			
		}
		
	}
	/*
		This fucntion beeing called from HTML file based on some Events
	 */
	function getDiscountRestaurants(){
		var discount = document.getElementById('selectDiscount').value;
		if(discount==''){
			//Alert if user doesnt selected any option
			alert('Please select discount');
			return false;
		}
		else {

			document.getElementById('disForm').submit();

		}

	}
	/*
		This fucntion beeing called from HTML file based on some Events
	 */
	function getSpiceRestaurants(){
		var ele = document.getElementsByName('slevels');
		var checked = 0;
            //Iterating through for loop  
            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked){
                	checked=1;
            	}
            }
		if(checked==1){
			
			document.getElementById('resForm').submit();
		}
		else {
			//Alert if user doesnt selected any option
			alert('Please select spice level');
			return false;

		}

	}
