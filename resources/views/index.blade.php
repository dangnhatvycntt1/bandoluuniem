@extends('layouts.master')

@section('cuc-noi-dung')
    day la trang chu
    <a href="{{ url('/them') }}">Them</a>
    @if (isset($danhsachTinTuc))
        @foreach ($danhsachTinTuc as $tintuc)
            <div>
                <a href="/chi-tiet/{{$tintuc->id}}">{{ $tintuc->ten }}</a>
                <span>{{$tintuc->noi_dung}}</span>
                <a href="/sua/{{ $tintuc->id }}">sua</a>
                <a href="/xoa-tin-tuc/{{ $tintuc->id }}">xoa</a>
            </div>
        @endforeach
    @endif
@endsection