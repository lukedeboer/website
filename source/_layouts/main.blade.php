<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap');
          </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>hello</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @yield('head')
    </head>
    <body class="text-gray-900 font-sans antialiased">
      
       
        @yield('body')

        
    </body>
</html>
