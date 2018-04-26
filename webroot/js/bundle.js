(function(){
	var imgdivs = document.querySelectorAll('.img-bg');
	for (var i = 0; i < imgdivs.length; i++) {
		if(imgdivs[i].dataset.bg) {
			var url = imgdivs[i].dataset.bg;
			imgdivs[i].style.backgroundImage = 'url('+url+')';
		}
	}
})();
