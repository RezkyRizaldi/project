@extends('layouts.main')

@section('title', request('search') . ' - ' . config('app.name'))

@section('content')
<x-blog-post />
@endsection
