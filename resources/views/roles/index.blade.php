<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Roles List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <Link slideover href="{{ route('roles.create') }}"
            class="text-lg text-gray-600 hover:text-gray-900-underline">
            Add Role
            </Link>
            <x-splade-table :for="$roles">
                <x-slot:empty-state>
                    <p>Sorry No Role Found!</p>
                    </x-slot>
                    <x-splade-cell actions as="$role">
                        <Link slideover href="{{ route('roles.edit', $role->id) }}" class="text-indigo-600"> Edit
                        </Link>
                        <x-splade-form action="{{ route('roles.destroy', $role) }}" method="DELETE" confirm>
                            <button class="text-red-600 text-bold" type="submit">Delete</button>
                        </x-splade-form>
                    </x-splade-cell>

            </x-splade-table>
        </div>
    </div>
</x-app-layout>
