

    <div class=" mx-auto w-full">
   
        <form method="GET" action="{{ route('nouvelle-reservation') }}">
            @csrf
              <button class="font-bold border-none text-[#7E201F] text-2xl rounded-lg bg-[#EA7869] p-6 w-full btn btn-secondary btn-sm" type="submit">Reservez votre séjour</button>
         </form>
    </div>

