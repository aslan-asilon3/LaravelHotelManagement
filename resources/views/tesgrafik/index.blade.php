@extends('template.master')

@section('title', 'Tes Grafik')

@section('Resources')
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
@endsection

@section('content')

<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 350px;
}
</style>

<div class="content container-fluid">
    <div class="page-header">
        <h1 class="mt-5 blank_title">Blank Page</h1> </div>

        <div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">Users</h4> </div>
							<div class="card-body">
                                <div id="chartdiv"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">ROOMS BOOKED</h4> </div>
							<div class="card-body">
								<div id="donut-chart"></div>
							</div>
						</div>
					</div>
				</div>

        <div class="row">
            <div class="col-md-12 col-lg-6">
				<div class="card card-chart">
                    <div class="card-header">
                      
                    </div>
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6">
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">VISITORS</h4> </div>
							<div class="card-body">
								<div id="line-chart"></div>
							</div>
						</div>
			</div>
        </div>


    </div>
</div>



 <!-- javascript -->
<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(am5percent.PieChart.new(root, {
  radius: am5.percent(90),
  innerRadius: am5.percent(50),
  layout: root.horizontalLayout
}));

// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
var series = chart.series.push(am5percent.PieSeries.new(root, {
  name: "Series",
  valueField: "sales",
  categoryField: "User"
}));

// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
series.data.setAll([{
  User: "User",
  sales: 501.9
}, {
  User: "Admin",
  sales: 301.9
}]);

// Disabling labels and ticks
series.labels.template.set("visible", false);
series.ticks.template.set("visible", false);

// Adding gradients
series.slices.template.set("strokeOpacity", 0);
series.slices.template.set("fillGradient", am5.RadialGradient.new(root, {
  stops: [{
    brighten: -0.8
  }, {
    brighten: -0.8
  }, {
    brighten: -0.5
  }, {
    brighten: 0
  }, {
    brighten: -0.5
  }]
}));

// Create legend
// https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
var legend = chart.children.push(am5.Legend.new(root, {
  centerY: am5.percent(50),
  y: am5.percent(50),
  marginTop: 15,
  marginBottom: 15,
  layout: root.verticalLayout
}));

legend.data.setAll(series.dataItems);


// Play initial series animation
// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
series.appear(1000, 100);

}); // end am5.ready()
</script>
 

@endsection