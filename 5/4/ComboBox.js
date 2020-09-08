/*Do not remove and do not change this string*/
function ComboBox(Place, Own_ID, Arr, OnChange) {
// Place - контейнер для помещения SELECT
// Own_ID - собственный идентификатор
// Arr - массив, содержащий пары id,текст в option, 
// OnChange - функция - обработчик onChange
	//----------------------------
	this.Place=Place;
	this.Own_ID=Own_ID;
	this.Arr=Arr;
	this.OnChange=OnChange;

	this.Draw = function () {
		// функция создающая элемент SELECT
		// и отображающиеся в этом месте
		// console.log("я туть");
		// console.log(Place);
		// console.log(Arr);
		var sel;
		if(document.querySelector('select')===null){
			sel=document.createElement('select');
			console.log("1");	
		}else {
			console.log("2");
		}
		// sel=document.getElementsByTagName('select');
		console.log(sel);
		for(var i=0; i<Arr.length; i++){
				var opt=document.createElement('option');
				var text=document.createTextNode(Arr[i][1]);
				opt.appendChild(text);
				sel.appendChild(opt);
		}
		Place.appendChild(sel);
	}

} // ComboBox
/*Do not remove and do not change this string*/