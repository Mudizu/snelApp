

let options = {
    series: [{
        data: [10000, 2000, 3000, 4000, 5000, 9500, 7000, 4000, 8500, 9000, 5000, 3000]
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false,
        }
    },
    colors: ['#eba91d', '#bc1e51', '#42c3a7', '#434738', '#0b0c0e', '#eba91d', '#bc1e51', '#42c3a7', '#434738', '#0b0c0e'],
    plotOptions: {
        bar: {
            horizontal: false,
            distributed: true,
            colmnWidth: '40%',
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false,
    },
    xaxis: {
        categories: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Nomvembre', 'Decembre'
        ],
    },
    yaxis: {
        title: {
            text: "Energie électrique en kiloWattheure",
        }
    }
};

let chartBar = new ApexCharts(document.querySelector("#chart-bar"), options);
chartBar.render();