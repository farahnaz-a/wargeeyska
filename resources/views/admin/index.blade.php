@extends('admin.dashboard')


@section('title')
    {{ config('app.name') }} | Admin Dashboard
@endsection

@section('dashboard')
    active
@endsection

@section('content')
<section id="basic-vertical-layouts">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-12">
            <div id="chart"></div>
        </div>
        <div class="col-lg-6 col-6">
            <div id="chartOne"></div>
        </div>
        <div class="col-lg-6 col-6">
            <div id="chartTwo"></div>
        </div>
    </div>
</section>

@endsection
@section('js')
    <script>
        var options = {
  chart: {
    type: 'line', 
    height: '400px'
    
  },
  grid : {
    show: false,
  },
  series: [{
    name: 'Blogs',
    data: @json($count),
  }],
  xaxis: {
    categories: @json($day),
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();

var options = {
  chart: {
    type: 'donut', 
    
  },
  grid : {
    show: true,
  },
  series: @json($view_count),
  labels: @json($blog_name),
 
}

var chart = new ApexCharts(document.querySelector("#chartOne"), options);

chart.render();

var options = {
  chart: {
    type: 'bar', 
    
  },
  grid : {
    show: false,
  },
  series: [{
    name: 'New Reporters in last 7 days',
    data: @json($reporter_count)
  }],
  xaxis: {
    categories: @json($day)
  }
}

var chart = new ApexCharts(document.querySelector("#chartTwo"), options);

chart.render();
    </script>
@endsection