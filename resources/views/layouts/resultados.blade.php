@if ($registros->all() != null)
<div class="table-responsive">
    <table id="myTable" class="table border-top">
        <thead>
            <tr>
                <th>Código</th>
                <th>Sexo</th>
                <th>Nivel educativo</th>
                <th>Grupo edad</th>
                <th>Contenido</th>
                <th>Descarga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $item)
                <tr>
                    <td>
                        {{ $item->codigo }}
                    </td>
                    <td>
                        {{ $item->sexo }}
                    </td>
                    <td>
                        {{ $item->nivel_educativo }}
                    </td>
                    <td>
                        Grupo {{ $item->generacion }}
                    </td>
                    <td>
                        {{!! $item->text_archivo !!}}
                    </td>
                    <td>
                        <a download="{{$item->archivo}}" href="{{asset('storage/archivos/'.$item->archivo)}}" target="_blank" rel="noopener noreferrer">Descargar archivo</a> 
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "responsive": true,
                "pageLength": 10,
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }

            });
        });
    </script>
@else
    <h2>Introduce otro quiterio de búsqueda</h2>
@endif
