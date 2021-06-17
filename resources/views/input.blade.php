<x-app-layout>
<x-slot name="header">
        <div class="flex">
            <a href="{{ route('dashboard') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mx-1">
                {{ __('/') }}
            </h2>
            <a href="" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Input Data') }}
            </a>
        </div>
    </x-slot>

    <div class="">
        <div class="container mx-auto md:p-6 p-4 bg-white shadow sm:rounded-2xl">               
            <div class="md:grid md:grid-cols-6 md:gap-4 px-8">
                <div class="mt-5 md:mt-0 md:col-span-3">
                <form action="#" method="POST">
                    <div class="sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-md font-medium text-gray-700">Title</label>
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-md border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-md font-medium text-gray-700">Category</label>
                            <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-md">
                            <option>Seminar</option>
                            <option>Kesehatan</option>
                            <option>Gaming</option>
                            <option>Other</option>
                            </select>
                        </div>
                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-md font-medium text-gray-700">
                            Link
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-md">
                                http://
                            </span>
                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-md border-gray-300" placeholder="www.example.com">
                            </div>
                        </div>
                        </div>

                        <div>
                        <label for="about" class="block text-md font-medium text-gray-700">
                            Description
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-md border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                        </div>
                        <p class="mt-2 text-md text-gray-500">
                            Brief description for your profile. URLs are hyperlinked.
                        </p>
                        </div>

                        <div>
                        <label class="block text-md font-medium text-gray-700">
                            Cover photo
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-md text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-md font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                        </button>
                    </div>
                    </div>
                </form>
                </div>
                <div class="md:col-span-3 invisible md:visible">
                    <img class="w-full rounded-full" src="/assets/img/design-decisions.png" alt="">
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
