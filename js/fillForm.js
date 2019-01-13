var cellVal;

function getVal() {
	var cell = document.querySelectorAll('.cabinet__table td:last-child');

	for (var i = 0; i < cell.length; i++){
		cell[i].addEventListener('click', function() {
			cellVal = this.innerHTML;
		});
	}

}