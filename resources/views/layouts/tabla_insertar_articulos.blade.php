<head>
    <style>
        .centrar {
            margin: 0 auto;
        }

        .borde {
            border: 1px solid black;
        }

        .ancho {
            width: 30%;
        }

        .anchoinput {
            width: 300px;
        }

        .spaceceldas {
            border-collapse: separate;
            border-spacing: 0px 5px;
        }

    </style>
</head>


<body>




<h1 class="text-center mb-5"> INSERTAR ARTICULOS</h1>
<form action="/layouts" method="POST">
@csrf
    <div class="table-responsive">
        <table class="centrar spaceceldas">
            <tr class=" ">
                <td class="ancho">Departamento:</td>
                <td class=""><input class="borde anchoinput" type="text" name="departamento"></td>
            </tr>
            <tr class="espacio">
                <td class="ancho">Seccion:</td>
                <td class=""><input class="borde anchoinput" type="text" name="seccion" ></td>
            </tr>
            <tr class=" ">
                <td class="ancho">Codigo:</td>
                <td class=""><input class="borde anchoinput" type="text" name="codigo"></td>
            </tr>
            <tr class=" ">
                <td class="ancho">Articulo:</td>
                <td class=""><input class="borde anchoinput" type="text" name="articulo"></td>
            </tr>
            <tr class=" ">
                <td class="ancho">Marca:</td>
                <td class=""><input class="borde anchoinput" type="text" name="marca" ></td>
            </tr>
            <tr class=" ">
                <td class="ancho">Modelo:</td>
                <td class=""><input class="borde anchoinput" type="text" name="modelo"></td>
            </tr>
            <tr class=" ">
                <td class="ancho">Descripcion:</td>
                <td class=""><input class="borde anchoinput" type="text" name="descripcion"></td>
            </tr>
            <tr class=" ">
                <td class="ancho">Status:</td>
                <td class=""><input class="borde anchoinput" type="text" name="status"></td>
            </tr>
        </table>

    </div>
    <input type="submit" name="enviar" value="enviar" id="">

</form>

</body>
