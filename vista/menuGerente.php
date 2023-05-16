<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Gerente</title>

    <link rel="stylesheet" href="./css/menuGerente.css">
</head>

<body>
    <header>
        <div class="continer-header">
            <img src="./imagen/logo.jpg" alt="">
            <h1>ESTUDIO JURIDICO SAENZ</h1>
            <ul>
                <li><?php echo "Gerente:Nicolay" ?></li>
                <li><a href="./usereleccion.php">Cerrar Seccion</a></li>
            </ul>
        </div>
    </header>

    <main>
    <div class="container">
    <div class="cuadro" >
      <a href="gestionusuario.php">GESTIONAR USUARIO</a> 
    </div>
    <div class="cuadro">
      <a href="gestionrepostes.php">GESTIONAR REPORTES</a>
    </div>
    <div class="cuadro">
      <a href="gestionespediente.php">GESTIONAR EXPEDIENTES</a>
    </div>
    <div class="cuadro">
      <a href="proximacita.php">MOSTRAR PROXIMA AUDIENCIA</a>
    </div>
</div>
<div class="recordatorio">
      <table>
        <tr>
          <td>fecha</td>
          <td>cliente</td>
          <td>tipo de caso</td>
        </tr>
        <tr>
          <td>12-12-12</td>
          <td>nicolay</td>
          <td>penal</td>
        </tr>
      </table>
    </div>
<div class="recu">

  <div class="calendar">
    
    <div id="datepicker">
      <div class="over">
        <div class="eventdata">
          
        </div>
        
        <a class="close" href="javascript:;">
          X
        </a>
		  </div>
	  </div>
  </div>
 </div>
    <div class ="calendario">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
      <script >
        $(document).on('click', '.close', function() {
          $(".over").fadeOut();
      });

      var events = [
          { Title: "Five K for charity", Date: new Date("05/14/2013"), excerpt: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, culpa, tempora sequi labore dicta" },
          { Title: "Dinner", Date: new Date("05/31/2013"), excerpt: "Cena de caridad ble" },
          { Title: "Meeting with manager", Date: new Date("05/10/2013"), excerpt: "Cena de caridad ble" }
      ];

      $("#datepicker").datepicker({beforeShowDay: function(date) {
              var result = [true, '', null];
              var matching = $.grep(events, function(event) {
                  return event.Date.valueOf() === date.valueOf();
              });

              if (matching.length) {
                  result = [true, 'highlight', null];
              }
              return result;
          },
          onSelect: function(dateText) {
              var date,
                  selectedDate = new Date(dateText),
                  i = 0,
                  event = null;

              while (i < events.length && !event) {
                  date = events[i].Date;

                  if (selectedDate.valueOf() === date.valueOf()) {
                      event = events[i];
                  }
                  i++;
              }
              if (event) {

                  $(".eventdata").empty();
                  $(".over").fadeIn("slow");
                  $(".eventdata").append("<h1>" + event.Title + "</h1><p>" + event.excerpt + "</p>");
              }
          }

      });

      // Configurar el formato de fecha en numérico (dd/mm/yyyy) y en español
      $.datepicker.setDefaults({
          dateFormat: 'dd/mm/yy',
          monthNames: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'],
          monthNamesShort: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
          dayNames: ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'],
          dayNamesShort: ['dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb'],
          dayNamesMin: ['DO', 'LU', 'MA', 'MI', 'JU', 'VI', 'SÁ']
      });
      </script> 

    </div>  
    </main>

    <footer>
        <div class="copyright">
            <p>&copy Copyright 2023</p>
        </div>
    </footer>


  </body>
</html>