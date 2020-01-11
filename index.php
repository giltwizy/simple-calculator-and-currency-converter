<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simple calculator in PHP</title>
        <meta name="description" content="Simple calculator">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <form action="index.php" method="get">
            <b>Number 1</b>
            <input type="text" name="value1" placeholder="First Number"/>
            <b>Number 2</b>
            <input type="text" name="value2" placeholder="Second Number"/>
            <select name="operator">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
            <input type="submit" name="calculate" value="calculate"/>
        </form>
        <hr>
        <?php
            if(isset($_GET['calculate'])){
                $value1 = $_GET['value1'];
                $value2 = $_GET['value2'];
                $operator = $_GET['operator'];          
                
                
                switch($operator){
                    case '+':
                        echo "<h3 id='result'>Result:";
                        echo $value1 + $value2;
                        echo "</h3>";
                    break;
                    case '-':
                        echo "<h3 id='result'>Result:";
                        echo $value1 - $value2;
                        echo "</h3>";
                    break;
                    case '*':
                        echo "<h3 id='result'>Result:";
                        echo $value1 * $value2;
                        echo "</h3>";
                    break;
                    case '/':
                        echo "<h3 id='result'>Result:";
                        echo $value1 / $value2;
                        echo "</h3>";
                    break;
                    default:
                    
                }
            }
            ?>
            
            
        <script src="./js/script.js" async defer></script>
    </body>
</html>