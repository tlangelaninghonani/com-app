<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['CSS'] }}">
    <script src="{{ $links['JS'] }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
</head>
<body>
    @include("components.header")
    <div class="container">
        <div class="display-flex-space-between">
            <span>Sales overview</span>
            <div class="filters">
                <div class="filter-selected">
                    <span>Yearly</span>
                </div>
                <div class="filter" style="padding-left: 12px;">
                    <span>Monthly</span>
                </div>
                <div class="filter" style="padding-left: 12px; padding-right: 24px;">
                    <span>Weekly</span>
                </div>
            </div>
            <!-- <div class="display-flex-align">
                <div class="display-flex-align cursor-pointer">
                    <span class="material-symbols-sharp">
                    calendar_today
                    </span>
                    <span class="nowrap">{{ date("M - d") }}</span>
                </div>
                <div class="action-icon-light">
                    <span class="material-symbols-sharp">
                    arrow_drop_down
                    </span>
                </div>
            </div> -->
        </div>
        <div class="breaker-3"></div>
        <style>
            .charts-grid{
                display: grid;
                grid-template-columns: auto auto;
                gap: 24px;
            }

            .chart-binder{
                width: 100%;
            }

            .branches-binder{
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: var(--radius);
                padding: 0 var(--padding);
                background-color: var(--gray);
                height: var(--common-height);
            }

            .filters{
                height: var(--common-height);
                border-radius: var(--radius);
                background-color: var(--gray);
                display: flex;
                align-items: center;
            }

            .filter{
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .filter-selected{
                background-color: var(--main-color);
                display: flex;
                align-items: center;
                justify-content: center;
                height: var(--common-height);
                border-radius: var(--radius);
                padding: 0 var(--padding);
            }

            .filter-selected *{
                color: white;
            }

            .chart-binder-2{
                width: 100px;
            }
        </style>
        <div class="charts-grid">
            <div class="chart-binder-1">
                <span>Monthly signed clients</span>
                <div class="breaker"></div>
                <div class="breaker-dotted-feint"></div>
                <div class="breaker"></div>
                <canvas id="myChart" class="chart"></canvas>
            </div>
            <!-- <div class="chart-binder-2 display-flex-center">
                <canvas id="myChart2" class="chart"></canvas>
            </div> -->
            <div>
                <span>Branch performance</span>
                <div class="breaker"></div>
                <div class="display-flex-align">
                    <div>
                        <div class="display-flex-align">
                            <div class="chart-binder-2 display-flex-center">
                                <canvas id="myChart2" class="chart"></canvas>
                            </div>
                            <div>
                                <span>Giyani</span><br>
                                <span>Signed - {{ $cases->where("branch", "giyani")->count() }}</span><br>
                                <span>Paid - {{ $cases->where("branch", "giyani")->where("paid", true)->count() }}</span><br>
                                <div class="display-flex-align">
                                <span class="material-symbols-sharp">
                                trending_up
                                </span>
                                <span>Performance - {{ number_format(($cases->where('paid', true)->where('branch', 'giyani')->count() / $cases->where('paid', true)->count() * 100), 2, ".", ",") }}</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="display-flex-align">
                            <div class="chart-binder-2 display-flex-center">
                                <canvas id="myChart3" class="chart"></canvas>
                            </div>
                            <div>
                                <span>Polokwane</span><br>
                                <span>Signed - {{ $cases->where("branch", "polokwane")->count() }}</span><br>
                                <span>Paid - {{ $cases->where("branch", "polokwane")->where("paid", true)->count() }}</span><br>
                                <div class="display-flex-align">
                                <span class="material-symbols-sharp">
                                trending_up
                                </span>
                                <span>Performance - {{ number_format(($cases->where('paid', true)->where('branch', 'polokwane')->count() / $cases->where('paid', true)->count() * 100), 2, ".", ",") }}</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <div class="display-flex-align">
                            <div class="chart-binder-2 display-flex-center">
                                <canvas id="myChart4" class="chart"></canvas>
                            </div>
                            <div>
                                <span>Johannesburg</span><br>
                                <span>Signed - {{ $cases->where("branch", "johannesburg")->count() }}</span><br>
                                <span>Paid - {{ $cases->where("branch", "johannesburg")->where("paid", true)->count() }}</span><br>
                                <div class="display-flex-align">
                                <span class="material-symbols-sharp">
                                trending_up
                                </span>
                                <span>Performance - {{ number_format(($cases->where('paid', true)->where('branch', 'johannesburg')->count() / $cases->where('paid', true)->count() * 100), 2, ".", ",") }}</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="display-flex-align">
                            <div class="chart-binder-2 display-flex-center">
                                <canvas id="myChart5" class="chart"></canvas>
                            </div>
                            <div>
                                <span>Bloemfontein</span><br>
                                <span>Signed - {{ $cases->where("branch", "bloemfontein")->count() }}</span><br>
                                <span>Paid - {{ $cases->where("branch", "bloemfontein")->where("paid", true)->count() }}</span><br>
                                <div class="display-flex-align">
                                <span class="material-symbols-sharp">
                                trending_up
                                </span>
                                <span>Performance - {{ number_format(($cases->where('paid', true)->where('branch', 'bloemfontein')->count() / $cases->where('paid', true)->count() * 100), 2, ".", ",") }}</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breaker-4"></div>
        <div class="display-flex-align mid-gap">
            <div>
                <div class="display-flex-align">
                    <span class="material-symbols-sharp icon-mid">
                    verified
                    </span>
                    <div>
                        <span class="nowrap">Signed clients</span><br>
                        <span>Total - {{ $cases->count() }}</span>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="branches-binder">
                    <div class="display-flex-align">
                        <span>GYN <br> {{ $cases->where("branch", "giyani")->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>PLK <br> {{ $cases->where("branch", "polokwane")->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>JHB <br> {{ $cases->where("branch", "johannesburg")->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>BLM <br> {{ $cases->where("branch", "bloemfontein")->count() }}</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="display-flex-align">
                    <span class="material-symbols-sharp icon-mid">
                    done_all
                    </span>
                    <div>
                        <span class="nowrap">Paid clients</span><br>
                        <span>Total - {{ $cases->where("paid", true)->count() }}</span>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="branches-binder">
                    <div class="display-flex-align">
                        <span>GYN <br> {{ $cases->where("branch", "giyani")->where("paid", true)->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>PLK <br> {{ $cases->where("branch", "polokwane")->where("paid", true)->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>JHB <br> {{ $cases->where("branch", "johannesburg")->where("paid", true)->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>BLM <br> {{ $cases->where("branch", "bloemfontein")->where("paid", true)->count() }}</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="display-flex-align">
                    <span class="material-symbols-sharp icon-mid">
                    close
                    </span>
                    <div>
                        <span class="nowrap">Unpaid clients</span><br>
                        <span>Total - {{  $cases->where("paid", false)->count() }}</span>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="branches-binder">
                    <div class="display-flex-align">
                        <span>GYN <br> {{ $cases->where("branch", "giyani")->where("paid", false)->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>PLK <br> {{ $cases->where("branch", "polokwane")->where("paid", false)->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>JHB <br> {{ $cases->where("branch", "johannesburg")->where("paid", false)->count() }}</span>
                        <span class="gray-dark">|</span>
                        <span>BLM <br> {{ $cases->where("branch", "bloemfontein")->where("paid", false)->count() }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="breaker-4"></div>
        <div class="display-flex-align">
            <div>
                <span>Performing agents</span><br>
                <span class="gray-dark">Most performing agents</span>
            </div>
            <span class="material-symbols-sharp action-icon cursor-pointer" onclick="redirect('/agents')">
            north_east
            </span>
        </div>
        <div class="breaker"></div>
        <div class="perf-table">
            <table>
                <tr>
                    <th>
                        <span class="material-symbols-sharp">
                        tag
                        </span>
                    </th>
                    <th>Agent's name</th>
                    <th>Agent's extension</th>
                    <th>Agent's mobile</th>
                    <th>Branch</th>
                    <th class="gray">Signed clients</th>
                    <th class="gray">Paid clients</th>
                </tr>
                @foreach($agents as $agent)
                    @if($cases->where("agent_id", $agent->id)->where("paid", true)->count() < 3)
                        @continue
                    @endif
                    <tr>
                        <td>{{ $agent->id }}</td>
                        <td>{{ ucwords($agent->first_name. " ".$agent->last_name) }}</td>
                        <td>{{ $agent->extension }}</td>
                        <td>{{ $agent->mobile }}</td>
                        <td>{{ ucwords($agent->branch) }}</td>
                        <td class="gray">{{ $cases->where("agent_id", $agent->id)->count() }}</td>
                        <td class="gray">{{ $cases->where("agent_id", $agent->id)->where("paid", true)->count() }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        const chartMonths = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const chartSignedClients = [
            "{{ $cases->where('month_signed', '1')->count() }}",
            "{{ $cases->where('month_signed', '2')->count() }}",
            "{{ $cases->where('month_signed', '3')->count() }}",
            "{{ $cases->where('month_signed', '4')->count() }}",
            "{{ $cases->where('month_signed', '5')->count() }}",
            "{{ $cases->where('month_signed', '6')->count() }}",
            "{{ $cases->where('month_signed', '7')->count() }}",
            "{{ $cases->where('month_signed', '8')->count() }}",
            "{{ $cases->where('month_signed', '9')->count() }}",
            "{{ $cases->where('month_signed', '10')->count() }}",
            "{{ $cases->where('month_signed', '11')->count() }}",
            "{{ $cases->where('month_signed', '12')->count() }}",
        ];

        const chartPaidClients = [
            "{{ $cases->where('month_signed', '1')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '2')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '3')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '4')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '5')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '6')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '7')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '8')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '9')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '10')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '11')->where('paid', true)->count() }}",
            "{{ $cases->where('month_signed', '12')->where('paid', true)->count() }}",
        ];

        Chart.defaults.font.size = 12;
        Chart.defaults.font.family = "Helvetica-Mid";
        Chart.defaults.font.color = "rgb(0, 0, 0)";
        Chart.defaults.borderColor	= "rgb(250, 250, 250)";

        new Chart("myChart", {
        type: "line",
        data: {
            labels: chartMonths,
                datasets: [{
                    backgroundColor: "transparent",
                    borderColor: "rgb(0, 0, 0)",
                    pointBackgroundColor: "rgb(0, 0, 0)",
                    borderWidth: 2,
                    tension: 0,
                    fill: true,
                    pointStyle: "circle",
                    pointRadius: 4,
                    pointHoverRadius: 4,
                    data: chartSignedClients,
                    tension: 0.2
                },
                {
                    backgroundColor: "transparent",
                    borderColor: "rgb(0, 0, 0)",
                    pointBackgroundColor: "rgb(0, 0, 0)",
                    borderDash: [14, 6],
                    borderWidth: 2,
                    tension: 0,
                    fill: true,
                    pointStyle: "circle",
                    pointRadius: 4,
                    pointHoverRadius: 4,
                    data: chartPaidClients,
                    tension: 0.2
                }
                ],
            },
        options: {
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    enabled: false,
                }
            },  
            scales: {
                y: {
                    ticks: { 
                        color: "var(--main-color)", 
                        display: true,
                    },
                },
                x: {
                    ticks: { 
                        color: "rgb(0, 0, 0)", 
                        beginAtZero: true,
                    },
                    grid: {
                        lineWidth: 2,
                    },
                }
            }, 
        },
        });
    </script>

    <script>
        var aValues = ["GY", "PLK", "JHB", "BFN"];
        // var bValues = [
        //     "{{ $cases->where('paid', true)->where('branch', 'giyani')->count() }}",
        //     "{{ $cases->where('paid', true)->where('branch', 'polokwane')->count() }}",
        //     "{{ $cases->where('paid', true)->where('branch', 'johannesburg')->count() }}",
        //     "{{ $cases->where('paid', true)->where('branch', 'bloemfontein')->count() }}"
        // ];
        var barColors = [
        "rgb(0, 0, 0)",
        "rgb(250, 250, 250)",
        ];        
    </script>

        <script>
            new Chart("myChart2", {
            type: "pie",
            data: {
                labels: aValues,
                datasets: [{
                backgroundColor: barColors,
                data: ["{{ $cases->where('paid', true)->where('branch', 'giyani')->count() }}", "{{ $cases->where('paid', true)->count() }}"],
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: false,
                    }
                },  
                scales: {
                    y: {
                        display: false
                    },
                },
            }
            });

            new Chart("myChart3", {
            type: "pie",
            data: {
                labels: aValues,
                datasets: [{
                backgroundColor: barColors,
                data: ["{{ $cases->where('paid', true)->where('branch', 'polokwane')->count() }}", "{{ $cases->where('paid', true)->count() }}"],
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: false,
                    }
                },  
                scales: {
                    y: {
                        display: false
                    },
                },
            }
            });

            new Chart("myChart4", {
            type: "pie",
            data: {
                labels: aValues,
                datasets: [{
                backgroundColor: barColors,
                data: ["{{ $cases->where('paid', true)->where('branch', 'johannesburg')->count() }}", "{{ $cases->where('paid', true)->count() }}"],
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: false,
                    }
                },  
                scales: {
                    y: {
                        display: false
                    },
                },
            }
            });

            new Chart("myChart5", {
            type: "pie",
            data: {
                labels: aValues,
                datasets: [{
                backgroundColor: barColors,
                data: ["{{ $cases->where('paid', true)->where('branch', 'bloemfontein')->count() }}", "{{ $cases->where('paid', true)->count() }}"],
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: false,
                    }
                },  
                scales: {
                    y: {
                        display: false
                    },
                },
            }
            });
        </script>

</body>
</html>