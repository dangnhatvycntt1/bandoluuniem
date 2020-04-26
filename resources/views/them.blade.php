@extends('layouts.master')

@section('cuc-noi-dung')
    <h1>Them tin</h1>
    <form action="{{ url('/them-tin-tuc') }}" method="POST">
        @csrf
        <input type="text" name="ten" placeholder="nhap ten..." />
        <br />
        <input type="text" name="noi_dung" placeholder="nhap noi dung..." />
        <br />
        <input type="submit" value="NHap">
    </form>
@endsection