<?php


// Array of service instances
$serviceInstances = [
 'http://localhost:3001',
 'http://localhost:3002',
 'http://localhost:3003'
];

// Select a service instance randomly
$selectedInstance = $serviceInstances[array_rand($serviceInstances)];

// Create a proxy URL with the selected service instance
$proxyUrl = $selectedInstance.$_SERVER['REQUEST_URI'];

// Set up cURL to make the proxy request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $proxyUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the proxy request
$response = curl_exec($ch);
curl_close($ch);

// Output the response from the service instance
echo $response;





?>