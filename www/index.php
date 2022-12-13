<?php ob_start();
require __DIR__ . '/vendor/autoload.php';

try
{
    $ipAddress_1='2a00:1450:4007:816::2004';
    $ipAddress_2='37.140.250.97';
    $ipAddress_3='2001:41d0:301::21';
    $ipAddress_4='216.58.201.228';
    $ipAddress_5='188.165.53.185';
    $ipAddress_6='10.10.201.12';

    echo '<pre>';
    $IP2CountryBackend = new iriven\GeoIP2CountryServer();
    // $IP2CountryBackend->updateDatabase();

    $IP2Country = new iriven\GeoIP2Country();
    echo $IP2Country->resolve($ipAddress_1).PHP_EOL;
    echo $IP2Country->resolve($ipAddress_2).PHP_EOL;
    echo $IP2Country->resolve($ipAddress_3).PHP_EOL;
    echo $IP2Country->resolve($ipAddress_4).PHP_EOL;
    echo $IP2Country->resolve($ipAddress_5).PHP_EOL;
    echo $IP2Country->resolve($ipAddress_6).PHP_EOL;

$net = new \iriven\bin\GeoipNetwork();
echo $net->getIPAddress();

} catch (\Throwable $th) {
    trigger_error($th->getMessage(), E_USER_ERROR);
}


// /**
//  * Ensures an IP address is both a valid IP address and does not fall within
//  * a private network range.
//  */
// function validate_ip($ip) {

//     if (strtolower($ip) === 'unknown')
//         return false;

//     // Generate IPv4 network address
//     $ip = ip2long($ip);

//     // If the IP address is set and not equivalent to 255.255.255.255
//     if ($ip !== false && $ip !== -1) {
//         // Make sure to get unsigned long representation of IP address
//         // due to discrepancies between 32 and 64 bit OSes and
//         // signed numbers (ints default to signed in PHP)
//         $ip = sprintf('%u', $ip);

//         // Do private network range checking
//         if ($ip >= 0 && $ip <= 50331647)
//             return false;
//         if ($ip >= 167772160 && $ip <= 184549375)
//             return false;
//         if ($ip >= 2130706432 && $ip <= 2147483647)
//             return false;
//         if ($ip >= 2851995648 && $ip <= 2852061183)
//             return false;
//         if ($ip >= 2886729728 && $ip <= 2887778303)
//             return false;
//         if ($ip >= 3221225984 && $ip <= 3221226239)
//             return false;
//         if ($ip >= 3232235520 && $ip <= 3232301055)
//             return false;
//         if ($ip >= 4294967040)
//             return false;
//     }
//     return true;
// }