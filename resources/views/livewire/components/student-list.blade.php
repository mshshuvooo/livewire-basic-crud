<div>
    <div class="bg-gray-50 p-5 mt-20 mb-5">
        <input wire:model.live.debounce.150ms="search" type="search" placeholder="Search Student by Name" class="block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>
    <div class="bg-gray-50 p-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Students</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the students i including their name, email and class.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <button wire:navigate href="/students/create" type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add New Student</button>
            </div>
        </div>


        <livewire:components.flash-message />

        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Class</th>
                    <th scope="col" class="text-right py-3.5 pl-3 pr-4 sm:pr-0">
                        Action
                    </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($students as $student)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $student->student_name }}</td>

                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $student->student_email }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $student->student_class }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                            <button wire:navigate href="/students/{{ $student->id }}" class="text-indigo-600 hover:text-indigo-900">View Details</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <div>
                {{ $students->links() }}
            </div>
            </div>
        </div>
    </div>
</div>


