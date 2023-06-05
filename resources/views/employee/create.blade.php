@extends('layout/default')
@section('content')
    <div class="p-4">
        <form action="/employee/add" method="post">
            {{csrf_field()}}
            <label> Code </label>
            <input type="text" name="code" size="15"/> <br> <br>
            <label> Email </label>
            <input type="email" name="email" size="50"/> <br> <br>
            <label> Firstname </label>
            <input type="text" name="first_name" size="50"/> <br> <br>
            <label> Lastname: </label>
            <input type="text" name="last_name" size="50"/> <br> <br>

            <label>
                Designation:
            </label>
            <select name="designation_id">
                <option value="1">default</option>
            </select><br><br>
            <label>
                City:
            </label>
            <select name="city_id">
                <option value="1">default</option>
            </select><br><br>
            <input type="submit" value="Submit"/>
        </form>
    </div>
@endsection
