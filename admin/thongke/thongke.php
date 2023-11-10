<body>
    <div class="row">
        <div class="admin">
            <h1>Thống kê</h1>
        </div>
        <div class="table">
            <table border="1">
                <tr>
                    <td style="width: 100px">Id danh mục</td>
                    <td style="width: 300px">Tên danh mục</td>
                    <td style="width: 200px">Số lượng</td>
                    <td style="width: 200px">Giá cao nhất</td>
                    <td style="width: 200px">Giá thấp nhất</td>
                    <td style="width: 200px">Giá trung bình</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Áo</td>
                    <td>11</td>
                    <td>800.000đ</td>
                    <td>110.000đ</td>
                    <td>400.000đ</td>
                </tr>
            </table>
        </div>
        <div class="chart">

            <div class="inner-chart">

                <div class="chart-view">
                    <h1>Biểu đồ</h1>
                    <div id="donutchart"></div>
                </div>

                <div class="chart-view">
                    <h1>Biểu đồ</h1>
                    <div id="piechart"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"],
    });

    function PieChart() {
        // Set Data
        const data = google.visualization.arrayToDataTable([
            ["Contry", "Mhl"],
            ["Italy", 54.8],
            ["France", 48.6],
            ["Spain", 44.4],
            ["USA", 23.9],
            ["Argentina", 14.5],
        ]);

        // Set Options
        const options = {
            title: "Quản lý sản phẩm",
        };

        // Draw
        const chart = new google.visualization.PieChart(
            document.getElementById("piechart")
        );
        chart.draw(data, options);
    }


    google.charts.setOnLoadCallback(PieChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Task", "Hours per Day"],
            ["Work", 11],
            ["Eat", 2],
            ["Commute", 2],
            ["Watch TV", 2],
            ["Sleep", 7],
        ]);

        var options = {
            title: "Quản lý danh mục",
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(
            document.getElementById("donutchart")
        );
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(drawChart);
    </script>
</body>