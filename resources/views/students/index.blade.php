<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-900">
            {{ __('Students List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @can('student_create')
                <Link slideover href="{{ route('students.create') }}" class="site" >
                    Create Student
                </Link>
            @endcan
            <x-splade-table :for="$students">
                <x-slot:empty-state>
                    <p>Sorry No Student Found!</p>
                    </x-slot>
                    <x-splade-cell avatar as="$student">
                        @if ($student->avatar)
                            <img src="{{ $student->avatar }}" alt="{{ $student->name }}"
                                class="w-10 h-10 rounded-full">
                        @endif
                    </x-splade-cell>
                    <x-splade-cell actions as="$student">
                        @can('student_edit')
                            <Link slideover href="{{ route('students.edit', $student->id) }}" class="text-indigo-600"> Edit
                            </Link>
                        @endcan

                        @can('student_delete')
                            <x-splade-form action="{{ route('students.destroy', $student) }}" method="DELETE" confirm>
                                <button class="text-red-600 text-bold" type="submit">Delete</button>
                            </x-splade-form>
                        @endcan
                    </x-splade-cell>

            </x-splade-table>
            <style>
                .site {
                    font-size: 32px;
                    font-weight: 500;
                    padding: 20px;
                    margin: 30px;
                    width: 350px;
                    background: #ebeef1;
                    cursor: pointer;
                    border-radius: none;
                    color: #00a037;
                    box-shadow: 10px 10px 10px -1px rgba(10, 99, 169, 0.16), -10px -10px 10px -1px rgba(255, 255, 255, 0.70);
                }

            </style>
        </div>
    </div>
</x-app-layout>
