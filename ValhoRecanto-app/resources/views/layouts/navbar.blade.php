<nav class="bg-white shadow-md p-4 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">    
        <div class="text-2xl font-extrabold text-blue-700 tracking-tight">
            <a href="#">ValhoRecanto</a>
        </div>
        <div class="space-x-6 text-gray-600 text-sm">
            <a href="#" class="hover:text-blue-600 transition">Quem Somos</a>
            <a href="#" class="hover:text-blue-600 transition">Como Ajudar</a>
        </div>
        <div class="space-x-4">
            @guest
                <a href="{{ route('register') }}" class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full hover:bg-blue-200 transition">
                    seja um voluntário
                </a>
                <a href="{{ route('login') }}" class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100 transition">
                    login
                </a>
            @endguest
            @auth
                <a href="{{ route('dashboard') }}" class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100 transition">
                    meu perfil
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100 transition">
                        sair
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>