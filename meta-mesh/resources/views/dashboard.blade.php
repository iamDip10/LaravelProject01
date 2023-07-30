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
    <div class="w-screen h-screen overflow-hidden flex flex-col">
        <div class="w-full h-24 flex items-center ">
            <div class="w-1/4 h-full flex items-center pl-9">
                <img src="{{ asset('images/logo.png')}}" alt="" class="h-15 w-20">
                <form action="" class="w-full h-full flex items-center">
                    <input type="text" name="" id="" placeholder="Search" class="ml-4 bg-[#F0F0F0] w-3/4 rounded-3xl h-12 p-7">
                </form>
            </div>
            <div class="w-2/4 h-full flex px-40">
                <div class="w-1/4 h-full flex flex-col items-center justify-center hover:text-orange-500 hover:font-bold">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
                    </svg>
                    <h3>Home</h3>
                </div>
                <div class="w-1/4 h-full flex flex-col items-center justify-center hover:text-orange-500 hover:font-bold">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                    </svg>
                    <h3>Messages</h3>
                </div>
                <div class="w-1/4 h-full flex flex-col items-center justify-center hover:text-orange-500 hover:font-bold">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5 8C5.80777 8 5.13108 7.79473 4.55551 7.41015C3.97993 7.02556 3.53133 6.47893 3.26642 5.83939C3.00152 5.19985 2.9322 4.49612 3.06725 3.81719C3.2023 3.13825 3.53564 2.51461 4.02513 2.02513C4.51461 1.53564 5.13825 1.2023 5.81719 1.06725C6.49612 0.932205 7.19985 1.00152 7.83939 1.26642C8.47893 1.53133 9.02556 1.97993 9.41015 2.55551C9.79473 3.13108 10 3.80777 10 4.5" stroke="currentColor" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.5 17H1V15C1 13.9391 1.42143 12.9217 2.17157 12.1716C2.92172 11.4214 3.93913 11 5 11" stroke="currentColor" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.5 11H18.38C18.2672 10.5081 18.0714 10.0391 17.801 9.613L18.601 8.818C18.6947 8.72424 18.7474 8.59708 18.7474 8.4645C18.7474 8.33192 18.6947 8.20476 18.601 8.111L17.894 7.404C17.8002 7.31026 17.6731 7.25761 17.5405 7.25761C17.4079 7.25761 17.2808 7.31026 17.187 7.404L16.392 8.204C15.9647 7.93136 15.4939 7.73384 15 7.62V6.5C15 6.36739 14.9473 6.24021 14.8536 6.14645C14.7598 6.05268 14.6326 6 14.5 6H13.5C13.3674 6 13.2402 6.05268 13.1464 6.14645C13.0527 6.24021 13 6.36739 13 6.5V7.62C12.5081 7.73283 12.0391 7.92863 11.613 8.199L10.818 7.404C10.7242 7.31026 10.5971 7.25761 10.4645 7.25761C10.3319 7.25761 10.2048 7.31026 10.111 7.404L9.404 8.111C9.31026 8.20476 9.25761 8.33192 9.25761 8.4645C9.25761 8.59708 9.31026 8.72424 9.404 8.818L10.204 9.618C9.9324 10.0422 9.73492 10.5096 9.62 11H8.5C8.36739 11 8.24021 11.0527 8.14645 11.1464C8.05268 11.2402 8 11.3674 8 11.5V12.5C8 12.6326 8.05268 12.7598 8.14645 12.8536C8.24021 12.9473 8.36739 13 8.5 13H9.62C9.73283 13.4919 9.92863 13.9609 10.199 14.387L9.404 15.182C9.31026 15.2758 9.25761 15.4029 9.25761 15.5355C9.25761 15.6681 9.31026 15.7952 9.404 15.889L10.111 16.596C10.2048 16.6897 10.3319 16.7424 10.4645 16.7424C10.5971 16.7424 10.7242 16.6897 10.818 16.596L11.618 15.796C12.0422 16.0676 12.5096 16.2651 13 16.38V17.5C13 17.6326 13.0527 17.7598 13.1464 17.8536C13.2402 17.9473 13.3674 18 13.5 18H14.5C14.6326 18 14.7598 17.9473 14.8536 17.8536C14.9473 17.7598 15 17.6326 15 17.5V16.38C15.4919 16.2672 15.9609 16.0714 16.387 15.801L17.182 16.601C17.2758 16.6947 17.4029 16.7474 17.5355 16.7474C17.6681 16.7474 17.7952 16.6947 17.889 16.601L18.596 15.894C18.6897 15.8002 18.7424 15.6731 18.7424 15.5405C18.7424 15.4079 18.6897 15.2808 18.596 15.187L17.796 14.392C18.0686 13.9647 18.2662 13.4939 18.38 13H19.5C19.6326 13 19.7598 12.9473 19.8536 12.8536C19.9473 12.7598 20 12.6326 20 12.5V11.5C20 11.3674 19.9473 11.2402 19.8536 11.1464C19.7598 11.0527 19.6326 11 19.5 11ZM14 14.5C13.5055 14.5 13.0222 14.3534 12.6111 14.0787C12.2 13.804 11.8795 13.4135 11.6903 12.9567C11.5011 12.4999 11.4516 11.9972 11.548 11.5123C11.6445 11.0273 11.8826 10.5819 12.2322 10.2322C12.5819 9.8826 13.0273 9.6445 13.5123 9.54804C13.9972 9.45157 14.4999 9.50108 14.9567 9.6903C15.4135 9.87952 15.804 10.2 16.0787 10.6111C16.3534 11.0222 16.5 11.5055 16.5 12C16.5 12.663 16.2366 13.2989 15.7678 13.7678C15.2989 14.2366 14.663 14.5 14 14.5Z" fill="currentColor"/>
                        </svg>
    
                    <h3>Settings</h3>
                </div>
                <div class="w-1/4 h-full flex flex-col items-center justify-center hover:text-orange-500 hover:font-bold">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" d="M3.656 12.115a3 3 0 0 1 5.682-.015M13 5h3m-3 3h3m-3 3h3M2 1h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm6.5 4.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                    </svg>
                    <h3>Club</h3>
                </div>
            </div>
            <div class="w-1/4 h-full flex justify-end items-center px-12">
                <img src="" alt="" class="w-12 h-12 mr-4 rounded-full bg-black">
                <div class="h-full flex flex-col justify-center items-center">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                    </svg>
                    <h3>Logout</h3>
                </div>
            </div>

        </div>
        <div class="w-full h-full overflow-hidden flex ">

            <div class="w-1/4 h-full flex flex-col mt-3 px-9 items-center">
                <div class="w-full h-1/3 bg-gradient-to-b from-[#EEB81F] to-[#FFFFFF] flex flex-col rounded-2xl">
                    <div class="w-full h-28 flex px-10 mt-5">
                        <img src="" alt="" class="h-24 w-24 rounded-full bg-black">
                        <div class="w-1/2 ml-2 h-24 flex flex-col justify-center font-bold text-gray-700">
                            <h3>{{$users->fisrtname." ".$users->lastname}}</h3>
                            <h3>{{$users->department}}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col w-full h-full mt-4 px-10">
                        <div class="w-1/2 h-fit flex text-xl text-gray-700">
                            <h3 class="font-bold">Email:</h3>
                            <h3 class="ml-1">{{$email}}</h3>
                        </div>
                        <div class="w-full h-fit flex text-xl text-gray-700">
                            <h3 class="font-bold">Batch:</h3>
                            <h3 class="ml-1">{{$users->batch}}</h3>
                        </div>
                        <div class="w-full h-fit flex text-xl text-gray-700">
                            <h3 class="font-bold">Batch:</h3>
                            <h3 class="ml-1">{{$users->batch}}</h3>
                        </div>
                    </div>
                </div>
                <!-- end of profile overview -->

                <!-- start of notification -->
                <div class="w-full h-1/2 bg-gray-100 mt-8 flex flex-col rounded-2xl">
                    <h3 class="w-1/2 h-fit text-xl px-8 mt-6 font-bold text-gray-500">Notification</h3>
                    <div class="w-5/6 mt-4 ml-8 h-20 bg-gray-300 rounded-xl flex px-6">
                        <svg class="w-10 h-30 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 21">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" d="M10 3.464V1.1m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C17 15.4 17 16 16.462 16H3.538C3 16 3 15.4 3 14.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 10 3.464ZM4 3 3 2M2 7H1m15-4 1-1m1 5h1M6.54 16a3.48 3.48 0 0 0 6.92 0H6.54Z"/>
                        </svg>
                        <div class="w-full h-full flex items-center ml-5">
                            <h3>Lorem ipsum dolor sit amet consectetur</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-2/4 bg-gray-100 flex flex-col mt-3 px-14 h-full items-center rounded-2xl">
                <div class="w-full h-24 bg-gray-200 mt-4 rounded-2xl flex items-center justify-center">
                    <img src="" alt="" class="h-20 w-20 rounded-full bg-black">
                    <button class="w-3/4 ml-3 h-14 pl-8 text-gray-300 bg-white flex items-center rounded-2xl">Share your thoughts</button>
                </div>
                <div class="w-full h-5/6 mt-5 px-5 rounded-2xl bg-gray-200 pb-2 overflow-y-auto">

                <!-- createpost -->
                    <div class="w-full h-fit flex flex-col rounded-2xl bg-[#DCD8CD] px-8 mt-6 mb-5">
                        <div class="w-full h-20 flex items-center">
                            <img src="" alt="" class="w-14 h-14 rounded-full bg-black">
                            <div class="w-2/3 h-fit flex flex-col">
                                <h3 class="ml-4 text-xl font-bold">{{$users->fisrtname." ".$users->lastname}}</h3>
                                <h3 class="ml-4">{{$email}}</h3>
                            </div>
                        </div>
                        <div class="w-full h-fit mt-3 mb-6">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem veritatis vero adipisci dicta voluptate libero reprehenderit harum voluptatum numquam facere. Ad, et expedita modi amet ex aut. Minima rem numquam aliquid aliquam debitis. Minus a et tenetur doloribus autem, quas repellendus soluta dicta ullam voluptas! Deserunt ducimus quaerat quam vel atque reprehenderit. Dolore reprehenderit velit similique voluptas doloremque iure quasi.</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="w-1/4 bg-[#f9f871] mt-3 rounded-2xl h-full">
    
            </div>
        </div>

    </div>
</body>
</html>