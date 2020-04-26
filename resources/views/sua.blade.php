@extends('layouts.master')

@section('cuc-noi-dung')
    <h1>sửa tin</h1>
    <form action="/sua-tin-tuc/{{ $tintuc->id }}" method="POST">
        @csrf
        <input type="text" name="ten" placeholder="nhap ten..." value="{{$tintuc->ten}}" />
        <br />
        <input type="text" name="noi_dung" placeholder="nhap noi dung..." value="{{$tintuc->noi_dung}}"/>
        <br />
        <input type="submit" value="sua">
    </form>
@endsection