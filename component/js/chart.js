
//pie Chart and bar Chart function 

Chart.plugins.unregister(ChartDataLabels);

export const pieChart = (bColer, name, value) => { // (สี[],ชื่อ[],ค่า[])

    var ctxP = document.getElementById("pieChart").getContext('2d')
    var myPieChart = new Chart(ctxP, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: {
            labels: name,
            datasets: [{
                data: value,
                backgroundColor: bColer,

            }]
        },
        dataLabelsPlugin: true,
        options: {
            plugins: {
                datalabels: {
                    formatter: (value, ctx) => {
                        if (parseFloat(value) >= 3.00) {
                            return value + ' %';
                        } else {
                            return ""
                        }
                    },
                    color: '#FFFFFF',
                    labels: {
                        title: {
                            font: {
                                size: '11',
                            },
                        },
                    },
                },
            },
            responsive: true,
            legend: {
                position: 'right',
                labels: {
                    padding: 10,
                    boxWidth: 10
                }
            },
        },

    });
}


export const barChart = (bColer, name, value) => {// (สี[],ชื่อ[],ค่า[])
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
        plugins: [ChartDataLabels],
        type: 'bar',
        data: {
            labels: name,
            datasets: [{
                label: 'percentage',
                data: value,
                backgroundColor: bColer,
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    // formatter: (value, ctx) => {
                    //     return value + ' %';
                    // },
                    color: '#000000',
                    labels: {
                        title: {
                            anchor: 'end',
                            align: 'end',
                            font: {
                                size: '11',
                            },
                        },

                    },
                },
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            if (Math.floor(label) === label) {
                                return label;
                            }
       
                        },
                    }
                }],
                xAxes: [{
                    maxBarThickness: 100,
                }],

            },
            legend: {
                display: false,
            },
        }
    });
}