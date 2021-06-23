<x-app-layout>
    <x-slot name="header">
    <div class="flex">
            <a href="{{ route('dashboard') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </a>
        </div>
    </x-slot>

    <div class="">
        <div class="container mx-auto py-2 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 md:gap-4 grid-cols-1 gap-2">
                @if (session('status'))
                <div x-data="{ show: true }" x-show="show" class="flex w-full mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 col-span-2 sticky top-20 z-10">
                    <div class="flex items-center justify-center w-14 bg-green-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                        </svg>
                    </div>
                    <div class="px-4 py-2 -mx-3 w-full">
                        <div class="mx-3">
                            <span class="font-semibold text-green-500 dark:text-green-400"
                            >Success</span
                            >
                            <p class="text-sm text-gray-600 dark:text-gray-200">
                            {{ session('status') }}
                            </p>
                        </div>
                    </div>
                    <button type="button" @click="show = false" class="font-bold mx-4 text-gray-700 outline-none">
                        <span class="text-2xl">&times;</span>
                    </button>
                </div>
                @endif
                <div class="overflow-hidden rounded-lg h-90 w-full p-8 col-span-5">
                    <a href="{{url('/dashboard/create')}}">
                        <div class="overflow-hidden rounded-lg h-90 w-full py-5">
                            <div>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    <div class="flex text-md text-gray-600">
                                        <p class="pl-1">Create New Event</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @foreach($events as $event)
                <div class="overflow-hidden shadow-lg hover:shadow-xl rounded-2xl h-90 max-h-90 w-full md:w-80 cursor-pointer transform hover:-translate-y-2 transform hover:scale-105 mx-auto">
                    <a href="/dashboard/detail/{{$event->id}}" class="w-full block h-full p-5 bg-white">
                        <img alt="blog photo" src="/assets/img/about-img.svg" class="h-40 w-80 object-cover"/>
                        <div class="bg-white dark:bg-gray-800 w-full p-4">
                            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                                {{$event->title}}
                            </p>
                            <div class="font-light text-md flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                </svg>
                                <p class="text-gray-600 ml-2">{{$event->category}}</p>
                            </div>
                            <div class="font-light text-md flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-600 ml-2">{{$event->time}} | {{$event->date}}</p>
                            </div>
                            <div class="font-light text-md flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-600 ml-2">{{$event->platform}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
