<?php $v->layout('sidebar'); ?>

<?php $v->start("css"); ?>
<link rel="stylesheet" href="<?= asset('css/datatables.css'); ?>">

<?php $v->end(); ?>

<div class="container-fluid">
    <div class="ajax_load"></div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Máquinas Registradas</h5>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table" id="tabelaSensor">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Máquina</th>''
                                <th>MAC Address</th>
                                <th>Cod. Ensaio</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($sensores as $sensor) :
                            ?>

                                <tr>
                                    <td class="text-left" scope="row"><?= $sensor->id ?></td>
                                    <td class="text-left" scope="row"><?= $sensor->name ?></td>
                                    <td class="text-left" scope="row"><?= $sensor->mac ?></td>
                                    <td class="text-left" scope="row"><?= $sensor->Carga ?></td>
                                    <td>
                                        <a data-action="<?= site("sensor/editar") ?>" data-id=<?= $sensor->Codigo ?> data-func="edit">
                                            <i class="fa fa-pencil text-navy"></i>
                                        </a>
                                        <a data-action="<?= site("sensor/excluir") ?>" data-id=<?= $sensor->Codigo ?> data-nome=<?= $sensor->Nome ?> data-func="exc">
                                            <i class="fa fa-trash text-navy"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $v->start("js"); ?>
<script src="js/sweetalert.min.js"></script>
<script src="js/datatables.min.js"></script>

<script>
    $(document).ready(function() {

        $('#tabelaSensor').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ itens p/ Pág.",
                "zeroRecords": "Não foi possivel encontrar nenhum registro",
                "info": "Exibindo _PAGE_ de _PAGES_",
                "infoEmpty": " ",
                "infoFiltered": "",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Próximo",

                }
            },

        });


        function load(action) {
            var load_div = $(".ajax_load");
            if (action === "open") {
                load_div.fadeIn().css("display", "flex");

            } else {
                load_div.fadeOut();
            }
        }

        $("body").on("click", "[data-action]", function(e) {
            e.preventDefault();
            var data = $(this).data();
            var div = $(this).parent().parent();

            var tr = $(this).closest('tr');
            var id = $(this).data('id');
            var func = $(this).data('func');
            if (func === "exc") {
                swal({
                        title: "Deseja realmente excluir?",
                        text: data.nome,
                        icon: "warning",
                        buttons: {
                            cancel: {
                                text: "Cancel",
                                value: null,
                                visible: true,
                                className: "",
                                closeModal: true,
                            },
                            confirm: {
                                text: "OK",
                                value: true,
                                visible: true,
                                className: "",
                                closeModal: true,

                            },
                        },
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                site: data.action,
                                data: data,
                                type: 'POST',

                            }).done(function(resp) {

                                tr.fadeOut('slow', function() {});

                            }).fail(function(resp) {

                            })



                        }
                    })
            } else {
                // console.log(data.action+'/'+data.id)
                window.location.href = data.action + '/' + data.id; //carrega pagina de edição
            }
        })


    })
</script>

<?php $v->end(); ?>