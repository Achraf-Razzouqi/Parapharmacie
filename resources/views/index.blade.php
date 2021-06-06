<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
         
        </style>
    </head>
    <body>
    <form action="{{ route('paniers.create') }}" method="post">
        @csrf
        <input type="text" name="login" required><br>
        <input type="text" name="password" required><br>
        <input type="submit" ><br>
        <table border="1px black solid">
            <th>Id</th>
            <th>login</th>
            <th>Password</th>
            <tr><td>f</td>
            <td>f</td>
            <td>d</td></tr>
            

        </table>

    </form>
    </body>
</html>
