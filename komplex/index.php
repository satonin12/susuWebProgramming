<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajax 2</title>
  <style>
    @import "style.css";
  </style>
  <script src="Javas.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <h3>Комплексная задача (Ajax)</h3>
  </header>
  <hr>
  <div class="content">
    <?php
      require_once('sqlBegin.php');
    ?>
    <table id="operac">
      <tr>
        <td>Добавить</td>
        <td>Изменить</td>
        <td>Удалить</td>
      </tr>
    </table>
  </div>

  <script>
    $(document).ready(function () {
      $("body").on('click', 'table td', function () {
        var self = $(this);
        var table = self.closest('table');
        var activeRow = table.data('active-row');
        if (activeRow) {
          activeRow.removeClass('active');
        }
        activeRow = self.closest('td');
        table.data('active-row', activeRow);
        activeRow.addClass('active');
      });

      $(document).on('click', '.active', function () {
        let count = $('table').find('.active');
        console.log(count);
        if (count.length === 2) {
          if (count[1].firstChild.data === 'Удалить') {
            let FIO = count[0].firstChild.data;
            let value = count[1].firstChild.data;
            $.ajax({
              url: "delete.php",
              method: 'post',
              data: { fio: FIO, val: value },
              contentType: 'application/x-www-form-urlencoded',
              success: function () {
                $('#fio').find('.active').remove();
                $('#operac').find('.active').removeClass('active');
              }
            });
          }
          if (count[1].firstChild.data === 'Изменить') {
            console.log('изменить');
            let FIO = count[0].firstChild.data;
            let value = count[1].firstChild.data;
            let prom = window.prompt('Введито новую фамилию и инициалы : ');
            console.log(FIO);
            console.log(prom);
            $.ajax({
              url: "change.php",
              method: 'post',
              data: { fio: FIO, val: value, fio_change: prom },
              contentType: 'application/x-www-form-urlencoded',
              success: function () {
                console.log("успех");
                $('#fio').find('.active').html(prom);
                $('#operac').find('.active').removeClass('active');
                $('#fio').find('.active').removeClass('active');
              }
            });
          }
        }
        if(count[0].firstChild.data === 'Добавить'){
          console.log('добавить');
          let value = count[0].firstChild.data;
          var countTR = $('table#fio tr:last').index()+1;
          let prom = window.prompt('Введито новую фамилию и инициалы : ');
          $('table#fio tr:last').after('<tr><td>'+prom+'</td></tr>');
          var gruppa = select.options[select.selectedIndex].text;
          $.ajax({
              url: "new.php",
              method: 'post',
              data: { fio: prom, gruppa: gruppa},
              contentType: 'application/x-www-form-urlencoded',
              success: function () {
                console.log("успех");
              }
          })
        }
      });
    });
    var select = document.querySelector('select');
    select.onchange = e => {
      var value = select.options[select.selectedIndex].text;
      console.log(value);
      Init(value);
    }
  </script>
</body>

</html>