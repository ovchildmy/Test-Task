var fl = document.querySelectorAll('.form--link');
var wrapper = document.querySelector('.form__wrapper');

existAcc();

for(var i = 0; i < fl.length; i++){
	fl[i].addEventListener('click', function() {
		var thisClass = this.className;
		var hasClass = thisClass.match(/(form--active)/);

		
		toggleClass.call(this, hasClass);
		slideForm();
		

	});
}

// Переключатель классов на главной форме
function toggleClass(hasClass) {
	if(!hasClass){
		var sibl = (this.nextElementSibling || this.previousElementSibling);
		var newSiblClass = sibl.className.replace(/(form--active)/, "");

		sibl.className = newSiblClass;
		this.className += " form--active";
		pos = (pos == "log" ? "reg" : "log");
	} 
}

function slideForm() {

	if(pos == "reg"){
		var timer = setInterval(function () {
			sliderMoving(-270, pos);
		},1)
	} else{
		var timer = setInterval(function () {
			sliderMoving(0, pos);
		},1)
	}

	function sliderMoving(exVal, pos) {
		if(pos == "reg" ? mg <= exVal: mg >= exVal){
			clearInterval(timer);
		} else {
			wrapper.style.marginLeft = (pos == "reg" ? mg-=2 : mg+=2) + "px";
		}
	}

}