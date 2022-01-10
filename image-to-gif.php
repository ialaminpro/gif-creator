<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', '257a4221-643a-4e33-9941-c16298e92a1d');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/home/bbil/Pictures/Screenshot from 2021-11-17 10-16-27.png"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->convertToGif($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->convertToGif: ', $e->getMessage(), PHP_EOL;
}
?>