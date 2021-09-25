var lineOptions = {
    chart: {
        type: "line",
    },
    series: [{
        name: "Cross Val Score",
        data: [0.2546, 0.2546, 0.3636, 0.3235, 0.2851, 1.1238, 0.1458, 0.3459],
    }, ],
    xaxis: {
        categories: ["Linear", "Ridge", "Random Forest", "SVR", "K-Nearest Neighbor", "Neural Network", "Lasso", "Decision Tree"],
    },
};
var candleOptions = {
    series: [{
        name: "candle",
        data: [{
                x: new Date(1538778600000),
                y: [6629.81, 6650.5, 6623.04, 6633.33],
            },
            {
                x: new Date(1538780400000),
                y: [6632.01, 6643.59, 6620, 6630.11],
            },
            {
                x: new Date(1538782200000),
                y: [6630.71, 6648.95, 6623.34, 6635.65],
            },
            {
                x: new Date(1538784000000),
                y: [6635.65, 6651, 6629.67, 6638.24],
            },
            {
                x: new Date(1538785800000),
                y: [6638.24, 6640, 6620, 6624.47],
            },
            {
                x: new Date(1538787600000),
                y: [6624.53, 6636.03, 6621.68, 6624.31],
            },
            {
                x: new Date(1538789400000),
                y: [6624.61, 6632.2, 6617, 6626.02],
            },
            {
                x: new Date(1538791200000),
                y: [6627, 6627.62, 6584.22, 6603.02],
            },
            {
                x: new Date(1538793000000),
                y: [6605, 6608.03, 6598.95, 6604.01],
            },
            {
                x: new Date(1538794800000),
                y: [6604.5, 6614.4, 6602.26, 6608.02],
            },
            {
                x: new Date(1538796600000),
                y: [6608.02, 6610.68, 6601.99, 6608.91],
            },
            {
                x: new Date(1538798400000),
                y: [6608.91, 6618.99, 6608.01, 6612],
            },
            {
                x: new Date(1538800200000),
                y: [6612, 6615.13, 6605.09, 6612],
            },
            {
                x: new Date(1538802000000),
                y: [6612, 6624.12, 6608.43, 6622.95],
            },
            {
                x: new Date(1538803800000),
                y: [6623.91, 6623.91, 6615, 6615.67],
            },
            {
                x: new Date(1538805600000),
                y: [6618.69, 6618.74, 6610, 6610.4],
            },
            {
                x: new Date(1538807400000),
                y: [6611, 6622.78, 6610.4, 6614.9],
            },
            {
                x: new Date(1538809200000),
                y: [6614.9, 6626.2, 6613.33, 6623.45],
            },
            {
                x: new Date(1538811000000),
                y: [6623.48, 6627, 6618.38, 6620.35],
            },
            {
                x: new Date(1538812800000),
                y: [6619.43, 6620.35, 6610.05, 6615.53],
            },
            {
                x: new Date(1538814600000),
                y: [6615.53, 6617.93, 6610, 6615.19],
            },
            {
                x: new Date(1538816400000),
                y: [6615.19, 6621.6, 6608.2, 6620],
            },
            {
                x: new Date(1538818200000),
                y: [6619.54, 6625.17, 6614.15, 6620],
            },
            {
                x: new Date(1538820000000),
                y: [6620.33, 6634.15, 6617.24, 6624.61],
            },
            {
                x: new Date(1538821800000),
                y: [6625.95, 6626, 6611.66, 6617.58],
            },
            {
                x: new Date(1538823600000),
                y: [6619, 6625.97, 6595.27, 6598.86],
            },
            {
                x: new Date(1538825400000),
                y: [6598.86, 6598.88, 6570, 6587.16],
            },
            {
                x: new Date(1538827200000),
                y: [6588.86, 6600, 6580, 6593.4],
            },
            {
                x: new Date(1538829000000),
                y: [6593.99, 6598.89, 6585, 6587.81],
            },
            {
                x: new Date(1538830800000),
                y: [6587.81, 6592.73, 6567.14, 6578],
            },
            {
                x: new Date(1538832600000),
                y: [6578.35, 6581.72, 6567.39, 6579],
            },
            {
                x: new Date(1538834400000),
                y: [6579.38, 6580.92, 6566.77, 6575.96],
            },
            {
                x: new Date(1538836200000),
                y: [6575.96, 6589, 6571.77, 6588.92],
            },
            {
                x: new Date(1538838000000),
                y: [6588.92, 6594, 6577.55, 6589.22],
            },
            {
                x: new Date(1538839800000),
                y: [6589.3, 6598.89, 6589.1, 6596.08],
            },
            {
                x: new Date(1538841600000),
                y: [6597.5, 6600, 6588.39, 6596.25],
            },
            {
                x: new Date(1538843400000),
                y: [6598.03, 6600, 6588.73, 6595.97],
            },
            {
                x: new Date(1538845200000),
                y: [6595.97, 6602.01, 6588.17, 6602],
            },
            {
                x: new Date(1538847000000),
                y: [6602, 6607, 6596.51, 6599.95],
            },
            {
                x: new Date(1538848800000),
                y: [6600.63, 6601.21, 6590.39, 6591.02],
            },
            {
                x: new Date(1538850600000),
                y: [6591.02, 6603.08, 6591, 6591],
            },
            {
                x: new Date(1538852400000),
                y: [6591, 6601.32, 6585, 6592],
            },
            {
                x: new Date(1538854200000),
                y: [6593.13, 6596.01, 6590, 6593.34],
            },
            {
                x: new Date(1538856000000),
                y: [6593.34, 6604.76, 6582.63, 6593.86],
            },
            {
                x: new Date(1538857800000),
                y: [6593.86, 6604.28, 6586.57, 6600.01],
            },
            {
                x: new Date(1538859600000),
                y: [6601.81, 6603.21, 6592.78, 6596.25],
            },
            {
                x: new Date(1538861400000),
                y: [6596.25, 6604.2, 6590, 6602.99],
            },
            {
                x: new Date(1538863200000),
                y: [6602.99, 6606, 6584.99, 6587.81],
            },
            {
                x: new Date(1538865000000),
                y: [6587.81, 6595, 6583.27, 6591.96],
            },
            {
                x: new Date(1538866800000),
                y: [6591.97, 6596.07, 6585, 6588.39],
            },
            {
                x: new Date(1538868600000),
                y: [6587.6, 6598.21, 6587.6, 6594.27],
            },
            {
                x: new Date(1538870400000),
                y: [6596.44, 6601, 6590, 6596.55],
            },
            {
                x: new Date(1538872200000),
                y: [6598.91, 6605, 6596.61, 6600.02],
            },
            {
                x: new Date(1538874000000),
                y: [6600.55, 6605, 6589.14, 6593.01],
            },
            {
                x: new Date(1538875800000),
                y: [6593.15, 6605, 6592, 6603.06],
            },
            {
                x: new Date(1538877600000),
                y: [6603.07, 6604.5, 6599.09, 6603.89],
            },
            {
                x: new Date(1538879400000),
                y: [6604.44, 6604.44, 6600, 6603.5],
            },
            {
                x: new Date(1538881200000),
                y: [6603.5, 6603.99, 6597.5, 6603.86],
            },
            {
                x: new Date(1538883000000),
                y: [6603.85, 6605, 6600, 6604.07],
            },
            {
                x: new Date(1538884800000),
                y: [6604.98, 6606, 6604.07, 6606],
            },
        ],
    }, ],
    chart: {
        height: 350,
        type: "candlestick",
    },
    title: {
        text: "CandleStick Chart - Category X-axis",
        align: "left",
    },
    annotations: {
        xaxis: [{
            x: "Oct 06 14:00",
            borderColor: "#00E396",
            label: {
                borderColor: "#00E396",
                style: {
                    fontSize: "12px",
                    color: "#fff",
                    background: "#00E396",
                },
                orientation: "horizontal",
                offsetY: 7,
                text: "Annotation Test",
            },
        }, ],
    },
    tooltip: {
        enabled: true,
    },
    xaxis: {
        type: "category",
        labels: {
            formatter: function(val) {
                return dayjs(val).format("MMM DD HH:mm");
            },
        },
    },
    yaxis: {
        tooltip: {
            enabled: true,
        },
    },
};

var barLinearOptions = {
    series: [{
            name: "Predicted TPK",
            data: [59.95276732, 42.93616586, 30.04694981, 4.18884959, 1.37732777,
                1.93102515, 3.95393299, 6.58366881, 6.01726878, 7.20557878,
                11.11450276, 12.11196237, 8.11345865, 5.4562405, 8.12035659, 9.48706019, 8.556209,
                14.46835728
            ],
        },
        {
            name: "True TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28, 9.53, 9.32, 19, 11.15, 8.99, 10.24, 10.09, 10.35, 16.68],
        },
    ],
    chart: {
        type: "area",
        height: 350,
    },
    dataLabels: {
        enabled: true,
    },
    dataLabels: {
        enabled: false,
    },

    stroke: {
        show: true,
        width: 2,
        // colors: ["transparent"],
        curve: "straight",
    },
    xaxis: {
        categories: ["Jan 20", "Feb 20", "Mar 20", "Apr 20", "May 20", "Jun 20", "Jul 20", "Aug 20", "Sep 20", "Oct 20", "Nov 20", "Dec 20", "Jan 21", "Feb 21", "Mar 21", "Apr 21", "May 21", "Jun 21"],
    },
    yaxis: {
        title: {
            text: "Percent",
        },
    },
    fill: {
        opacity: 1,
    },
    tooltip: {
        y: {
            formatter: function(val) {
                return val + " %";
            },
        },
    },
    colors: ['#2E93fA', '#66DA26']
};

let barRidgeOptions = {
    ...barLinearOptions,
    colors: ['#546E7A', '#E91E63']
}

let barRfOptions = {
    ...barLinearOptions,
    series: [{
            name: "Predicted TPK",
            data: [45.98, 45.98, 36.61794, 4.63597, 2.264, 2.58445,
                2.76984, 6.465375, 5.07145, 9.717085, 22.111265, 11.464005, 8.52593, 5.05901, 8.52593, 9.848945, 11.464005, 23.62813
            ],
        },
        {
            name: "True TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28, 9.53, 9.32, 19, 11.15, 8.99, 10.24, 10.09, 10.35, 16.68],
        },
    ],
    colors: ['#2E93fA', '#66DA26']
}

let barSvrOptions = {
    ...barLinearOptions,
    series: [{
            name: "Predicted TPK",
            data: [37.16051104, 28.43297197, 22.41, 6.77360102, 3.8260097,
                4.55182533, 7.12300269, 10.22853267, 8.27999993, 9.81817968,
                12.49757779, 13.14530789, 10.00895387, 8.13057591, 10.49184745, 11.27913083, 11.57598922,
                15.95167003
            ],
        },
        {
            name: "True TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28, 9.53, 9.32, 19, 11.15, 8.99, 10.24, 10.09, 10.35, 16.68],
        },
    ],
    colors: ['#546E7A', '#E91E63']
}

let barKnrOptions = {
    ...barLinearOptions,
    series: [{
            name: "Predicted TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28,
                9.53, 9.32, 19.0, 11.27901183, 2.88688969, 12.08435434, 15.05259959, 15.75886452,
                21.53990871
            ],
        },
        {
            name: "True TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28, 9.53, 9.32, 19, 11.15, 8.99, 10.24, 10.09, 10.35, 16.68],
        },
    ],
    colors: ['#2E93fA', '#66DA26']
}

let barNnrOptions = {
    ...barLinearOptions,
    series: [{
            name: "Predicted TPK",
            data: [30.20576275, 23.54671922, 10.98704603, 3.98082779, 3.04861583,
                2.92611638, 2.90490933, 3.9973861, 5.67089881, 5.57705311,
                9.90552247, 4.5824404, 3.97939113, 3.28863779, 4.18329355, 3.9282417, 3.94402446,
                6.15507883
            ],
        },
        {
            name: "True TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28, 9.53, 9.32, 19, 11.15, 8.99, 10.24, 10.09, 10.35, 16.68],
        },
    ],
    colors: ['#546E7A', '#E91E63']
}

let barLassoOptions = {
    ...barLinearOptions,
    series: [{
            name: "Predicted TPK",
            data: [59.1530406, 42.4592041, 29.64443708, 4.38335499, 1.79189304,
                2.31955787, 4.18489163, 6.66593829, 6.26276636, 7.35383704,
                11.1752708, 12.02580821, 8.16374317, 5.61241388, 8.13424956, 9.48486473, 8.52212613,
                14.25002574
            ],
        },
        {
            name: "True TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28, 9.53, 9.32, 19, 11.15, 8.99, 10.24, 10.09, 10.35, 16.68],
        },
    ],
    colors: ['#2E93fA', '#66DA26']
}

let barDecisionOptions = {
    ...barLinearOptions,
    colors: ['#008b75'],
    series: [{
            name: "Predicted TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28,
                9.53, 9.32, 19.0, 9.53, 3.22, 9.53, 9.53, 9.53, 25.41
            ],
        },
        {
            name: "True TPK",
            data: [59.29, 45.98, 25.41, 3.22, 2.07, 2.07, 2.57, 3.68, 5.28, 9.53, 9.32, 19, 11.15, 8.99, 10.24, 10.09, 10.35, 16.68],
        },
    ],
    colors: ['#546E7A', '#E91E63']
}

var radialGradientOptions = {
    series: [30],
    chart: {
        height: 350,
        type: "radialBar",
        toolbar: {
            show: true,
        },
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 225,
            hollow: {
                margin: 0,
                size: "70%",
                background: "#fff",
                image: undefined,
                imageOffsetX: 0,
                imageOffsetY: 0,
                position: "front",
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 0,
                    blur: 4,
                    opacity: 0.24,
                },
            },
            track: {
                background: "#fff",
                strokeWidth: "67%",
                margin: 0, // margin is in pixels
                dropShadow: {
                    enabled: true,
                    top: -3,
                    left: 0,
                    blur: 4,
                    opacity: 0.35,
                },
            },

            dataLabels: {
                show: true,
                name: {
                    offsetY: -10,
                    show: true,
                    color: "#888",
                    fontSize: "17px",
                },
                value: {
                    formatter: function(val) {
                        return parseInt(val);
                    },
                    color: "#111",
                    fontSize: "36px",
                    show: true,
                },
            },
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            type: "horizontal",
            shadeIntensity: 0.5,
            gradientToColors: ["#ABE5A1"],
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100],
        },
    },
    stroke: {
        lineCap: "round",
    },
    labels: ["Percent"],
};
var areaOptions = {
    series: [{
            name: "RMSE",
            data: [2.4039, 2.4039, 3.7567, 0.9619, 4.4378, 8.2413, 2.3409, 4.2583],
        },
        {
            name: "MAPE",
            data: [0.2063, 0.2063, 0.2498, 0.0837, 0.3627, 0.7162, 0.2001, 0.2473],
        },
        {
            name: "MAE",
            data: [2.216, 2.2163, 2.9776, 0.8992, 3.8846, 8.0499, 2.1527, 2.9933],
        },
    ],
    chart: {
        height: 350,
        type: "bar",
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: "smooth",
    },
    xaxis: {
        type: "string",
        categories: [
            "Linear", "Ridge", "Random Forest", "SVR", "K-Nearest Neighbor", "Neural Network", "Lasso", "Decision Tree"
        ],
    },
    tooltip: {
        // x: {
        //     format: "dd/MM/yy HH:mm",
        // },
    },
};
var radialBarOptions = {
    series: [44, 55, 67, 83],
    chart: {
        height: 350,
        type: "radialBar",
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Total",
                    formatter: function(w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249;
                    },
                },
            },
        },
    },
    labels: ["Apples", "Oranges", "Bananas", "Berries"],
};
var barlinear = new ApexCharts(document.querySelector("#bar_linear"), barLinearOptions);
var barridge = new ApexCharts(document.querySelector("#bar_ridge"), barRidgeOptions);
var barrf = new ApexCharts(document.querySelector("#bar_rf"), barRfOptions);
var barsvr = new ApexCharts(document.querySelector("#bar_svr"), barSvrOptions);
var barknr = new ApexCharts(document.querySelector("#bar_knr"), barKnrOptions);
var barnnr = new ApexCharts(document.querySelector("#bar_nnr"), barNnrOptions);
var barlasso = new ApexCharts(document.querySelector("#bar_lasso"), barLassoOptions);
var bardecision = new ApexCharts(document.querySelector("#bar_decision"), barDecisionOptions);
var line = new ApexCharts(document.querySelector("#line"), lineOptions);
var candle = new ApexCharts(document.querySelector("#candle"), candleOptions);
var radialGradient = new ApexCharts(document.querySelector("#radialGradient"), radialGradientOptions);
var area = new ApexCharts(document.querySelector("#area"), areaOptions);

area.render();
radialGradient.render();
candle.render();
barlinear.render();
barridge.render();
barrf.render();
barsvr.render();
barknr.render();
barnnr.render();
barlasso.render();
bardecision.render();
line.render();