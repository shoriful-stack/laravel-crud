<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
    <style type="text/tailwindcss">
        @layer utilities{
            .container{
                @apply px-32 mx-auto;
            }
        }
    </style>
</head>
<body>
    <div class="container flex justify-between items-center">
    <h1 class="text-red-500">Home</h1>
    <a href="/create" class="bg-green-500 rounded-md px-3 py-2 text-white text-sm">Add New</a>
    </div>
</body>
</html>