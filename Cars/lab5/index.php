<?require_once 'engine/page/title.php';?>
<?require_once 'engine/connection/connectionStart.php';?>
<?require_once 'engine/class/table.php';?>
<html>
    <body>
		<?
            echo("<div>");
            echo("<div><h1><i> <a href='/lab5/info.php?Index="."cars"."'> Показать таблицу машину</a> </i></h1> </div>");
            echo("<div><h1><i> <a href='/lab5/info.php?Index="."seller"."'> Показать таблицу автосалонов</a> </i></h1> </div>");
            echo("<div><h1><i> <a href='/lab5/info.php?Index="."stock"."'> Показать таблицу автомобили в наличии</a> </i></h1> </div>");
            echo("</div>");
            
            echo("<div>");
            echo("<div><h1><i> <a href='/lab5/gen_pdf.php'> Показать pdf </a> </i></h1> </div>");
            echo("<div><h1><i> <a href='/lab5/gen_xls.php'> Показать xls </a> </i></h1> </div>");
            echo("</div>");

            echo("<div>");
            echo("<div><h1><i> <a href='/lab5/new.php?Index="."cars"."'> Добавить новую машину</a> </i></h1> </div>");
            echo("<div><h1><i> <a href='/lab5/new.php?Index="."seller"."'> Добавить новый автосалон</a> </i></h1> </div>");
            echo("<div><h1><i> <a href='/lab5/new.php?Index="."stock"."'> Добавить новый автомобиль в салон</a> </i></h1> </div>");
            echo("</div>");
            echo("<div>");
            echo("<div> <a href='https://yadi.sk/i/KCkhwrY0V9ipzQ'> Загрузить отчет </a> </div>");
            echo("</div>");
		?>
	</body>
</html>
<?require_once 'engine/connection/connectionEnd.php';?>