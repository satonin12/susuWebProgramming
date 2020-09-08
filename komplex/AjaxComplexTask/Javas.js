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
//TODO: function getResponceText and Recieve по желанию
function getResponceText(xmlHttp) {
  return xmlHttp.responceText;
}

function Display(obj) {
  var table = document.getElementById('tab');
  var table = document.querySelector('table');
  table.parentNode.removeChild(table);

  var table1 = document.createElement('table');
  table1.setAttribute("id", "fio");
  var thead = document.createElement('thead');
  var tr = document.createElement('tr');
  var th = document.createElement('th');
  var surname = document.createTextNode('Фамилия');
  th.appendChild(surname);
  tr.appendChild(th);
  thead.appendChild(tr);
  table1.appendChild(thead);
  var tbody = document.createElement('tbody');
  for (var i = 0; i < obj.length; i++) {
    var tr = document.createElement('tr');
    var td = document.createElement('td');
    var sn = document.createTextNode(obj[i]);
    td.appendChild(sn);
    tr.appendChild(td);
    tbody.appendChild(tr);
  }
  table1.appendChild(tbody);
  var oper = document.getElementById('operac');
  var parentDiv = oper.parentNode;
  parentDiv.insertBefore(table1, oper);
}

function Receive(req) {
  req.onreadystatechange = () => {
    if (req.readyState == 4) {
      if (req.status == 200) {
        let obj = JSON.parse(req.responseText);
        Display(obj);
      } else {
        // alert("error");
        console.log("error");
      }
    } else {
      // alert("error");
      console.log("error");
    }
  }
}
function Init(value) {
  // создание объекта для выполнения AJAX-запроса
  // и назначение обработчика ответа
  var req = createXmlHttpRequestObject();
  req.open('POST', 'ini.php');
  req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  Send(req, value);
  Receive(req);
}

function Send(req, value) {
  req.send("gruppa=" + value);
}