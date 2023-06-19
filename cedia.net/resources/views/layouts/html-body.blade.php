<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
     @yield('content')  
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<style>
    @media (max-width: 600px){
        .carousel-fade::after{
            content: 'CEDIAMEDICAL' !important;
        }
    }
    @media (max-width: 800px){
        .info-container{
            display: block !important;
            align-content: center !important
        }
        .info-container>.w-25{
            width: 50% !important;
            margin: auto !important;
        }
        .info-container>.w-75{
            margin: auto !important;
            padding-left: 0px !important;
            padding-top: 10px !important;
            margin-top: 30px !important;
        }
    }
</style>
</html>