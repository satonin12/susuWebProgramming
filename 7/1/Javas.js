/*Do not remove and do not change this string*/
//------------------------------------
function createXmlHttpRequestObject() {
	// функция создает и возварщает объект типа Ajax-запрос 
	var xmlHttp;
	try {
		xmlHttp = new XMLHttpRequest();
	}
	catch (e) {
		try {
			xmlHttp = new ActiveXObject("MSXML2.XMLHTTP");
		}
		catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) { }
		}
	}
	if (!xmlHttp) {
		alert("Не удалось создать объект XMLHttpRequest");
	}
	return xmlHttp;
}
//--------------------------------------------
function getResponseText(xmlHttp) {
	// проверка готовности результата
	// возвращает текст отклика сервера на запрос xmplHTTP
	return xmlHttp.responseText;
}
//------------------------------------
function Receive(req) {
	// обработчик отклика web-сервера, назначается функцией Init
	// работает в соответствии с заданием (read.jpg)

	req.onreadystatechange = () => {
		if (req.readyState == 4) {
			if (req.status == 200) {
				var status = getResponseText(req);
				if (status == 1) {
					console.log(true);
					document.getElementById('reg').innerHTML = "Поздравляем с успешной регистрацией";
					//TODO: подключить файл 1.php и вывести поздравление
					//TODO: or alert с ошибкой подключения
				}
			} else {
				alert("Ошибка подключения, попробуйте еще раз!")
				console.log(req.status);
			}
		} else {
			console.log(req.status);
		}
	};

}
//---------------------
function Init() {
	// создание объекта для выполнения AJAX-запроса
	// и назначение обработчика ответа
	var req = createXmlHttpRequestObject();
	req.open("POST", 'Login.php');
	req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	Send(req);
	Receive(req);
}
//------------------------------------
function Send(req) {
	// функция посылает AJAX-запрос. Параметры передаются методом POST
	// вычисляем строку параметров
	// посылаем заголовок, передающий серверу тип сообщения
	var name = document.getElementById('firstname').value;
	var pass = document.getElementById('password').value;
	if (pass=== '' || name=== '' ) {
		alert("Укажите недостающие данные");
	}else{
		req.send("firstname=" + encodeURIComponent(name) + "&password=" + encodeURIComponent(pass));
	}
}
/*Do not remove and do not change this string*/