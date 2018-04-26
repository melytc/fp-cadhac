// donaciones.js

(function(){
	var widget = document.querySelector('.donation-widget');

	var btns = widget.querySelectorAll('.option-select');
	var submitBtn = document.getElementById('donateBtn');
	var freqBtns = widget.querySelectorAll('.frequency a.btn');
	var amountBtns = widget.querySelectorAll('.amount a.btn');

	// Attach events
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener('click', handleClick);
	}


	// Click handler
	function handleClick(e) {
		e.preventDefault();
		var isFreq = e.target.parentNode.parentNode.dataset.name === "frequency";
		if(isFreq) {
			for (var i = 0; i < freqBtns.length; i++) {
				freqBtns[i].classList.remove('active');
			}
		}
		else { 
			for (var i = 0; i < amountBtns.length; i++) {
				amountBtns[i].classList.remove('active');
			}
		}
		e.target.classList.add('active');
	}
})();
