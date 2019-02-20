<!DOCTYPE html>
<html lang="ru">
<meta charset="utf-8">
<?php
//require("../header.php");
require_once ('headercontroller.php');
// echo getcwd();
?>

<body>
<!-- <h1 class="center">На развозку агентов</h1>
 -->
<?php
//take Credentias all data
require("../Model/Credentials.php");
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
		
			if(!$link = mysql_connect($host,$user,$passwd)){
				echo "<br> Can't connect with server to DB";
				exit();
			}
			//choosing db
			if(!mysql_select_db($database, $link))
			{
				echo "<br> Can't choose DB<br>";
				exit();
			}
			//set charset 
			mysql_set_charset("utf8");

			//string request
			$str_sql_query = "SELECT * from userdb;
		";
			//execution request
			if(!$result = mysql_query($str_sql_query, $link)){
				echo "<br> Can't execute request <br>";
				exit();
			}
			
			// $array_request = array();
		$mascontent = array();
		$outercount = 0;
			while ($mas = mysql_fetch_row($result)){
				 // echo "<tr>";
				 $innercount = 0;
				foreach ($mas as $field) {

					// if($mas.length)
					// echo "<td> ".$field." </td>"   ;

					//this part responsible for md5 encoding
					// if($innercount==0){
					// 	$mascontent[$outercount][$innercount]=md5("$field"."itmegabox");	
					// }
					// else{
						$mascontent[$outercount][$innercount]=$field;	
					// }
					$innercount++; //increment
				}
				// echo "</tr>";
				
				$outercount++;
			}
			//close connection with server DB
			mysql_close($link);
			?>

<br><br>
<table class="table table-striped tbl padding20px">
  			<thead>
				<th>ID</th>
				<th>Проэкт</th>
				<th>Имя</th>
				<th>Дата</th>
				<th>Время</th>
				<th>Адрес</th>
				<th>Район</th>
			</thead>
			<tbody>
				<?php
					foreach($mascontent as $outfield){
						echo "<tr>";
						foreach($outfield as $innerfield){
							// if(){

							// }
							echo "<td> ".$innerfield." </td>"   ;
						}
						echo "</tr>";
					}
					// $str="15";
					// echo md5("$str"."string");				
					// echo "<br><br><br><br> Content of array";
					// print_r($mascontent);
					ini_set('display_errors', 1);

				?>
			</tbody>
</table>
 





        <div class="container-fluid padding20px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a id="gotomainpage" name="singlebutton" class="btn btn-info btn-lg" href="../index.php">Перейти на главную!</a>
                </div>
            </div>
        </div>
 


 

 


</body>
</html>


 