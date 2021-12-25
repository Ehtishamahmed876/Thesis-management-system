<x-slot name="header">
    <h2 class="text-center">Students Data for Thesis</h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()"
                class="my-4 inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base font-bold text-white shadow-sm hover:bg-red-700">
                Create Student
            </button>
            @if($isModalOpen)
            @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Rollno</th>
                        <th class="px-4 py-2">Registration</th>
                        <th class="px-4 py-2">Viva Date</th>
                        <th class="px-4 py-2">Viva marks</th>
                        <th class="px-4 py-2">Viva teacher</th>


                        <th class="px-4 py-2">Email</th>
                    
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->id }}</td>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->rollno }}</td>
                        <td class="border px-4 py-2">{{ $user->registration }}</td>
                        <td class="border px-4 py-2">{{ $user->vivadate }}</td>
                        <td class="border px-4 py-2">{{ $user->vivamarks }}</td>
                        <td class="border px-4 py-2">{{ $user->vivateacher }}</td>



                        <td class="border px-4 py-2">{{ $user->email}}</td>
                        
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $user->id }})"
                                class="flex px-4 py-2 bg-gray-500 text-gray-900 cursor-pointer">Edit</button>
                            <button wire:click="delete({{ $user->id }})"
                                class="flex px-4 py-2 bg-red-100 text-gray-900 cursor-pointer">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
