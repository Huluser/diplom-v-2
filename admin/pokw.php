<?php
$mysqli = new mysqli ('localhost', 'huluser_hoafly', 'gPtfTbb2', 'huluser_hoafly');
$sql = "SELECT * FROM `water_readings`";
if (!$run = $mysqli->query($sql))
$result = array();
if ($run && mysqli_num_rows($run) !=0)
{
  while ($rs = $run->fetch_assoc())
   {
    $result[] = $rs;
   }
}

foreach($result as $key=>$val)
{
  $data .= '<tr>';
  $data .= '<td>'.$val['id'].'</td>';
  $data .= '<td>'.$val['hot_water'].'</td>';
  $data .= '<td>'.$val['cold_water'].'</td>';
  $data .= '<td>'.$val['hot_water2'].'</td>';
  $data .= '<td>'.$val['cold_water2'].'</td>';
  $data .= '<td>'.$val['hot_water3'].'</td>';
  $data .= '<td>'.$val['cold_water3'].'</td>';
  $data .= '<td>'.$val['hot_water4'].'</td>';
  $data .= '<td>'.$val['cold_water4'].'</td>';
  $data .= '</tr>';
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Приложение</title>


<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">.
table-pg{width:auto}</style>
    
    
</head>

 

<body>
<nav class="navbar navbar-default">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">ТСЖ "Полет"</a>
</div>


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">

<li><a href="pokw.php">Показания воды</a></li>
<li><a href="pokl.php">Показания света</a></li>
<li><a href="../index.php">На Сайт</a></li>
<li><a href="../function/logout.php">Выйти</a></li>


        
</ul>
</div>
</div>
</nav>
</header>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
  </head>
  <body>

    <table>
    <tr>
        <th>Номер лицевого счета</th>
        <th>Первый счетчик горячей воды</th>
        <th>Первый счетчик холодной воды</th>
        <th>Второй счетчик горячей воды</th>
        <th>Второй счетчик холодной воды</th>
        <th>Третий счетчик горячей воды</th>
        <th>Третий счетчик холодной воды</th>
        <th>Четвертый счетчик горячей воды</th>
        <th>Четвертый счетчик холодной воды</th>
    </tr>
    <tr>
        <?=$data?>
    </tr>
    </table>
  </body>
  </html>






