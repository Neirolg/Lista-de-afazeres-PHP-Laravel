@include('layouts.navbar')

<x-guest-layout>

<script type="module" src="https://md-block.verou.me/md-block.js"></script>
<md-block src="{{ asset('/README.md') }}"></md-block>

</x-guest-layout>