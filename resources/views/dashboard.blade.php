<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div>
        {{$response}}
        <table>
            <tr>

                <th>ID</th>
                <th>firstName</th>
                <th>latsName</th>
                <th>Gender</th>
                <th>District</th>
                <th>State</th>
                <th>Address</th>
                <th>Course</th>
                <th>College/University</th>
                <th>Year of passing</th>
                <th>Percentage or CGPA</th>
      
            </tr>
            <tr>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
       
            </tr>
        </table>
    </div>
</x-app-layout>