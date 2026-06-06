@extends('dashboard.layout.layout')

@section('content')
<div class="mx-4 my-4 overflow-y-auto">
    <table id="tableUsers">
        <thead>
            <tr><th colspan="10" class="border">Edit Members</th></tr>
            <tr>
                <form action="" method="POST">
                    @csrf
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
                    @csrf
                    <td class="border p-2  max-w-20">{{$i['id']}}</td>
                    <td class="border p-2 ">{{$i['username']}}</td>
                    <td class="border p-2 ">{{$i['full_name']}}</td>
                    <td class="border p-2 max-w-56"><img src="{{$i['display_photo']}}" alt=""></td>
                    <td class="border p-2  max-w-32">{{$i['NRP']}}</td>
                    <td class="border p-2 ">{{$i['email']}}</td>
                    <td class="border p-2 max-w-8"> <select name="division" id="">
                        @foreach($data['allDivision'] as $item)
                            @if($i['division']===$item)
                            <option value="{{$item}}" selected>{{$item}}</option>    
                            @else
                            <option value="{{$item}}">{{$item}}</option>
                            @endif
                        @endforeach
                    </select></td>
                    <td class="border p-2 max-w-32"><select name="role" id="">
                        @foreach($data['allRole'] as $item)
                            @if($i['role']===$item)
                            <option value="{{$item}}" selected>{{$item}}</option>
                            @else
                            <option value="{{$item}}">{{$item}}</option>
                            @endif
                        @endforeach
                    </select></td>
                    <td class="border p-2 max-w-4"><select name="status" id="">
                        @if(($i['status']??true))
                        <option value="true" selected>true</option>
                        <option value="false">false</option>
                        @else
                        <option value="true">true</option>
                        <option value="false" selected>false</option>
                        @endif
                    </select></td>
                    <td class="border p-2">
                        <button class='edit-btn' type="button" data-id="{{$i['id']}}">EDIT</button>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div hidden>
        <form action="">
            <p>ID : </p>
            <div>
                <label for="username">Username :</label>
                <input type="text" name="username" value="" style="border-bottom: 1px black solid;">
            </div>
            <div>
                <label for="fullname">Full Name :</label>
                <input type="text" name="fullname" value="" style="border-bottom: 1px black solid;">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="text" name="email" value="" style="border-bottom: 1px black solid;">
            </div>
            <div>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" value="" style="border-bottom: 1px black solid;">
            </div>
            <div>
                <label for="status">Status :</label>
                <select name="status">
                    <option value="true">TRUE</option>
                    <option value="false">FALSE</option>
                </select>
            </div>
            <p>Created at: </p>
            <p>Updated at: </p>
        </form>
        <form>
            <table>
                <thead>
                    <tr><th colspan="5" class="border p-2">Anggota</th></tr>
                    <tr>
                        <th class="border p-2">Periode</th>
                        <th class="border p-2">Divisi</th>
                        <th class="border p-2">Role</th>
                        <th class="border p-2">Display Photo</th>
                        <th class="border p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="border p-2"></th>
                        <th class="border p-2"></th>
                        <th class="border p-2"></th>
                        <th class="border p-2"></th>
                        <th class="border p-2"><button>Edit</button> | <button>Delete</button></th>
                    </tr>
                </tbody>
            </table>
        </form>
        </div>
</div>


<script>
$('.edit-btn').click(function (e) { 
    e.preventDefault();
    let id = $(this).data('id');
    
    $.ajax({
        type: "GET",
        url: "/dashboard/editMember/by?id="+id,
        success: function (response) {
            console.log(response['user']);
            $('#tableUsers').attr("hidden",true);


        }
    });
});
</script>
@endsection