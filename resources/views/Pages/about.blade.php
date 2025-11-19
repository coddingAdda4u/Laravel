<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1, initial-scale=1.0">
  <title>About us</title>
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
  @include('components.navbar')
  <div class="container-fluid">
    <h1>About Page</h1>
  </div>
</body>

</html>