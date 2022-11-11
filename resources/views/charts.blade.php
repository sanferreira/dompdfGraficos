<head>
</head>

<body>
    <form action="{{url('graficoimg')}}" method="POST">
        @csrf
        <div id="chart_div" style="width: 500px; height: 300px;"></div>
        <img src="{{$imagem ?? ""}}" alt="">
        <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
        <input type="hidden" id="base64img" name="base64img" value="">
    </form>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Element', 'Density', {
                    role: 'style'
                }],
                ['Copper', 54.94, '#b87333', ],
                ['Silver', 10.49, 'silver'],
                ['Gold', 19.30, 'gold'],
                ['Platinum', 21.45, 'color: #e5e4e2']
            ]);

            var options = {
                title: "Segmentos",
                bar: {
                    groupWidth: '95%'
                },
                legend: 'none',
            };

            var chart_div = document.getElementById('chart_div');
            var chart = new google.visualization.PieChart(chart_div);

            google.visualization.events.addListener(chart, 'ready', function() {
                chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
                // console.log(chart_div.innerHTML);
            });


            chart.draw(data, options);
            $('#base64img').val(chart.getImageURI());

        }

    </script>
</body>
