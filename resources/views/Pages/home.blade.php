<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      width: 100%;
      height: 90px;
      padding: 16px 100px;
    }

    nav {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 24px;
    }

    a {
      text-decoration: none;
      color: black;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
    }

    a:last-child {
      background: #000;
      color: whitesmoke;
      padding: 9px 1rem;
      border-radius: 1rem;

      &:hover {
        background-color: #444;
      }
    }

    .container {
      height: 100%;
      width: 100%;
    }

    .container-fluid {
      width: 100%;
      height: calc(100vh - 90px);
      padding: 0 50px;
      display: flex;
      justify-content: center;
      align-items: center;

    }

    h1 {
      font-size: 3rem;
      margin-bottom: 100px;
    }
  </style>
</head>

<body>
  <div class="container">
    @include('components.navbar')
    <div class="container-fluid">
      <h1>Home Page</h1>
    </div>
  </div>
</body>

</html>