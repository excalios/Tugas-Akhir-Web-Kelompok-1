<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <x-home-styles/>

  </head>
  <body>

    <x-home-navbar/>

      <main>
        {{ $slot }}
      <main/>

    <x-home-footer/>

    <x-home-scripts/>
  </body>
</html>
