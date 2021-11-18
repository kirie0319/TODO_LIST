@extends('layouts.default')

@section('content')

@foreach ($items as $item)
  <tr>
    <td class="date">{{$item->created_at}}</td>
    <form action="/todo/update" method="POST">
      @csrf
      <td>
        <input type="text" class="hidden" name="id" value={{$item->getId()}}>
        <input type="text" name="content" class="box update_box" value={{$item->showList()}}>
      </td>
      <td>
        <input type="submit" class="btn update_btn" value="更新">
      </td>
    </form>
    <td>
      <form action="/todo/delete" method="POST">
        @csrf
        <input type="text" class="hidden" name="id" value={{$item->getId()}}>
        <input type="submit" class="btn delete_btn" value="削除">
      </form>
    </td>
  </tr>

@endforeach
@endsection