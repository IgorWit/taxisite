<!DOCTYPE html>
<html lang="ru">
<meta charset="utf-8">
<!-- All related table -->
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
		
 
			// Create connection
			$conn = new mysqli($host, $user, $passwd, $database);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			//set charset 
			//mysql_set_charset("utf8"); //without this happens errors with encoding

			// Change character set to utf8
			mysqli_set_charset($conn,"utf8");

			//string request
			//$sql = "SELECT * from userdb;";

            $sql = "SELECT * FROM (SELECT * FROM userdb ORDER BY id DESC LIMIT 100) sub   
ORDER BY id ASC; ";
			$result = $conn->query($sql);


            $sql_big = "SELECT * FROM (SELECT * FROM userdb ORDER BY id DESC LIMIT 5000) sub   
ORDER BY id ASC; ";
            $result_big = $conn->query($sql_big);


            $sql_by_date = "SELECT * FROM 'userdb' WHERE date >= '2017.07.20'; ";
            $result_by_date = $conn->query($sql_by_date);


			$conn->close();			
 
			?>

<br>
<!-- <table class="table table-striped tbl padding20px">
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

					// foreach($result as $outfield){
					// 	echo "<tr>";
					// 	foreach($outfield as $innerfield){
 
					// 		echo "<td> ".$innerfield." </td>"   ;
					// 	}
					// 	echo "</tr>";
					// }
 
					// ini_set('display_errors', 1);

				?>
			</tbody>
</table>
 --> 

<!-- <table id="tableload" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>ID</th>
				<th>Проэкт</th>
				<th>Имя</th>
				<th>Дата</th>
				<th>Время</th>
				<th>Адрес</th>
				<th>Район</th>
            </tr>
        </thead>

        <tbody>
				<?php

					// foreach($result as $outfield){
					// 	echo "<tr>";
					// 	foreach($outfield as $innerfield){
 
					// 		echo "<td> ".$innerfield." </td>"   ;
					// 	}
					// 	echo "</tr>";
					// }
 
					// ini_set('display_errors', 1);

				?>        	

        </tbody>
	</table> -->

<table id="tableloadfull" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Проэкт</th>
                <th>Имя</th>
                <th>Дата</th>
                <th>Время</th>
                <th>Адрес</th>
                <th>Район</th>
            </tr>
        </thead>

        <tbody>
                <?php

                    foreach($result_big as $outfield){
                        echo "<tr>";
                        foreach($outfield as $innerfield){
 
                            echo "<td> ".$innerfield." </td>"   ;
                        }
                        echo "</tr>";
                    }
                    ini_set('display_errors', 1);

                ?>          

        </tbody>
    </table>

<!-- By date test table  -->

<!--     <table id="tableload" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Проэкт</th>
                <th>Имя</th>
                <th>Дата</th>
                <th>Время</th>
                <th>Адрес</th>
                <th>Район</th>
            </tr>
        </thead>

        <tbody>
                <?php

                    // foreach($result_by_date as $outfield){
                    //  echo "<tr>";
                    //  foreach($outfield as $innerfield){
 
                    //      echo "<td> ".$innerfield." </td>"   ;
                    //  }
                    //  echo "</tr>";
                    // }
 
                    // ini_set('display_errors', 1);

                ?>          

        </tbody>
    </table>  

<br>
<br>
 -->



        <div class="container-fluid padding20px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a id="gotomainpage" name="singlebutton" class="btn btn-info btn-lg" href="../index.php">Перейти на главную!</a>
                    <a id="gotomainpage" name="singlebutton" class="btn btn-default btn-lg" href="../index.php">Детальный отчет!</a>
                </div>
            </div>
        </div>
 


 

 

 

</body>
</html>


 