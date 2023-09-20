<!DOCTYPE html>
<html lang="en">

<head>
    <title>HUAMALIES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://alxlit.name/bootstrap-chosen/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
    <style>                
        table, th, td {
            font-size:8px;
            font-family: Tahoma;
        }
        
        /*------------------------------class = "table"------------------------------------*/
        table{
            border-collapse: collapse;
            text-align: left;
            width: 100%;  
            font-family: Tahoma;  
            background: #fff;
            border: 1px solid #DDDDDD; 
            margin-bottom: 10px;
        }

        table thead th {    
            color: #333333;  
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 11px;
            font-weight: bold;
            border-bottom: 2px solid #DDDDDD;  
            border-left: 1px solid #DDDDDD;  
        }

        table tbody td {
            color: #333333;    
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 11px;  
            font-weight: normal;  
            border: 1px solid #DDDDDD; 
        }
        /*------------------------------class = "table"------------------------------------*/

        /*------------------------------class = "primary"------------------------------------*/
        .info2 {
            background-color: #B5D4EB; 
        }

        .info2 th {
            background-color: #B5D4EB; 
        }

        .info2 td {
            background-color: #B5D4EB; 
        }
        /*------------------------------class = "primary"------------------------------------*/

        /*------------------------------class = "info2"------------------------------------*/
        .active2 {
            background-color: #EAEAEA; 
        }

        .active2 th {
            background-color: #EAEAEA; 
        }

        .active2 td {
            background-color: #EAEAEA; 
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
            
        .table-mihover>tbody>tr:hover {
            background-color: #EFDA9C
        }        
    </style>    
    
</head>

<body>   
    <div style="page-break-before: always; page-break-after: always; page-break-inside:always;">
        
<!--FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO-->
    <div id="myPrintArea" class="container-fluid">
        <div>
            <h3></h3>    
        </div>
        <?php if(Session::has('msg')): ?>
            <div class="alert alert-danger">   
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>        
                <strong>ATENCIÓN!</strong> <?php echo e(Session::get('msg')); ?>.
            </div>
        <?php endif; ?>
        <!--<p>The .table class adds basic styling (light padding-top and only horizontal dividers) to a table:</p>-->
    <!--TITULO-->
        <table class="table table-bordered">
            <thead>
                <tr bgcolor="#B5D4EB">
                    <th style="text-align: center" width="100%">FORMATO F-2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO</th>
                </tr>
            </thead>            
        </table>
    <!--FIN TITULO-->
       
    <!--1. info2RMACIÓN GENERA-->    
        <table class="table table-bordered table-condensed">    
            <thead>
                <tr class="info2">
                    <th width="100%" colspan="6">1. INFORMACIÓN GENERAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="15%" class="active2"><b>1.1. Unidad Ejecutora</b></td>
                    <td width="25%" style="text-align: center"><?php echo e($actividades->unieje); ?>.- <?php echo e(strtoupper($actividades->nomunieje)); ?></td>
                    <td width="15%" class="active2"><b>1.2. Unidad Orgánica</b></td>
                    <td width="25%" style="text-align: center"><?php echo e(strtoupper($actividades->nomofi)); ?></td>
                    <td width="10%" class="active2"><b>1.3. Año</b></td>
                    <td width="10%" style="text-align: center"><?php echo e($actividades->anio); ?></td>
                </tr>
            </tbody>
        </table>
    <!--FIN 1. info2RMACIÓN GENERA--> 
       
    <!--2. ALINEAMIENTO ESTRATÉGICO-->     
        <table class="table table-bordered table-condensed" width="100%">    
            <thead>
                <tr class="info2">
                    <th colspan="8">2. ALINEAMIENTO ESTRATÉGICO</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                <tr>
                    <td class="active2" colspan="2"><b>2.1. Visión Regional</b></td>
                    <td colspan="2"><?php echo e($vision->vision); ?></td>
                    <td class="active2"><b>2.2. Misión Institucional</b></td>
                    <td colspan="3"><?php echo e($mision->mision); ?></td>
                </tr>
                
                <tr>
                    <td class="active2" colspan="2"><b>2.3. Plan Estratégico</b></td>
                    <td class="active2"><b>2.4. Código</b></td>
                    <td class="active2"><b>2.5. Descripción</b></td>
                    <td class="active2" rowspan="2" style="padding-top: 25px" width="20%"><b>2.6. Indicador</b></td>
                    <td class="active2" rowspan="2" style="padding-top: 25px"><b>2.7. Unidad de Medida</b></td>
                    <td class="active2" rowspan="2" style="padding-top: 25px" width="10%" colspan="2"><b>2.8. Meta</b></td>
                </tr>
                   
                <tr>
                    <td class="active2" rowspan="3" style="padding-top: 20px"><b>2.3.1. PDRC Huánuco al 2021</b></td>
                    <td class="active2"><b>C.E.</b></td>
                    <td><?php echo e($ce->id); ?></td>
                    <td><?php echo e($ce->descripcion); ?></td>
                </tr>
                  
                <tr>
                    <td class="active2"><b>O.E.T.</b></td>
                    <td><?php echo e($oet->id); ?></td>
                    <td><?php echo e($oet->descripcion); ?></td>
                    <td><?php echo e($oet->indicador); ?></td>
                    <td><?php echo e($oet->medida); ?></td>
                    <td><?php echo e($oet->meta1); ?></td>
                    <td><?php echo e($oet->meta2); ?></td>
                </tr>
                   
                <tr>
                    <td class="active2"><b>A.E.T.</b></td>
                    <td><?php echo e($aet->id); ?></td>
                    <td><?php echo e($aet->descripcion); ?></td>
                    <td><?php echo e($aet->indicador); ?></td>
                    <td><?php echo e($aet->medida); ?></td>
                    <td><?php echo e($aet->meta1); ?></td>
                    <td><?php echo e($aet->meta2); ?></td>
                </tr>
                
                <tr>
                    <td class="active2" rowspan="2" style="padding-top: 15px"><b>2.3.2. PEI 2017-2019</b></td>
                    <td class="active2"><b>O.E.I.</b></td>
                    <td><?php echo e($oei->id); ?></td>
                    <td><?php echo e($oei->descripcion); ?></td>
                    <td><?php echo e($oei->indicador); ?></td>
                    <td><?php echo e($oei->medida); ?></td>
                    <td><?php echo e($oei->meta1); ?></td>
                    <td><?php echo e($oei->meta2); ?></td>
                </tr>
                
                <tr>
                    <td class="active2"><b>A.E.I.</b></td>
                    <td><?php echo e($aei->id); ?></td>
                    <td><?php echo e($aei->descripcion); ?></td>
                    <td><?php echo e($aei->indicador); ?></td>
                    <td><?php echo e($aei->medida); ?></td>
                    <td><?php echo e($aei->meta1); ?></td>
                    <td><?php echo e($aei->meta2); ?></td>
                </tr>
            </tbody>
        </table>
    <!--FIN 2. ALINEAMIENTO ESTRATÉGICO--> 
       
    <!--3. ARTICULACIÓN PRESUPUESTARIA-->     
        <table class="table table-bordered table-condensed">    
            <thead>
                <tr class="info2">
                    <th colspan="9">3. ARTICULACIÓN PRESUPUESTARIA</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                <tr>
                    <td class="active2" rowspan="4" style="padding-top: 30px"><b>3.1. Categoría Presupuestal</b></td>
                    <td class="active2"><b>3.2. Código</b></td>
                    <td class="active2" colspan="3"><b>3.3. Denominación</b></td>
                    <td class="active2" colspan="2" rowspan="3" style="padding-top: 30px"><b>3.4. Resultado Final o Específico</b></td>
                    <td class="active2" rowspan="3" style="padding-top: 30px"><b>3.5. Inidicador</b></td>
                    <td class="active2" rowspan="3" style="padding-top: 30px"><b>3.6. Meta</b></td>
                </tr>          
                <tr>
                    <?php if($actividades->categoria==9001): ?>
                        <td class="info2"><b> 9001</b></td> 
                        <td colspan="3" class="info2">Acciones Centrales</td>    
                    <?php else: ?>
                        <td> - </td> 
                        <td colspan="3"> - </td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <?php if($actividades->categoria==9002): ?>
                        <td class="info2"><b> 9002</b></td>    
                        <td colspan="3" class="info2">Asignación Presupuestaria que no resulta en Productos</td> 
                    <?php else: ?>
                        <td> - </td> 
                        <td colspan="3"> - </td>
                    <?php endif; ?>   
                </tr>
                
                <tr>
                    <?php if($actividades->categoria!=9002 && $actividades->categoria!=9001): ?>
                        <td class="info2"><b> <?php echo e($actividades->categoria); ?></b></td>    
                        <td colspan="3" class="info2"><?php echo e($prog_p->nombre); ?></td>    
                        <td colspan="2" class="info2">(Resultado final o específico del PP)</td>    
                        <td class="info2">(Indicador del PP)</td>    
                        <td class="info2">(Meta del PP)</td>
                    <?php else: ?>
                        <td> - </td> 
                        <td colspan="3"> - </td>
                        <td colspan="2"> - </td>
                        <td> - </td>
                        <td> - </td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td class="active2" rowspan="2"><b>3.7. Estructura Funcional Programática</b></td>
                    <td class="active2"><b>Función</b></td>
                    <td class="active2"><b>División Funcional</b></td>
                    <td class="active2"><b>Grupo Funcional</b></td>
                    <td class="active2"><b>Categoría Presupuestal</b></td>
                    <td class="active2"><b>Producto/Proyecto</b></td>
                    <td class="active2"><b>Actividad/Acción/Obra</b></td>
                    <td class="active2"><b>Finalidad</b></td>
                    <td class="active2"><b>Meta Presupuetaria</b></td>
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
    
    <!--4. PROGRAMACIÓN OPERATIVA POR ACTIVIDAD-->        
        <table class="table table-bordered table-condensed"> 
        <!--TITULOS-->     
            <thead>
                <tr class="info2">
                    <th colspan="20">4. PROGRAMACIÓN OPERATIVA POR ACTIVIDAD</th>
                </tr>
            </thead>
        <!--FIN TITULOS-->
        
        <!--SUBTITULOS-->
            <tbody>
                <tr style="text-align: center">
                    <td class="active2" rowspan="2"><b>4.1. Unidad Responsable</b></td>
                    <td class="active2" rowspan="2"><b>4.2. Código</b></td>
                    <td class="active2" colspan="4" rowspan="2"><b>4.3. Denominacion de la Actividad</b></td>
                    <td class="active2" colspan="3" rowspan="2"><b>4.4. Indicador</b></td>
                    <td class="active2" colspan="2" rowspan="2"><b>4.5. Unidad de Medida</b></td>
                    <td class="active2" colspan="4"><b>4.6. Meta Anual</b></td>
                    <td class="active2" colspan="5"><b>4.7. Fuente de Financiamiento</b></td>
                </tr> 
                
                <tr style="text-align: center">
                    <td class="active2" colspan="2"><b>Física</b></td>
                    <td class="active2" colspan="2"><b>Financiera</b></td>
                    <td class="active2"><b>RO</b></td>
                    <td class="active2"><b>RDR</b></td>
                    <td class="active2"><b>ROOC</b></td>
                    <td class="active2"><b>DyT</b></td>
                    <td class="active2"><b>RD</b></td>
                </tr>  
        <!--FIN SUBTITULOS-->
                       
        <!--CUERPO 1-->
                <tr style="text-align: center">
                    <td><?php echo e($actividades->uniresponsable); ?></td>
                    <td><?php echo e($actividades->actid); ?></td>
                    <td colspan="4"><?php echo e($actividades->nomact); ?></td>
                    <td colspan="3"><?php echo e($actividades->indicador); ?></td>
                    <td colspan="2"><?php echo e($actividades->medida); ?></td>
                    <td colspan="2"><?php echo e($actividades->fisica); ?></td>
                    <td colspan="2"><?php echo e($fuente->total); ?></td>
                    <?php if($actividades->fuente1 == 1): ?>
                        <td> <?php echo e($fuente->total); ?> </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                    
                    <?php if($actividades->fuente2 == 2): ?>
                        <td> <?php echo e($fuente->total); ?> </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                    
                    <?php if($actividades->fuente3 == 3): ?>
                        <td> <?php echo e($fuente->total); ?> </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                    
                    <?php if($actividades->fuente4 == 4): ?>
                        <td> <?php echo e($fuente->total); ?> </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                    
                    <?php if($actividades->fuente5 == 5): ?>
                        <td> <?php echo e($fuente->total); ?> </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                </tr> 
        <!--FIN CUERPO 1-->
                       
        <!--CUERPO 2-->
                <tr style="text-align: center">
                    <td class="active2" colspan="2"><b>4.8. Actividad-Proyecto</b></td>
                    <td class="active2" colspan="6"><b>4.8.1. Descripción</b></td>
                    <td class="active2" colspan="3"><b>4.8.2. Localización</b></td>
                    <td class="active2" colspan="3"><b>4.8.3. Beneficiarios</b></td>
                    <td class="active2" colspan="4"><b>4.8.4. Estrategia(s) Operativa(s)</b></td>
                    <td class="active2" colspan="2"><b>4.9. Prioridad</b></td>
                </tr>
                   
                <tr style="text-align: center">
                    <td colspan="2"><?php echo e($actividades->nomact); ?></td>
                    <td colspan="6"><?php echo e($actividades->descripcion); ?></td>
                    <td colspan="3"><?php echo e($actividades->local); ?></td>
                    <td colspan="3"><?php echo e($actividades->beneficio); ?></td>
                    <td colspan="4"><?php echo e($actividades->estrategia); ?></td>
                    <?php if($actividades->prioridad==1): ?>
                        <td colspan="2">NORMAL</td>
                    <?php else: ?>
                        <td colspan="2">URGENTE</td>
                    <?php endif; ?>
                </tr> 
        <!--FIN CUERPO 2-->
        <!--CUERPO 3-->
                <tr style="text-align: center">
                    <td class="active2" rowspan="2"><b>4.10. Actividad-Proyecto/Tarea-Componente</b></td>
                    <td class="active2" colspan="2" rowspan="2"><b>Unidad de Medida</b></td>
                    <td class="active2" colspan="3"><b>I Trimestre</b></td>
                    <td class="active2" rowspan="2"><b>Total al I Trim</b></td>
                    <td class="active2" colspan="3"><b>II Trimestre</b></td>
                    <td class="active2" rowspan="2"><b>Total al II Trim</b></td>
                    <td class="active2" colspan="3"><b>III Trimestre</b></td>
                    <td class="active2" rowspan="2"><b>Total al III Trim</b></td>
                    <td class="active2" colspan="3"><b>IV Trimestre</b></td>
                    <td class="active2" rowspan="2"><b>Total al IV Trim</b></td>
                    <td class="active2" rowspan="2"><b>Total I Anual</b></td>
                </tr>
                
                <tr style="text-align: center">
                    <td class="active2"><b>Ene</b></td>
                    <td class="active2"><b>Feb</b></td>
                    <td class="active2"><b>Mar</b></td>
                    <td class="active2"><b>Abr</b></td>
                    <td class="active2"><b>May</b></td>
                    <td class="active2"><b>Jun</b></td>
                    <td class="active2"><b>Jul</b></td>
                    <td class="active2"><b>Ago</b></td>
                    <td class="active2"><b>Set</b></td>
                    <td class="active2"><b>Oct</b></td>
                    <td class="active2"><b>Nov</b></td>
                    <td class="active2"><b>Dic</b></td>
                </tr>
                <!--------------------------------------------------->
                <?php if($tareasrow != 0): ?>
                <tr style="text-align: right">
                    <td class="active2 text-center" rowspan="2"><?php echo e($actividades->nomact); ?></td>
                    <td class="active2 text-center"><b>Física</b></td>
                    <td class="fisica text-center">( - )</td>
                    <td class="fisica"><?php echo e($acttareas->act_enero); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_febrero); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_marzo); ?></td>
                    <td class="active2"><b><?php echo e($acttareas->act_tri1); ?></b></td>
                    <td class="fisica"><?php echo e($acttareas->act_abril); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_mayo); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_junio); ?></td>
                    <td class="active2"><b><?php echo e($acttareas->act_tri2); ?></b></td>
                    <td class="fisica"><?php echo e($acttareas->act_julio); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_agosto); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_setiembre); ?></td>
                    <td class="active2"><b><?php echo e($acttareas->act_tri3); ?></b></td>
                    <td class="fisica"><?php echo e($acttareas->act_octubre); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_noviembre); ?></td>
                    <td class="fisica"><?php echo e($acttareas->act_diciembre); ?></td>
                    <td class="active2"><b><?php echo e($acttareas->act_tri4); ?></b></td>
                    <td class="active2"><b><?php echo e($acttareas->act_total); ?></b></td>
                </tr>
                    <?php if($actinsumosrow != 0): ?>
                    <tr style="text-align: right">
                        <td class="active2 text-center"><b>Financiera</b></td>
                        <td class="financiera text-center"> S/. </td>
                        <td class="financiera"><?php echo e($actinsumos->insenero); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->insfebrero); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->insmarzo); ?></td>
                        <td class="active2"><b><?php echo e($actinsumos->instri1); ?></b></td>
                        <td class="financiera"><?php echo e($actinsumos->insabril); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->insmayo); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->insjunio); ?></td>
                        <td class="active2"><b><?php echo e($actinsumos->instri2); ?></b></td>
                        <td class="financiera"><?php echo e($actinsumos->insjulio); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->insagosto); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->inssetiembre); ?></td>
                        <td class="active2"><b><?php echo e($actinsumos->instri3); ?></b></td>
                        <td class="financiera"><?php echo e($actinsumos->insoctubre); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->insnoviembre); ?></td>
                        <td class="financiera"><?php echo e($actinsumos->insdiciembre); ?></td>
                        <td class="active2"><b><?php echo e($actinsumos->instri4); ?></b></td>
                        <td class="active2"><b><?php echo e($actinsumos->instotal); ?></b></td>
                    </tr>
                    <?php else: ?>
                    <tr style="text-align: right">
                        <td class="active2 text-center"><b>Financiera</b></td>
                        <td class="financiera text-center"> S/. </td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="active2"><b> - </b></td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="active2"><b> - </b></td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="active2"><b> - </b></td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="financiera"> - </td>
                        <td class="active2"><b> - </b></td>
                        <td class="active2"><b> - </b></td>
                    </tr>
                    <?php endif; ?>
                <!--------------------------------------------------->
                <?php else: ?>
                <tr style="text-align: right">
                    <td class="active2 text-center" rowspan="2"><?php echo e($actividades->nomact); ?></td>
                    <td class="active2 text-center"><b>Física</b></td>
                    <td class="fisica text-center">( - )</td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="fisica"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="active2"><b> - </b></td>
                </tr>
                
                <tr style="text-align: right">
                    <td class="active2 text-center"><b>Financiera</b></td>
                    <td class="financiera text-center"> S/. </td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="financiera"> - </td>
                    <td class="active2"><b> - </b></td>
                    <td class="active2"><b> - </b></td>
                </tr>
                <?php endif; ?>
                <!--------------------------------------------------->
                <?php ($tar=1); ?>                    
                <?php if($tareasrow != 0): ?>
                <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: right;">
                    <td style="text-align: left" class="active2" rowspan="2">
                        <a style="color: black;" href="#" data-toggle="modal" data-target="#<?php echo e($tarea->id); ?>" title="Editar"><span class="glyphicon glyphicon-pencil" style="font-size: 13px;"></span></a>
                        <!-------------------------Modal------------------------------------------------------------>
                        <div class="modal fade bd-example-modal-lg" id="<?php echo e($tarea->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title text-center" id="myModalLabel">Editar Tarea: <?php echo e($tarea->tarea); ?></h4>
                                </div>
                                <?php echo Form::open(['url'=>'poi/huamalies/edittarea/'.$tarea->id, 'class'=>'form-horizontal']); ?>

                                <div class="modal-body">
                                    <?php echo Form::hidden('poi_actividad_proyecto_idactividad_proyecto', $id, ['class'=>'form-control', 'id'=>'poi_actividad_proyecto_idactividad_proyecto']); ?>

                                    <div class="form-group">
                                        <?php echo Form::label('Denominación', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="tar_descripcion" name="tar_descripcion" required placeholder="Ingrese la Denominación"><?php echo e($tarea->tarea); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Unid. Medida', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::text('tar_um', $tarea->um, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Unid. de Medida', 'id'=>'tar_um']); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Cantidad',null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::number('taredit_cantidad', $tarea->total, ['class'=>'form-control', 'readonly'=>'true', 'id'=>'taredit_cantidad', 'placeholder'=>'Ingrese la Cant. para cada Mes']); ?>

                                        </div>
                                    </div>
                                    <br>
                                    <table class="table-bordered table-condensed">
                                        <thead class="info2">
                                            <tr>
                                                <th class="text-center">Enero</th>
                                                <th class="text-center">Febrero</th>
                                                <th class="text-center">Marzo</th>
                                                <th class="text-center">Abril</th>
                                                <th class="text-center">Mayo</th>
                                                <th class="text-center">Junio</th>
                                                <th class="text-center">Julio</th>
                                                <th class="text-center">Agosto</th>
                                                <th class="text-center">Setiembre</th>
                                                <th class="text-center">Octubre</th>
                                                <th class="text-center">Noviembre</th>
                                                <th class="text-center">Diciembre</th>
                                            </tr>                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo Form::text('taredit_enero', $tarea->tar_enero, ['class'=>'form-control sumar', 'id'=>'taredit_enero']); ?></td>
                                                <td><?php echo Form::text('taredit_febrero', $tarea->tar_febrero, ['class'=>'form-control sumar', 'id'=>'taredit_febrero']); ?></td>
                                                <td><?php echo Form::text('taredit_marzo', $tarea->tar_marzo, ['class'=>'form-control sumar', 'id'=>'taredit_marzo']); ?></td>
                                                <td><?php echo Form::text('taredit_abril', $tarea->tar_abril, ['class'=>'form-control sumar', 'id'=>'taredit_abril']); ?></td>
                                                <td><?php echo Form::text('taredit_mayo', $tarea->tar_mayo, ['class'=>'form-control sumar', 'id'=>'taredit_mayo']); ?></td>
                                                <td><?php echo Form::text('taredit_junio', $tarea->tar_junio, ['class'=>'form-control sumar', 'id'=>'taredit_junio']); ?></td>
                                                <td><?php echo Form::text('taredit_julio', $tarea->tar_julio, ['class'=>'form-control sumar', 'id'=>'taredit_julio']); ?></td>
                                                <td><?php echo Form::text('taredit_agosto', $tarea->tar_agosto, ['class'=>'form-control sumar', 'id'=>'taredit_agosto']); ?></td>
                                                <td><?php echo Form::text('taredit_setiembre', $tarea->tar_setiembre, ['class'=>'form-control sumar', 'id'=>'taredit_setiembre']); ?></td>
                                                <td><?php echo Form::text('taredit_octubre', $tarea->tar_octubre, ['class'=>'form-control sumar', 'id'=>'taredit_octubre']); ?></td>
                                                <td><?php echo Form::text('taredit_noviembre', $tarea->tar_noviembre, ['class'=>'form-control sumar', 'id'=>'taredit_noviembre']); ?></td>
                                                <td><?php echo Form::text('taredit_diciembre', $tarea->tar_diciembre, ['class'=>'form-control sumar', 'id'=>'taredit_diciembre']); ?></td>
                                            </tr>
                                        </tbody>                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="cancel">Cancelar</button>
                                  <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                <?php echo Form::close(); ?>

                              </div>
                            </div>
                        </div>
                        <!-------------------------Fin Modal------------------------------------------------------------>
                        
                         Tarea <?php echo e($tar); ?> : <b><?php echo e($tarea->tarea); ?></b>
                        <a href="<?php echo e(url('poi/huamalies/insumos/'.$id.'/'.$tarea->id)); ?>" class="btn btn-success btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Clasif.</a>
                    </td>                  
                    <td class="active2 text-center"><b>Física</b></td>
                    <td class="fisicatar text-center">( - )</td>
                    <td class="fisicatar"><?php echo e($tarea->tar_enero); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_febrero); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_marzo); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tar_enero+$tarea->tar_febrero+$tarea->tar_marzo); ?></b></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_abril); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_mayo); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_junio); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tar_abril+$tarea->tar_mayo+$tarea->tar_junio); ?></b></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_julio); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_agosto); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_setiembre); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tar_julio+$tarea->tar_agosto+$tarea->tar_setiembre); ?></b></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_octubre); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_noviembre); ?></td>
                    <td class="fisicatar"><?php echo e($tarea->tar_diciembre); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tar_octubre+$tarea->tar_noviembre+$tarea->tar_diciembre); ?></b></td>
                    <td class="active2"><b><?php echo e($tarea->total); ?></b></td>
                </tr>
                
                <tr style="text-align: right" class="texto">
                    <td class="active2 text-center"><b>Financiera</b></td>
                    <td class="financieratar text-center"> S/. </td>
                    <td class="financieratar"><?php echo e($tarea->tarenero); ?></td>
                    <td class="financieratar"><?php echo e($tarea->tarfebrero); ?></td>
                    <td class="financieratar"><?php echo e($tarea->tarmarzo); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tartri1); ?></b></td>
                    <td class="financieratar"><?php echo e($tarea->tarabril); ?></td>
                    <td class="financieratar"><?php echo e($tarea->tarmayo); ?></td>
                    <td class="financieratar"><?php echo e($tarea->tarjunio); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tartri2); ?></b></td>
                    <td class="financieratar"><?php echo e($tarea->tarjulio); ?></td>
                    <td class="financieratar"><?php echo e($tarea->taragosto); ?></td>
                    <td class="financieratar"><?php echo e($tarea->tarsetiembre); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tartri3); ?></b></td>
                    <td class="financieratar"><?php echo e($tarea->taroctubre); ?></td>
                    <td class="financieratar"><?php echo e($tarea->tarnoviembre); ?></td>
                    <td class="financieratar"><?php echo e($tarea->tardiciembre); ?></td>
                    <td class="active2"><b><?php echo e($tarea->tartri4); ?></b></td>
                    <td class="active2"><b><?php echo e($tarea->tartotal); ?></b></td>
                </tr>
                <?php ($tar++); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <!---------------------------------------------------> 
                            
                <tr style="text-align: center">
                    <td class="active2" rowspan="2">
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#tarea_modal"><i class="glyphicon glyphicon-plus"></i> Tarea <?php echo e($tar); ?></button>
                        
                        <!-------------------------Modal------------------------------------------------------------>
                        <div class="modal fade bd-example-modal-lg" id="tarea_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Agregar Tarea - Actividad N°<?php echo e($id); ?></h4>
                                </div>
                                <?php echo Form::open(['url'=>'poi/huamalies/tarea', 'class'=>'form-horizontal']); ?>

                                <div class="modal-body">
                                    <?php echo Form::hidden('poi_actividad_proyecto_idactividad_proyecto', $id, ['class'=>'form-control', 'id'=>'poi_actividad_proyecto_idactividad_proyecto']); ?>

                                    <div class="form-group">
                                        <?php echo Form::label('Denominación', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="tar_descripcion" name="tar_descripcion" required placeholder="Ingrese la Denominación"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Unid. Medida', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::text('tar_um', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Unid. de Medida', 'id'=>'tar_um']); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Cantidad',null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::number('tar_cantidad', '', ['class'=>'form-control', 'readonly'=>'true', 'id'=>'tar_cantidad', 'placeholder'=>'Ingrese la Cant. para cada Mes']); ?>

                                            <div class="hide alert alert-danger">La cantidad debe de ser mayor a 0</div>
                                        </div>
                                    </div>
                                    <br>
                                    <table class="table-bordered table-condensed">
                                        <thead class="info2">
                                            <tr>
                                                <th class="text-center">Enero</th>
                                                <th class="text-center">Febrero</th>
                                                <th class="text-center">Marzo</th>
                                                <th class="text-center">Abril</th>
                                                <th class="text-center">Mayo</th>
                                                <th class="text-center">Junio</th>
                                                <th class="text-center">Julio</th>
                                                <th class="text-center">Agosto</th>
                                                <th class="text-center">Setiembre</th>
                                                <th class="text-center">Octubre</th>
                                                <th class="text-center">Noviembre</th>
                                                <th class="text-center">Diciembre</th>
                                            </tr>                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo Form::text('tar_enero', '0', ['class'=>'form-control sumar2', 'id'=>'tar_enero']); ?></td>
                                                <td><?php echo Form::text('tar_febrero', '0', ['class'=>'form-control sumar2', 'id'=>'tar_febrero']); ?></td>
                                                <td><?php echo Form::text('tar_marzo', '0', ['class'=>'form-control sumar2', 'id'=>'tar_marzo']); ?></td>
                                                <td><?php echo Form::text('tar_abril', '0', ['class'=>'form-control sumar2', 'id'=>'tar_abril']); ?></td>
                                                <td><?php echo Form::text('tar_mayo', '0', ['class'=>'form-control sumar2', 'id'=>'tar_mayo']); ?></td>
                                                <td><?php echo Form::text('tar_junio', '0', ['class'=>'form-control sumar2', 'id'=>'tar_junio']); ?></td>
                                                <td><?php echo Form::text('tar_julio', '0', ['class'=>'form-control sumar2', 'id'=>'tar_julio']); ?></td>
                                                <td><?php echo Form::text('tar_agosto', '0', ['class'=>'form-control sumar2', 'id'=>'tar_agosto']); ?></td>
                                                <td><?php echo Form::text('tar_setiembre', '0', ['class'=>'form-control sumar2', 'id'=>'tar_setiembre']); ?></td>
                                                <td><?php echo Form::text('tar_octubre', '0', ['class'=>'form-control sumar2', 'id'=>'tar_octubre']); ?></td>
                                                <td><?php echo Form::text('tar_noviembre', '0', ['class'=>'form-control sumar2', 'id'=>'tar_noviembre']); ?></td>
                                                <td><?php echo Form::text('tar_diciembre', '0', ['class'=>'form-control sumar2', 'id'=>'tar_diciembre']); ?></td>
                                            </tr>
                                        </tbody>                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="cancel">Cancelar</button>
                                  <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                <?php echo Form::close(); ?>

                              </div>
                            </div>
                        </div>
                        <!-------------------------Fin Modal------------------------------------------------------------>
                    </td>
                    
                       
        <!--FIN CUERPO 3-->                   
            </tbody>
        </table>
    <!--FIN 4. PROGRAMACIÓN OPERATIVA POR ACTIVIDAD-->                      
    <!--LISTA TAREAS,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,-->     
    
    
    </div>    
    <div class="col-xs-12">
        <a href="#" onclick="javascript:window.close()" class="btn btn-danger"><i class="glyphicon glyphicon-off"></i> Salir</a>
        <a href="<?php echo e(url('poi/exportarf2/'.$id)); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-save-file"></i> Excel</a>
        <a href="<?php echo e(url('poi/huamalies/'.$id.'/edit')); ?>" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-pencil"></span> Editar</a>        
    </div>
    <br> <br>
</div>    
<!--FIN FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACT
<!------------------------------------------------------------------------------------------------------------------------------->  
<!-- Select2 -->
<script src="<?php echo e(asset('plugins/select2/select2.full.min.js')); ?>"></script>
<script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>
<script>
    
    $(".select2-container").select2();
    
    $('document').ready(function(){
        $('.sumar').keyup(function(){
            var valortotal = $(this).parent().parent().parent().parent().parent();
           // alert(123);
            var value = (parseFloat(valortotal.find('#taredit_enero').val()) + parseFloat(valortotal.find('#taredit_febrero').val()) + parseFloat(valortotal.find('#taredit_marzo').val()) + parseFloat(valortotal.find('#taredit_abril').val()) + parseFloat(valortotal.find('#taredit_mayo').val()) + parseFloat(valortotal.find('#taredit_junio').val()) + parseFloat(valortotal.find('#taredit_julio').val()) + parseFloat(valortotal.find('#taredit_agosto').val()) + parseFloat(valortotal.find('#taredit_setiembre').val()) + parseFloat(valortotal.find('#taredit_octubre').val()) + parseFloat(valortotal.find('#taredit_noviembre').val()) + parseFloat(valortotal.find('#taredit_diciembre').val()));            
            valortotal.find('#taredit_cantidad').val( value.toFixed(2) );
        });
    });
    
    $('document').ready(function(){
        $('.sumar2').keyup(function(){
            var value = (parseFloat($('#tar_enero').val()) + parseFloat($('#tar_febrero').val()) + parseFloat($('#tar_marzo').val()) + parseFloat($('#tar_abril').val()) + parseFloat($('#tar_mayo').val()) + parseFloat($('#tar_junio').val()) + parseFloat($('#tar_julio').val()) + parseFloat($('#tar_agosto').val()) + parseFloat($('#tar_setiembre').val()) + parseFloat($('#tar_octubre').val()) + parseFloat($('#tar_noviembre').val()) + parseFloat($('#tar_diciembre').val()));            
            $("#tar_cantidad").val( value );
        });
    });
    
    $('#tarea_modal').find('form').submit(function (event) {
	    selector = "#tar_cantidad";
        input =$(selector);
        if((input.val()>0)){}
        else {
            input.next().removeClass('hide');
            event.preventDefault();
        }
    })    
    
    $(document).ready(function() {
      $(".js-example-basic-single").select2();
    });
</script>
</body>

</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\huamalies\ver.blade.php ENDPATH**/ ?>