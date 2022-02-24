$( document ).ready(function() {

$("#startLink").click(function () {
	// var img = document.getElementById('selected-image');
	var img = 'http://localhost/img-coverter/unnamed.png';
	console.log(img);
	startRecognize(img);
});

function startRecognize(img){
	recognizeFile(img);
}


function recognizeFile(file){

	$("#log").empty();
  	const corePath = window.navigator.userAgent.indexOf("Edge") > -1
    ? 'js/tesseract-core.asm.js'
    : 'js/tesseract-core.wasm.js';


	const worker = new Tesseract.TesseractWorker({
		corePath,
	});


	worker.recognize(file,'eng')
			.progress(function(packet){
			// console.info(packet)
			// progressUpdate(packet)
		})


	.then(function(data){
			console.log(data.text)
			alert(data.text);
		})
}

});