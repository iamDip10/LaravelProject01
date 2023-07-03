<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | UIUmeta-mesh</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<style>
    .land {
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.80), rgba(0, 0, 0, 0.70)), url("images/2.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .land .wave {
        margin-top: 35vh;

    }
    .glass{
        /* background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px); */
        border-radius: 50px;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.43);
    }
    .login{
        border-radius: 0px 0 0vh 70vh/40vh
    }
</style>
<body class="font-kre text-xl flex flex-col justify-center items-center overflow-hidden">
    <div class="land relative w-full flex flex-row items-center pr-20" style="height:100vh">

        <div class="w-2/3 h-full flex flex-col">

            <div class="w-full h-fit flex justify-between pt-5">
                <div id="logo" class="w-1/2 px-20">
                    <img class="w-38 h-20 object-fit" src="{{ asset ('images/logo.png') }}" alt="">
                    
                </div>
                
            </div>
            <div class="w-full h-full flex px-20 flex-row overflow-hidden">
                <div class="w-full h-full flex text-white flex-col mt-20">
                    <div class="font-audio text-6xl text-[#F49300] font-bold">
                        <h1>U I U</h1>
                    </div>
                    <div class="font-rye text-3xl w-fit">
                        <h1>M E T A <span class="bg-[#F49300] ">M E S H</span></h1>
                    </div>
                    <div class="mt-10 h-full w-2/3 flex flex-col">
                        <p class="font-road font-black">
    
                            Welcome to UIU Metamesh, the dynamic social media project for the University of Imaginary University (UIU) community. Join us and unlock your full potential while fostering meaningful connections and collaborations. Our platform serves as a hub for students, faculty, and staff to share ideas, showcase projects, and explore diverse interests. Discover vibrant communities, engage in thought-provoking discussions, and stay updated on the latest news and events within UIU. Join UIU Metamesh today and be part of a thriving digital ecosystem where innovation, collaboration, and community thrive.
                        </p>
                        <div class="mt-4 h-3 w-1/2 rounded-xl bg-[#F49300]"></div>
                    </div>
                </div>
                <!-- <div class="w-1/2 h-full flex flex-col mt-20">
                    <div class="w-full h-full flex flex-col items-center">
                        <div class="glass w-3/5 h-4/5">
    
                        </div>
                    </div>
                </div> -->
    
            </div>
        </div>
        <div class="w-1/3 h-4/5 bg-gradient-to-br from-[#ee8f26] to-[#caa100] rounded-3xl flex flex-col justify-center items-center">
            <div class="w-2/3 h-3/4 flex flex-col items-center justify-center">
                <div class="w-full h-1/4 flex flex-col">
                    <h1 class="font-bruno font-black text-3xl text-white w-fit p-1 bg-black">Welcome Back!</h1>
                    <p class="text-white text-md">Login to explore your metaverse</p>
                </div>
                <div class="w-full h-full flex flex-col">
                    <form class="flex flex-col" action="" method="POST">
                        <label class="text-md text-white" for="name">Email or Student ID</label>
                        <input class="bg-gray-50 text-gray-900 text-sm rounded-lg w-3/4 p-2.5 mb-5" type="text" name="email" id="name" placeholder="absc@bsabc.uiu.ac.bd">
                        <label class="text-md text-white" for="pass">Password</label>
                        <input class="bg-gray-50 text-gray-900 text-sm rounded-lg w-3/4 p-2.5" type="password" name="pass" id="pass" placeholder="***********">
                        <a href="" class="text-sm mt-1 text-red-100 underline font-bold">Forget Password?</a>
                        <input class="cursor-pointer w-3/4 p-2 mt-4 bg-[#B56E00] rounded-xl shadow-xl text-white" type="submit" name="sub" id="" value="Login">
                    </form>
                    <div class="w-full flex flex-col mt-10">
                        <p class="text-white mb-1">Don't have an account?</p>
                        <a class="w-3/4 p-2 bg-[#B56E00] text-center rounded-xl shadow-xl text-white" href="{{ route('signup') }}">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
    
</body>
</html>