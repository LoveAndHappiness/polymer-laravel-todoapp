<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="token" value="{{csrf_token()}}">
        <title>Polymer Laravel Todoapp</title>
        
        <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
        <link rel="import" href="elements/elements.html">
        <style>
            body {
                font-family: 'Roboto', 'Noto', sans-serif;
                -webkit-font-smoothing: antialiased;
                background: #fafafa;
                display: flex;
                justify-content: center;
                margin-top: 40px;
            }
        </style>

        @yield('head')
    </head>
    <body>
        
        @yield('content')

    </body>
</html>