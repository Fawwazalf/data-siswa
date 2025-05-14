<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashcode - HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/rt-plugins.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- START : Theme Config js-->
    <script src="assets/js/settings.js" sync></script>
    <!-- END : Theme Config js-->
</head>

<body class="font-inter skin-default">
    <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

    <div class="loginwrapper">
        <div class="lg-inner-column">

            <div class="left-column relative z-[1]">
                <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
                    <a href="index.html">
                        <img src="assets/images/logo/logo.svg" alt="" class="dark_logo mb-10">
                        <img src="assets/images/logo/logo-white.svg" alt="" class="white_logo mb-10">
                    </a>
                    <h4>
                        Unlock your Project
                        <span class="font-bold text-slate-800 dark:text-slate-400">
                            performance
                        </span>
                    </h4>
                </div>
                <div class="absolute bottom-[-130px] left-0 z-[-1] h-full w-full 2xl:bottom-[-160px]">
                    <img src="assets/images/auth/ils1.svg" alt="" class="h-full w-full object-contain">
                </div>
            </div>
            <div class="right-column relative">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="inner-content flex h-full flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box flex h-full flex-col justify-center">
                        <div class="mobile-logo mb-6 block text-center lg:hidden">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.svg" alt="" class="dark_logo mb-10">
                                <img src="assets/images/logo/logo-white.svg" alt="" class="white_logo mb-10">
                            </a>
                        </div>
                        <div class="mb-4 text-center 2xl:mb-10">
                            <h4 class="font-medium">Sign in</h4>
                            <div class="text-base text-slate-500">
                                Sign in to your account to start using Dashcode
                            </div>
                        </div>
                        <!-- BEGIN: Login Form -->
                        <form class="space-y-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="fromGroup">
                                <label class="form-label block capitalize">email</label>
                                <div class="relative">
                                    <input type="email" name="email" class="form-control py-2" placeholder="Email"
                                        value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="fromGroup">
                                <label class="form-label block capitalize">passwrod</label>
                                <div class="relative"><input type="password" name="password" class="form-control py-2"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <label class="flex cursor-pointer items-center">
                                    <input type="checkbox" class="hiddens">
                                    <span class="text-sm capitalize leading-6 text-slate-500 dark:text-slate-400">Keep
                                        me signed in</span>
                                </label>
                                <a class="text-sm font-medium leading-6 text-slate-800 dark:text-slate-400"
                                    href="forgot-password">Forgot
                                    Password?
                                </a>
                            </div>
                            <button type="submit" class="btn btn-dark block w-full text-center">Sign in</button>
                        </form>
                        <!-- END: Login Form -->
                        <div class="relative border-b border-b-[#9AA2AF] border-opacity-[16%] pt-6">
                            <div
                                class="absolute left-1/2 top-1/2 inline-block min-w-max -translate-x-1/2 transform bg-white px-4 text-sm font-normal text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                Or continue with
                            </div>
                        </div>
                        <div class="mx-auto mt-8 w-full max-w-[242px]">

                            <!-- BEGIN: Social Log in Area -->
                            <ul class="flex">
                                <li class="flex-1">
                                    <a href="#"
                                        class="inline-flex h-10 w-10 flex-col items-center justify-center rounded-full bg-[#1C9CEB] text-2xl text-white">
                                        <img src="assets/images/icon/tw.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href="#"
                                        class="inline-flex h-10 w-10 flex-col items-center justify-center rounded-full bg-[#395599] text-2xl text-white">
                                        <img src="assets/images/icon/fb.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href={{ route('login.provider', ['provider' => 'github']) }}
                                        class="inline-flex h-10 w-10 flex-col items-center justify-center rounded-full bg-white text-2xl text-white">
                                        <img src="assets/images/icon/github.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href={{ route('login.provider', ['provider' => 'google']) }}
                                        class="inline-flex h-10 w-10 flex-col items-center justify-center rounded-full bg-[#EA4335] text-2xl text-white">
                                        <img src="assets/images/icon/gp.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <!-- END: Social Log In Area -->
                        </div>
                        <div
                            class="mx-auto mt-12 text-sm font-normal uppercase text-slate-500 md:max-w-[345px] dark:text-slate-400">
                            Don’t have an account?
                            <a href="register" class="font-medium text-slate-900 hover:underline dark:text-white">
                                Sign up
                            </a>
                        </div>
                    </div>
                    <div class="auth-footer text-center">
                        Copyright 2021, Dashcode All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/rt-plugins.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
