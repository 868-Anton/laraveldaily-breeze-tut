<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12 ">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-black border-2">
              <div class="p-6 bg-white border-b border-gray-200">
                  <table class="table-auto border-separate border-spacing-4 ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $categories as $category)    
                        <tr>
                            <td><a href="#">{{ $category->id }}</a></td>
                            <td><a href="http://">{{ $category->name }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
