@extends('main.base')

@section('title', '商品比較画面')

@section('compare')


<div class="ct-chart" id="chart"></div>
<script>
  var chartData = @json($data)
</script>

<script src="{{ asset('js/chartlist.js') }}"></script>

@endsection
