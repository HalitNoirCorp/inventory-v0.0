<template>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Overview</h4> </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <b-dropdown id="dropdownMenuButton1" right variant="none p-0" data-toggle="dropdown" class="dropdown shadow-none">
                                    <template v-slot:button-content> <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton1" data-toggle="dropdown">
                                        This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                    </span> </template>
                                    <b-dropdown-item>{{ ('Year') }}</b-dropdown-item>
                                    <b-dropdown-item>{{ ('Month') }}</b-dropdown-item>
                                    <b-dropdown-item>{{ ('Week') }}</b-dropdown-item>
                                </b-dropdown>
                            </div>
                        </div>
                        <div class="card-body">
                            <ApexChart element="layout1-chart1" :chartOption="chart4" /> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Daily Sales</h4> </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <div><a href="#" class="btn light-gray view-btn">$ 25,000.00</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <AmChart element="report-chart2" type="dailysales" style="min-height: 365px;" /> 
                            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Monthly Sales</h4> </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <div><a href="#" class="btn light-gray view-btn">$ 25,000.00</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ApexChart element="report-chart3" :chartOption="chart2" /> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Best Seller</h4> </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <b-dropdown id="dropdownMenuButton1" right variant="none p-0" data-toggle="dropdown" class="dropdown shadow-none">
                                    <template v-slot:button-content> <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton002" data-toggle="dropdown">
                                        This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                    </span> </template>
                                    <b-dropdown-item>{{ ('Year') }}</b-dropdown-item>
                                    <b-dropdown-item>{{ ('Month') }}</b-dropdown-item>
                                    <b-dropdown-item>{{ ('Week') }}</b-dropdown-item>
                                </b-dropdown>
                            </div>
                        </div>
                        <div class="card-body">
                            <ApexChart element="report-chart4" :chartOption="chart3" /> </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
</template>
<script>
import ApexChart from '../../../components/charts/ApexChart'
import AmChart from '../../../components/charts/AmChart'
export default {
    name:'report',
    components:{
        ApexChart,
        AmChart
    },
    mounted() {
    if (localStorage.getItem('reloaded')) {
        // The page was just reloaded. Clear the value from local storage
        // so that it will reload the next time this page is visited.
        localStorage.removeItem('reloaded');
    } else {
        // Set a flag so that we know not to reload the page twice.
        localStorage.setItem('reloaded', '1');
        location.reload();
    }
},
 destroyed() {
    if (localStorage.getItem('reloaded')) {
        // The page was just reloaded. Clear the value from local storage
        // so that it will reload the next time this page is visited.
        localStorage.removeItem('reloaded');
    } else {
        // Set a flag so that we know not to reload the page twice.
        localStorage.setItem('reloaded', '1');
        location.reload();
    }
},
    data(){
        return{
            chart4:{
            chart: {
            height: 350,
            type: "candlestick"
        },
        colors: ["#32BDEA", "#FF7E41"],
        series: [{
            data: [{
            x: new Date(15387786e5),
            y: [6629.81, 6650.5, 6623.04, 6633.33]
            }, {
            x: new Date(15387804e5),
            y: [6632.01, 6643.59, 6620, 6630.11]
            }, {
            x: new Date(15387822e5),
            y: [6630.71, 6648.95, 6623.34, 6635.65]
            }, {
            x: new Date(1538784e6),
            y: [6635.65, 6651, 6629.67, 6638.24]
            }, {
            x: new Date(15387858e5),
            y: [6638.24, 6640, 6620, 6624.47]
            }, {
            x: new Date(15387876e5),
            y: [6624.53, 6636.03, 6621.68, 6624.31]
            }, {
            x: new Date(15387894e5),
            y: [6624.61, 6632.2, 6617, 6626.02]
            }, {
            x: new Date(15387912e5),
            y: [6627, 6627.62, 6584.22, 6603.02]
            }, {
            x: new Date(1538793e6),
            y: [6605, 6608.03, 6598.95, 6604.01]
            }, {
            x: new Date(15387948e5),
            y: [6604.5, 6614.4, 6602.26, 6608.02]
            }, {
            x: new Date(15387966e5),
            y: [6608.02, 6610.68, 6601.99, 6608.91]
            }, {
            x: new Date(15387984e5),
            y: [6608.91, 6618.99, 6608.01, 6612]
            }, {
            x: new Date(15388002e5),
            y: [6612, 6615.13, 6605.09, 6612]
            }, {
            x: new Date(1538802e6),
            y: [6612, 6624.12, 6608.43, 6622.95]
            }, {
            x: new Date(15388038e5),
            y: [6623.91, 6623.91, 6615, 6615.67]
            }, {
            x: new Date(15388056e5),
            y: [6618.69, 6618.74, 6610, 6610.4]
            }, {
            x: new Date(15388074e5),
            y: [6611, 6622.78, 6610.4, 6614.9]
            }, {
            x: new Date(15388092e5),
            y: [6614.9, 6626.2, 6613.33, 6623.45]
            }, {
            x: new Date(1538811e6),
            y: [6623.48, 6627, 6618.38, 6620.35]
            }, {
            x: new Date(15388128e5),
            y: [6619.43, 6620.35, 6610.05, 6615.53]
            }, {
            x: new Date(15388146e5),
            y: [6615.53, 6617.93, 6610, 6615.19]
            }, {
            x: new Date(15388164e5),
            y: [6615.19, 6621.6, 6608.2, 6620]
            }, {
            x: new Date(15388182e5),
            y: [6619.54, 6625.17, 6614.15, 6620]
            }, {
            x: new Date(153882e7),
            y: [6620.33, 6634.15, 6617.24, 6624.61]
            }, {
            x: new Date(15388218e5),
            y: [6625.95, 6626, 6611.66, 6617.58]
            }, {
            x: new Date(15388236e5),
            y: [6619, 6625.97, 6595.27, 6598.86]
            }, {
            x: new Date(15388254e5),
            y: [6598.86, 6598.88, 6570, 6587.16]
            }, {
            x: new Date(15388272e5),
            y: [6588.86, 6600, 6580, 6593.4]
            }, {
            x: new Date(1538829e6),
            y: [6593.99, 6598.89, 6585, 6587.81]
            }, {
            x: new Date(15388308e5),
            y: [6587.81, 6592.73, 6567.14, 6578]
            }, {
            x: new Date(15388326e5),
            y: [6578.35, 6581.72, 6567.39, 6579]
            }, {
            x: new Date(15388344e5),
            y: [6579.38, 6580.92, 6566.77, 6575.96]
            }, {
            x: new Date(15388362e5),
            y: [6575.96, 6589, 6571.77, 6588.92]
            }, {
            x: new Date(1538838e6),
            y: [6588.92, 6594, 6577.55, 6589.22]
            }, {
            x: new Date(15388398e5),
            y: [6589.3, 6598.89, 6589.1, 6596.08]
            }, {
            x: new Date(15388416e5),
            y: [6597.5, 6600, 6588.39, 6596.25]
            }, {
            x: new Date(15388434e5),
            y: [6598.03, 6600, 6588.73, 6595.97]
            }, {
            x: new Date(15388452e5),
            y: [6595.97, 6602.01, 6588.17, 6602]
            }, {
            x: new Date(1538847e6),
            y: [6602, 6607, 6596.51, 6599.95]
            }, {
            x: new Date(15388488e5),
            y: [6600.63, 6601.21, 6590.39, 6591.02]
            }, {
            x: new Date(15388506e5),
            y: [6591.02, 6603.08, 6591, 6591]
            }, {
            x: new Date(15388524e5),
            y: [6591, 6601.32, 6585, 6592]
            }, {
            x: new Date(15388542e5),
            y: [6593.13, 6596.01, 6590, 6593.34]
            }, {
            x: new Date(1538856e6),
            y: [6593.34, 6604.76, 6582.63, 6593.86]
            }, {
            x: new Date(15388578e5),
            y: [6593.86, 6604.28, 6586.57, 6600.01]
            }, {
            x: new Date(15388596e5),
            y: [6601.81, 6603.21, 6592.78, 6596.25]
            }, {
            x: new Date(15388614e5),
            y: [6596.25, 6604.2, 6590, 6602.99]
            }, {
            x: new Date(15388632e5),
            y: [6602.99, 6606, 6584.99, 6587.81]
            }, {
            x: new Date(1538865e6),
            y: [6587.81, 6595, 6583.27, 6591.96]
            }, {
            x: new Date(15388668e5),
            y: [6591.97, 6596.07, 6585, 6588.39]
            }, {
            x: new Date(15388686e5),
            y: [6587.6, 6598.21, 6587.6, 6594.27]
            }, {
            x: new Date(15388704e5),
            y: [6596.44, 6601, 6590, 6596.55]
            }, {
            x: new Date(15388722e5),
            y: [6598.91, 6605, 6596.61, 6600.02]
            }, {
            x: new Date(1538874e6),
            y: [6600.55, 6605, 6589.14, 6593.01]
            }, {
            x: new Date(15388758e5),
            y: [6593.15, 6605, 6592, 6603.06]
            }]
        }],
        title: {
            text: "$45,78956",
            align: "left"
        },
        xaxis: {
            type: "datetime"
        },
        yaxis: {
            tooltip: {
            enabled: !0
            },
            labels: {
            offsetX: -2,
            offsetY: 0,
            minWidth: 30,
            maxWidth: 30,
            }
        },
        plotOptions: {
            candlestick: {
            colors: {
                upward: '#FF7E41',
                downward: '#32BDEA'
            }
            }
        }
            },
            chart2:{
            series: [
            {
                name: 'Bob',
                data: [
                {
                    x: 'Design',
                    y: [
                    new Date('2019-03-05').getTime(),
                    new Date('2019-03-08').getTime()
                    ]
                },
                {
                    x: 'Code',
                    y: [
                    new Date('2019-03-02').getTime(),
                    new Date('2019-03-05').getTime()
                    ]
                },
                {
                    x: 'Code',
                    y: [
                    new Date('2019-03-05').getTime(),
                    new Date('2019-03-07').getTime()
                    ]
                },
                {
                    x: 'Test',
                    y: [
                    new Date('2019-03-03').getTime(),
                    new Date('2019-03-09').getTime()
                    ]
                },
                {
                    x: 'Test',
                    y: [
                    new Date('2019-03-08').getTime(),
                    new Date('2019-03-11').getTime()
                    ]
                },
                {
                    x: 'Validation',
                    y: [
                    new Date('2019-03-11').getTime(),
                    new Date('2019-03-16').getTime()
                    ]
                },
                {
                    x: 'Design',
                    y: [
                    new Date('2019-03-01').getTime(),
                    new Date('2019-03-03').getTime()
                    ]
                }
                ]
            },
            {
                name: 'Joe',
                data: [
                {
                    x: 'Design',
                    y: [
                    new Date('2019-03-02').getTime(),
                    new Date('2019-03-05').getTime()
                    ]
                },
                {
                    x: 'Test',
                    y: [
                    new Date('2019-03-06').getTime(),
                    new Date('2019-03-16').getTime()
                    ]
                },
                {
                    x: 'Code',
                    y: [
                    new Date('2019-03-03').getTime(),
                    new Date('2019-03-07').getTime()
                    ]
                },
                {
                    x: 'Deployment',
                    y: [
                    new Date('2019-03-20').getTime(),
                    new Date('2019-03-22').getTime()
                    ]
                },
                {
                    x: 'Design',
                    y: [
                    new Date('2019-03-10').getTime(),
                    new Date('2019-03-16').getTime()
                    ]
                }
                ]
            },
            {
                name: 'Dan',
                data: [
                {
                    x: 'Code',
                    y: [
                    new Date('2019-03-10').getTime(),
                    new Date('2019-03-17').getTime()
                    ]
                },
                {
                    x: 'Validation',
                    y: [
                    new Date('2019-03-05').getTime(),
                    new Date('2019-03-09').getTime()
                    ]
                },
                ]
            }
            ],
            chart: {
            height: 350,
            type: 'rangeBar'
            },
            colors: ['#32BDEA', '#e83e8c', '#FF7E41'],
            plotOptions: {
            bar: {
                horizontal: true,
                barHeight: '80%'
            }
            },
            xaxis: {
            type: 'datetime'
            },
            
            stroke: {
            width: 1
            },
            fill: {
            type: 'solid',
            opacity: 1
            },
            legend: {
            position: 'top',
            horizontalAlign: 'left'
            }
            },
            chart3:{
               series: [{
            name: "SAMPLE A",
            data: [
            [16.4, 5.4], [10.9, 7.4],[10.9, 8.2], [16.4, 1.8], [13.6, 0.3],  [27.1, 2.3],  [13.6, 3.7], [10.9, 5.2], [16.4, 6.5],  [24.5, 7.1], [10.9, 0], [8.1, 4.7],  [21.7, 1.8], [29.9, 1.5], [27.1, 0.8], [22.1, 2]]
            },{
            name: "SAMPLE B",
            data: [
            [36.4, 13.4], [1.7, 11], [1.4, 7],  [3.6, 13.7], [1.9, 15.2], [6.4, 16.5], [0.9, 10], [4.5, 17.1], [10.9, 10], [0.1, 14.7], [9, 10], [12.7, 11.8], [2.1, 10], [2.5, 10], [27.1, 10], [2.9, 11.5], [7.1, 10.8], [2.1, 12]]
            },{
            name: "SAMPLE C",
            data: [
            [21.7, 3], [23.6, 3.5], [24.6, 3], [29.9, 3], [21.7, 20], [19, 5], [22.4, 3], [24.5, 3], [32.6, 3],  [21.6, 5], [20.9, 4], [22.4, 0], [32.6, 10.3], [29.7, 20.8], [24.5, 0.8], [21.4, 0], [21.7, 6.9], [28.6, 7.7]]
            }],
            chart: {
            height: 350,
            type: 'scatter',
            zoom: {
                enabled: true,
                type: 'xy'
                 }
            },
            colors: ['#32BDEA', '#e83e8c', '#FF7E41'],
            xaxis: {
            tickAmount: 10,
            labels: {
                formatter: function(val) {
                return parseFloat(val).toFixed(1)
                }
            }
            },
            yaxis: {
            tickAmount: 7,
            show: true,
            labels: {
                minWidth: 20,
                maxWidth: 20
            }
            }
            }
        }  
    }
}
</script>