@extends('layouts::app')

@section('title')
  overview
@endsection

@section('content')
  <main>
    Responsive Content
    <div class="hidden lg:flex justify-between max-w-7xl mx-auto lg:px-8">
      Sidebar
      <div class="w-1/5 py-6 pb-12">
        <div class="flex flex-col">
          <div class="inline-block">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <div class="divide-y divide-gray-200">
                <div class="bg-gray-100">
                  <div
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Navigation
                  </div>
                </div>
                <div class="bg-white divide-y divide-gray-200">
                  @foreach ($tables as $table)
                    <div class="even:bg-gray-50">
                      <div class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <a href="/secretroom/{{ $table }}" class="truncate">{{ $table }}</a>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
@endsection
