<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .success{
              height: 40px;
              width: auto;
              background: lightgreen;
              font-size: 25px;
              text-align: center;
              color: green;
            }
        </style>
    </head>
    @extends('layout')
    @section('content')
    @if($message = Session::get('status'))
      <div class="success">
          <p>{{ $message }}</p>
      </div>
  @endif 
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Welcome Laravel CRUD
                </div>
            </div>
        </div>
    </body>
    @endsection
</html>
