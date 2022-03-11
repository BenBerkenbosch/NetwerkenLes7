<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Weather</title>
    <script src="../../jquery-3.5.1.min.js"></script> <!-- LOCAL -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- CDN -->
    <script src="../../jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnGetWeather').on('click', function() {
                let getCity = $('#txtCity').val();
                console.log(getCity);
                let weatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=${getCity}&appid=1cea9393c468606084834bba9af9f3e0&units=metric`;
                $.ajax({
                    url: weatherUrl,
                    success: function (weather) {
                        console.log(weather);
                        let html = '<strong>'+ weather.name;
                            html += ' (' + weather.sys.country + ')</strong>'
                            html += ', temperatuur: ' + weather.main.temp + ' graden.<br />';
                        $('#divResult').append(html);   
                    }
                })
            });
        });
    </script>
</head>
<body>
<h2>Wat voor een weer is het in...</h2>
<input type="text" id="txtCity" placeholder="Plaatsnaam">
<button id="btnGetWeather">Wat voor weer is het?</button>
<div id="divResult"></div>
</body>
</html>