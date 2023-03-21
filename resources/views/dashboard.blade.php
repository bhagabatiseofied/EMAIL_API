<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h2>Create Email Template </h2>

                   
                   <form method="POST" action="{{ route('saveTemplate') }}">
                    @csrf
            
                    <!-- Mail Template -->
                    <div>
                        
            <textarea id="temp" rows="12"
            class="block mt-1 w-full"
            name="temp" :value="old('temp')" required autofocus autocomplete="temp" /></textarea>

           
                        <x-input-error :messages="$errors->get('temp')" class="mt-2" />
                    </div>
            
                    
            
                    <div class="flex items-center justify-end mt-4">
                        
            
                        <x-primary-button class="ml-4">
                            {{ __('Save Template') }}
                        </x-primary-button>
                    </div>
                </form>





                </div>
            </div>
        </div>
    </div>



</x-app-layout>
