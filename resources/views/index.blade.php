<!DOCTYPE html>
<html lang="en">
    <head>
        <title>get user locaton</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    </head>
    <body>
        <p>user location in laravel</p><br>
        <a href="{{ route('userlocation_javascript') }}">javascript location</a>
        <h1>{{ $data->city }}</h1>
        <br>
        <h1>{{ $data->country }}</h1>
        <br>
        <h1>{{ $data->countryCode }}</h1>
        <br>
        <br>
        <h1>{{ $data->region }}</h1>
        <br>
        <br>
        <h1>{{ $data->regionName }}</h1>
        <br>
        <br>
        <h1>{{ $data->lat }}</h1>
        <br>
        <h1>{{ $data->lon }}</h1>
        <br>
        <h1>{{ $data->timezone }}</h1>
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
    //console.log('ContinetName:',geoplugin_continentName())

   // var $rn=('rc:',geoplugin_countryName())


    //document.getElementById('c').innerHTML=$country;
    //document.getElementById('rname').innerHTML=$rn;


</script>

    </body>
</html>
