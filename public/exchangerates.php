<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsplash</title>
    <style>

    </style>
</head>
<body>
<input id='val' type="text">
<button id="exchange">Exchange Currency</button>
<div id="result"></div>
</body>
<script>
    document.getElementById('exchange').addEventListener('click', function () {
    const asyncRequestObject = new XMLHttpRequest();
    asyncRequestObject.open('GET', 'http://api.exchangeratesapi.io/v1/latest?access_key=017c6a33be23bb38a519954cd49fcffa&base=EUR&symbols=USD');
    asyncRequestObject.onload = handleSuccess;
    asyncRequestObject.onerror = handleError;
    asyncRequestObject.send();

    function handleSuccess() {
        // console.log(this.responseText);
        const data = JSON.parse(this.responseText);
        console.log(data);

        let result = 'Dollar: ' + data.rates.USD;
        document.getElementById("result").innerHTML = result;
    }

    function handleError () {
        console.log('An error occurred!');
    }

        
    });

</script>
</html>