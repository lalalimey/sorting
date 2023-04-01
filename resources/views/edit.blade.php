@extends('layouts.app')
@section('content')
    @include('alert')
    @vite('resources/css/app.css')
    <body>
    <div class="m-5">
        <h1>หน้า4</h1>
        <h2>project id : {{$id}}</h2>
        <div>
            <form action="/staff/project/adddepartment" method="post">
                @csrf
                <div class="input-field col s12">
                    <h5>name :</h5>
                    <input class="p-1 border-gray-800"  id="name"  name="name"  required></input>
                </div>
                <div class="input-field col s12">
                    <h5>password :</h5>
                    <input class="p-1 border-gray-800" id="password"  name="password"  required></input>
                </div>
                <div class="input-field col s12">
                    <h5>slot :</h5>
                    <input class="p-1 border-gray-800" id="slot"  name="slot"  required></input>
                </div>
                <div class="input-field col s12">

                    <input value="{{$id}}" id="project_id"  name="project_id" style="display: none" required></input>
                </div>
                <button class="rounded-full bg-blue-500 text-white m-5 p-3" type="submit" name="action">Save Changes</button>
            </form>
        </div>
    </div>
    </body>

@endsection
