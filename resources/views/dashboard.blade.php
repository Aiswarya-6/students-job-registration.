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

        <table border="1">
            <thead >
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
            </thead>
            <tbody >
                @foreach($response as $data)
                @if ($data['education'] == null)
                @continue;
                @endif
                <tr>
                    <td>{{$data['id']}}</td>
                    <td>{{$data['firstName']}}</td>
                    <td>{{$data['lastName']}}</td>
                    <td>{{$data['gender']}}</td>
                    <td>{{$data['district']}}</td>
                    <td>{{$data['state']}}</td>
                    <td>{{$data['address']}}</td>
                    <td>{{$data['education']['course']}}</td>
                    <td>{{$data['education']['college']}}</td>
                    <td>{{$data['education']['passOut']}}</td>
                    <td>{{$data['education']['percentage']}}</td>
                </tr>
            </tbody>


            @endforeach

        </table>
    </div>
</x-app-layout>