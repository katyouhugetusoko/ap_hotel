@extends('layouts.hotel')

@section('body')
    <table>
    <h2>利用者</h2>
    <th>お名前</th><th>ご住所</th><th>電話番号</th>
    @foreach($items as $item)
    <tr>
        <td>{{$item->name}}</th>
        <td>{{$item->address}}</td>
        <td>{{$item->tel}}</th>
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

     