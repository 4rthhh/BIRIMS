<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="assets/img/Ellipse.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ACCOUNT</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="h-screen max-h-screen w-full relative">
    <img src="{{asset('assets/svg/login-svg.svg')}}" class="absolute h-full z-0">
    <header class="h-[60px] w-full z-10 relative flex items-center pl-5 gap-2 fill-white text-white">
        <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
            <circle cx="15" cy="15" r="15"/>
        </svg> 
        <a href="{{url('/')}}" class="font-medium text-[20px]">BIRIMS</a>
    </header>
    <main class="flex-1 w-full relative z-30 pl-5 flex items-center justify-between pr-[270px]" style="height: calc(100vh - 140px);">
        <div>
            <h1 class="font-medium text-[37px] text-white w-[370px]">Get Started, <br>Create An Account</h1>
            <p class="text-white font-medium text-[15px] w-[350px]">Start your journey with us — it only takes a minute to create your account! </p>
        </div>
        <form class="w-[400px] h-fit flex flex-col gap-[30px]" method="POST" action="/signup">
    @csrf
    
    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <div id="page1">
                <div class="leading-10">
                    <h4 class="font-medium text-[18px] text-[var(--darkgray)]">Welcome to BIRIMS</h4>
                    <h6 class="text-[50px] font-medium" style="font-family: 'IBM Plex Serif, serif;'">Create Account</h6>
                </div>
                <div class="flex flex-col gap-[20px]">
                    <div>
                        <h1 class="font-semibold text-[14px]">Personal Information</h1>
                        <p class="text-red-600 text-[12px] font-semibold">* Indicates required field</p>
                    </div>
                    <div class="flex flex-col gap-[25px]">
                        <div class="flex flex-col gap-7">
                            <div class="w-full flex justify-between">
                                <span class="flex flex-col relative w-[190px]">                
                                    <label class="font-semibold text-[13px]">First Name<span class="text-red-600 font-medium"> *</span></label>
                                    <input type="text" name="first_name" placeholder="ex. Juan" class="peer text-[13px] w-full not-first-of-type:duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </span>
                                <span class="flex flex-col relative w-[190px]">                
                                    <label class="font-semibold text-[13px]">Last Name<span class="text-red-600 font-medium"> *</span></label>
                                    <input type="text" name="last_name" placeholder="ex. Dela Cruz" class="peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="w-full flex justify-between">
                                <span class="flex flex-col relative w-[190px]">                
                                    <label class="font-semibold text-[13px]">Middle Name <span class="text-[12px]">(Optional)</span></label>
                                    <input type="text" name="middle_name" placeholder="ex. Santos" class="peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </span>
                                <span class="flex flex-col relative w-[190px]">                
                                    <label class="font-semibold text-[13px]">Birthdate<span class="text-red-600 font-medium"> *</span></label>
                                    <input type="date" name="birthdate" id="birthdateInput" class="peer text-[13px] text-[var(--darkgray)] w-full duration-150 ease-out h-[40px] border-b  border-black focus:outline-none focus:border-b focus:border-[var(--orange)] cursor-pointer">
                                </span>
                            </div>
                            <div class="w-full flex justify-between">
                                <span class="flex flex-col relative w-[190px]">                
                                    <label class="font-semibold text-[13px]">Gender<span class="text-red-600 font-medium"> *</span></label>
                                    <div class="text-[var(--darkgray)] text-[14px]">                            
                                        <select name="gender" id="selectGender" class="border-b border-black h-[40px] w-full focus:outline-0 cursor-pointer ">
                                            <option disabled selected hidden class="text-[12px] text-[gray] ">Ex. Male</option>
                                            <option class="text-black text-[13px]" value="Male">Male</option>
                                            <option class="text-black text-[13px]" value="Female">Female</option>
                                            <option class="text-black text-[13px]" value="LGBTQA++">LGBTQA++</option>
                                            <option class="text-black text-[13px]" value="LGBTQA++">Prefer not to say</option>
                                        </select>
                                    </div>
                                </span>
                                <span class="flex flex-col relative w-[190px]">                
                                    <label class="font-semibold text-[13px]">Phone Number<span class="text-red-600 font-medium"> *</span></label>
                                    <input type="tel" name="phone_number" inputmode="numeric" id="phoneNumberInput" maxlength="11" pattern="[0-9]{11}"  placeholder="Ex. 09xxxxxxxxx" class="relative peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[13px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="flex gap-4 flex-col justify-between">
                            <button type="button" class="bg-[var(--orange)] w-full cursor-pointer border border-[var(--orange)] rounded-[4px] text-white text-[18px] text-center py-[8px] ease-out duration-150 hover:bg-white hover:text-[var(--orange)]" id="nextBtn">Next</button>
                            <a href="{{url('login')}}" class="bg-white block text-center w-full py-[8px] font-medium text-[var(--orange)] text-[18px] rounded-[4px] border border-[var(--orange)] duration-150 ease-out hover:bg-[var(--orange)] hover:text-white">Sign In</a>
                        </div>  
                    </div>
                </div>
            </div>
            <div id="page2" class="hidden">
                <div class="leading-10">
                <h4 class="font-medium text-[18px] text-[var(--darkgray)]">Welcome to BIRIMS</h4>
                <h6 class="text-[50px] font-medium" style="font-family: 'IBM Plex Serif, serif;'">Create Account</h6>
            </div>
            <div class="flex flex-col gap-[25px]">
                                <div>
                    <h1 class="font-semibold text-[14px]">Account Credential</h1>
                    <p class="text-red-600 text-[12px] font-semibold">* Indicates required field</p>
                </div>
                <span class="flex flex-col relative leading-3">                
                    <label class="font-semibold text-[13px]">Email<span class="text-red-600 font-medium"> *</span></label>
                        <input type="email" name="email" placeholder="example@chakraui" class="peer text-[13px] w-full duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] placeholder:text-[14px]">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute bottom-[11px] w-[20px] stroke-[var(--darkgray)] opacity-0 pointer-events-none peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </span>
                <span class="flex flex-col relative leading-3">
                    <div class="flex justify-between">
                        <label class="font-semibold text-[13px]">Password<span class="text-red-600 font-medium"> *</span></label>
                    </div>                
                    <input type="password" name="password" placeholder="Password" class="peer w-full text-[13px] duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] pr-[25px] placeholder:text-[14px]" id="passwordInput">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] absolute bottom-[15px] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0 stroke-[var(--darkgray)]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute right-0 bottom-[11px] stroke-black w-[20px] cursor-pointer select-none peer-placeholder-shown:hidden" id="showPasswordIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute right-0 bottom-[11px] stroke-black w-[20px] peer-placeholder-shown:hidden cursor-pointer select-none hidden" id="hidePasswordIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </span>
                <span class="flex flex-col relative leading-3">
                    <div class="flex justify-between">
                        <label class="font-semibold text-[13px]">Confirm Password<span class="text-red-600 font-medium"> *</span></label>
                    </div>                
                    <input type="password" name="password_confirmation" placeholder="Password" class="peer w-full text-[13px] duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] pr-[25px] placeholder:text-[14px]" id="confirmPasswordInput">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] absolute bottom-[15px] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0 stroke-[var(--darkgray)]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute right-0 bottom-[11px] stroke-black w-[20px] cursor-pointer select-none peer-placeholder-shown:hidden" id="showConfirmPasswordIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute right-0 bottom-[11px] stroke-black w-[20px] peer-placeholder-shown:hidden cursor-pointer select-none hidden" id="hideConfirmPasswordIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </span>
                <div class="flex gap-[8px]">
                    <input type="checkbox" name="terms" class="cursor-pointer accent-[var(--orange)]"><label class="text-[13px] font-semibold">I agree to the <a href="#" class="text-[var(--orange)] duration-150 ease-in hover:underline ">Terms and Conditions</a> and <a href="#" class="text-[var(--orange)] duration-150 ease-in hover:underline">Privacy Policy</a></label>
                </div>
                <div class="flex flex-col gap-4">
                    <button type="button" class="bg-[var(--orange)] w-full border border-[var(--orange)] rounded-[4px] text-white text-[18px] text-center py-[8px] ease-out duration-150 hover:bg-white hover:text-[var(--orange)] cursor-pointer" id="backBtn">Previous</button>
                    <button type="submit" class="bg-[var(--orange)] w-full border border-[var(--orange)] rounded-[4px] text-white text-[18px] text-center py-[8px] ease-out duration-150 hover:bg-white hover:text-[var(--orange)] cursor-pointer">Create Account</button>
                </div>  
            </div>
            </div>
        </form>
    </main>
    <footer class="w-full h-[80px] relative pl-5 flex gap-4 items-start">
        <a href="#">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-[25px]">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
        </a>
        <a href="https://www.facebook.com/brgysanbartolome2014" target="_blank">
            <svg fill="white" class="size-6" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd"/>
            </svg>
        </a>
        <a href="#">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-[25px]">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>

        </a>
    </footer>
</body>
</html>