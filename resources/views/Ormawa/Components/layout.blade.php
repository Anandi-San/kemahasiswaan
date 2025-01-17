<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ormawa</title>
</head>

<body class="overflow-hidden">
    <div class="flex flex-col justify-between h-screen">
        <main class="overflow-hidden overflow-y-scroll">
            @yield('content')
        </main>
    <script>
        function adjustContentMargin() {
            const footerHeight = document.getElementById('myFooter').offsetHeight;
            const content = document.querySelector('main');
            content.style.marginBottom = footerHeight + 'px';
        }

        window.addEventListener('DOMContentLoaded', adjustContentMargin);
        window.addEventListener('resize', adjustContentMargin);
    </script>
</div>

    <aside id="sidebar"
        class="absolute group top-0 left-0 bg-white w-30 h-screen p-8 
        rounded-r-[32px] hover:w-72 border-r-2 hidden lg:flex flex-col overflow-y-auto">
        <div class="flex flex-col justify-center">
            <div class="flex flex-row items-center">
                <img src="{{ asset('images/logo_itk.png') }}" alt="Logo ITK" class="size-12 pr-2">
                <div class="text-start lg:hidden lg:group-hover:block">
                    <p class="font-bold text-base">SIM Layanan Kemahasiswaan</p>
                </div>
            </div>
            <hr class="my-6 border-t-2 border-blue-900">
            <div class="flex flex-col space-y-2">
                <a href="{{ route('ormawa') }}" class="flex items-center text-customBlack py-2 mt-2">
                    <div class="bg-customWhite rounded-full w-10">
                        <i class="fas fa-home mr-2 fa-2x"></i>
                    </div>
                    <div class="text-start lg:hidden lg:group-hover:block ml-2">
                        <p class="font-bold text-base">Beranda</p>
                    </div>
                </a>
                <a href="{{ route('legalitas') }}" class="flex items-center text-customBlack py-2 mt-2">
                    <div class="bg-customWhite rounded-full w-10">
                        <i class="fas fa-envelope-open-text fa-2x mr-2"></i>
                    </div>
                    <div class="text-start lg:hidden lg:group-hover:block ml-2">
                        <p class="font-bold text-base">Pengajuan Legalitas</p>
                    </div>
                </a>
                <a href="{{ route('index.proposalKegiatan') }}" class="flex items-center text-customBlack py-2 mt-2">
                    <div class="bg-customWhite rounded-full w-10">
                        <i class="fa-solid fa-file-lines fa-2x mr-2"></i>
                    </div>
                    <div class="text-start lg:hidden lg:group-hover:block ml-2 items">
                        <p class="font-bold text-base items">Proposal Kegiatan</p>
                    </div>
                </a>
                <a href="{{ route('LPJkegiatan.beranda') }}" class="flex items-center text-customBlack py-2 mt-2">
                    <div class="bg-customWhite rounded-full w-10">
                        <i class="fa-solid fa-file-circle-exclamation fa-2x mr-2"></i>
                    </div>
                    <div class="text-start lg:hidden lg:group-hover:block ml-2">
                        <p class="font-bold text-base">LPJ Kegiatan</p>
                    </div>
                </a>
                <a href="{{ route('Sklegalitas') }}" class="flex items-center text-customBlack py-2 mt-2">
                    <div class="bg-customWhite rounded-full w-10">
                        <i class="fa-solid fa-note-sticky fa-2x mr-2"></i>
                    </div>
                    <div class="text-start lg:hidden lg:group-hover:block ml-2">
                        <p class="font-bold text-base">SK Legalitas</p>
                    </div>
                </a>
                <a href="{{ route('index.Kegiatan') }}" class="flex items-center text-customBlack py-2 mt-2">
                    <div class="bg-customWhite rounded-full w-10">
                        <i class="fa-solid fa-tasks fa-2x mr-2"></i>
                    </div>
                    <div class="text-start lg:hidden lg:group-hover:block ml-2">
                        <p class="font-bold text-base">Update Kegiatan</p>
                    </div>
                </a>
                <a href="{{route ('ormawa.update')}}" class="flex items-center text-customBlack py-2 mt-2">
                    <div class="bg-customWhite rounded-full w-10">
                        <img src="{{ asset('images/logo_itk.png') }}" alt="User Icon" class="w-8 h-8 rounded-full mr-2">
                    </div>
                    <div class="text-start lg:hidden lg:group-hover:block ml-2">
                        <p class="font-bold text-base">User</p>
                    </div>
                </a>
            </div>
            <div class="mt-auto">
                <form id="logoutForm" action="{{ route('logout') }}" method="GET" class="absolute bottom-4">
                    {{-- @csrf --}}
                    <button type="submit" class="flex items-center text-customBlack px-1 py-2 mt-4" title="Logout">
                        <div class="bg-customWhite rounded-full w-10">
                            <i class="fas fa-sign-out-alt mr-2 fa-2x"></i>
                        </div>
                        <div class="text-start lg:hidden lg:group-hover:block ml-4">
                            <p class="font-bold text-base">Logout</p>
                        </div>
                    </button>
                </form>
            </div>
    </aside>
    <div id="sidebarToggle" class="lg:hidden absolute top-4 right-4 cursor-pointer">
        <i class="fas fa-bars fa-2x text-customBlack"></i>
    </div>

    
    <script>
        // JavaScript
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });

        
    </script>
</body>

</html>
