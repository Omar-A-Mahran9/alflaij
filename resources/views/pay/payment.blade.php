<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Payment</title>

    <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.15.0/moyasar.css" />
    <script src="https://cdn.moyasar.com/mpf/1.15.0/moyasar.js"></script>
</head>
<body>

    <div class="mysr-form"></div>

    <script>
        Moyasar.init({
            element: '.mysr-form',
            amount: 1000, // 10 SAR (in halalas)
            currency: 'SAR',
            description: 'bassem payment',
            publishable_api_key: 'pk_test_BEUSsbAZsH5r8CajSvqta9gDwEM62tfn4YPweTQs',

            // Callback to your Laravel server
            callback_url: "https://admin.alflaig.webstdy.com/api/pay",

            methods: ['creditcard']
        });
    </script>
</body>
</html>
