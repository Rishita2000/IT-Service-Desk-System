        var xValues = ["Fri", "Sat", "Sun", "Mon", "Tue", "Wed", "Thu"];
        var yValues = [300, 180, 170, 380, 370,375,190];
        var barColors = ["green", "green","green","green","green","green","green"];

        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    gridLines: {
                        drawOnChartArea: false
                    }
                }],
                yAxes: [{
                    min:0,
                    max:400,
                    //gridLines: {
                      //  drawOnChartArea: false
                    //},
                    ticks:{
                        beginAtZero:true,
                        stepSize:200
                    }
                }]
            },
            legend: {display: false},
            title: {
            display: true,
            //text: "World Wine Production 2018"
            }
        }
        });
        