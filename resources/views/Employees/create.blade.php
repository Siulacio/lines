<!doctype html>
<x-layouts.app title="Create" meta-description="Create Meta Description">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User creation</title>
</head>
<body>

<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">USER CREATION FORM</head><br><br>


    <h4><form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('employees.store') }}" method="POST">
        @csrf

        @include('employees.form-fields')

            <div class="flex items-center justify-between mt-4">
                <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Save</button>

                <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('employees.index') }}">Return</a>
            </div>

        </form></h4>





    <br>
    <br>



</body>
</html>
</x-layouts.app>

