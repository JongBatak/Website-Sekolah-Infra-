<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Prestasi Prima</title>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans text-slate-800 bg-white">

  {{-- Header --}}
  @include('partials.header')

  {{-- Content --}}
  <main>
    @yield('content')
  </main>

  {{-- Motto sebelum footer --}}
  @include('partials.motto')

  {{-- Footer --}}
  @include('partials.footer')


  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
</body>
</html>
