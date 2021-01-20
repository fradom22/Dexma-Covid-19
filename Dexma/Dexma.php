<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta charset="utf-8">
    <meta name="author" content="Domanico Francesco"/>
    <link rel="stylesheet" type="text/css" href="Dexma.css" />
    <title>Dexma Project</title>

    <style media="screen">
      table,tr,td,th{
        border:1px solid black;
      }
    </style>

  </head>
  <body>
    <center>
      <h1>COVID-19</h1>


    <?php
    $file="https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv";
    $csv = array_map('str_getcsv', file($file));

    $narray=count($csv);
    function Remove_($value){
      $whatrem="_";
      $replace=" ";
      return ucwords(str_replace($whatrem,$replace,$value));
    }

    function modifydate($date){
      $date1=new DateTime($date);
      return $date1->format('d/m/Y');
    }

    function rapporto($fist,$second){
      return round($first/$second*100,2);
    }

    function stampa($frase){
      return $frase;
    }
    ?>
    <table>
      <thead>
      <tr>
        <th><?php echo Remove_($csv[0][0]); ?></th>
        <th><?php echo Remove_($csv[0][2]); ?></th>
        <th><?php echo Remove_($csv[0][3]); ?></th>
        <th><?php echo Remove_($csv[0][6]); ?></th>
        <th><?php echo Remove_($csv[0][8]); ?></th>
        <th><?php echo Remove_($csv[0][9]); ?></th>
        <th><?php echo Remove_($csv[0][10]); ?></th>
        <th><?php echo Remove_($csv[0][14]); ?></th>
        <th><?php echo Remove_($csv[0][13]); ?></th>
        <th><?php echo "Rapporto tamponi/positivi"; ?></th>
      </tr>
      </thead>

      <tbody>
      <tr>
        <td><?php echo modifydate($csv[$narray-1][0]) ?></td>
        <td><?php echo $csv[$narray-1][2] ?></td>
        <td><?php echo $csv[$narray-1][3] ?></td>
        <td><?php echo $csv[$narray-1][6] ?></td>
        <td><?php echo $csv[$narray-1][8] ?></td>
        <td><?php echo $csv[$narray-1][9] ?></td>
        <td><?php echo $csv[$narray-1][10] ?></td>
        <td><?php echo $csv[$narray-1][14] ?></td>
        <td><?php echo $csv[$narray-1][13] ?></td>
      <td><?php echo round($csv[$narray-1][8]/($csv[$narray-1][14]-$csv[$narray-2][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-2][0]) ?></td>
        <td><?php echo $csv[$narray-2][2] ?></td>
        <td><?php echo $csv[$narray-2][3] ?></td>
        <td><?php echo $csv[$narray-2][6] ?></td>
        <td><?php echo $csv[$narray-2][8] ?></td>
        <td><?php echo $csv[$narray-2][9] ?></td>
        <td><?php echo $csv[$narray-2][10] ?></td>
        <td><?php echo $csv[$narray-2][14] ?></td>
        <td><?php echo $csv[$narray-2][13] ?></td>
      <td><?php echo round($csv[$narray-2][8]/($csv[$narray-2][14]-$csv[$narray-3][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-3][0]) ?></td>
        <td><?php echo $csv[$narray-3][2] ?></td>
        <td><?php echo $csv[$narray-3][3] ?></td>
        <td><?php echo $csv[$narray-3][6] ?></td>
        <td><?php echo $csv[$narray-3][8] ?></td>
        <td><?php echo $csv[$narray-3][9] ?></td>
        <td><?php echo $csv[$narray-3][10] ?></td>
        <td><?php echo $csv[$narray-3][14] ?></td>
        <td><?php echo $csv[$narray-3][13] ?></td>
        <td><?php echo round($csv[$narray-3][8]/($csv[$narray-3][14]-$csv[$narray-4][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-4][0]) ?></td>
        <td><?php echo $csv[$narray-4][2] ?></td>
        <td><?php echo $csv[$narray-4][3] ?></td>
        <td><?php echo $csv[$narray-4][6] ?></td>
        <td><?php echo $csv[$narray-4][8] ?></td>
        <td><?php echo $csv[$narray-4][9] ?></td>
        <td><?php echo $csv[$narray-4][10] ?></td>
        <td><?php echo $csv[$narray-4][14] ?></td>
        <td><?php echo $csv[$narray-4][13] ?></td>
        <td><?php echo round($csv[$narray-4][8]/($csv[$narray-4][14]-$csv[$narray-5][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-5][0]) ?></td>
        <td><?php echo $csv[$narray-5][2] ?></td>
        <td><?php echo $csv[$narray-5][3] ?></td>
        <td><?php echo $csv[$narray-5][6] ?></td>
        <td><?php echo $csv[$narray-5][8] ?></td>
        <td><?php echo $csv[$narray-5][9] ?></td>
        <td><?php echo $csv[$narray-5][10] ?></td>
        <td><?php echo $csv[$narray-5][14] ?></td>
        <td><?php echo $csv[$narray-5][13] ?></td>
        <td><?php echo round($csv[$narray-5][8]/($csv[$narray-5][14]-$csv[$narray-6][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-6][0]) ?></td>
        <td><?php echo $csv[$narray-6][2] ?></td>
        <td><?php echo $csv[$narray-6][3] ?></td>
        <td><?php echo $csv[$narray-6][6] ?></td>
        <td><?php echo $csv[$narray-6][8] ?></td>
        <td><?php echo $csv[$narray-6][9] ?></td>
        <td><?php echo $csv[$narray-6][10] ?></td>
        <td><?php echo $csv[$narray-6][14] ?></td>
        <td><?php echo $csv[$narray-6][13] ?></td>
        <td><?php echo round($csv[$narray-6][8]/($csv[$narray-6][14]-$csv[$narray-7][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-7][0]) ?></td>
        <td><?php echo $csv[$narray-7][2] ?></td>
        <td><?php echo $csv[$narray-7][3] ?></td>
        <td><?php echo $csv[$narray-7][6] ?></td>
        <td><?php echo $csv[$narray-7][8] ?></td>
        <td><?php echo $csv[$narray-7][9] ?></td>
        <td><?php echo $csv[$narray-7][10] ?></td>
        <td><?php echo $csv[$narray-7][14] ?></td>
        <td><?php echo $csv[$narray-7][13] ?></td>
        <td><?php echo round($csv[$narray-7][8]/($csv[$narray-7][14]-$csv[$narray-8][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-8][0]) ?></td>
        <td><?php echo $csv[$narray-8][2] ?></td>
        <td><?php echo $csv[$narray-8][3] ?></td>
        <td><?php echo $csv[$narray-8][6] ?></td>
        <td><?php echo $csv[$narray-8][8] ?></td>
        <td><?php echo $csv[$narray-8][9] ?></td>
        <td><?php echo $csv[$narray-8][10] ?></td>
        <td><?php echo $csv[$narray-8][14] ?></td>
        <td><?php echo $csv[$narray-8][13] ?></td>
        <td><?php echo round($csv[$narray-8][8]/($csv[$narray-8][14]-$csv[$narray-9][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-9][0]) ?></td>
        <td><?php echo $csv[$narray-9][2] ?></td>
        <td><?php echo $csv[$narray-9][3] ?></td>
        <td><?php echo $csv[$narray-9][6] ?></td>
        <td><?php echo $csv[$narray-9][8] ?></td>
        <td><?php echo $csv[$narray-9][9] ?></td>
        <td><?php echo $csv[$narray-9][10] ?></td>
        <td><?php echo $csv[$narray-9][14] ?></td>
        <td><?php echo $csv[$narray-9][13] ?></td>
        <td><?php echo round($csv[$narray-9][8]/($csv[$narray-9][14]-$csv[$narray-10][14])*100,2)."%"; ?></td>
      </tr>

      <tr>
        <td><?php echo modifydate($csv[$narray-10][0]) ?></td>
        <td><?php echo $csv[$narray-10][2] ?></td>
        <td><?php echo $csv[$narray-10][3] ?></td>
        <td><?php echo $csv[$narray-10][6] ?></td>
        <td><?php echo $csv[$narray-10][8] ?></td>
        <td><?php echo $csv[$narray-10][9] ?></td>
        <td><?php echo $csv[$narray-10][10] ?></td>
        <td><?php echo $csv[$narray-10][14] ?></td>
        <td><?php echo $csv[$narray-10][13] ?></td>
        <td><?php echo round($csv[$narray-10][8]/($csv[$narray-10][14]-$csv[$narray-11][14])*100,2)."%"; ?></td>
      </tr>
      </tbody>
    </table>
    </center>

    <?php
      $data=[modifydate($csv[$narray-1][0]),modifydate($csv[$narray-2][0]),modifydate($csv[$narray-3][0]),modifydate($csv[$narray-4][0]),modifydate($csv[$narray-5][0]),modifydate($csv[$narray-6][0]),
        modifydate($csv[$narray-7][0]),modifydate($csv[$narray-8][0]),modifydate($csv[$narray-9][0]),modifydate($csv[$narray-10][0])];

      $casi=[stampa($csv[$narray-1][8]),stampa($csv[$narray-2][8]),stampa($csv[$narray-3][8]),stampa($csv[$narray-4][8]),stampa($csv[$narray-5][8]),stampa($csv[$narray-6][8]),
        stampa($csv[$narray-7][8]),stampa($csv[$narray-8][8]),stampa($csv[$narray-9][8]),stampa($csv[$narray-10][8])];
     ?>

  <div class="container">
    <canvas id="canvas" width="300" height="100"></canvas>
  </div>

    <script type="text/javascript">

    var canvas = document.getElementById("canvas").getContext('2d');
    var data = <?= json_encode($data)?>;
    var casi = <?= json_encode($casi)?>;

    Chart.defaults.global.defaultFontFamily = 'Open Sans';
    Chart.defaults.global.defaultFontColor = '#E2B842';

    var chart = new Chart(canvas,{
      type: 'bar',
      data:{
        labels: data,
        datasets:[{
          label:"Numero positivi",
          data: casi,
          backgroundColor: "#012B39",
          borderColor: "#E2B842",
          borderWidth: "2",
          hoverBorderWidth: "5",

        }]
      },
      options:{
        title:{
          display:true,
          text: "POSITIVI ULTIMI 10 GIORNI",
          fontSize: 35,
        }

      }
    });

    </script>


  </body>

</html>
