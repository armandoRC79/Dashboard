// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var url = 'https://datos.cdmx.gob.mx/api/3/action/datastore_search?resource_id=2c44d5f1-f806-4bcc-91e5-408a5558d1c5&q=iztapalapa';


async function lista(url) {
    const response2 = await fetch(url);
    const data2 = await response2.json();


    const {
        records
    } = data2.result

    //console.log(records.map(item => item.colonia))


    // const datos1 = records.map(item => item.colonia);
    const datos2 = [records.map(item => item.count_negativos), records.map(item => item.count_sospechosos), records.map(item => item.count_confirmados)];
    var ctx = document.getElementById("myMapChart");
    var myPieChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: ["Negativos", "Sospechosos", "Positivos"],
            datasets: [{
                data: datos2,
                backgroundColor: ['#1cc88a', '#4e73df', '#CB3234'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: true
            },
        },
    });
}
lista(url);