<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estadística</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="responsive/css/style.css">
</head>

<body>

<header class="full-width NavBarP">
    <div class="full-width NavBarP-Logo"><a style="color:white;" href="{{ url('/') }}">
            Reporte Mensual Consumo De Agua
        </a></div>
    <nav class="full-width NavBarP-Nav">

        <ul class="full-width list-unstyled">
            @if (Route::has('login'))

                @auth
                    <li><a href="{{ url('/home') }}">Home </a></li>
                @else
                <!--<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>-->

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Registro</a></li>
                    @endif
                @endauth

            @endif

        </ul>
    </nav>
    </div>


</header>

<div class="container">

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <label>Edificio</label>
                <select name="edificio" id="edificio" class="form-control">
                    <option value="">Seleccione Edificio</option>

                    @foreach($edifi_list as $row)
                        <option value="{{$row->name}}">{{$row->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-md-12">
                <label>Año</label>
                <select name="anual" id="anual" class="form-control">
                    <option value="">Seleccione Año</option>
                    @foreach($year_list as $row)
                        <option value="{{$row->anual}}">{{$row->anual}}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div style="margin-top: 80px;"></div>
        <div class="panel-body">
            <div id="chart_div" style="width: 100%; height: 600px;"></div>
        </div>

    </div>
</div>


<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {
        'packages': ['corechart', 'bar']
    });
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawMonthlyChart);
    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawMonthlyChart(products, chart_main_title) {
        let jsonData = products;
        // Create the data table.
        let data = new google.visualization.DataTable();
        data.addColumn('string', 'mes');
        data.addColumn('number', 'Consumo m3');
        $.each(jsonData, (i, jsonData) => {
                let mes = jsonData.mes;
            let cantidad_agua = parseFloat($.trim(jsonData.cantidad_agua));
            data.addRows([
                [mes, cantidad_agua]
            ]);
        });
        data.addRows([
            // ['Mushrooms', 140],
            // ['Onions', 50],
            // ['Olives', 30],
            // ['Zucchini', 20],
            // ['Pepperoni', 12]
        ]);
        // Set chart options
        var options = {
            // 'title': 'Check Monthly Profit',
            title: chart_main_title,
            hAxis: {
                title: "Mes"
            },
            vAxis: {
                title: "Cantidad De Agua"
            },
            colors: ['#1c6da9'],

            chartArea: {
                width: '50%',
                height: '80%'
            }
        }
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }

    function load_monthly_data(anual, title) {
        const temp_title = title + ' ' + anual;
        $.ajax({
            url: 'chart/fetch_data',
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                anual: anual
            },
            dataType: "JSON",
            success: function (data) {
                drawMonthlyChart(data, temp_title);
            }
        });
        console.log(`anual: ${anual}`);
    }
</script>

<script>

    $(document).ready(function () {
        $('#anual').change(function () {
            var anual = $(this).val();
            if (anual != '') {
                load_monthly_data(anual, 'Resultados Generados Para El Año: ');
            }
        });
    });
</script>
</body>
</html>
