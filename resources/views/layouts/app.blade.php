<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ settings()->school_name }}</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/images/icon.jpg') }}" type="image/x-icon">

    <style>
        body {
            font-family: 'Hind Siliguri', 'sans-serif';
        }


        .bg-brand-green {
            background-color: #10b981;
            /* background-color: #d83a5c; */
        }

        .text-brand-green {
            color: #10b981;
            /* color: #10b981; */
        }

        .border-brand-green {
            border-color: #10b981;
            /* border-color: #10b981; */
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 min-h-screen">

     <div id="preloader"
        class="fixed inset-0 bg-white z-[9999] flex items-center justify-center transition-all duration-500">
        <div class="flex flex-col items-center space-y-3">
            <div class="w-12 h-12 border-4 border-brand-green border-t-transparent rounded-full animate-spin"></div>
            <p class="text-brand-green font-semibold text-lg tracking-wide">লোড হচ্ছে...</p>
        </div>
    </div>
    <!-- Top Bar -->
    @include('includes.topbar')

    <!-- Header & Navigation -->
    @include('includes.navbar')

    <main>
        @yield('section')
    </main>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

    <script>
        window.addEventListener("load", function () {
            const preloader = document.getElementById("preloader");
            preloader.style.opacity = "0";
            preloader.style.pointerEvents = "none";

            setTimeout(() => {
                preloader.style.display = "None";
            }, 500);
        });
    </script>
    @stack('scripts')
</body>

</html>
