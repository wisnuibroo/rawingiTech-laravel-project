<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <title>{{ $title }}</title>
</head>
<body class="h-full">

<div class="min-h-screen">


    <x-navbar></x-navbar>



    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        {{$slot}}
      </div>
    </main>
  </div>

</body>
</html>
