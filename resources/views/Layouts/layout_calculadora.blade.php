<html>
<head>
    <title>Desafio Unyleya - Calculadora de Festas</title>
    <link href="css/app.css" media="all" rel="stylesheet" type="text/css" />
    <style>
        html, body {
            background-color: #682a3c;
            color: #ffffff;
            margin: 10px;
        }

        .full-height {
            height: 50vh;
        }

        .flex-center {
            align-items: center;
            display: flex ;
            justify-content: center;
        }


        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .btn-uny{
            background: #f0a149 !important;
            border-radius: 4px;
            color: #FFFFFF;

        }
        .logo{
            padding-top: 15px;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="content">

    <div class="container">
        <div class="logo">
            <a href="{{route('index')}}"><img src="img/logo.png"></a>
        </div>

        @yield('content')
    </div>
</div>
</body>
</html>