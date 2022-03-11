<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsplash</title>
    <style>
        img {
            height: 250px;
            width: auto;
        }
    </style>
</head>
<body>
    <input type="text" id="search" placeholder="Search Photos...">
    <button id="btn">Search</button>
    <div id="result"></div>
</body>
<script>
    document.getElementById("btn").addEventListener("click", SearchPhotos)

    function SearchPhotos() {
        let clientId = "prda5-9CxhoWpsLVCmYbrplVAyTS8obToUpnuGcge4U";
        let query = document.getElementById("search").value;
        let url = "https://api.unsplash.com/search/photos/?client_id=" + clientId + "&query=" + query;

        console.log(url);

    fetch(url)
        .then(function(data) {
            return data.json();
        })
        .then(function(data) {
            
            document.getElementById("result").innerHTML = "";

            data.results.forEach(photo => {  
                
                let result = `
                <img src="${photo.urls.regular}">
                `;

                document.getElementById("result").innerHTML += result;
            })
        })
    } 
</script>
</html>

<!-- onclick="SearchPhotos() -->