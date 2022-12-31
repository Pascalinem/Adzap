<div class="inset-x-0 border-b-3 border-[#EA7869] top-0 h-30 bg-[#ae76a6] dark:bg-gray-700 " >
            
            <div class="hidden px-6 py-10 sm:block">
                <a href="{{ route('accueil') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Accueil</a>     
                <a href="{{ route('liste-logements') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Nos Logements</a>
                @if (Auth::user())
                    @if(Auth::user()->role_id==0)
                    <a href="{{ route('nouveau-logement') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Créer Logement</a>
                    <a href="{{  route('liste-utilisateurs') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Liste Utilisateurs</a>
                    <a href="{{  route('liste-reservations') }}" class="ml-2 font-bold text-xl text-[#6D257D] dark:text-gray-500 ">Liste Reservations</a>
                    @endif
                @endif
            </div>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a href="{{ route('adzap_et_la_ville') }}" class="ml-2 text-sm text-gray-700 dark:text-gray-500 underline">à propos</a>
                    <a href="{{ route('contactez-nous') }}" class="ml-2 text-sm text-gray-700 dark:text-gray-500 underline">Contact</a>
                    @auth
                        
                        <a href="{{ url('/dashboard') }}" class="ml-2 text-sm text-gray-700 dark:text-gray-500 underline">Mon Compte</a>
                        <div class="inline-block nav-link text-sm hover:underline" id="nav-bar-logoutbutton">                       
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="ml-2 btn btn-secondary btn-sm" type="submit">Logout</button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm ml-2 text-gray-700 dark:text-gray-500 underline">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2 text-sm text-gray-700 dark:text-gray-500 underline">Créer Compte</a>
                        @endif
                    @endauth                
                </div>
                
</div>