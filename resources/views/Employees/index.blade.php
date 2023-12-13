<!doctype html>
<x-layouts.app title="Home" meta-description="Home Meta Description">


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @auth
        <div class="text:dark">
            Authenticated User: {{Auth::user()->name}}
        </div>
    @endauth
</head>
<body>


<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">MERCK LINES MOBILES MANAGER</h1><br>


    <h2>User list</h2>
    <table>
        <th>
            <tr>
                <td><strong>MUID</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Lastname</strong></td>
                <td><strong>Edit</strong></td>
                <td><strong>Delete</strong></td>
            </tr>
        </th>
        @foreach($employees as $employee)
            <tr>

                <td>{{ $employee->muid }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->lastname }}</td>
                @auth
                    <div>
                        <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{ route('employees.edit', $employee) }}">Edit</a>

                        <form action="{{ route('employees.destroy', $employee) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none">Delete</button>
                        </form>
                    </div>
                @endauth

            </tr>

        @endforeach
    </table>



</body>
</html>
</x-layouts.app>



