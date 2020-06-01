const mesesJiu = document.getElementById('mesesJiu');
const jiuCheckBox = document.getElementById('jiu');

jiuCheckBox.addEventListener('click', ()=>{
	if(jiuCheckBox.checked === true){
		mesesJiu.style.display = "block";
	} else {
		mesesJiu.style.display = "none";
	}
});

/////////////////////////////////////////////////////////
const mesesBoxe = document.getElementById('mesesBoxe');
const boxeCheckBox = document.getElementById('box');

boxeCheckBox.addEventListener('click', ()=>{
	if(boxeCheckBox.checked === true){
		mesesBoxe.style.display = "block";
	} else {
		mesesBoxe.style.display = "none";
	}
});

////////////////////////////////////////////////////////
const mesesMuay = document.getElementById('mesesMuay');
const muayCheckBox = document.getElementById('mua');

muayCheckBox.addEventListener('click', ()=>{
	if(muayCheckBox.checked === true){
		mesesMuay.style.display = "block";
	} else {
		mesesMuay.style.display = "none";
	}
});
