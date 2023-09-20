<?
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=FORMATOF3.xls");
exit(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORMATO F-3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    <style>
        .texto {
            font-size:11px;
            font-family: Tahoma;
        }
    </style>
    
    <style media="print">                
        table, th, td {
            font-size:8px;
            font-family: Tahoma;
        }
        
        .texto {
            font-size:11px;
            font-family: Tahoma;
        }
        
        .text-center {
            text-align: center;
        }
        
        /*------------------------------class = "table"------------------------------------*/
        /*------------------------------class = "table"------------------------------------*/
        .table{
            border-collapse: collapse;
            text-align: left;
            width: 100%;  
            font-family: Tahoma;  
            background: #fff;
            border: 1px solid #DDDDDD; 
            margin-bottom: 8px;
        }

        .table thead th {    
            color: #333333;  
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 8px;
            font-weight: bold;
            border-bottom: 2px solid #DDDDDD;  
            border-left: 1px solid #DDDDDD;  
        }

        .table tbody td {
            color: #333333;    
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 8px;  
            font-weight: normal;  
            border: 1px solid #DDDDDD; 
        }
        /*------------------------------class = "table"------------------------------------*/

        /*------------------------------class = "primary"------------------------------------*/
        .info {
            background-color: #D9EDF7; 
        }

        .info th {
            background-color: #D9EDF7; 
        }

        .info td {
            background-color: #D9EDF7; 
        }
        /*------------------------------class = "primary"------------------------------------*/

        /*------------------------------class = "info"------------------------------------*/
        .active {
            background-color: #F5F5F5; 
        }

        .active th {
            background-color: #F5F5F5; 
        }

        .active td {
            background-color: #F5F5F5; 
        }
        /*------------------------------class = "info"------------------------------------*/
        
    </style>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jQuery.print.js')); ?>"></script>  
</head>

<body>
<!------------------------------------------------------------------------------------------------------------------------------>  
    <div style="page-break-before: always; page-break-after: always; page-break-inside:always;">
<!--FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO-->
    <div id="myPrintArea" class="container-fluid">
        <div>
            <h3></h3>    
        </div>       
        
        <!--<p>The .table class adds basic styling (light padding-top and only horizontal dividers) to a table:</p>-->
    <!--TITULO-->
        <table class="table table-bordered" style="font-size:11px; font-family: Tahoma;">
            <thead>
                <tr bgcolor="#98CCF4">
                    <th style="text-align: center" width="100%">FORMATO F-3: CUADRO DE ASIGNACIÓN POR INSUMOS POR TAREAS/COMPONENTES</th>
                </tr>
            </thead>                        
        </table>
        
        <div style="text-align: center">
            <label style="font-size:11px; font-family: Tahoma;">01. ACTIVIDAD/PROYECTO N°01: </label>
            <input type="text" id="actividadProy" size="100%" value="<?php echo e($actividad->actividad); ?>" class="texto text-center">
        </div>
        <h3></h3>
    <!--FIN TITULO-->
       
    <!--1. INFORMACIÓN GENERA-->    
        <table class="table table-bordered table-condensed" style="font-size:9px; font-family: Tahoma;">    
            <tbody>
                <tr class="info">
                    <td style="text-align: center" rowspan="2">IDT</td>
                    <td style="text-align: center" rowspan="2">1. TAREAS</td>
                    <td style="text-align: center" rowspan="2">2. INSUMOS  </td>
                    <td style="text-align: center" rowspan="2">3. UM (Insumo)</td>
                    <td style="text-align: center" rowspan="2">4. CANTID AD (Insu mo)</td>
                    <td style="text-align: center" rowspan="2">FF</td>
                    <td style="text-align: center" rowspan="2">GG</td>
                    <td style="text-align: center" rowspan="2">Sub G1</td>
                    <td style="text-align: center" rowspan="2">Sub G2</td>
                    <td style="text-align: center" rowspan="2">Esp 1</td>
                    <td style="text-align: center" rowspan="2">Esp 2</td>
                    <td style="text-align: center" rowspan="2">7. COST  O REFER  EN  CIAL</td>
                    <td style="text-align: center" rowspan="2">8. MONTO TOTAL</td>
                    <td style="text-align: center" colspan="17">9. Distribución Presupuestal de los Recursos(Programación de Devangados)</td>
                </tr>
                
                <tr class="active">
                    <td><b>Ene</b></td>
                    <td><b>Feb</b></td>
                    <td><b>Mar</b></td>
                    <td><b>Total I Trimestre</b></td>                    
                    <td><b>Abr</b></td>
                    <td><b>May</b></td>
                    <td><b>Jun</b></td>
                    <td><b>Total II Trimestre</b></td>   
                    <td><b>Jul</b></td>
                    <td><b>Ago</b></td>
                    <td><b>Set</b></td>
                    <td><b>Total III Trimestre</b></td>   
                    <td><b>Oct</b></td>
                    <td><b>Nov</b></td>
                    <td><b>Dic</b></td>
                    <td><b>Total IV Trimestre</b></td>   
                    <td><b>TOTAL</b></td>   
                </tr>
            </tbody>
            
        <?php if($tareasrow != 0): ?>
            <tbody>
                <tr class="text-right">
                    <td colspan="12" class="active text-left"><b>Actividad 1</b></td>
                    <td class="info"><b><?php echo e($actividad->acttotal); ?></b></td>
                    <td class="active"><?php echo e($actividad->actenero); ?></td>
                    <td class="active"><?php echo e($actividad->actfebrero); ?></td>
                    <td class="active"><?php echo e($actividad->actmarzo); ?></td>
                    <td class="active"><b><?php echo e($actividad->acttri1); ?></b></td>
                    <td class="active"><?php echo e($actividad->actabril); ?></td>
                    <td class="active"><?php echo e($actividad->actmayo); ?></td>
                    <td class="active"><?php echo e($actividad->actjunio); ?></td>
                    <td class="active"><b><?php echo e($actividad->acttri2); ?></b></td>
                    <td class="active"><?php echo e($actividad->actjulio); ?></td>
                    <td class="active"><?php echo e($actividad->actagosto); ?></td>
                    <td class="active"><?php echo e($actividad->actsetiembre); ?></td>
                    <td class="active"><b><?php echo e($actividad->acttri3); ?></b></td>
                    <td class="active"><?php echo e($actividad->actoctubre); ?></td>
                    <td class="active"><?php echo e($actividad->actnoviembre); ?></td>
                    <td class="active"><?php echo e($actividad->actdiciembre); ?></td>
                    <td class="active"><b><?php echo e($actividad->acttri4); ?></b></td>
                    <td class="info"><b><?php echo e($actividad->acttotal); ?></b></td>
                </tr>
        <!------------------------------------TAREA 01----------------------------------------> 
               
            <?php ($con_tar=1); ?>  
            <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($frack=1); ?>  
                
                <?php $__currentLoopData = $insumos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insumo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($insumo->id_tarea == $tarea->id_tarea): ?>
                <tr style="text-align: center">                    
                    <?php if($frack==1): ?>
                        <td width="1%" rowspan="<?php echo e($insumo->con_ins); ?>" class="active"><b><?php echo e($con_tar); ?></b></td>
                        <td width="7%" rowspan="<?php echo e($insumo->con_ins); ?>" class="active"><b><?php echo e($tarea->tarea); ?></b></td> 
                        <?php ($frack++); ?>
                    <?php endif; ?> 
                    <td width="6%" class="text-left"><?php echo e($insumo->insumo); ?></td>
                    <td width="4%" class="text-center"><?php echo e($insumo->um); ?></td>
                    <td width="4%" class="active text-center"><?php echo e($insumo->cantidad); ?></td>
                    <td width="2%" class="text-center"><?php echo e($insumo->fuente); ?></td>
                    <td width="2%" class="text-center" colspan="5"><?php echo e($insumo->clasificador); ?></td>
                    <td width="4%" class="active text-center"><?php echo e($insumo->costo); ?></td>
                    <td width="4%" class="active text-center"><?php echo e($insumo->monto); ?></td>
                    <?php if($insumo->enero != 0): ?>
                        <td width="3%" ><?php echo e($insumo->enero); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->febrero != 0): ?>
                        <td width="3%" ><?php echo e($insumo->febrero); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->marzo != 0): ?>
                        <td width="3%" ><?php echo e($insumo->marzo); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>                    
                    <td width="4%" class="active"><?php echo e($insumo->tri1); ?></td> 
                    <?php if($insumo->abril != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->abril); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->mayo != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->mayo); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->junio != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->junio); ?></td>       
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <td width="4%" class="active"><?php echo e($insumo->tri2); ?></td>
                    <?php if($insumo->julio != 0): ?>     
                        <td width="3%" ><?php echo e($insumo->julio); ?></td> 
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->agosto != 0): ?>     
                        <td width="3%" ><?php echo e($insumo->agosto); ?></td>       
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->setiembre != 0): ?>     
                        <td width="3%" ><?php echo e($insumo->setiembre); ?></td>       
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <td width="4%" class="active"><?php echo e($insumo->tri3); ?></td>
                    <?php if($insumo->octubre != 0): ?>    
                        <td width="3%" ><?php echo e($insumo->octubre); ?></td>   
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->noviembre != 0): ?>    
                        <td width="3%" ><?php echo e($insumo->noviembre); ?></td>   
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->diciembre != 0): ?>    
                        <td width="3%" ><?php echo e($insumo->diciembre); ?></td>   
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <td width="4%" class="active"><?php echo e($insumo->tri4); ?></td>
                    <td width="6%" class="active"><?php echo e($insumo->monto); ?></td>                    
                </tr>                 
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <tr class="text-right">
                    <td colspan="12" class="text-center"><b>TOTAL TAREA <?php echo e($con_tar); ?></b></td>
                    <td class="info"><b><?php echo e($tarea->tartotal); ?></b></td>
                    <td class="active"><?php echo e($tarea->tarenero); ?></td>
                    <td class="active"><?php echo e($tarea->tarfebrero); ?></td>
                    <td class="active"><?php echo e($tarea->tarmarzo); ?></td>
                    <td class="active"><b><?php echo e($tarea->tartri1); ?></b></td>
                    <td class="active"><?php echo e($tarea->tarabril); ?></td>
                    <td class="active"><?php echo e($tarea->tarmayo); ?></td>
                    <td class="active"><?php echo e($tarea->tarjunio); ?></td>
                    <td class="active"><b><?php echo e($tarea->tartri2); ?></b></td>
                    <td class="active"><?php echo e($tarea->tarjulio); ?></td>
                    <td class="active"><?php echo e($tarea->taragosto); ?></td>
                    <td class="active"><?php echo e($tarea->tarsetiembre); ?></td>
                    <td class="active"><b><?php echo e($tarea->tartri3); ?></b></td>
                    <td class="active"><?php echo e($tarea->taroctubre); ?></td>
                    <td class="active"><?php echo e($tarea->tarnoviembre); ?></td>
                    <td class="active"><?php echo e($tarea->tardiciembre); ?></td>
                    <td class="active"><b><?php echo e($tarea->tartri4); ?></b></td>
                    <td class="info"><b><?php echo e($tarea->tartotal); ?></b></td>
                </tr>
            <?php ($con_tar++); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!--------------------------------FIN TAREA 01---------------------------------------->        
                <tr>
                    <td colspan="30"></td>
                </tr>
        <!-------------------------------TOTAL ACTIVIDAD N01---------------------------------->   
                <tr class="text-right">
                    <td colspan="12" class="info text-center"><b>TOTAL ACTIVIDAD N°01</b></td>
                    <td class="info"><b><?php echo e($clasiftotal->totalmonto); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totalenero); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalfebrero); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalmarzo); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri1); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totalabril); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalmayo); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totaljunio); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri2); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totaljulio); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalagosto); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalsetiembre); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri3); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totaloctubre); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalnovembre); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totaldiciembre); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri4); ?></b></td>
                    <td class="info"><b><?php echo e($clasiftotal->totalmonto); ?></b></td>
                </tr> 
        <!-------------------------FIN TOTAL ACTIVIDAD N01---------------------------------->                   
            </tbody>
        <?php endif; ?>
            
    <!-----------------------------------RESUMEN POR ESPECÍFICAS--------------------------------------------> 
            <tbody>
                <tr>
                    <td colspan="30"><br><br></td>
                </tr>
               
                <tr  class="info">
                    <td style="text-align: center" colspan="2"><b>ACTIVIDAD/PROYECTO</b></td>
                    <td style="text-align: center" colspan="11"><b>10. RESUMEN POR ESPECÍFICAS</b></td>
                    <td style="text-align: center"><b>Ene</b></td>
                    <td style="text-align: center"><b>Feb</b></td>
                    <td style="text-align: center"><b>Mar</b></td>
                    <td style="text-align: center"><b>I Trim</b></td>
                    <td style="text-align: center"><b>Abr</b></td>
                    <td style="text-align: center"><b>May</b></td>
                    <td style="text-align: center"><b>Jun</b></td>
                    <td style="text-align: center"><b>II Trim</b></td>
                    <td style="text-align: center"><b>Jul</b></td>
                    <td style="text-align: center"><b>Ago</b></td>
                    <td style="text-align: center"><b>Set</b></td>
                    <td style="text-align: center"><b>III Trim</b></td>
                    <td style="text-align: center"><b>Oct</b></td>
                    <td style="text-align: center"><b>Nov</b></td>
                    <td style="text-align: center"><b>Dic</b></td>
                    <td style="text-align: center"><b>IV Trim</b></td>
                    <td style="text-align: center"><b>  TOTAL  </b></td>
                </tr>
        
        <?php if($tareasrow != 0): ?>
                <?php ($fra=1); ?>
                <?php $__currentLoopData = $clasificadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clasificador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-right">
                    <?php if($fra==1): ?>
                        <td width="8%" class="active text-center" rowspan="<?php echo e($clasifrow); ?>" colspan="2"><b><?php echo e($actividad->actividad); ?></b></td>  
                        <?php ($fra++); ?>
                    <?php endif; ?>
                    <td width="6%" class="active text-center"><?php echo e($clasificador->nombreclasf); ?></td>
                    <td width="4%"></td>
                    <td width="4%" class="active"><?php echo e($clasificador->clacantidad); ?></td>
                    <td width="2%"> - </td>
                    <td width="2%" colspan="5" class="text-center"><?php echo e($clasificador->clasificador); ?></td>
                    <td width="4%" class="active"></td>
                    <td width="4%" class="active"><?php echo e($clasificador->clamonto); ?></td>
                    <td width="3%"><?php echo e($clasificador->claenero); ?></td>
                    <td width="3%"><?php echo e($clasificador->clafebrero); ?></td>
                    <td width="3%"><?php echo e($clasificador->clamarzo); ?></td>
                    <td width="4%" class="active"><?php echo e($clasificador->clatri1); ?></td>
                    <td width="3%"><?php echo e($clasificador->claabril); ?></td>
                    <td width="3%"><?php echo e($clasificador->clamayo); ?></td>
                    <td width="3%"><?php echo e($clasificador->clajunio); ?></td>
                    <td width="4%" class="active"><?php echo e($clasificador->clatri2); ?></td>
                    <td width="3%"><?php echo e($clasificador->clajulio); ?></td>
                    <td width="3%"><?php echo e($clasificador->claagosto); ?></td>
                    <td width="3%"><?php echo e($clasificador->clasetiembre); ?></td>
                    <td width="4%" class="active"><?php echo e($clasificador->clatri3); ?></td>
                    <td width="3%"><?php echo e($clasificador->claoctubre); ?></td>
                    <td width="3%"><?php echo e($clasificador->clanoviembre); ?></td>
                    <td width="3%"><?php echo e($clasificador->cladiciembre); ?></td>
                    <td width="4%" class="active"><?php echo e($clasificador->clatri4); ?></td>
                    <td width="6%" class="info"><?php echo e($clasificador->clamonto); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                                   
                <tr class="text-right">
                    <td class="info text-center" colspan="12"><b>TOTAL</b></td>
                    <td class="info"><b><?php echo e($clasiftotal->totalmonto); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totalenero); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalfebrero); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalmarzo); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri1); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totalabril); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalmayo); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totaljunio); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri2); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totaljulio); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalagosto); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalsetiembre); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri3); ?></b></td>
                    <td class="active"><?php echo e($clasiftotal->totaloctubre); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totalnoviembre); ?></td>
                    <td class="active"><?php echo e($clasiftotal->totaldiciembre); ?></td>
                    <td class="info"><b><?php echo e($clasiftotal->totaltri4); ?></b></td>
                    <td class="info"><b><?php echo e($clasiftotal->totalmonto); ?></b></td>
                </tr>   
            </tbody>            
        <?php endif; ?>
        
        </table>
    <!-----------------------------------FIN RESUMEN POR ESPECÍFICAS-------------------------------------------->  
    
    </div>    
    </div> 
     
<!--FIN FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO-->
<!------------------------------------------------------------------------------------------------------------------------------->    
</body>
    

</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\huamalies\exportarf3.blade.php ENDPATH**/ ?>