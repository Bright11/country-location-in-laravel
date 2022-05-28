<!DOCTYPE html>
<html lang="en">
    <head>
        <title>get user locaton</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    </head>
    <body>
        <p>user location in javascript</p><br>
        <a href="{{ route('index') }}">Home</a>
        <h1 id="p"></h1>
        <br>
        <h1 id="c"></h1>
        <br>
        <h1 id="cc"></h1>
        <br>
        <h1 id="s"></h1>
        <br>
        <h1 id="sc"></h1>
        <br>
        <br>
        <h1 id="city"></h1>
        <br>
        <h1 id="s"></h1>
        <br>
        <h1 id="s"></h1>
        <br>
        <h1 id="s"></h1>
        <br>
        <h1 id="s"></h1>
        <br>



<script>
    console.log("IP: ",geoplugin_request())
    console.log('Country:',geoplugin_countryName())
    console.log('Country Code:',geoplugin_countryCode())
    console.log('State:',geoplugin_regionName())
    console.log('State Code:',geoplugin_regionCode())
    console.log('City:',geoplugin_city())
    console.log('Continet Code:',geoplugin_continentCode())
    console.log('Timezone:',geoplugin_timezone())
    console.log('Currency Code:',geoplugin_currencyCode())
    console.log('Currency Symbol:',geoplugin_currencySymbol_UTF8())
    console.log('Longitude:',geoplugin_longitude())
    console.log('Latitude:',geoplugin_latitude())
    console.log('1 USD=',geoplugin_currencyConverter(100, false))

    //passing them into html
   var $p=("IP: ",geoplugin_request())
    var $c=('Country:',geoplugin_countryName())
    var $cc=('Country Code:',geoplugin_countryCode())
    var $s=('State:',geoplugin_regionName())
    var $sc=('State Code:',geoplugin_regionCode())
    var $city=('City:',geoplugin_city())
    var $conti=('Continet Code:',geoplugin_continentCode())
    var $t=('Timezone:',geoplugin_timezone())
    var $curr=('Currency Code:',geoplugin_currencyCode())
    var $symbol=('Currency Symbol:',geoplugin_currencySymbol_UTF8())
    var $lt=('Longitude:',geoplugin_longitude())
    var $la=('Latitude:',geoplugin_latitude())
    var $exch=('1 USD=',geoplugin_currencyConverter(100, false))

    var $rn=('rc:',geoplugin_countryName())


    document.getElementById('p').innerHTML=$p;
    document.getElementById('c').innerHTML=$c;
    document.getElementById('cc').innerHTML=$cc;
    document.getElementById('s').innerHTML=$s;
    document.getElementById('sc').innerHTML=$cc;
    document.getElementById('city').innerHTML=$city;


</script>

    </body>
</html>
