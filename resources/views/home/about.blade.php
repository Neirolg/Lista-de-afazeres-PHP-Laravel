@include('layouts.navbar')

<x-guest-layout>
<html>
<br>
<style>

    .texto {
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: 80px;
        margin-right: 80px;
    }

    h1 {
        font-weight: 900;
        font-size: 24px;
    }

    h2 {
        font-weight: bold;
        font-size: 20px;
    }

    h3 {
        font-weight: bold;
        font-size: 20px;
        text-decoration: underline;
    }

</style>
<script type="module" src="https://md-block.verou.me/md-block.js"></script>
<md-block src="{{ asset('/README.md') }}"></md-block>

</x-guest-layout>