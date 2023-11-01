
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyecto web</title>
	<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @vite('resources/css/app.css')
</head>
<body>

    <header>
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
    </header>

        <div class="container mx-auto">
            @yield('content')
        </div>
		
        <footer>
            soy footer
        </footer>
</body>
</html>