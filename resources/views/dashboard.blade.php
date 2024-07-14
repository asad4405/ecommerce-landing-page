@extends('layouts.backend_master')
@section('content')
<h2>Welcome <span>{{ Auth::user()->name }}</span>,</h2>
@endsection
