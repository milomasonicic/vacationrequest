<!doctype html>
<head>
    {{-- ... --}}
 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    
    <nav>
        <a href="">Zaposleni</a>
        <a href="">Odmor</a>
    </nav>

    {{$slot}}
</body>