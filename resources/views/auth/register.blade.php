<x-layouts.app title="Register" meta-description="Register meta-description">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Register</h1>

    <h4><form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('register') }}" method="POST">
            @csrf

            <label class="flex flex-col"></label>
            <span class="font-serif text-slate-600 dark:text-slate-400">Username: </span>
            <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="name" type="text" value="{{ old('name') }}">
            @error('name')
            <br>
            <small class="font-bold text-red-500/80">{{ $message }}</small>
            @enderror
            <br><br>

            <label class="flex flex-col"></label>
            <span class="font-serif text-slate-600 dark:text-slate-400">Email: </span>
            <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="email" type="email" value="{{ old('email') }}">
            @error('email')
            <br>
            <small class="font-bold text-red-500/80">{{ $message }}</small>
            @enderror
            <br><br>

            <label class="flex flex-col"></label>
            <span class="font-serif text-slate-600 dark:text-slate-400">Password: </span>
            <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="password" type="password" value="{{ old('password') }}">
            @error('password')
            <br>
            <small class="font-bold text-red-500/80">{{ $message }}</small>
            @enderror
            <br><br>

            <label class="flex flex-col"></label>
            <span class="font-serif text-slate-600 dark:text-slate-400">Password confirmation: </span>
            <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
            <br>
            <small class="font-bold text-red-500/80">{{ $message }}</small>
            @enderror
            <br><br>

            <input type="submit" value="Register" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500">
        </form></h4>


</x-layouts.app>
