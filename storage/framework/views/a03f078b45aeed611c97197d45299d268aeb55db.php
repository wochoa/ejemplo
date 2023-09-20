<!DOCTYPE html>
<html lang="en">

<head>
    <title>MATRIZ DE CONSISTENCIA TÉCNICA </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    
    <style>
        .table{
            border-collapse: collapse;
            text-align: left;
            width: 100%;  
            font-family: 'Oswald', sans-serif; 
            background: #fff;
            border: 1px solid #000000; 
            margin-bottom: 8px;
            font-size: 9px;
        }
        
        .text-center > thead > tr >th,
        .text-center > tbody > tr >td,
        .text-center > tfoot > tr >td{
            text-align: center;
        }
        
        .text-center{
            text-align: center;
        }
        
        .text-right > thead > tr >th,
        .text-right > tbody > tr >td,
        .text-right > tfoot > tr >td{
            text-align: right;
        }
        
        .text-right{
            text-align: right;
        }
        
        .text-left > thead > tr >th,
        .text-left > tbody > tr >td,
        .text-left > tfoot > tr >td{
            text-align: left;
        }
        
        .text-left{
            text-align: left;
        }
        
        .texto{
            font-family: 'Oswald', sans-serif;
            font-size: 9px;
            font-style: normal;
	        font-variant: normal;
            color: white;
            text-align: center;
        }
        
        .texto-tabla > thead > tr >th,
        .texto-tabla > tbody > tr >td,
        .texto-tabla > tfoot > tr >td{
            font-family: 'Oswald', sans-serif;
            font-size: 9px;
            font-style: normal;
	        font-variant: normal;
        }
                
        /*------------------------------class = "table"------------------------------------*/
                
        .table-bordered > thead > tr > th,
        .table-bordered > tbody > tr > td,
        .table-bordered > tfoot > tr > td {            
            border: 1px solid #000000;
            border-right-width:0px;
            border-left-width:0px;
            border-bottom: 1px solid #000000;
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-left: 1px solid #000000;
        }
        /*------------------------------class = "table"------------------------------------*/

        /*------------------------------class = "primary"------------------------------------*/
        .info2 {
            background-color: #4F81BD; 
            color:white;
        }

        .info2 th {
            background-color: #4F81BD; 
            color:white;
        }

        .info2 td {
            background-color: #4F81BD; 
            color:white;
        }
        /*------------------------------class = "primary"------------------------------------*/
        
        /*------------------------------class = "success"------------------------------------*/
        .success2 {
            background-color: #C4D79B; 
        }

        .success2 th {
            background-color: #C4D79B; 
        }

        .success2 td {
            background-color: #C4D79B; 
        }
        /*------------------------------class = "success"------------------------------------*/

        /*------------------------------class = "info2"------------------------------------*/
        .active2 {
            background-color: #D2E3F8;             
        }

        .active2 th {
            background-color: #D2E3F8; 
        }

        .active2 td {
            background-color: #D2E3F8;             
        }
        
        .financiera {
            background-color: #ACF0A3; 
        }
        
        .fisica {
            background-color: #FFA5A5; 
        }
        
        .financieratar {
            background-color: #DFFFDA; 
        }
        
        .fisicatar {
            background-color: #FDD6D6; 
        }
        /*------------------------------class = "info2"------------------------------------*/        
    </style>    
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jQuery.print.js')); ?>"></script>  
</head>

<body>   
    <div style="page-break-before: always; page-break-after: always; page-break-inside:always;">
        
<!--FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO-->
    <div id="myPrintArea" class="container-fluid">
        <div>
            <h3></h3>    
        </div>
        <!--<p>The .table class adds basic styling (light padding-top and only horizontal dividers) to a table:</p>-->
    <div class="table-responsive"> 
    <!--TITULO-->
        <table class="table table-bordered">
            <thead>
                <tr bgcolor="#244062">
                    <th width="100%" class="texto">MATRIZ DE CONSISTENCIA TÉCNICA DEL PLAN OPERATIVO INSTITUCIONAL</th>
                </tr>
            </thead>            
        </table>
    <!--FIN TITULO-->
    
    <!--1. info2RMACIÓN GENERA-->    
        <table class="table table-bordered table-condensed texto-tabla">    
            <thead>
                <tr class="info2">
                    <th width="100%" colspan="7">1. INFORMACIÓN GENERAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="active2" width="15%"><b>1.1. Unidad Ejecutora</b></td>
                    <td style="text-align: center" width="10%"><?php echo e($actividades->unieje); ?></td>
                    <td style="text-align: center" width="17%"><?php echo e(strtoupper($actividades->nomunieje)); ?></td>
                    <td class="active2" width="17%"><b>1.2. Centro de Costo</b></td>
                    <td style="text-align: center" width="24%"><?php echo e(strtoupper($actividades->nomofi)); ?></td>
                    <td class="active2" width="6%"><b>1.3. Año</b></td>
                    <td style="text-align: center" width="11%"><?php echo e($actividades->anio); ?></td>
                </tr>
            </tbody>
        </table>
    <!--FIN 1. info2RMACIÓN GENERA--> 
    
    <!--3. ARTICULACIÓN PRESUPUESTARIA-->     
        <table class="table table-bordered table-condensed texto-tabla">    
            <thead>
                <tr class="info2">
                    <th colspan="9" width="100%">2. ARTICULACIÓN PRESUPUESTARIA</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                                
                <tr>
                    <td class="active2" rowspan="2" width="15%"><b>2.1. Estructura Funcional Programática</b></td>
                    <td class="active2" width="10%"><b>2.1.1. Función</b></td>
                    <td class="active2" width="11%"><b>2.1.2. División Funcional</b></td>
                    <td class="active2" width="14%"><b>2.1.3. Grupo Funcional</b></td>
                    <td class="active2" width="12%"><b>2.1.4. Categoría Presupuestal</b></td>
                    <td class="active2" width="9%"><b>2.1.5. Producto/Proyecto</b></td>
                    <td class="active2" width="9%"><b>2.1.6. Actividad/Acción/Obra</b></td>
                    <td class="active2" width="9%"><b>2.1.7. Finalidad</b></td>
                    <td class="active2" width="11%"><b>2.1.8. Meta Presupuetaria</b></td>
                </tr>
                
                <tr>
                    <td><?php echo e($actividades->funcion); ?></td>
                    <td><?php echo e($actividades->division); ?></td>
                    <td><?php echo e($actividades->grupo); ?></td>
                    <td><?php echo e($actividades->categoria); ?></td>
                    <td><?php echo e($actividades->producto); ?></td>
                    <td><?php echo e($actividades->actividad); ?></td>
                    <td><?php echo e($actividades->finalidad); ?></td>
                    <td><?php echo e($actividades->siaf); ?></td>
                </tr>
            </tbody>
        </table>
    <!--FIN 3. ARTICULACIÓN PRESUPUESTARIA--> 
    
    <!--3. ARTICULACIÓN PRESUPUESTARIA-->     
        <table class="table table-bordered table-condensed texto-tabla">    
            <thead>
                <tr class="info2">
                    <th colspan="28" width="100%">3. PROGRAMACIÓN DE ESPECÍFICAS DE GASTOS</th>
                </tr>
            </thead>
            <tbody style="text-align: center">   
                <!------------------------------------- PROGRAMACIÓN -------------------------------------->
                <tr>
                    <td class="active2" rowspan="2" width="5%"><b>CENTRO DE COSTO</b></td>
                    <td class="active2" rowspan="2" width="10%"><b>ACTIVIDAD / ACCIÓN DE INVERSIÓN</b></td>
                    <td class="active2" rowspan="2" width="5%"><b>INDICADOR</b></td>
                    <td class="active2" rowspan="2" width="5%"><b>UNIDAD DE MEDIDA</b></td>
                    <td class="active2" rowspan="2" width="5%"><b>META ANUAL</b></td>
                    <td class="active2" rowspan="2" width="2%"><b>F.F.</b></td>
                    <td class="active2" colspan="5" width="10%"><b>CLASIFICADOR</b></td>
                    <td class="active2" rowspan="2" width="8%"><b>DESCRIPCIÓN</b></td>
                    <td class="active2" rowspan="2" width="4%"><b>UNIDAD DE MEDIDA</b></td>
                    <td class="active2" rowspan="2" width="5%"><b>CANTIDAD</b></td>
                    <td class="active2" colspan="12" width="36%"><b>PROGRAMACIÓN MENSUAL</b></td>
                    <td class="active2" rowspan="2" width="5%"><b>TOTAL</b></td>
                </tr>
                <tr class="active2">
                    <td width="2%"><b>GG</b></td>
                    <td width="2%"><b>Sub G1</b></td>
                    <td width="2%"><b>Sub G2</b></td>
                    <td width="2%"><b>Esp 1</b></td>
                    <td width="2%"><b>Esp 2</b></td>
                    <td width="3%"><b>Ene</b></td>
                    <td width="3%"><b>Feb</b></td>
                    <td width="3%"><b>Mar</b></td>
                    <td width="3%"><b>Abr</b></td>
                    <td width="3%"><b>May</b></td>
                    <td width="3%"><b>Jun</b></td>
                    <td width="3%"><b>Jul</b></td>
                    <td width="3%"><b>Ago</b></td>
                    <td width="3%"><b>Set</b></td>
                    <td width="3%"><b>Oct</b></td>
                    <td width="3%"><b>Nov</b></td>
                    <td width="3%"><b>Dic</b></td>
                </tr>
                <?php($i=0)
                @php($ins=1)
                @if($inversionrows!=0)
                    @foreach($inversiones AS $inversion)
                        @if($insumorows!=0)
                            @foreach($insumos AS $insumo)
                            @if($inversion->id == $insumo->idact)
                            <tr class="text-right">
                                @if($i==0)
                                    <td class="text-center" rowspan="{{$inversion->con_ins_tar}}">{{$actividades->nomofi}}</td>
                                    <td class="text-center" rowspan="{{$inversion->con_ins_tar}}">{{$inversion->denominacion}}</td>
                                    <td class="text-center" rowspan="{{$inversion->con_ins_tar}}">{{$inversion->indicador}}</td>
                                    <td class="text-center" rowspan="{{$inversion->con_ins_tar}}">{{$inversion->um}}</td>
                                    <td class="text-center" rowspan="{{$inversion->con_ins_tar}}">{{$inversion->total}}</td>
                                    @php($i++)
                                @endif
                                <td class="text-center">{{$insumo->fuente}}</td>
                                @php
                                    $str = $insumo->clasificador->cg_clasificador;
                                    $separar = str_replace(" ", ".",$str);
                                    $clasif = explode(".",$separar);
                                ?>
                                <td class="text-center"><?php echo e($clasif[0]); ?>.<?php echo e($clasif[1]); ?></td>
                                <td class="text-center"><?php echo e($clasif[2]); ?></td>
                                <td class="text-center"><?php echo e($clasif[3]); ?></td>
                                <td class="text-center"><?php echo e($clasif[4]); ?></td>
                                <td class="text-center"><?php echo e($clasif[5]); ?></td>
                                <td class="text-center"><?php echo e($insumo->clasificador->cg_descripcion); ?></td>
                                <td class="text-center"><?php echo e($insumo->um); ?></td>
                                <td><?php echo e($insumo->cantidad); ?></td>
                                <td><?php echo e($insumo->enero); ?></td>
                                <td><?php echo e($insumo->febrero); ?></td>
                                <td><?php echo e($insumo->marzo); ?></td>
                                <td><?php echo e($insumo->abril); ?></td>
                                <td><?php echo e($insumo->mayo); ?></td>
                                <td><?php echo e($insumo->junio); ?></td>
                                <td><?php echo e($insumo->julio); ?></td>
                                <td><?php echo e($insumo->agosto); ?></td>
                                <td><?php echo e($insumo->setiembre); ?></td>
                                <td><?php echo e($insumo->octubre); ?></td>
                                <td><?php echo e($insumo->noviembre); ?></td>
                                <td><?php echo e($insumo->diciembre); ?></td>
                                <td><?php echo e($insumo->monto); ?></td>
                            </tr>
                            <?php($ins++)
                            @endif                   
                            @endforeach 
                    <!------------------------------------- PROGRAMACIÓN -------------------------------------->

                    <!------------------------------------- SUB TOTAL ----------------------------------------->
                            <tr class="success2 text-right">
                                <td colspan="12" class="text-center"><b>SUB TOTAL</b></td>
                                <td></td>
                                <td><b>{{$inversion->esp_cantidad}}</b></td>
                                <td><b>{{$inversion->esp_enero}}</b></td>
                                <td><b>{{$inversion->esp_febrero}}</b></td>
                                <td><b>{{$inversion->esp_marzo}}</b></td>
                                <td><b>{{$inversion->esp_abril}}</b></td>
                                <td><b>{{$inversion->esp_mayo}}</b></td>
                                <td><b>{{$inversion->esp_junio}}</b></td>
                                <td><b>{{$inversion->esp_julio}}</b></td>
                                <td><b>{{$inversion->esp_agosto}}</b></td>
                                <td><b>{{$inversion->esp_setiembre}}</b></td>
                                <td><b>{{$inversion->esp_octubre}}</b></td>
                                <td><b>{{$inversion->esp_noviembre}}</b></td>
                                <td><b>{{$inversion->esp_diciembre}}</b></td>
                                <td><b>{{$inversion->esp_monto_total}}</b></td>
                            </tr>
                        @else
                            <tr>
                                @if($i==0)
                                    <td rowspan="{{$insumorows}}">{{$actividades->nomofi}}</td>
                                    <td rowspan="{{$insumorows}}">{{$inversion->denominacion}}</td>
                                    <td rowspan="{{$insumorows}}">{{$inversion->indicador}}</td>
                                    <td rowspan="{{$insumorows}}">{{$inversion->um}}</td>
                                    <td rowspan="{{$insumorows}}">{{$inversion->total}}</td>
                                    @php($i++)
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>                   
                    <!------------------------------------- PROGRAMACIÓN -------------------------------------->

                    <!------------------------------------- SUB TOTAL ----------------------------------------->
                            <tr class="success2">
                                <td colspan="12" class="text-center"><b>SUB TOTAL</b></td>
                                <td></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td><b></b></td>
                            </tr>
                        @endif
                        @php($i=0)
                    @endforeach
                                
                    <tr><td colspan="27" style="border-left: hidden; border-right: hidden;"></td></tr>
                    <!------------------------------------- TOTAL 3 -------------------------------------->
                    @if($insumorows!=0)
                        <tr class="active2">
                            <td colspan="14" class="text-center"><b>TOTAL ACTIVIDAD OPERATIVA  / ACCIÓN DE INVERSIÓN</b></td>
                            <td><b>{{$totalins->total_enero}}</b></td>
                            <td><b>{{$totalins->total_febrero}}</b></td>
                            <td><b>{{$totalins->total_marzo}}</b></td>
                            <td><b>{{$totalins->total_abril}}</b></td>
                            <td><b>{{$totalins->total_mayo}}</b></td>
                            <td><b>{{$totalins->total_junio}}</b></td>
                            <td><b>{{$totalins->total_julio}}</b></td>
                            <td><b>{{$totalins->total_agosto}}</b></td>
                            <td><b>{{$totalins->total_setiembre}}</b></td>
                            <td><b>{{$totalins->total_octubre}}</b></td>
                            <td><b>{{$totalins->total_noviembre}}</b></td>
                            <td><b>{{$totalins->total_diciembre}}</b></td>
                            <td><b>{{$totalins->total_monto}}</b></td>
                        </tr>
                        <!------------------------------------- TOTAL 3 -------------------------------------->

                        <tr><td colspan="27" style="border-left: hidden; border-right: hidden;"><br></td></tr>

                        <!------------------------------------- RESUMEN -------------------------------------->
                        <tr class="info2 text-left">
                            <td colspan="27"><b>4. RESUMEN POR FUENTE DE FINANCIAMIENTO </b></td>
                        </tr>
                        <tr>
                            <td class="active2" rowspan="2" width="5%" colspan="5"><b>CENTRO DE COSTO</b></td>
                            <!--<td class="active2" rowspan="2" width="10%"><b>ACTIVIDAD / ACCIÓN DE INVERSIÓN</b></td>
                            <td class="active2" rowspan="2" width="5%"><b>INDICADOR</b></td>
                            <td class="active2" rowspan="2" width="5%"><b>UNIDAD DE MEDIDA</b></td>
                            <td class="active2" rowspan="2" width="5%"><b>META ANUAL</b></td>-->
                            <td class="active2" rowspan="2" width="2%"><b>F.F.</b></td>
                            <td class="active2" colspan="5" width="10%"><b>CLASIFICADOR</b></td>
                            <td class="active2" rowspan="2" width="8%"><b>DESCRIPCIÓN</b></td>
                            <td class="active2" rowspan="2" width="4%"><b>UNIDAD DE MEDIDA</b></td>
                            <td class="active2" rowspan="2" width="5%"><b>CANTIDAD</b></td>
                            <td class="active2" colspan="12" width="36%"><b>PROGRAMACIÓN MENSUAL</b></td>
                            <td class="active2" rowspan="2" width="5%"><b>TOTAL</b></td>
                        </tr>
                        <tr class="active2">
                            <td width="2%"><b>GG</b></td>
                            <td width="2%"><b>Sub G1</b></td>
                            <td width="2%"><b>Sub G2</b></td>
                            <td width="2%"><b>Esp 1</b></td>
                            <td width="2%"><b>Esp 2</b></td>
                            <td width="3%"><b>Ene</b></td>
                            <td width="3%"><b>Feb</b></td>
                            <td width="3%"><b>Mar</b></td>
                            <td width="3%"><b>Abr</b></td>
                            <td width="3%"><b>May</b></td>
                            <td width="3%"><b>Jun</b></td>
                            <td width="3%"><b>Jul</b></td>
                            <td width="3%"><b>Ago</b></td>
                            <td width="3%"><b>Set</b></td>
                            <td width="3%"><b>Oct</b></td>
                            <td width="3%"><b>Nov</b></td>
                            <td width="3%"><b>Dic</b></td>
                        </tr>
                        @php($t=0)
                        @foreach($actinsumos AS $actinsumo)
                            <tr>
                                @if($t==0)
                                    <td colspan="5" rowspan="{{$actinsrows}}">{{$actividades->nomofi}}</td>
                                    @php($t++)
                                @endif
                                <td>{{$actinsumo->act_fuente}}</td>
                                @php
                                    $str = $actinsumo->clasificador->cg_clasificador;
                                    $separar = str_replace(" ", ".",$str);
                                    $clasificador = explode(".",$separar);
                                ?>
                                <td><?php echo e($clasificador[0]); ?>.<?php echo e($clasificador[1]); ?></td>
                                <td><?php echo e($clasificador[2]); ?></td>
                                <td><?php echo e($clasificador[3]); ?></td>
                                <td><?php echo e($clasificador[4]); ?></td>
                                <td><?php echo e($clasificador[5]); ?></td>
                                <td><?php echo e($actinsumo->clasificador->cg_descripcion); ?></td>
                                <td><?php echo e($actinsumo->act_um); ?></td>
                                <td><?php echo e($actinsumo->act_cantidad); ?></td>
                                <td><?php echo e($actinsumo->act_enero); ?></td>
                                <td><?php echo e($actinsumo->act_febrero); ?></td>
                                <td><?php echo e($actinsumo->act_marzo); ?></td>
                                <td><?php echo e($actinsumo->act_abril); ?></td>
                                <td><?php echo e($actinsumo->act_mayo); ?></td>
                                <td><?php echo e($actinsumo->act_junio); ?></td>
                                <td><?php echo e($actinsumo->act_julio); ?></td>
                                <td><?php echo e($actinsumo->act_agosto); ?></td>
                                <td><?php echo e($actinsumo->act_setiembre); ?></td>
                                <td><?php echo e($actinsumo->act_octubre); ?></td>
                                <td><?php echo e($actinsumo->act_noviembre); ?></td>
                                <td><?php echo e($actinsumo->act_diciembre); ?></td>
                                <td><?php echo e($actinsumo->act_monto); ?></td>                            
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!------------------------------------- TOTAL 4 -------------------------------------->
                        <tr class="active2">
                            <td colspan="14" class="text-center"><b>TOTAL ACTIVIDAD OPERATIVA  / ACCIÓN DE INVERSIÓN</b></td>
                            <td><b><?php echo e($totalins->total_enero); ?></b></td>
                            <td><b><?php echo e($totalins->total_febrero); ?></b></td>
                            <td><b><?php echo e($totalins->total_marzo); ?></b></td>
                            <td><b><?php echo e($totalins->total_abril); ?></b></td>
                            <td><b><?php echo e($totalins->total_mayo); ?></b></td>
                            <td><b><?php echo e($totalins->total_junio); ?></b></td>
                            <td><b><?php echo e($totalins->total_julio); ?></b></td>
                            <td><b><?php echo e($totalins->total_agosto); ?></b></td>
                            <td><b><?php echo e($totalins->total_setiembre); ?></b></td>
                            <td><b><?php echo e($totalins->total_octubre); ?></b></td>
                            <td><b><?php echo e($totalins->total_noviembre); ?></b></td>
                            <td><b><?php echo e($totalins->total_diciembre); ?></b></td>
                            <td><b><?php echo e($totalins->total_monto); ?></b></td>    
                        </tr>
                    <?php endif; ?>
                <?php endif; ?>
                <!------------------------------------- TOTAL 4 -------------------------------------->
            </tbody>
        </table>
    <!--FIN 3. ARTICULACIÓN PRESUPUESTARIA-->         
    </div>
    </div>    <br>  
    <div class="container-fluid" id="example1">
        <a href="#" onclick="javascript:window.close()" class="btn btn-danger"><i class="glyphicon glyphicon-off"></i> Salir</a> 
        <a href="<?php echo e(url('poi/exportarf3/'.$act)); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-save-file"></i> Excel</a>             
        <a href="#" class="btn btn-default btn-success pull-right printf3" data-id="<?php echo e($act); ?>"><span class="glyphicon glyphicon-print"></span> Imprimir F3</a> 
    </div><br>
</div>    
<!--FIN FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACT
<!------------------------------------------------------------------------------------------------------------------------------->  
<script type="text/javascript">
    $('#example1').on('click', '.printf3', function (e) {
        e.preventDefault();
        rute = '<?php echo e(url('poi/anteproyecto/imprimirf3/%s')); ?>';
        window.open(rute.replace(/%s/g, $(this).data('id')));
    });
</script>
</body>

</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\anteproyecto\formatof3\verf3.blade.php ENDPATH**/ ?>