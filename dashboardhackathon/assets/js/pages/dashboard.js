var optionsProfileVisit = {
    annotations: {
        position: 'back'
    },
    dataLabels: {
        enabled: false
    },
    chart: {
        type: 'bar',
        height: 300
    },
    fill: {
        opacity: 1
    },
    plotOptions: {},
    series: [{
        name: 'RMSE',
        data: [2.4039, 2.4039, 3.7567, 0.9619, 4.4378, 8.2413, 2.3409, 4.2583]
    }],
    colors: '#435ebe',
    xaxis: {
        categories: ["Linear", "Ridge", "Random Forest", "SVR", "K-Nearest Neighbor", "Neural Network", "Lasso", "Decision Tree"],
    },
}
let optionsVisitorsProfile = {
    series: [70, 30],
    labels: ['Insignificant', 'Significant'],
    colors: ['#6c757d', '#28a745'],
    chart: {
        type: 'donut',
        width: '100%',
        height: '350px'
    },
    legend: {
        position: 'bottom'
    },
    plotOptions: {
        pie: {
            donut: {
                size: '30%'
            }
        }
    }
}

var optionsEurope = {
    series: [{
        name: 'TPK Prediction',
        data: [10.00895387, 8.130575911, 10.49184745, 11.27913083, 11.57598922, 15.95167003]
    }],
    chart: {
        height: 80,
        type: 'area',
        toolbar: {
            show: false,
        },
    },
    colors: ['#5350e9'],
    stroke: {
        width: 2,
    },
    grid: {
        show: false,
    },
    dataLabels: {
        enabled: false
    },
    xaxis: {
        type: 'date',
        categories: ["2021-01-31", "2021-02-28", "2021-03-31", "2021-04-30", "2021-05-31", "2021-06-30"],
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        labels: {
            show: false,
        }
    },
    show: false,
    yaxis: {
        labels: {
            show: false,
        },
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    },
};

let optionsAmerica = {
    ...optionsEurope,
    colors: ['#008b75'],
    series: [{
        name: 'TPK Prediction',
        data: [8.146555236, 5.575299282, 8.163582823, 9.530579261, 8.656679225, 14.51061409]
    }],
}
let optionsIndonesia = {
    ...optionsEurope,
    colors: ['#dc3545'],
    series: [{
        name: 'TPK Prediction',
        data: [8.113458655, 5.456240495, 8.120356593, 9.487060188, 8.556208996, 14.46835728]
    }],
}



var chartProfileVisit = new ApexCharts(document.querySelector("#chart-profile-visit"), optionsProfileVisit);
var chartVisitorsProfile = new ApexCharts(document.getElementById('chart-visitors-profile'), optionsVisitorsProfile)
var chartEurope = new ApexCharts(document.querySelector("#chart-europe"), optionsEurope);
var chartAmerica = new ApexCharts(document.querySelector("#chart-america"), optionsAmerica);
var chartIndonesia = new ApexCharts(document.querySelector("#chart-indonesia"), optionsIndonesia);

chartIndonesia.render();
chartAmerica.render();
chartEurope.render();
chartProfileVisit.render();
chartVisitorsProfile.render()