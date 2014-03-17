
	var titles = document.getElementsByClassName('title');
	var z = 1;
	for (var i = 0; i < titles.length; i++) {
		z++;
		if(z % 6 == 0) {
			titles[i].className += ' navy';
		}
		if(z % 4 == 0) {
			titles[i].className += ' red';
		}
		if(z % 2 == 0) {
			titles[i].className += ' navy';
		}
	}