$(document).ready(function () {
    getStat05 ();
});

function getStat05(){
    $.ajax({
        type: "GET",
        url: "index.php",
        dataType: "json",
        error: function(error){
            console.log(error);
        },
        success: function(data) {
            console.log(JSON.stringify(data));

            let ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.map(client => client.nom + ' ' + client.prenom),
                    datasets: [{
                        label: 'Chiffre d\'affaires',
                        data: data.map(client => client.stat05),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            })
        }
    })
}
