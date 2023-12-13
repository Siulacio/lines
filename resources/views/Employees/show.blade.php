<!doctype html>
<x-layout title="Show" meta-description="Show Meta Description">
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User List</title>
    </head>
    <body>

    <h2>USER LIST</h2>

    <h4>@include('components.layouts.navigation')</h4>

    <table>
        <th>
            <tr>
        <td>MUID</td>
        <td>Name</td>
        <td>Lastname</td>
        </tr>
        </th>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->muid }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->lastname }}</td>
            </tr>
        @endforeach
    </table>

    </body>
    </html>
</x-layout>

