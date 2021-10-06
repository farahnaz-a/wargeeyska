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
@php
    $daySix = \App\Models\Blog::whereDate('created_at' ,   \Carbon\Carbon::now()->subDays(6))->get()->count();
    $dayFive = \App\Models\Blog::whereDate('created_at' ,  \Carbon\Carbon::now()->subDays(5))->get()->count();
    $dayFour = \App\Models\Blog::whereDate('created_at' ,  \Carbon\Carbon::now()->subDays(4))->get()->count();
    $dayThree = \App\Models\Blog::whereDate('created_at' , \Carbon\Carbon::now()->subDays(3))->get()->count();
    $dayTwo = \App\Models\Blog::whereDate('created_at' ,   \Carbon\Carbon::now()->subDays(2))->get()->count();
    $dayOne = \App\Models\Blog::whereDate('created_at' ,   \Carbon\Carbon::now()->subDays(1))->get()->count();
    $today = \App\Models\Blog::whereDate('created_at' ,    \Carbon\Carbon::today())->get()->count();

    $six = \Carbon\Carbon::today()->subdays(6)->format('d-M');
    $five = \Carbon\Carbon::today()->subdays(5)->format('d-M');
    $four = \Carbon\Carbon::today()->subdays(4)->format('d-M');
    $three = \Carbon\Carbon::today()->subdays(3)->format('d-M');
    $two = \Carbon\Carbon::today()->subdays(2)->format('d-M');
    $one = \Carbon\Carbon::today()->subdays(1)->format('d-M');
    $toda = \Carbon\Carbon::today()->format('d-M');

    $day = [$six, $five, $four, $three, $two, $one, $toda];

    $blogCount = [$daySix, $dayFive, $dayFour, $dayThree, $dayTwo, $dayOne, $today];
@endphp
@section('js')
    <script>
        var options = {
  chart: {
    type: 'line', 
    
  },
  grid : {
    show: false,
  },
  series: [{
    name: 'Blogs',
    data: @json($blogCount),
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
  series: [44, 55, 13, 33],
  labels: ['Apple', 'Mango', 'Orange', 'Watermelon'],
  xaxis: {
    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
  }
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
    name: 'sales',
    data: [30,40,35,50,49,60,70,91,125]
  }],
  xaxis: {
    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
  }
}

var chart = new ApexCharts(document.querySelector("#chartTwo"), options);

chart.render();
    </script>
@endsection