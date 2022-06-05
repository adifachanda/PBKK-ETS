@extends('Hotel Page.blank')
@section('sidebar')
    @include('Hotel Page.sidebar.sidebar')
@endsection
@section('content')
    <form method="get" action="{{ route('register') }}">
        @csrf
        <div>

        </div>
    </form>
@endsection
