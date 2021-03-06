<!DOCTYPE html>
<html lang="en">

<head>
    <title>Results</title>
    <link rel="stylesheet" href="include/css/results.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include 'include/page-elements/header.php'; ?>

    <div class="body">
        <h2>Deine Ergebnisse:</h2>
    </div>


</html>

<?php
if (isset($_GET['price'])) {
    $price = $_GET['price'];
    echo "<div class='results'> <h2 class='result'> Du bist $price € wert.  </h2></div>";

    $priceC = calcCamels($price);
    echo "<div class='results'> <h2 class='result'> Du bist $priceC Kamele wert. </h2></div>";

    $priceK = calcKartoffeln($price);
    echo "<div class='results'> <h2 class='result'> Du bist $priceK Kartoffelsäcke wert. </h2></div>";

    $priceB = calcBitcoin($price);
    echo "<div class='results'> <h2 class='result'> Du bist $priceB Bitcoin wert. </h2></div>";
}

function calcCamels(float $price)
{
    return round($price / 3200);
}

function calcKartoffeln(float $price)
{
    return round($price / 11.2);
}

function calcBitcoin(float $price)
{
    return round(($price / bitcoinPrice()) * 1000) / 1000;
}

function bitcoinPrice()
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 2,       // stop after 10 redirects
        CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
    );

    $ch      = curl_init("https://api.coingate.com/v2/rates/merchant/BTC/USD"); // You can change this to other crypto trade currency rate provider
    curl_setopt_array($ch, $options);
    $content = curl_exec($ch); // Gets the page's content
    $err     = curl_errno($ch); // Gets the CURL error number if there is error
    $errmsg  = curl_error($ch); // Gets the CURL error text if there is error
    curl_close($ch);


    return $content;
}
?>

</body>