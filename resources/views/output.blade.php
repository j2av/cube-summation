<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Output</title>
    </head>
    <body>
      <h1>Cube Summation</h1>
      <a href="input">Back</a>
      <h2>Output:</h2>
      @foreach ($results as $result)
          <p>{{ $result }}</p>
      @endforeach
</html>
