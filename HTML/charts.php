<!-- charts.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizontal Bar Chart with Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    function initializeChart() {
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        const data = {
            labels: labels,
            datasets: [{
                axis: 'y',
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                indexAxis: 'y',
            }
        };

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, config);
    }

    // Call the initialization function
    // In your main HTML file
$(document).ready(function () {
    $(".wee").click(function () {
        var contentToLoad = $(this).data("content");
        $("#page-content-wrapper .content").load(contentToLoad, function() {
            // Callback function to execute after loading content
            initializeChart();
        });

        // Save the contentToLoad value to localStorage
        localStorage.setItem("lastContent", contentToLoad);
    });

    // Load the last content on page load
    var lastContent = localStorage.getItem("lastContent");
    if (lastContent) {
        $("#page-content-wrapper .content").load(lastContent, initializeChart);
    }
});

    initializeChart();
</script>

</body>
</html>
