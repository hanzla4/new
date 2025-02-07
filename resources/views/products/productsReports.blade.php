@extends('layouts.layout')

@section('title', 'Product Reports')

@section('content')
<div class="px-3">
    <div class="container-fluid">
        <div class="py-3 py-lg-4">
            <!-- Page Title -->
            <h2 class="text-center">Product Sales Reports</h2>

            <!-- Stats Section -->
            <div class="row mb-4">
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h4>Total Sales</h4>
                            <p class="fs-2 fw-bold">1,234</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h4>Products Sold</h4>
                            <p class="fs-2 fw-bold">5,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h4>Average Sale</h4>
                            <p class="fs-2 fw-bold">2.5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h4>Return Rate</h4>
                            <p class="fs-2 fw-bold">5%</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Graphs Section -->
            <div class="row">
                <!-- Line Chart for Sales Over Time -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Sales Over Time (Units)</h5>
                            <canvas id="salesLineChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Bar Chart for Product Sales Comparison -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Product Sales Comparison</h5>
                            <canvas id="productSalesBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Charts Section -->
            <div class="row">
                <!-- Doughnut Chart for Sales Distribution -->
                <div class="col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Sales Distribution by Category</h5>
                            <canvas id="salesDoughnutChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Radar Chart for Product Performance -->
                <div class="col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Product Performance</h5>
                            <canvas id="productRadarChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart for Return vs Sales -->
                <div class="col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Return vs Sales</h5>
                            <canvas id="returnVsSalesPieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Line Chart for Sales Over Time
    var ctxLine = document.getElementById('salesLineChart').getContext('2d');
    var salesLineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Units Sold',
                data: [500, 600, 700, 800, 650],
                borderColor: '#4e73df',
                fill: false,
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Bar Chart for Product Sales Comparison
    var ctxBar = document.getElementById('productSalesBarChart').getContext('2d');
    var productSalesBarChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Product A', 'Product B', 'Product C', 'Product D'],
            datasets: [{
                label: 'Units Sold',
                data: [1200, 1500, 800, 1300],
                backgroundColor: '#1cc88a',
                borderColor: '#17a673',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Doughnut Chart for Sales Distribution by Category
    var ctxDoughnut = document.getElementById('salesDoughnutChart').getContext('2d');
    var salesDoughnutChart = new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: ['Electronics', 'Clothing', 'Groceries', 'Furniture'],
            datasets: [{
                label: 'Sales by Category',
                data: [30, 25, 20, 25],
                backgroundColor: ['#ff9999', '#66b3ff', '#99ff99', '#ffcc99']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Radar Chart for Product Performance
    var ctxRadar = document.getElementById('productRadarChart').getContext('2d');
    var productRadarChart = new Chart(ctxRadar, {
        type: 'radar',
        data: {
            labels: ['Speed', 'Durability', 'Design', 'Price', 'Quality'],
            datasets: [{
                label: 'Product A',
                data: [5, 4, 3, 4, 5],
                backgroundColor: 'rgba(0, 123, 255, 0.2)',
                borderColor: '#007bff',
                borderWidth: 1
            }, {
                label: 'Product B',
                data: [3, 4, 5, 4, 3],
                backgroundColor: 'rgba(40, 167, 69, 0.2)',
                borderColor: '#28a745',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Pie Chart for Return vs Sales
    var ctxPie = document.getElementById('returnVsSalesPieChart').getContext('2d');
    var returnVsSalesPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Sales', 'Returns'],
            datasets: [{
                data: [95, 5],
                backgroundColor: ['#28a745', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
@endsection
