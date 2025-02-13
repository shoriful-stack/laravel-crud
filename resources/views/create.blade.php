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
    <h1 class="text-red-500">Create</h1>
    <a href="/" class="bg-green-500 rounded-md px-3 py-1 text-white text-sm">Back</a>
    </div>

    <div>
        <form action="" class="form">
            <div class="flex flex-col">
            <input type="text" name="name" id="">
            <input type="text" name="description" id="">
            <input type="file" name="image" id="">
            <input type="submit" id="">
            </div>
        </form>
    </div>
</body>
</html>