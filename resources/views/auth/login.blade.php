<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.svg') }}" />

    <!-- Stylesheets -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-b from-green-50 to-white">

    <!-- Login Section -->
    <section id="login" class="flex flex-col justify-center items-center flex-grow py-12 lg:py-5">
        <!-- Form Container -->
        <div
            class="w-full max-w-md sm:max-w-xl lg:max-w-3xl bg-white shadow-xl flex flex-col items-center justify-center p-6 sm:p-8 md:p-10 rounded-3xl border-t-4 border-[#00A59F] transition-all duration-300 mx-6 sm:mx-8 lg:mx-auto">
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <img src="{{ asset('img/logo.svg') }}" alt="Serikat Pekerja BSI" class="h-16 sm:h-20 lg:h-24">
            </div>
            <!-- Heading -->
            <div class="text-center mb-6">
                <p class="text-base sm:text-lg font-medium text-gray-600">Selamat Datang di</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#00A59F]">KTA Digital BSI</h2>
            </div>
            <!-- Form -->
            <form class="w-full space-y-6 sm:space-y-8">
                <!-- Username and Password Fields -->
                <div class="flex flex-col gap-6">
                    <!-- Username Field -->
                    <div class="w-full">
                        <label for="username" class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
                        <input type="text" id="username" name="username" required
                            class="w-full px-4 sm:px-6 py-3 sm:py-4 border border-gray-300 rounded-lg focus:ring-[#00A59F] focus:border-[#00A59F] placeholder-gray-400 shadow-md transition-all duration-300"
                            placeholder="Masukkan username Anda">
                    </div>
                    <!-- Password Field -->
                    <div class="w-full">
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 sm:px-6 py-3 sm:py-4 border border-gray-300 rounded-lg focus:ring-[#00A59F] focus:border-[#00A59F] placeholder-gray-400 shadow-md transition-all duration-300"
                            placeholder="Masukkan password Anda">
                    </div>
                </div>
                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-[#00A59F] to-[#007B74] text-white font-semibold py-3 sm:py-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        Masuk
                    </button>
                </div>
                <!-- Links -->
                <div class="text-center text-sm text-gray-600 mt-6 sm:mt-8 space-y-3">
                    <p>Belum punya akun? <a href="#" class="text-[#00A59F] font-medium hover:underline">Daftar
                            sekarang</a></p>
                    <p><a href="#" class="text-[#00A59F] font-medium hover:underline">Lupa password?</a></p>
                </div>
            </form>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
