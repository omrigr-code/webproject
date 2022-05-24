function sendform() {
    const form = new FormData(document.getElementById('contentForm'));
    const req = new Request('/PHP/index.php');
    fetch(req, {
        method: 'POST',
        body: form
    }).then((response)=>{
        response.text().then((text)=>{
            alert(text);
            location.reload();
        })
    })
}

window.onload = () => {
	var x = $("#first");
	var y = $("#first1");
	var z = $("#first2");
	x.css("color", "black");
	y.css("color", "black");
	z.css("color", "black");
	 
	function changeColor() {
		if (x.css("color") == "rgb(0, 0, 0)") {
			x.css("color", "red");
			y.css("color", "red");
			z.css("color", "red");
		} else if (x.css("color") == "rgb(255, 0, 0)") {
			x.css("color", "black");
			y.css("color", "black");
			z.css("color", "black");
		}
	};
	window.setInterval(changeColor, 1000);
}
