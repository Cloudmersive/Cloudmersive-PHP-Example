<?php require __DIR__ . '/vendor/autoload.php';

// Configure API key authorization: Apikey
$config = barcode-api-client-invoke\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'cbf5b0cd-ccdc-4554-a35a-a97fa7414834');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = barcode-api-client-invoke\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new barcode-api-client-invoke\Api\BarcodeLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value = "value_example"; // string | Barcode value

try {
    $result = $apiInstance->barcodeLookupEanLookup($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeLookupApi->barcodeLookupEanLookup: ', $e->getMessage(), PHP_EOL;
}

?>