@extends('layouts.hotel')

@section('body')
    <table>
    <h2>予約者</h2>
    <th>利用者名前</th><th>住所</th><th>電話番号</th><th>人数</th><th>チェックイン日付</th><th>チェックアウト日付</th><th>宿泊日</th><th>宿泊料</th>
    @foreach($items as $item)
    <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->user->address}}</td>
        <td>{{$item->user->tel}}</td>
        <td>{{$item->number_of_people}}</td>
        <td>{{$item->check_in_day}}</td>
        <td>{{$item->check_out_day}}</td>
        <td>{{$item->rooms->first()->pivot->day}}</td>
        <td>{{$item->rooms->first()->pivot->price}}</td>
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

     