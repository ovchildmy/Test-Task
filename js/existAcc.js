var mg = 0;
var pos = "log";

function existAcc() {
	var el = document.querySelectorAll('.cabinet__warnExist');
	var flF = document.querySelector('.form--link:first-child');
	var flL = document.querySelector('.form--link:last-child');


	// Проверка на наличие ошибки существ. пользователя
	if(el.length != 0) {
		flF.className = "form--link";
		flL.className += " form--active";

		mg = -270;
		pos = "reg"
		wrapper.style.marginLeft = mg + "px";


	}
}