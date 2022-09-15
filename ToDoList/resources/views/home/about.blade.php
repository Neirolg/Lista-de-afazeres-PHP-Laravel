@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<html>
<script type="module" src="https://md-block.verou.me/md-block.js"></script>
<md-block src="{{ asset('/README.md') }}"></md-block>>

</html>

@endsection
