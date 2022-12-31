<nav class="inset-x-0 border-b-3 border-[#EA7869] top-0 h-30 bg-[#ae76a6]">
    <div x-data="{showMenu : false}" class="container max-w-screen-lg mx-auto flex justify-between h-14">
        <!-- Brand-->
    
        <!-- Navbar Toggle Button -->
        <button @click="showMenu = !showMenu" class="block md:hidden text-[#6D257D] p-2 rounded hover:border focus:border focus:bg-gray-400 my-2 mr-5" type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        <!-- Nav Links-->
        <ul class="md:flex text-gray-700 text-base mr-3 origin-top"
            :class="{ 'block absolute top-14 border-b bg-white w-full p-2': showMenu, 'hidden': !showMenu}"
            id="navbar-main" x-cloak>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ route('accueil') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 " >Accueil</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ route('liste-logements') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Nos Logements</a>
            </li>
            @if (Auth::user())
            @if(Auth::user()->role_id==0)
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ route('nouveau-logement') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Créer Logement</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{  route('liste-utilisateurs') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Liste Utilisateurs</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{  route('liste-reservations') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Liste Reservations</a>
            </li>
            @endif
                @endif

        

            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ route('adzap_et_la_ville') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 underline">A propos</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ route('contactez-nous') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 underline">Contact</a>
            </li>
            @auth
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ url('/dashboard') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 underline">Mon Compte</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ route('login') }}" class="ml-2 text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <div class="inline-block nav-link text-sm hover:underline" id="nav-bar-logoutbutton">                       
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="ml-2 btn btn-secondary btn-sm" type="submit">Logout</button>
                    </form>
                </div>
            </li>
            @else
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="{{ route('login') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500">Connexion</a>
            </li>
            @if (Route::has('register'))
                <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                    <a href="{{ route('register') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500">Créer Compte</a>
                </li>
            @endif
            @endauth


        </ul>

    </div>
</nav>