<?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken("TEST-301347693178463-080201-36096b27f5fbd5e5a1761da9863d3590-127347054");

$fp = fopen('error.log', 'w');
fwrite($fp,"Webhook");
fwrite($fp, $_POST["type"]);
fclose($fp);

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
        break;
    case "plan":
        $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
        break;
    case "subscription":
        $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
        break;
    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
        break;
}

 ?>
