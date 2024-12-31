<!doctype html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">
<div
    class="flex w-full max-w-sm mx-auto overflow-hidden bg-gray-800 rounded-lg shadow-2xl lg:max-w-4xl border border-gray-700">
    <!-- Left Image Section -->
    <div class="hidden bg-cover lg:block lg:w-1/2 dv-bg"
         style="
         background-image: url('https://cdn.pixabay.com/photo/2020/05/18/16/17/social-media-5187243_640.png');
         background-position:center;
         background-size:cover;
         background-repeat: no-repeat;"
         aria-hidden="true"></div>


    <!-- Form Section -->
    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
        <!-- Logo -->

        <!-- Welcome Message -->
        <p class="mt-3 text-2xl font-semibold text-center text-gray-100">Welcome !</p>

        <!-- Google Sign-in Button -->
        {{--        <a href="#"--}}
        {{--           class="flex items-center justify-center mt-6 text-gray-200 transition duration-300 transform border border-gray-700 rounded-lg hover:bg-gray-700 focus:ring focus:ring-blue-500">--}}
        {{--            <div class="px-4 py-2">--}}
        {{--                <svg class="w-6 h-6" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
        {{--                     aria-label="Google Icon">--}}
        {{--                    <path--}}
        {{--                        d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"--}}
        {{--                        fill="#FFC107"></path>--}}
        {{--                    <path--}}
        {{--                        d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"--}}
        {{--                        fill="#FF3D00"></path>--}}
        {{--                    <path--}}
        {{--                        d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"--}}
        {{--                        fill="#4CAF50"></path>--}}
        {{--                    <path--}}
        {{--                        d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"--}}
        {{--                        fill="#1976D2"></path>--}}
        {{--                </svg>--}}
        {{--            </div>--}}
        {{--            <span class="px-4 py-3 font-bold">Sign in with Google</span>--}}
        {{--        </a>--}}

        <!-- Separator -->
        <div class="flex items-center justify-between mt-6">
            <span class="w-1/5 border-b border-gray-600"></span>
            <p class="text-xs text-gray-400">login with email</p>
            <span class="w-1/5 border-b border-gray-600"></span>
        </div>

        <!-- Email Input -->
        <form action="">
            <div class="mt-4">
                <label for="LoggingEmailAddress" class="block mb-2 text-sm font-medium text-gray-200">Email
                    Address</label>
                <input id="LoggingEmailAddress" type="email"
                       class="block w-full px-4 py-2 text-gray-300 bg-gray-700 border border-gray-600 rounded-lg focus:ring focus:ring-blue-400 focus:border-blue-400 focus:outline-none"
                       placeholder="example@mail.com">
            </div>

            <!-- Password Input -->
            <div class="mt-4">
                <div class="flex justify-between">
                    <label for="loggingPassword" class="block mb-2 text-sm font-medium text-gray-200">Password</label>
                    <a href="#" class="text-xs text-gray-300 hover:underline">Forget Password?</a>
                </div>
                <input id="loggingPassword" type="password"
                       class="block w-full px-4 py-2 text-gray-300 bg-gray-700 border border-gray-600 rounded-lg focus:ring focus:ring-blue-400 focus:border-blue-400 focus:outline-none"
                       placeholder="••••••••">
            </div>

            <!-- Sign In Button -->
            <div class="mt-6">
                <button
                    class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Sign In
                </button>
            </div>
        </form>
        <!-- Sign Up Link -->
        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b border-gray-600"></span>
            <a href="/signup" class="text-xs text-gray-400 uppercase hover:underline">or sign up</a>
            <span class="w-1/5 border-b border-gray-600"></span>
        </div>
    </div>
</div>
</body>
</html>
