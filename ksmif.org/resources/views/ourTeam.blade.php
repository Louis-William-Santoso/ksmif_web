@extends('layout.app')

@section('content')
<div class="font-['Jersey10']">
    <h1 class="text-center text-7xl">Meet Our Team</h1>

    @csrf
    <form action="" method="POST" id="menuSelect" class="text-3xl m-4 flex gap-8">
        <div>
        <label for="period">Periode</label>
        <select name="period" id="priod" onchange="this.form.submit()" class="underline">
            @foreach ($data['period'] as $i)
            <option value={{$i['period']}}>{{$i['period']}}/{{$i['period']+1}}</option>
            @endforeach
        </select>
        </div>
        <div>
        <label for="division">Division</label>
        <select name="division" id="division" onchange="this.form.submit()" class="underline">
            @foreach ($data['division'] as $i) 
            <option value={{$i}}>{{$i}}</option>
            @endforeach
        </select>
        </div>
    </form>

    <div class="overflow-scroll flex [&::-webkit-scrollbar]:hidden">
    </div>
</div>
@endsection