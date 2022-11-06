<div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" >
            @if (Route::has('login'))
            <div class="hidden fixed top-0 left-0 px-6 py-4 sm:block">
                <a href="{{ route('accueil') }}" class="ml-4 text-xl text-gray-700 dark:text-gray-500 ">Accueil</a>     
                <a href="{{ route('liste-logements') }}" class="text-xl text-gray-700 dark:text-gray-500 ">Nos Logements</a>
                <a href="{{ route('nouveau-logement') }}" class="text-xl text-gray-700 dark:text-gray-500 ">Créer Logement</a>
                
            </div>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Mon Compte</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Créer Compte</a>
                        @endif
                    @endauth                
                </div>
            @endif
</div>