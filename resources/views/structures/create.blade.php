@extends('layouts.shell')

@section('contenta')
<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

  <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
    <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
      <nav class="space-y-1">

          <a href="#" class="bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium" x-state:on="Current" x-state:off="Default" aria-current="page" x-state-description="Current: &quot;bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white&quot;, Default: &quot;text-gray-900 hover:text-gray-900 hover:bg-gray-50&quot;">
            <svg class="text-indigo-500 group-hover:text-indigo-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-indigo-500 group-hover:text-indigo-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/user-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
            <span class="truncate">
              Account
            </span>
          </a>

          <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white&quot;, undefined: &quot;text-gray-900 hover:text-gray-900 hover:bg-gray-50&quot;">
            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-indigo-500 group-hover:text-indigo-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/key" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
</svg>
            <span class="truncate">
              Password
            </span>
          </a>

          <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white&quot;, undefined: &quot;text-gray-900 hover:text-gray-900 hover:bg-gray-50&quot;">
            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-indigo-500 group-hover:text-indigo-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/credit-card" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
</svg>
            <span class="truncate">
              Plan &amp; Billing
            </span>
          </a>

          <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white&quot;, undefined: &quot;text-gray-900 hover:text-gray-900 hover:bg-gray-50&quot;">
            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-indigo-500 group-hover:text-indigo-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/user-group" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
</svg>
            <span class="truncate">
              Team
            </span>
          </a>

          <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white&quot;, undefined: &quot;text-gray-900 hover:text-gray-900 hover:bg-gray-50&quot;">
            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-indigo-500 group-hover:text-indigo-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/view-grid-add" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path>
</svg>
            <span class="truncate">
              Integrations
            </span>
          </a>

      </nav>
    </aside>

    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">


      <form action="/structures" method="POST">
          @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Structure Creation Information</h3>
              <p class="mt-1 text-sm text-gray-500">Use a permanent structure where your systems live.</p>
            </div>

            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="unit" class="block text-sm font-medium text-gray-700">Unit</label>
                <input required type="text" name="unit" id="unit" autocomplete="unit" value="{{ old('unit') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('unit')
                    <div class="font-bold text-red-500">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="division" class="block text-sm font-medium text-gray-700">Division</label>
                <input required type="text" name="division" id="division" autocomplete="division" value="{{ old('division') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('division')
                    <div class="font-bold text-red-500">{{ $message }}</div>
                @enderror
            </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="facade" class="block text-sm font-medium text-gray-700">Facade</label>
                <input required type="text" name="facade" id="facade" autocomplete="facade" value="{{ old('facade') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('facade')
                    <div class="font-bold text-red-500">{{ $message }}</div>
                @enderror
            </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>


    </div>
  </div>

    </div>
  </div>

@endsection
