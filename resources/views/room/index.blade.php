@extends('layouts.hotel')

@section('body')
    <table>
    <h2>部屋</h2>
    <th>部屋種別ID</th><th>部屋番号</th><th>名称</th><th>宿泊可能人数</th>

    @foreach($items as $item)
    <tr>
        <td>{{$item->room_kinds_id}}</td>
        <td>{{$item->room_number}}</td>
        <td>{{$item->masuta->room_name}}</td>
        <td>{{$item->masuta->able_people}}</td>
    </tr>
    @endforeach
    </table>
@endsection

<style>
h2 {
  padding: 50px;
  text-align: center;
  
  
  }

table{
  border-collapse:separate;
  border-spacing: 5px;
  width: 100%;
}

table th,table td{
  text-align: center;
  padding: 10px 0;
}

table th{
  background-color: #66CC33;
  color: white;
  border:solid 1px #927141;
}

table td{
  
  border:solid 1px #af9d85;
}

</style>

     