<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h2>View All Email Templates </h2>

                   <style>
                    table {
                      font-family: arial, sans-serif;
                      border-collapse: collapse;
                      width: 100%;
                    }
                    
                    td, th {
                      border: 1px solid #dddddd;
                      text-align: left;
                      padding: 8px;
                    }
                    
                    tr:nth-child(even) {
                      background-color: #dddddd;
                    }
                    </style>
<table>
  <tr>
    <th>SL No</th>
    <th>Template ID</th>
    <th>Content</th>
    <th>Action</th>
  </tr>

  @foreach($alltemps as $indexKey=>$template)
  <tr>
    <td>{{ $indexKey + 1}}</td>
    <td> {{$template->id}} </td>
    <td> <textarea readonly id="temp" rows="4"
        class="block mt-1 w-full"
        name="temp" :value="old('temp')" required autofocus autocomplete="temp" />  {{$template->mailtemplate}}</textarea></td>
    <td>
      <form method="GET" action="{{ route('sendemail') }}">
        @csrf
      <label for="cars">Choose a User:</label>

<select name="userid" id="#">
  @foreach($users as $user)
  <option value="{{$user->id}}"> {{$user->name}}</option>
  @endforeach
</select>

<input type="hidden" id="tempid" name="tempid" value="{{$template->id}}">

<x-primary-button class="ml-4">
  {{ __('Send Mail') }}
</x-primary-button>

</form>

      
     
     
    </td>
  </tr>
  @endforeach
</table>
                   
                  
                   

                 






                </div>
            </div>
        </div>
    </div>



</x-app-layout>
