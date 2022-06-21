<?php
$mysqli = new mysqli ('localhost', 'huluser_hoafly', 'gPtfTbb2', 'huluser_hoafly');
$sql = "SELECT * FROM `light_readings`";
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
  $data .= '<td>'.$val['readings'].'</td>';
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
      <th>Показание</th>
    </tr>
    <tr>
        <?=$data?>
    </tr>
    </table>
  </body>
  </html>