<template>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-transparent card-block card-stretch card-height border-none">
            <div class="card-body p-0 mt-lg-2 mt-0">
              <h3 class="mb-3">Hi Graham, Good Morning</h3>
              <p class="mb-0 mr-4">Your dashboard gives you views of key performance or business process.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4 col-md-4" v-for="(progres,index) in progress" :key="index">
              <div class="card card-block card-stretch card-height">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4 card-total-sale">
                    <div :class="`icon iq-icon-box-2 bg-${progres.color}-light`"> <img :src="progres.src" class="img-fluid" alt="image"> </div>
                    <div>
                      <p class="mb-2">{{progres.title}}</p>
                      <h4>{{progres.contain}}</h4> </div>
                  </div>
                  <div class="iq-progress-bar mt-2">
                    <Progressbar :color="progres.color" :value="progres.value" /> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                <h4 class="card-title">Overview</h4> </div>
              <div class="card-header-toolbar d-flex align-items-center">
                <b-dropdown id="dropdownMenuButton1" right variant="none p-0" data-toggle="dropdown" class="dropdown shadow-none">
                  <template v-slot:button-content> <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton001" data-toggle="dropdown">
                                      This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                  </span> </template>
                  <b-dropdown-item>{{ ('Year') }}</b-dropdown-item>
                  <b-dropdown-item>{{ ('Month') }}</b-dropdown-item>
                  <b-dropdown-item>{{ ('Week') }}</b-dropdown-item>
                </b-dropdown>
              </div>
            </div>
            <div class="card-body">
              <ApexChart element="layout1-chart1" :chartOption="chart1" /> </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex align-items-center justify-content-between">
              <div class="header-title">
                <h4 class="card-title">Revenue Vs Cost</h4> </div>
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
              <AmChart element="layout1-chart-2" type="RevenueCost" style="min-height:360px;" /> </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex align-items-center justify-content-between">
              <div class="header-title">
                <h4 class="card-title">Top Products</h4> </div>
              <div class="card-header-toolbar d-flex align-items-center">
                <b-dropdown id="dropdownMenuButton1" right variant="none p-0" data-toggle="dropdown" class="dropdown shadow-none">
                  <template v-slot:button-content> <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton006" data-toggle="dropdown">
                                      This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                  </span> </template>
                  <b-dropdown-item>{{ ('Year') }}</b-dropdown-item>
                  <b-dropdown-item>{{ ('Month') }}</b-dropdown-item>
                  <b-dropdown-item>{{ ('Week') }}</b-dropdown-item>
                </b-dropdown>
              </div>
            </div>
            <div class="card-body">
              <Slick :option="option2">
                <li class="col-lg-12">
                  <div class="card card-block card-stretch card-height mb-0">
                    <div class="card-body">
                      <div class="bg-warning-light rounded"> <img src="@/assets/images/product/01.png" class="style-img img-fluid m-auto p-3" alt="image"> </div>
                      <div class="style-text text-left mt-3">
                        <h5 class="mb-1">Organic Cream</h5>
                        <p class="mb-0">789 Item</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-12">
                  <div class="card card-block card-stretch card-height mb-0">
                    <div class="card-body">
                      <div class="bg-danger-light rounded"> <img src="@/assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image"> </div>
                      <div class="style-text text-left mt-3">
                        <h5 class="mb-1">Rain Umbrella</h5>
                        <p class="mb-0">657 Item</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-12">
                  <div class="card card-block card-stretch card-height mb-0">
                    <div class="card-body">
                      <div class="bg-info-light rounded"> <img src="@/assets/images/product/03.png" class="style-img img-fluid m-auto p-3" alt="image"> </div>
                      <div class="style-text text-left mt-3">
                        <h5 class="mb-1">Serum Bottle</h5>
                        <p class="mb-0">489 Item</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-12">
                  <div class="card card-block card-stretch card-height mb-0">
                    <div class="card-body">
                      <div class="bg-success-light rounded"> <img src="@/assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image"> </div>
                      <div class="style-text text-left mt-3">
                        <h5 class="mb-1">Organic Cream</h5>
                        <p class="mb-0">468 Item</p>
                      </div>
                    </div>
                  </div>
                </li>
              </Slick>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-transparent card-block card-stretch mb-4">
            <div class="card-header d-flex align-items-center justify-content-between p-0">
              <div class="header-title">
                <h4 class="card-title mb-0">Best Item All Time</h4> </div>
              <div class="card-header-toolbar d-flex align-items-center">
                <div><a href="#" class="btn btn-primary view-btn font-size-14">View All</a></div>
              </div>
            </div>
          </div>
          <div class="card card-block card-stretch card-height-helf">
            <div class="card-body card-item-right">
              <div class="d-flex align-items-top">
                <div class="bg-warning-light rounded"> <img src="@/assets/images/product/04.png" class="style-img img-fluid m-auto" alt="image"> </div>
                <div class="style-text text-left">
                  <h5 class="mb-2">Coffee Beans Packet</h5>
                  <p class="mb-2">Total Sell : 45897</p>
                  <p class="mb-0">Total Earned : $45,89 M</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-block card-stretch card-height-helf">
            <div class="card-body card-item-right">
              <div class="d-flex align-items-top">
                <div class="bg-danger-light rounded"> <img src="@/assets/images/product/05.png" class="style-img img-fluid m-auto" alt="image"> </div>
                <div class="style-text text-left">
                  <h5 class="mb-2">Bottle Cup Set</h5>
                  <p class="mb-2">Total Sell : 44359</p>
                  <p class="mb-0">Total Earned : $45,50 M</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-block card-stretch card-height-helf">
            <div class="card-body">
              <div class="d-flex align-items-top justify-content-between">
                <div class="">
                  <p class="mb-0">Income</p>
                  <h5>$ 98,7800 K</h5> </div>
                <div class="card-header-toolbar d-flex align-items-center">
                  <b-dropdown id="dropdownMenuButton1" right variant="none p-0" data-toggle="dropdown" class="dropdown shadow-none">
                    <template v-slot:button-content> <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton003" data-toggle="dropdown">
                                          This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                      </span> </template>
                    <b-dropdown-item>{{ ('Year') }}</b-dropdown-item>
                    <b-dropdown-item>{{ ('Month') }}</b-dropdown-item>
                    <b-dropdown-item>{{ ('Week') }}</b-dropdown-item>
                  </b-dropdown>
                </div>
              </div>
              <ApexChart element="layout1-chart-3" :chartOption="chart2" /> </div>
          </div>
          <div class="card card-block card-stretch card-height-helf">
            <div class="card-body">
              <div class="d-flex align-items-top justify-content-between">
                <div class="">
                  <p class="mb-0">Expenses</p>
                  <h5>$ 45,8956 K</h5> </div>
                <div class="card-header-toolbar d-flex align-items-center">
                  <b-dropdown id="dropdownMenuButton1" right variant="none p-0" data-toggle="dropdown" class="dropdown shadow-none">
                    <template v-slot:button-content> <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton004" data-toggle="dropdown">
                                          This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                      </span> </template>
                    <b-dropdown-item>{{ ('Year') }}</b-dropdown-item>
                    <b-dropdown-item>{{ ('Month') }}</b-dropdown-item>
                    <b-dropdown-item>{{ ('Week') }}</b-dropdown-item>
                  </b-dropdown>
                </div>
              </div>
              <ApexChart element="layout1-chart-4" :chartOption="chart3" /> </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                <h4 class="card-title">Order Summary</h4> </div>
              <div class="card-header-toolbar d-flex align-items-center">
                <b-dropdown id="dropdownMenuButton1" right variant="none p-0" data-toggle="dropdown" class="dropdown shadow-none">
                  <template v-slot:button-content> <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005" data-toggle="dropdown">
                                      This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                  </span> </template>
                  <b-dropdown-item>{{ ('Year') }}</b-dropdown-item>
                  <b-dropdown-item>{{ ('Month') }}</b-dropdown-item>
                  <b-dropdown-item>{{ ('Week') }}</b-dropdown-item>
                </b-dropdown>
              </div>
            </div>
            <div class="card-body pb-2">
              <div class="d-flex flex-wrap align-items-center mt-2">
                <div class="d-flex align-items-center progress-order-left">
                  <div class="progress progress-round m-0 orange conversation-bar" data-percent="46"> <span class="progress-left">
                                          <span class="progress-bar"></span> </span> <span class="progress-right">
                                          <span class="progress-bar"></span> </span>
                    <div class="progress-value text-secondary">46%</div>
                  </div>
                  <div class="progress-value ml-3 pr-5 border-right">
                    <h5>$12,6598</h5>
                    <p class="mb-0">Average Orders</p>
                  </div>
                </div>
                <div class="d-flex align-items-center ml-5 progress-order-right">
                  <div class="progress progress-round m-0 primary conversation-bar" data-percent="46"> <span class="progress-left">
                                          <span class="progress-bar"></span> </span> <span class="progress-right">
                                          <span class="progress-bar"></span> </span>
                    <div class="progress-value text-primary">46%</div>
                  </div>
                  <div class="progress-value ml-3">
                    <h5>$59,8478</h5>
                    <p class="mb-0">Top Orders</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <ApexChart element="layout1-chart-5" :chartOption="chart4" /> </div>
          </div>
        </div>
      </div>
    </div>
</template>
<script>
import AmChart from '../../../components/charts/AmChart'
import ApexChart from '../../../components/charts/ApexChart'
export default {
    name:'Dashbord1',
    components:{
        ApexChart,
        AmChart
    },
    mounted() {
    },
    destroyed() {
    },
   data(){
     return{
       chart1:{
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
                series: [{
              name: "Desktops",
              data: [17, 23, 15, 28, 22, 32]
          }],
          colors: ['#FF7E41'],
            chart: {
            height: 150,
            type: 'line',
            zoom: {
              enabled: false
            },
            dropShadow: {
              enabled: true,
              color: '#000',
              top: 12,
              left: 1,
              blur: 2,
              opacity: 0.2
            },
            toolbar: {
              show: false
            },
            sparkline: {
              enabled: true,
            }
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            curve: 'smooth',
            width: 3
          },
          title: {
            text: '',
            align: 'left'
          },
          xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          }
            },
      chart3:{
            series: [{
  name: "Desktops",
  data: [17, 23, 15, 28, 22, 32]
}],
colors: ['#32BDEA'],
chart: {
height: 150,
type: 'line',
zoom: {
  enabled: false
},
dropShadow: {
  enabled: true,
  color: '#000',
  top: 12,
  left: 1,
  blur: 2,
  opacity: 0.2
},
toolbar: {
  show: false
},
sparkline: {
  enabled: true,
}
},
dataLabels: {
enabled: false
},
stroke: {
curve: 'smooth',
width: 3
},
title: {
text: '',
align: 'left'
},
xaxis: {
categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
}
      },
      chart4:{
           series: [{
      name: 'Total Likes',
      data: [86, 80, 84, 95, 83, 75, 88, 76, 86, 93, 85, 65]
    }, {
      name: 'Total Share',
      data: [76, 72, 76, 85, 74, 69, 80, 68, 78, 85, 77, 55]
    }],
      chart: {
      type: 'bar',
      height: 300
    },
    colors: ['#32BDEA','#FF7E41'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 3,
          colors: ['transparent']
        },
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          labels: {
            minWidth: 0,
            maxWidth: 0
          }
        },
      yaxis: {
        show: true,
        labels: {
          minWidth: 20,
          maxWidth: 20
        }
      },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
      },
      option2: {
        dots: false,
        arrows: false,
        infinite: true,
        speed: 200,
        centerMode: false,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      },
      progress:[
        {
         color:'info',
         src:require('@/assets/images/product/1.png'),
         title:'Total Cost',
         contain:'31.50',
          value:85
        },
         {
         color:'danger',
         src:require('@/assets/images/product/2.png'),
         title:'Total Cost',
         contain:'$ 4598',
          value:70
        },
         {
         color:'success',
         src:require('@/assets/images/product/3.png'),
         title:'Product Sold',
         contain:'4589 M',
          value:75
        }
      ]
    }
  }
 }   
</script>