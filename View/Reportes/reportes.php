<!--Bootstrap CSS - Estadistica-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">    

    <?php 

        session_start();
        if (!isset($_SESSION['user']) || $_SESSION['user']['tipo_usuario'] != "ADMINISTRADOR"){
            header("Location: ../");
        }
        include('../../Model/conexion.php'); 
        include('../includes/menu_administrador.php');
    ?>

    <link rel="stylesheet" type="text/css" href="../../assets/Styles/estilos_pdf.css">
    <div class="col-lg-12" style="padding-top:20px" >
    <center><h2 class="card-header">REPORTE ESTADISTICO</h2></center>
        <div class="card">
            <center><h5 class="card-header">LIBROS MÁS SOLICITADOS</h5></center>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <canvas id="graficobarvertical" width="100" height="100"></canvas>
                    </div>
                    <div class="col-lg-4">
                        <canvas id="graficobarhorizontal" width="100" height="100"></canvas>
                    </div>
                    <div class="col-lg-4">
                        <canvas id="graficopie" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <center><h5 class="card-header">ESTADISTICAS DE ATENCIÓN</h5></center>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <label for="">FECHA INICIO</label>
                        <select name="" id="select_finicio" class="form-control"></select>
                    </div>
                    <div class="col-lg-5">
                        <label for="">FECHA FIN</label>
                        <select name="" id="select_ffin" class="form-control"></select>
                    </div>
                    <div class="col-lg-2">
                        <label for="">&nbsp;</label><br>
                        <button class="btn bnt-danger">BUSCAR</button>
                    </div>
                    <div class="col-lg-4">
                        <canvas id="graficobardoughnut_parametro" width="400" height="400"></canvas>
                    </div>
                    <div class="col-lg-4">
                        <canvas id="graficobarhorizontal_parametro" width="400" height="400"></canvas>
                    </div>
                    <div class="col-lg-4">
                        <canvas id="graficopie_parametro" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('../includes/footer.php');?>

</html>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
CargarDatosGraficoBar();
CargarDatosGraficoBarHorizontal();
CargarDatosGraficoPie();

function CargarDatosGraficoBar() {
    $.ajax({
        url: '../../Controller/reportes_controller/controlador_grafico.php',
        type: 'POST'
    }).done(function(resp) {

        if (resp.length > 0) {

            listaNombres = []
            listaStock = []
            var colores = []
            var data = JSON.parse(resp)

            for (var i = 0; i < data.length; i++) {

                listaNombres.push(data[i]["genero"])
                listaStock.push(data[i]["fecha_registro"])
                colores.push(ColorRGB());
            }

            CrearGrafico(listaNombres, listaStock, colores, 'bar', 'GRAFICO EN BARRA VERTICAL',
                "graficobarvertical");



        }
    })
}

function CargarDatosGraficoBarHorizontal() {
    $.ajax({
        url: '../../Controller/estadistica/controlador_grafico.php',
        type: 'POST'
    }).done(function(resp) {

        if (resp.length > 0) {

            listaNombres1 = []
            listaStock1 = []
            var colores1 = []

            var data = JSON.parse(resp)

            for (var i = 0; i < data.length; i++) {

                listaNombres1.push(data[i]["productos_nombre"])
                listaStock1.push(data[i]["productos_stock"])
                colores1.push(ColorRGB())
            }

            CrearGrafico(listaNombres1, listaStock1, colores1, 'horizontalBar', 'GRAFICO EN BARRA HORIZONTAL',
                "graficobarhorizontal");

        }

    })
}

function CargarDatosGraficoPie() {
    $.ajax({
        url: '../../Controller/estadistica/controlador_grafico.php',
        type: 'POST'
    }).done(function(resp) {

        if (resp.length > 0) {

            listaNombres = []
            listaFecha = []
            var colores = []
            var data = JSON.parse(resp)

            for (var i = 0; i < data.length; i++) {

                listaNombres.push(data[i]["titulo"])
                lista.push(data[i]["fecha_entrega"])
                colores.push(ColorRGB());
            }

            CrearGrafico(listaNombres, listaStock, colores, 'pie', 'GRAFICO PIE DE PRODUCTOS', "graficopie");

        }
    })
}

function GenerarNumero(numero) {
    return (Math.random() * numero).toFixed(0);
}

function ColorRGB() {
    var coolor = "(" + GenerarNumero(255) + "," + GenerarNumero(255) + "," + GenerarNumero(255) + ")";
    return "rgb" + coolor;
}

////////////////////////////////// FUNCIONES PARA REPORTES CON PARAMETROS ////////////////////////////////////////////

TraerAnio();


function TraerAnio() {
    var miFecha = new Date();
    var anio = miFecha.getFullYear();
    var cadena = "";

    for (var i = 2015; i < anio; i++) {
        cadena += "<option value = " + i + ">" + i + "</option>"
    }
    $("#select_finicio").html(cadena);
    $("#select_ffin").html(cadena);
}

function CargarDatosGraficoDoughnut() {
    var fechairicio = $("#select_finicio").val();
    var fechafin = $("#select_finicio").val();

    $.ajax({
        url: '../../Controller/estadistica/controlador_grafico_parametro.php',
        type: 'POST',
        data: {
            inicio: fechainicio,
            Fin: fechafin
        }
    }).done(function(resp) {
        if (resp.length > 0) {
            listaNombres = []
            listaStock = []
            var colores = []
            var data = JSON.parse(resp)

            for (var i = 0; i < data.length; i++) {

                listaNombres.push(data[i]["productos_nombre"])
                listaStock.push(data[i]["productos_stock"])
                colores.push(ColorRGB());
            }

            CrearGrafico(listaNombres, listaStock, colores, 'doughnut', 'GRAFICO EN DOUGHNUT DE PRODUCTOS',
                "graficobardoughnut_parametro");
        }
    })
}

////////////////////////////////// FUNCIONES PARA CREAR GRAFICO //////////////////////////////////////////////////////

function CrearGrafico(NombreProductos, Stock, colores2, tipo, encabezado, id) {
    const ctx = document.getElementById(id);
    const myChart = new Chart(ctx, {
        type: tipo,
        data: {
            labels: NombreProductos,
            datasets: [{
                label: encabezado,
                data: Stock,
                backgroundColor: colores2,
                borderColor: colores2,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}
</script>