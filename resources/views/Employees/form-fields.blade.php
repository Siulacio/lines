{{--<div class="space-y-4">

<label class="flex flex-col"></label>
    <span class="font-serif text-slate-600 dark:text-slate-400">MUID: </span>
<input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="muid" type="text" value="{{ old('muid', $employee->muid) }}">
@error('muid')
<br>
<small class="font-bold text-red-500/80">{{ $message }}</small>
@enderror
<br><br>

<label class="flex flex-col" for="name"></label>
    <span class="font-serif text-slate-600 dark:text-slate-400">Name: </span>
<input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="name" value="{{ old('name', $employee->name) }}">
@error('name')
<br>
<small class="font-bold text-red-500/80">{{ $message }}</small>
@enderror
<br><br>

<label class="flex flex-col" for="lastname"></label>
    <span class="font-serif text-slate-600 dark:text-slate-400">Lastname:</span>
<input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="lastname" value="{{ old('lastname', $employee->lastname) }}">
@error('lastname')
<br>
<small class="font-bold text-red-500/80">{{ $message }}</small>
@enderror
<br><br>

</div>
--}}
<div class="space-y-4">
    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Muid</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="muid" type="text" value="{{ old('muid', $employee->muid) }}">
        @error('muid')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Name</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="name" type="text" value="{{ old('name', $employee->name) }}">
        @error('name')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Lastname</span>
        <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="lastname">{{old('lastname', $employee->lastname)}}</textarea>
        @error('lastname')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
</div>
