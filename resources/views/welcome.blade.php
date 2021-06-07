<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">    </head>
    <body>
        <div class="grid grid-cols-4 gap-4">
            <div>
                <figure class="flex bg-blue-100 text-center">
                    <div class="pt-6 p-8 mt-1">
                        <h1 class="text-lg font-semibold text-center">
                          Fila
                        </h1>
                    </div>
                </figure>
            </div>
            <div class="col-span-3"><figure class="flex bg-blue-100 text-center">
                <div class="pt-6 p-8 mt-1">
                    <h1 class="text-lg font-semibold text-center">
                      Mensagem
                    </h1>
                </div>
            </figure></div>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <div>
                <figure class="flex bg-gray-100 rounded-xl p-3">
                    <img class="w-16 h-16 rounded-full mt-2" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
                    <div class="pt-6 p-8 mt-1 space-y-4">
                      <blockquote>
                        <p class="text-lg font-semibold">
                          Anderson Freitas
                        </p>
                      </blockquote>
                    </div>
                </figure>
            </div>
            <div class="col-span-3"></div>
        </div>
    </body>
</html>
