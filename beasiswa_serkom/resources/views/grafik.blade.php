@extends('layouts.app')

@section('content')
    <div class="container mt-4 mb-4">
        <div class="card shadow-sm">
            <div class="card-header text-center" style="background-color: #478CCF; color: #240750;">
                <h2>Grafik Jumlah Pendaftar</h2>
            </div>
            <div class="card-body pb-4">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var labels = {!! json_encode($labels) !!};
            var totals = {!! json_encode($totals) !!};

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Pendaftar',
                        data: totals,
                        backgroundColor: '#4535C1', // Hex to RGBA with 20% opacity
                        borderColor: '#0C1844',
                        borderWidth: 2,
                        pointBackgroundColor: '#F94A29',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#F94A29',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    return context.raw.toLocaleString();
                                }
                            }
                        },
                        legend: {
                            display: true,
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Jumlah Pendaftar Periode'
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0,
                                callback: function (value, index, values) {
                                    return value.toLocaleString();
                                }
                            },
                            grid: {
                                color: 'rgba(200, 200, 200, 0.2)'
                            }
                        }
                    }
                }
            });
        });
    </script>

    <style>
        .card {
            border-radius: 15px;
        }

        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        body {
            padding-bottom: 20px; /* Padding bottom for the whole page */
        }
    </style>
@endsection
