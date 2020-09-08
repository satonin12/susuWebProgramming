/*Do not remove and do not change this string*/
//------------------------------------
function createXmlHttpRequestObject(){
// функция создает и возварщает объект типа Ajax-запрос 
var xmlHttp;
try{
	xmlHttp=new XMLHttpRequest();
}
catch(e){
	try{
		xmlHttp=new ActiveXObject("MSXML2.XMLHTTP");
	}
	catch(e){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){}
	}
}
if(!xmlHttp){
	alert("Не удалось создать объект XMLHttpRequest");
}
return xmlHttp;
}
//--------------------------------------------
function getResponseText(xmlHttp){
// проверка готовности результата
// возвращает текст отклика сервера на запрос xmplHTTP
}
//------------------------------------
function Receive(){ 
// обработчик отклика web-сервера, назначается функцией Init
// работает в соответствии с заданием (read.jpg)
}
//---------------------
function Init(){
// создание объекта для выполнения AJAX-запроса
// и назначение обработчика ответа
	xmlHttp.open("GET", "")
}
//------------------------------------
function Send(){
// функция посылает AJAX-запрос. Параметры передаются методом POST
 // вычисляем строку параметров
  // посылаем заголовок, передающий серверу тип сообщения
}
/*Do not remove and do not change this string*/