@extends('dashboard.layout.layout')

@section('content')
<div class="mx-4 my-4">
    <table>
        <thead>
            <tr><th colspan="10" class="border">Edit Member</th></tr>
            <tr>
                <form action="">
                    <th colspan="5" class="border">
                        <label for="tahun">Tahun</label>
                        <select name="tahun" id="tahun">
                            @foreach ($data['allPeriode'] as $i)    
                            <option value="{{$i}}">{{$i}}</option>
                            @endforeach
                        </select>
                    </th>
                    <th colspan="5" class="border">
                        <label for="divisi">Divisi</label>
                        <select name="divisi" id="divisi">
                            @foreach ($data['allDivision'] as $i)    
                            <option value="{{$i}}">{{$i}}</option>
                            @endforeach
                        </select>
                    </th>
                </form>
            </tr>
            <tr>
                <th class="border p-2">ID</th>
                <th class="border p-2">Username</th>
                <th class="border p-2">Full Name</th>
                <th class="border p-2">Photo</th>
                <th class="border p-2">NRP</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Division</th>
                <th class="border p-2">Role</th>
                <th class="border p-2">Status</th>
                <th class="border p-2">Edit</th>
            </tr>
        </thead>
        <tbody>
                @foreach($data['member'] as $i)
                <tr>
                    <td class="border p-2 max-w-12"> <input type="text" value="{{$i['id']}}"></td>
                    <td class="border p-2 max-w-32"> <input type="text" value="{{$i['username']}}"></td>
                    <td class="border p-2"> <input type="text" value="{{$i['full_name']}}"></td>
                    <td class="border p-2"> <input type="text" value="{{$i['display_photo']}}"></td>
                    <td class="border p-2 max-w-32"> <input type="text" value="{{$i['NRP']}}"></td>
                    <td class="border p-2"> <input type="text" value="{{$i['email']}}"></td>
                    <td class="border p-2 max-w-8"> <input type="text" value="{{$i['division']}}"></td>
                    <td class="border p-2 max-w-28"> <input type="text" value="{{$i['role']}}"></td>
                    <td class="border p-2 max-w-4"> <input type="text" value="{{$i['status']}}"></td>
                    <td class="border p-2"> <input type="submit"></td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection