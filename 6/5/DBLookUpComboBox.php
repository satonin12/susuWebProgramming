<!-- Do not remove and do not change this string -->
<?php
class DBLookUpComboBox {
//---------------------------------------------

function DBLookUpComboBox($ComboName, $Conn, $SQL,$IDField,$ValField, $SelectedValue=""){
// имя Combobox
// $Conn - соединение с сервером
// $SQL - текст оператора select
// $IDField - имя поля - идентификатора записи из оператора select ($SQL)
// $ValField - имя поля, значения которого будут демонстрироваться в выпадающем списке Combobox
// $SelectedValue - первоначально выбранное значение в HTML элементе SELECT
.....................................
}
//----------------------------------------
function Display(){
// собственно создание HTML элемента SELECT
.......................................................
}

//-----------------------------------------
function SetOnChange($onChange){
// установить обработчик события OnChange
...................................................
}

//----------------------------------------
function GetCurID(){
// найти текущий идентификатор записи из таблицы БД
...................................................
return $ret;
}

} // end of class
?>
<!-- Do not remove and do not change this string -->

