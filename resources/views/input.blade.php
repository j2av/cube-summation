<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Input</title>
    </head>
    <body>
      <h1>Cube Summation</h1>
      <form action="analyze" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Input:
        <br>
        <textarea name="input" style="width: 100%; height: 250px">
2
4 5
UPDATE 2 2 2 4
QUERY 1 1 1 3 3 3
UPDATE 1 1 1 23
QUERY 2 2 2 4 4 4
QUERY 1 1 1 3 3 3
2 4
UPDATE 2 2 2 1
QUERY 1 1 1 1 1 1
QUERY 1 1 1 2 2 2
QUERY 2 2 2 2 2 2
        </textarea>
        <br>
        <input type="submit" value="Analyze" style="float: right">
      </form>
    </body>
</html>
