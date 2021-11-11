@extends('layouts.hotel')

@section('body')
    <table>
    <h2>予約明細</h2>
    <th>部屋ID</th><th>宿泊日</th><th>宿泊料</th>
    @foreach($items as $item)
    <tr>
        <td>{{$item->room_id}}</td>
        <td>{{$item->day}}</td>
        <td>{{$item->price}}</td>
        
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

     