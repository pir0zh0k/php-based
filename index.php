<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
       

    //    $params = [
    //     'limit' => 1,
    //     'select' => 'title,price'
    //    ];

    $newProduct = [
        'title' => "Gaming Keyboard",
        "description" => "Best gaming keyboard",
        "price" => 129.99,
        "brand" => "Samsung",
        "category" => "electronics",
        "stock" => 50
    ];

    $jsonProduct = json_encode($newProduct);

    $url = "https://dummyjson.com/products/add";

    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $jsonProduct,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json'
        ],
        CURLOPT_TIMEOUT => 10
    ]);

    $response = curl_exec($ch);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if(curl_errno($ch)) {
        echo "Ошибка запроса: " . curl_error($ch);
    }


    curl_close($ch);

    

    if($httpCode === 200 || $httpCode === 201) {

        $result = json_decode($response, true);

        echo "<h3>Результат:</h3>";

        echo "<p>Товар успешно добавлен</p>";

        echo "<h2>ID: " . $result['id'] . " </h2>";

        echo "<h2>Title: " . $result['title'] . "</h2>";

    } else {
        echo "<h3>Ошибка добавления товара</h3>";
        echo "HTTP код: " . $httpCode;
    }

    //    $fullUrl = $url . '?' . http_build_query($params);

    //    curl_setopt($ch, CURLOPT_URL, $fullUrl);
    //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    //     curl_setopt($ch, CURLOPT_USERAGENT, "PHP-API/1.0");

    //     $response = curl_exec($ch);

    //     if(curl_errno($ch)) {
    //         echo "Ошибка подключения " . curl_error($ch);
    //     } else {
    //         $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    //         if($httpCode === 200) {
    //             $data = json_decode($response, true);

    //             echo "<h3>Список товаров: " . $data['limit'] . " из " . $data['total'] . "</h3>";

    //             foreach($data['products'] as $product) {
    //                 echo "<h1>" . $product['title'] . "</h1>";
    //                 echo "<h2> " . $product['price'] . "</h2>";
    //             }

    //             var_dump($data);

    //         } else {
    //             echo "Ошибка API. HTTP Код: ". $httpCode;
    //         }
    //     }
       
       
    ?>
</body>
</html>