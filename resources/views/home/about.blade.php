@include('layouts.navbar')

<html>
<br>
<script type="module" src="https://md-block.verou.me/md-block.js"></script>
<md-block src="{{ asset('/README.md') }}"></md-block>
