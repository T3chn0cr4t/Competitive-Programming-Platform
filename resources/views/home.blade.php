<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <main class="grow flex items-center justify-center mt-24 mb-8 lg:mt-0 lg:mb-4">
      <div class="flex justify-center flex-col h-full mx-6">
        <h1 class="text-center text-5xl font-bold text-gray-900">Welcome to HashBit Competition</h1>
        <div class="flex justify-center mt-24">
          <ul class="flex gap-2 flex-col lg:flex-row w-full lg:w-fit">
                  <li>
                    <div class="focus:outline-none focus:bg-yellow-200 p-8 lg:w-72 rounded-md border border-r-0 bg-white flex flex-col items-center">
                      <p class="font-semibold text-4xl">65</p>
                      <p class="uppercase text-gray-600 text-5xl">
                        days
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="focus:outline-none focus:bg-yellow-200 p-8 lg:w-72 rounded-md border border-r-0 bg-white flex flex-col items-center">
                      <p class="font-semibold text-4xl">08</p>
                      <p class="uppercase text-gray-600 text-5xl">
                        hours
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="focus:outline-none focus:bg-yellow-200 p-8 lg:w-72 rounded-md border border-r-0 bg-white flex flex-col items-center">
                      <p class="font-semibold text-4xl">13</p>
                      <p class="uppercase text-gray-600 text-5xl">
                        minutes
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="focus:outline-none focus:bg-yellow-200 p-8 lg:w-72 rounded-md border border-r-0 bg-white flex flex-col items-center">
                      <p class="font-semibold text-4xl">37</p>
                      <p class="uppercase text-gray-600 text-5xl">
                        seconds
                      </p>
                    </div>
                  </li>
                </ul>

        </div>
        <h2 class="text-center text-4xl font-semibold text-gray-400 mt-24">Meet our sponsors</h2>
        <div class="flex justify-center mt-12 dragscroll" style="overflow: hidden; margin-left: -1.5rem; margin-right: -1.5rem;">
            <div class="flex gap-16">   
                <img class="h-20 pl-6" alt="Google" src={{ asset('img/google.svg') }} />
                <img class="h-20" alt="Microsoft" src={{ asset('img/microsoft.svg') }} />
                <img class="h-20 pr-6" alt="Github" src={{ asset('img/github.svg') }} />
            </div>
        </div>
      </div>
</main>

    
</x-app-layout>
