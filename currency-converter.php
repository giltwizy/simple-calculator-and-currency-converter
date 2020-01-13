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
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            include_once("nav.php");
        ?>
        
        <form action="currency-converter.php" method="get" class="form">
            <b>Amount</b>
            <input type="number" name="amount" placeholder="Enter your amount"/>
            <b>From</b>
            <select name="from">
                <option>USD</option>
                <option>TSH</option>
                <option>KSH</option>
                <option>EURO</option>
            </select>
            <b>To</b>
            <select name="to">
                <option>USD</option>
                <option>TSH</option>
                <option>KSH</option>
                <option>EURO</option>
            </select>
            <input type="submit" name="convert" value="convert"/>
        </form>
        <hr>
        <?php
            if(isset($_GET['convert'])){
                $amount = $_GET['amount'];
                $from = $_GET['from'];
                $to = $_GET['to'];  
                
                if($from == "USD" and $to == "TSH"){
                    $rate = 2300;
                    echo $amount*$rate;
                }

                if($from == "TSH" and $to == "USD"){
                    $rate = 0.000434827;
                    echo $amount*$rate;
                }

                if($from == "USD" and $to == "KSH"){
                    $rate = 101.38;
                    echo $amount*$rate;
                }

                if($from == "KSH" and $to == "USD"){
                    $rate = 0.0099;
                    echo $amount*$rate;
                }
                
                
                
            }
            ?>
            
            
        <script src="./js/script.js" async defer></script>
    </body>
</html>