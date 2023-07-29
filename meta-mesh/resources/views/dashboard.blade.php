<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIU-matamesh</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app/js')
</head>
<body>
    <div class="w-screen h-screen overflow-hidden flex">
        <div class="w-1/4 h-full flex flex-col p-4 px-10 items-center">
            <div class="w-full h-fit flex items-center">
                <img class="w-1/5 h-3/4" src="{{ asset('images/logo.png') }}" alt="">
                <form action="" method="post" class="h-full flex items-center">
                    <input type="text" placeholder="Search" class="h-4/6 rounded-3xl ml-7 px-9 bg-gray-100">
                </form>
            </div>
            <div class="w-full h-1/2 mt-3 flex flex-col bg-gradient-to-b from-[#F69F19] to-[#F9E9AE] rounded-xl">
                <div class="w-full h-1/3 flex items-center ml-7 mt-5">
                    <img src="" alt="" class="w-36 h-36 rounded-full bg-black object-fit">
                    <div class="w-1/2 ml-3 h-full flex flex-col justify-center">
                        
                        <h3 class="text-2xl font-bold">{{ $users->fisrtname." " .$users->lastname }}</h3>
                        <p class="text-xl">{{ $users->department }}</p>
                    </div>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/4 bg-[#ffd4bf] h-full">
            
        </div>
        <div class="w-1/4 bg-[#f9f871] h-full">

        </div>

    </div>
</body>
</html>