<x-app-layout>
    @section('title', 'Add Department')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Department') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('admin.departments.store') }}" class="p-6">
                        @csrf

                        <div class="">
                            <div class="mt-4">
                                <x-input-label for="departmentName" :value="__('Department Name')" />
                                <x-text-input id="departmentName" name="departmentName" type="text"
                                    class="mt-1 block w-full" :value="old('departmentName')" required autofocus
                                    autocomplete="departmentName" />
                                <x-input-error class="mt-2" :messages="$errors->get('departmentName')" />
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <a href="{{ route('admin.departments.index') }}">
                                <x-secondary-button>
                                    {{ __('Cancel') }}
                                </x-secondary-button>
                            </a>

                            <x-primary-button class="ml-3">
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
