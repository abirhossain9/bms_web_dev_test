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
                    @if(Auth::user()->role == 1)
                    <style>
                        table {
                            font-family: arial, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                        }

                        td,
                        th {
                            border: 1px solid #dddddd;
                            text-align: left;
                            padding: 8px;
                        }

                        tr:nth-child(even) {
                            background-color: #dddddd;
                        }
                        .button {
                            background-color: #4CAF50;
                            border: none;
                            color: white;
                            padding: 15px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                        }
                    </style>
                </head>
                <body>
                    <h2>manage users</h2>
                    <table>
                        <tr>
                            <th>sl</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Handle</th>
                        </tr>
                        @php $i = 0; @endphp @foreach($users as $user) @php $i++; @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <form method="POST" action="{{ route('user.update',$user->id) }}">
                                    @csrf
                                    <input type="text" value="{{ $user->id }}" hidden="hidden">
                                    <input type="submit" class="button" value="Verify">
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </body>
                </html>
                @elseif(Auth::user()->role == 2 && Auth::user()->admin_verification == 2)
                we will notify you
                @elseif(Auth::user()->role == 2 && Auth::user()->admin_verification == 1)
                welcome,you are logged in
                @endif
            </div>
        </div>
    </div>

</div>
</x-app-layout>
