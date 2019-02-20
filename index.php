<?

?>
<!DOCTYPE html>
<html lang="en">

<?php
require("header.php");

?>
<body>

<form action="Controller/dbwritepage.php" method="post">
    
    <div>

    <div id="div-bckgimg">
        <img id="bckgimg" src='img/new-york-black-and-white-skyline.jpg' alt='[]'>
    </div>
        <div class="container-fluid padding20px">
            <div class="row">
                <div class="col-sm-2">
                    <div class="dvbox">
                        <div class="dvboxhead">Проект</div>
                        <div class="dvboxbottom">
                            <select class="form-control" name="project">
                                <option>Fareportal</option>
                                <option>Ив Роше</option>
                                <option>МАУ</option>
                                <option>Flyuia</option>
                                <option>Другое</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="dvbox">
                        <div class="dvboxhead">ФИО</div>
                        <div class="dvboxbottom">
                            <input class="heightwidth100 borderdrop" type="text" name="name" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="dvbox">
                        <div class="dvboxhead">Время</div>
                        <div class="dvboxbottom">
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input id="timepicker1" type="text" class="form-control input-small padding5px" name="time" required>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                            <script type="text/javascript">
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="dvbox">
                        <div class="dvboxhead">Дата</div>
                        <div class="dvboxbottom">
                            
                    <input data-theme="custom-style-calendar" data-max-year="2040" class="heightwidth100 borderdrop" id="choosedatedrop" type="text" data-lang="en" data-format="Y.m.d"/ name="date"  required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="dvbox">
                        <div class="dvboxhead">Адрес</div>
                        <div class="dvboxbottom">
<!--                        <select class="form-control">
                                <option>адресс 1</option>
                                <option>адресс 2</option>
                                <option>адресс 3</option>
                                <option>адресс 4</option>
                            </select> -->
                                <input class="heightwidth100 borderdrop" type="text" name="address" required>
                         </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="dvbox">
                        <div class="dvboxhead">Район</div>
                        <div class="dvboxbottom">
<!--                        <select class="form-control">
                                <option>район 1</option>
                                <option>район 2</option>
                                <option>район 3</option>
                                <option>район 4</option>
                            </select> -->
                                 <input class="heightwidth100 borderdrop" type="text" name="area" required>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid padding20px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <button id="singlebutton" name="singlebutton" class="btn btn-success btn-lg" type="submit">Подтвердить!</button>
<!--                     <a id="singlebutton" name="singlebutton" class="btn btn-info btn-lg" href="Controller/departinfo.php">Информация о развозке!</a>
 -->                    <a id="singlebutton" name="singlebutton" class="btn btn-info btn-lg" href="Controller/getfromtablemysqlibyparam.php">Информация о развозке!</a>
                </div>
            </div>
        </div>

 
        <img src="img/bus.png" alt="image_bus" id="BusImg">
</form>

</body>

</html>
