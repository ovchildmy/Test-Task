getVal();
crossExit();
createaAskPopup();
createChangePopup();

// Создание попап-совета
function createaAskPopup() {
	var askBtn = document.querySelector('.cabinet__ask');
	var askPopup = document.querySelector('.cabinet__popup-ask');

	askBtn.addEventListener('click', function() {
		askPopup.style.display = "block";
	});
}

function createChangePopup() {
	var cell = document.querySelectorAll('.cabinet__table td:last-child');
	var body = document.querySelector('body');

	for(var i = 0; i < cell.length; i++){
		cell[i].addEventListener('click', function() {

			var query = this.getAttribute("data-query");
			var placeholder = this.getAttribute("data-placeholder");

			var cross = document.createElement("img");
			var wrapper = document.createElement("article");
			var form = document.createElement("form");
			var inputText =  document.createElement(
						(this.hasAttribute("data-ta") ? "textarea" : "input")
					);
			var btn =  document.createElement("button");

			wrapper.className = "popup cabinet__changePopup";
			form.setAttribute("method", "post");
			form.setAttribute("action","/pages/change.php?query="+query);

			inputText.setAttribute("placeholder", "Измените сво"+placeholder);
			inputText.setAttribute("autofocus", "");
			inputText.setAttribute("required", "");
			inputText.setAttribute("name", "data");
			inputText.setAttribute("class", "cabinet__cellInput");
			inputText.setAttribute("type", (this.hasAttribute("data-date") ? "date" : "text"))
			inputText.value = cellVal;

			cross.setAttribute("src","/img/cross.png");
			cross.setAttribute("class","cabinet__changePopup--cross cross");

			btn.innerHTML = "Изменить";

			// Скрытие всех попап-ов 
			closePopup();

			body.appendChild(wrapper);
			wrapper.appendChild(form);
			form.appendChild(cross);
			form.appendChild(inputText);
			form.appendChild(btn);

			crossExit();
		});
	}
}


// fn скрытия попап-окна
function crossExit() {
	var cross = document.querySelectorAll('.cross');
	var popup = document.querySelectorAll('.popup');


	// Скрытие с помощью крестика
	for(var i = 0; i < cross.length; i++){
		cross[i].addEventListener('click', function() {
			closePopup();
		});
	}

	// Скрытие с помощью wrapper`a
	for(var i = 0; i < popup.length; i++){
		popup[i].addEventListener('click', function(e) {
			if(e.target == this) closePopup();
		});
	}

}

function closePopup() {
	var popup = document.querySelectorAll('.popup');
			
	for(var k = 0; k < popup.length; k++){
		popup[k].style.display = "none";
	}
}