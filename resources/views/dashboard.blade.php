<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="grow flex">
    <div class="bg-grey py-12 pb-12 w-full">
            <div class="max-w-7xl mx-auto">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <h5 class="ml-2 mr-2 mt-2 mb-2 opacity-75 text-sm">Problem Solving</h5>
                    <h1 class=" ml-2 mr-2 mb-2 text-2xl font-bold">Problem Solving 1</h1>
                    <!-- Progress Bar -->
                    <div class="bg-gray-200 rounded-full m-2">
                        <div class="bg-purple text-xs font-medium text-center p-0.5 leading-none rounded-l-full w-full"> 0%</div>
                    </div>
                    <h5 class="ml-2 mr-2 mt-2 mb-2 opacity-75 text-sm">75% Get to 30 points to unlock this badge</h5>
                    <br>
                </div>
            </div>
            <br>
            <div class="max-w-7xl mx-auto">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <h5 class="ml-2 mr-2 mt-2 mb-2 opacity-75 text-sm">Problem Solving</h5>
                    <h1 class=" ml-2 mr-2 mb-2 text-2xl font-bold">Problem Solving 2</h1>
                    <!-- Progress Bar -->
                    <div class="bg-gray-200 rounded-full m-2">
                        <div class="bg-purple-600 text-xs font-medium text-purple-100 text-center p-0.5 leading-none rounded-l-full w-1/4"> 25%</div>
                    </div>
                    <h5 class="ml-2 mr-2 mt-2 mb-2 opacity-75 text-sm">3% Get to 30 points to unlock this badge</h5>
                    <br>
                </div>
            </div>
            <br>
            <div class="max-w-7xl mx-auto">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <h5 class="ml-2 mr-2 mt-2 mb-2 opacity-75 text-sm">Problem Solving</h5>
                    <h1 class=" ml-2 mr-2 mb-2 text-2xl font-bold">Problem Solving 3</h1>
                    <!-- Progress Bar -->
                    <div class="bg-gray-200 rounded-full m-2">
                        <div class="bg-purple-600 text-xs font-medium text-purple-100 text-center p-0.5 leading-none rounded-l-full w-1/4"> 25%</div>
                    </div>
                    <h5 class="ml-2 mr-2 mt-2 mb-2 opacity-75 text-sm">3% Get to 30 points to unlock this badge</h5>
                    <br>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
