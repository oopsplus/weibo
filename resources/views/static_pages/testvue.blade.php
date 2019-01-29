<!DOCTYPE html>
<html>
<head>
  <title>Weibo App</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <h1>Test Vue in Blade</h1>
  <div id="app">
    <example-component></example-component>
  </div>
</body>
</html>
