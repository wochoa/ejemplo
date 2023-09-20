<?php $__env->startSection('content'); ?>
<?php
	use Carbon\Carbon;
	if(isset($documento)){
		if(isset(json_decode($documento->td_contenido)->doc_meta)){
			$meta =  json_decode($documento->td_contenido)->doc_meta;
		}else{
			$meta = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_especifica)){
			$especifica =  json_decode($documento->td_contenido)->doc_especifica;
		}else{
			$especifica = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_ff)){
			$fufi =  json_decode($documento->td_contenido)->doc_ff;
		}else{
			$fufi = '';
		}
		$edit = "true";
		$id_doc = $documento->id;
		$doc_asunto_txt = $documento->td_asunto_txt;
		$dnombre = $documento->td_destinoN;
		$dcargo = $documento->td_destinoO;
		$sisgedo = $documento->td_expeSISGEDO;
		$ref = $documento->td_referencia;
		$fecha = new Carbon($documento->td_fecha);
		$codsiaf = json_decode($documento->td_contenido)->doc_idobra;
		$codmeta = $meta;
		$obraname = json_decode($documento->td_contenido)->doc_obra;
		$esp = array();
		$esp = explode(', ', $especifica);
		//dd($esp);
		if (count($esp) > 1) {
			$temesp = explode(' y ', $esp[count($esp)-1]);
			$esp[count($esp)-1] = $temesp[0];
			$esp[count($esp)] = $temesp[1];
		}
		
		$sec_func = substr($meta,0,4);
		$ff = $fufi;
		if(isset(json_decode($documento->td_contenido)->doc_cp)){
			$cp = json_decode($documento->td_contenido)->doc_cp;
		}else{
			$cp = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_monto)){
			$monto =  json_decode($documento->td_contenido)->doc_monto;
		}else{
			$monto = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_nro_pedido)){
			$nrop = json_decode($documento->td_contenido)->doc_nro_pedido;
		}else{
			$nrop = '';
		}
		
		if(isset(json_decode($documento->td_contenido)->doc_nro_contrato)){
			$contrato = json_decode($documento->td_contenido)->doc_nro_contrato;
		}else{
			$contrato = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_contrato)){
			$cnombre = json_decode($documento->td_contenido)->doc_contrato;
		}else{
			$cnombre = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_val)){
			$valorizacion = json_decode($documento->td_contenido)->doc_val;
		}else{
			$valorizacion = '';
		}
		
		if(isset(json_decode($documento->td_contenido)->doc_proced)){
			$proced = json_decode($documento->td_contenido)->doc_proced;
		}else{
			$proced = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_snip)){
			$snip = json_decode($documento->td_contenido)->doc_snip;
		}else{
			$snip = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_depe)){
			$depe = json_decode($documento->td_contenido)->doc_depe;
		}else{
			$depe = '3';
		}
		if(isset(json_decode($documento->td_contenido)->doc_ofi)){
			$ofi_id = json_decode($documento->td_contenido)->doc_ofi;
		}else{
			$ofi_id = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_afd)){
			$afd = json_decode($documento->td_contenido)->doc_afd;
		}else{
			$afd = '';
		}
		if(isset(json_decode($documento->td_contenido)->doc_txt)){
			$txt = json_decode($documento->td_contenido)->doc_txt;
		}else{
			$txt = '';
		}
		//$monto =  json_decode($documento->td_contenido)->doc_monto;
		//$nrop = json_decode($documento->td_contenido)->doc_nro_pedido;
		$cc = implode(", ",json_decode($documento->td_cc));
	}else{
		$edit = "false";
		$dnombre = '';
		$dcargo  = '';
		$sisgedo  = '';
		$ref  = '';
		$fecha  = \Carbon\Carbon::now();
		$codsiaf = '';
		$codmeta = '';
		$obraname = '';
		$sec_func = '';
		$id_doc = '';
		$esp = '';
		$ff = '';
		$cp = '';
		$monto = '';
		$nrop = '';
		$cc = '';
		$contrato = '';
		$cnombre = '';
		$valorizacion = '';
		$proced = '';
		$doc_asunto_txt = '';
		$depe = '';
		$ofi_id = '';
		$snip = '';
		$afd = '';
		$txt = '';
	}
	if(isset($asu)){
		$adoc = $asu->id;
	}else{
		$adoc = null;
	}
	
?>
    <div class="form-body" id="doc_modulo" style="text-align: center;">
        <div class="row">
			
		<div class="form-group col-xs-12 col-sm-12 col-lg-12">
            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
				<?php
					$asunt = array();
					foreach($asunto as $a){
						$asunt[$a->id] = $a->tda_nombre;
					}
				?>
                <?php echo e(Form::label('doc_asunto', 'ASUNTO')); ?>

                <?php echo e(Form::select('doc_asunto', $asunt, $adoc, array('class' => 'form-control send verif', 'placeholder' => 'SELECCIONE UN ASUNTO') )); ?>

            </div>
		</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12">
				<div class="form-group col-xs-12 col-sm-12 col-lg-12">
				<br>
				<?php echo e(Form::label('doc_desNombre', 'NOMBRE')); ?>

                <?php echo e(Form::text('doc_desNombre', $dnombre, array('class' => 'form-control send verif') )); ?>

				<div id="cargo" >
				<?php if($dcargo != null): ?>
				<br>
				<?php echo e(Form::label('doc_desOficina', 'OFICINA')); ?>

				<?php echo e(Form::text('doc_desOficina', $dcargo, array('class' => 'form-control send verif') )); ?>

				<?php endif; ?>
				</div>
				</div>
            </div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12">
            <div class="form-group col-xs-9 col-sm-9 col-lg-9">
                <?php echo e(Form::label('doc_asunto_txt', 'ASUNTO')); ?>

                <?php echo e(Form::text('doc_asunto_txt', $doc_asunto_txt , array('class' => 'form-control send verif') )); ?>

            </div>
            <div class="form-group col-xs-3 col-sm-3 col-lg-3">
                <?php echo e(Form::label('doc_expe_sisgedo', 'EXP SISGEDO')); ?>

                <div>
                    <?php echo e(Form::number('doc_expe_sisgedo', $sisgedo, array('class' => 'form-control send verif reset'))); ?>


                </div>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                <?php echo e(Form::label('doc_referencia', 'REFERENCIA ')); ?>

                <?php echo e(Form::textarea('doc_referencia', $ref, array('class' => 'form-control send verif', 'size' => '30x3') )); ?>


            </div>
            <div class="form-group col-xs-3 col-sm-3 col-lg-3">
                <?php echo e(Form::label('doc_fecha', 'FECHA')); ?>

                <?php echo e(Form::date('doc_fecha', $fecha  , array('class' => 'form-control send verif') )); ?>

            </div>
			<div class="form-group col-xs-9 col-sm-9 col-lg-9">
                <?php echo e(Form::label('doc_proced', 'PROCEDENCIA')); ?><br>
				<div class="form-group col-xs-2 col-sm-2 col-lg-2">
				 <?php echo e(Form::text('doc_proced_cod', '47', array('class' => 'form-control') )); ?>

				</div>
				<div class="form-group col-xs-10 col-sm-10 col-lg-10">
				 <?php echo e(Form::select('doc_proced', [''=>'OFICINA'], null, array('class' => 'form-control send') )); ?>

				 <?php echo e(Form::hidden('doc_proced_nombre', null, array('class' => 'form-control send') )); ?>

				</div>
            </div>
			</div>

            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                <div  id="cuerpo" ></div>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
				<div class="form-group col-xs-12 col-sm-12 col-lg-12">
				<?php echo e(Form::label('doc_cc', 'CON COPIA A')); ?>

				<?php echo e(Form::text('doc_cc', null, array('class' => 'form-control send', 'placeholder' => 'CC1, CC2, ...') )); ?>

				</div>
                <?php echo e(Form::button('Guardar', array('type' => 'button', 'class' => 'btn btn-warning large btn_guardar'))); ?>

                <?php echo e(Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-danger btn_cancelar'))); ?>

            </div>
        </div>
        
    </div>
	<div id='Find_Obra' class="mod_ad modal fade" tabindex="-1" role="dialog" aria-labelledby="datatable">
                <div class="modal-dialog modal-lg" role="document">
                    <div id="datatable" class="modal-content form-group col-md-12 ">

					</div>
				</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>

	unidad_medida = <?php echo json_encode(\App\_clases\siaf\FuenteFinanciamiento::getFuenteFinanciamientoToSelect($anio)); ?>

	$( document ).ready(function() {
		if('<?php echo e($edit); ?>'=='true'){
			
			$('#doc_modulo').append('<input type="hidden" name="id_doc" value="<?php echo e($id_doc); ?>" class="send" />');
			
			$.get("<?php echo e(route('proyectos.herramientas.documento.listar')); ?>",{asunto :$("[name='doc_asunto']").val()}, function(e){
				$('#cuerpo').html(e)
				
                $.get("<?php echo e(route('proyectos.herramientas.documento.buscarMeta',[$anio])); ?>",
                    {proy_cod_siaf: '<?php echo e($codsiaf); ?>'}, function(e){
                        var metas;
                        var doc_meta = $("[name='doc_meta']");
                        doc_meta.empty();
                        var secfun;
                        $.each($.parseJSON(e), function(key, value){
                            m = zeroFill(value.SEC_FUNC,4) + " - " + value.COMPONENTE_NOMBRE;
                            //console.log(m);
                            if(value.SEC_FUNC == '<?php echo e($codmeta); ?>'){
                                secfun = value.SEC_FUNC;
                                doc_meta.append('<option value="'+value.SEC_FUNC+'" selected="selected">'+m+'</option>');
                            }else{
                                doc_meta.append('<option value="'+value.SEC_FUNC+'">'+m+'</option>');
                            }

                        });
                    });

                $.get("<?php echo e(route('proyectos.herramientas.documento.buscarEsp',[$anio])); ?>", {sec_func :'<?php echo e($sec_func); ?>'} ,
				function(e){
                    var doc_especifica = $("[name='doc_especifica[]']");
                    doc_especifica.empty();
                    var esp = JSON.parse('<?php echo (json_encode($esp)); ?>');
                    //console.log(esp);
                    $.each($.parseJSON(e), function(key, value){
                    	//console.log($.inArray(value.ESPECIFICA, esp));
                        if($.inArray(value.ESPECIFICA, esp)!=-1){
                        	doc_especifica.append('<option value="'+value.ESPECIFICA+'" selected="selected">'+value.ESPECIFICA+'-'+value.DESCRIPCIO+'</option>');
                        }else{
                            doc_especifica.append('<option value="'+value.ESPECIFICA+'">'+value.ESPECIFICA+'-'+value.DESCRIPCIO+'-'+value.DESCRIPCIO+'</option>');
                        }

                    });
				});

                $.get("<?php echo e(route('proyectos.herramientas.documento.buscarFf',[$anio])); ?>", {sec_func :'<?php echo e($sec_func); ?>'} , function(e){
                    var doc_ff = $("[name='doc_ff']");
                    doc_ff.empty();
                    $.each($.parseJSON(e), function(key, value){
                        var ff = unidad_medida[value.FUENTE_FIN];
                        if(value.FUENTE_FIN == '<?php echo e($ff); ?>'){
                            doc_ff.append('<option value="'+value.FUENTE_FIN+'" selected="selected">'+ff+'</option>');
                        }else{
                            doc_ff.append('<option value="'+value.FUENTE_FIN+'">'+ff+'</option>');
                        }
					});
                });
				
				/*$.get("<?php echo e(route('proyectos.herramientas.documento.getcontrato',[$anio])); ?>", {
				cert 		:	'<?php echo e($cp); ?>'} , function(e){
					var doc_nro_contrato = $("[name='doc_nro_contrato']");
					doc_nro_contrato.empty();
					$.each($.parseJSON(e), function(key, value){
						if(value.NUM_DOC == '<?php echo e($contrato); ?>'){
							doc_nro_contrato.append('<option value="'+value.NUM_DOC+'" selected="selected">'+value.NUM_DOC+'</option>');
						}else{
							doc_nro_contrato.append('<option value="'+value.NUM_DOC+'">'+value.NUM_DOC+'</option>');
						}
						
					});
				});*/
			
                if($("[name='doc_cp']").length != 0){
                    $.get("<?php echo e(route('proyectos.herramientas.documento.buscarCp',[$anio])); ?>", {
                    sec_func 		:	'<?php echo e($sec_func); ?>',
                    proy_cod_siaf 	:	'<?php echo e($codsiaf); ?>'} , function(e){
						var doc_cp = $("[name='doc_cp']");
                        doc_cp.empty();
                        doc_cp.append('<option value="______">NINGUNO</option>');
                        $.each($.parseJSON(e), function(key, value){
                        	console.log('<?php echo e($cp); ?>');
                            if(value.CERTIFICAD == '<?php echo e($cp); ?>'){
                                doc_cp.append('<option value="'+value.CERTIFICAD+'" selected="selected">'+value.CERTIFICAD+'-'+value.GLOSA+'</option>');
                            }else{
                                    doc_cp.append('<option value="'+value.CERTIFICAD+'">'+value.CERTIFICAD+'-'+value.GLOSA+'</option>');
                            }
                        });
                    });
                }
				
				$.ajax({url: "http://www.regionCUSCO.gob.pe/portal/proyectos/json/sisgedo_request.php", data:{depe:'<?php echo e($depe); ?>'},type:"GET",dataType :"json", success: function(result){
					if(result.ok)
					{
						doc_proced = $("[name='doc_proced']")
						doc_proced.empty();
						$.each(result.depes, function(key, val){
							if(val.depe_id == '<?php echo e($ofi_id); ?>'){
								doc_proced.append('<option value="'+val.depe_id+'" selected="selected">'+val.depe_nombre+'</option>');
                                $("[name='doc_proced_nombre']").val(val.depe_nombre);
							}else{
								doc_proced.append('<option value="'+val.depe_id+'">'+val.depe_nombre+'</option>');
							}
						});
						//$("[name='doc_proced_nombre']").val($("[name='doc_proced'] option[value='<?php echo e($ofi_id); ?>']").text());
					}else
					{alert("No se encuentra!");}
				}});

                $("[name='doc_obra']").val('<?php echo e($obraname); ?>');
                $("[name='doc_idobra']").val('<?php echo e($codsiaf); ?>');
				$("[name='doc_snip']").val('<?php echo e($snip); ?>');
                $("[name='doc_monto']").val('<?php echo e($monto); ?>');
                $("[name='doc_nro_pedido']").val('<?php echo e($nrop); ?>');
                $("[name='doc_cc']").val('<?php echo e($cc); ?>');
				$("[name='doc_contrato']").val('<?php echo $cnombre; ?>');
				$("[name='doc_nro_contrato']").val('<?php echo $contrato; ?>');
				$("[name='doc_val']").val('<?php echo $valorizacion; ?>');
				$("[name='doc_afd']").val('<?php echo $afd; ?>');
				$("[name='doc_txt']").val('<?php echo $txt; ?>');

            });
		}
		
		else{
			$.ajax({url: "http://www.regionCUSCO.gob.pe/portal/proyectos/json/sisgedo_request.php",
				data:{depe:'3'},type:"GET",dataType :"json", success: function(result){
				if(result.ok)
				{
					doc_proced = $("[name='doc_proced']")
					doc_proced.empty();
					$.each(result.depes, function(key, val){
						if(val.depe_id == '47'){
							doc_proced.append('<option value="'+val.depe_id+'" selected="selected">'+val.depe_nombre+'</option>');
                            $("[name='doc_proced_nombre']").val(val.depe_nombre);
						}else{
							doc_proced.append('<option value="'+val.depe_id+'">'+val.depe_nombre+'</option>');
						}
					});

				}else
				{alert("No se encuentra!");}
			}});
	}
	});
	
    $("[name='doc_asunto']").change(function() {
        $.get("<?php echo e(route('proyectos.herramientas.documento.listar')); ?>",
		{asunto :$(this).val()}, function(e){
			
            $('#cuerpo').html(e);
			$("[name='doc_desNombre']").val($("[name='tda_destinoNombre']").val());
			$("[name='doc_asunto_txt']").val($("[name='doc_asunto'] option:selected").text());
			
			if($("[name='tda_destinoCargo']").val() != "f"){
				$("#cargo").html('<br><?php echo e(Form::label('doc_desOficina', 'OFICINA')); ?><?php echo e(Form::text('doc_desOficina', $dcargo, array('class' => 'form-control send verif') )); ?>');
				$("[name='doc_desOficina']").val($("[name='tda_destinoCargo']").val());
			}else{
				$("label[for='doc_desOficina']").remove();
				$("[name='doc_desOficina']").remove();
			}
			
        });
    });
	
	$("[name='doc_proced_depe']").change(function() {
        $.ajax({url: "http://www.regionCUSCO.gob.pe/portal/proyectos/json/sisgedo_request.php",
			data:{depe:$(this).val()},type:"GET",dataType :"json", success: function(result){
			if(result.ok)
			{
				doc_proced = $("[name='doc_proced']")
				doc_proced.empty();
				$.each(result.depes, function(key, val){
					if(val.depe_id == '<?php echo e($ofi_id); ?>'){
						doc_proced.append('<option value="'+val.depe_id+'" selected="selected">'+val.depe_nombre+'</option>');
                        $("[name='doc_proced_nombre']").val(val.depe_nombre);
					}else{
						doc_proced.append('<option value="'+val.depe_id+'">'+val.depe_nombre+'</option>');
					}
				});
				doc_proced.selectpicker('refresh');
			}else
			{alert("No se encuentra!");}
		}});
    });
	
	function zeroFill( number, width ){
        width -= number.toString().length;
        if ( width > 0 )
        {
            return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
        }
        return number + ""; // always return a string
    }
	
	function checkCampos(obj) {
		var camposRellenados = true;
		obj.find(".verif").each(function() {
		var $this = $(this);
				if( $this.val().length <= 0 ) {
					camposRellenados = false;
					return false;
					
				}
		});
		if(camposRellenados == false) {
			return false;
		}
		else {
			return true;
    }
}
	
	$("#doc_expe_sisgedo").on("focusout",function(event){event.preventDefault();
        $.ajax({url: "http://www.regionCUSCO.gob.pe/portal/proyectos/json/sisgedo_request.php",
            data:{exp:$(this).val(),order:'DESC'},type:"GET",dataType :"json", success: function(result){
            if(result.ok)
            {
				ref = ""
				$.each(result.docs, function(key, val){
					cont = key+1;
					ref =ref + "("+cont+") "+val.texp_descripcion+" Nº "+zeroFill(val.expe_numero_doc,5)+"-"+val.expe_fecha_doc.split('-')[0]+"-"+val.expe_siglas_doc+"\n";
				});
                $("#doc_referencia").val(ref);
            }else{
				$("#doc_expe_sisgedo").val('');
				$("#doc_expe_sisgedo").focus();
				$("#doc_referencia").val('');
			}
        }});
    });
	
	$("#cuerpo").on("click",'#search_obra',function(event){
		$('#Find_Obra').modal();
		$.get("<?php echo e(route('proyectos.herramientas.documento.buscar')); ?>", function(e){
            $('#datatable').html(e)
        });
    });
	
	$('#datatable').on("click",'.return',function(event){event.preventDefault();
		$.get("<?php echo e(route('proyectos.herramientas.documento.buscarMeta',[$anio])); ?>",
		$(this).data('data'), function(e){
			var metas;
			var doc_meta = $("[name='doc_meta']");
			doc_meta.empty();
			doc_meta.append('<option value="">SELECCIONE</option>');
            $.each($.parseJSON(e), function(key, value){
				doc_meta.append('<option value="'+zeroFill(value.SEC_FUNC,4) + '">'+
				zeroFill(value.SEC_FUNC,4) + " - " + value.COMPONENTE_NOMBRE+'</option>');
			});
        });
		$("[name='doc_obra']").val($(this).data('data').proy_nombre);
		$("[name='doc_idobra']").val($(this).data('data').proy_cod_siaf);
		$("[name='doc_snip']").val($(this).data('data').proy_cod_snip);
		$('#Find_Obra').modal('toggle');
	});
	
	$("#cuerpo").on("change",'#doc_meta',function(event){
		
		$.get("<?php echo e(route('proyectos.herramientas.documento.buscarFf',[$anio])); ?>", {sec_func :$(this).val()} , function(e){
			var doc_ff = $("[name='doc_ff']");
			doc_ff.empty();
			doc_ff.append('<option value="">SELECCIONE</option>');
			$.each($.parseJSON(e), function(key, value){
				var ff = unidad_medida[value.FUENTE_FIN];
				doc_ff.append('<option value="'+value.FUENTE_FIN+'">'+ff+'</option>');
			});
		});
	});

    $("#cuerpo").on("change",'#doc_ff',function(event){
        $.get("<?php echo e(route('proyectos.herramientas.documento.buscarEsp',[$anio])); ?>", {
            fuente_fto :$(this).val(),
			sec_func :$("[name='doc_meta']").val()
        } , function(e){
            var doc_especifica = $("[name='doc_especifica[]']");
            doc_especifica.empty();
            doc_especifica.append('<option value="">SELECCIONE</option>');
            $.each($.parseJSON(e), function(key, value){
                doc_especifica.append('<option value="'+value.ESPECIFICA+'">'+value.ESPECIFICA+'-'+value.DESCRIPCIO+'  S/ '+value.pim+'</option>');
            });
        });
    });
    $("#cuerpo").on("change",'.especifica',function(event){
        $.get("<?php echo e(route('proyectos.herramientas.documento.buscarCp',[$anio])); ?>", {
                sec_func 		:	$("[name='doc_meta']").val(),
                proy_cod_siaf 	:	$("[name='doc_idobra']").val(),
                especifica	 	:	$(this).val()} ,
            function(e){
                var doc_cp = $("[name='doc_cp']");
                doc_cp.empty();
                doc_cp.append('<option value="______">NINGUNO</option>');
                $.each($.parseJSON(e), function(key, value){
                    doc_cp.append('<option value="'+value.CERTIFICAD+'">'+value.CERTIFICAD+'-'+value.GLOSA+'</option>');
                });
            });
    });
	
	/*$("#cuerpo").on("change",'#doc_cp',function(event){
		$.get("<?php echo e(route('proyectos.herramientas.documento.getcontrato',[$anio])); ?>", {
			cert 		:	$("[name='doc_cp']").val()} , function(e){
			var doc_nro_contrato = $("[name='doc_nro_contrato']");
			doc_nro_contrato.empty();
			doc_nro_contrato.append('<option value="">SELECCIONE</option>');
            $.each($.parseJSON(e), function(key, value){
				doc_nro_contrato.append('<option value="'+value.NUM_DOC+'">'+value.NUM_DOC+'</option>');
			});
        });
	});*/
	
	$("#doc_modulo").on("click",'.btn_guardar',function(event){
		form = $('.send');
			var formvalidation = $("#doc_modulo");
			var check = checkCampos(formvalidation);
			if(check) {
			   var id;
				$.ajax({
					url: "<?php echo e(route('proyectos.herramientas.documento.save')); ?>",
					data: form.serialize(),
					dataType: 'json',
					success: function(e){
						if(e.ok){
							window.location.href = '<?php echo e(route('proyectos.herramientas.documento.listardoc')); ?>?anio='+e.anio;
					}else{
						
					}
					}
				});
			}
			else {
				alert('NECESITA COMPLETAR TODOS LOS CAMPOS')
			}
    });
	
	$("[name='doc_proced_cod']").on("focusout",function(event){event.preventDefault();
		var dato = $(this).val();
		$("[name='doc_proced'] option[value='"+dato+"']").prop('selected', true);

		$("[name='doc_proced_nombre']").val($("[name='doc_proced'] option[value='"+dato+"']").text());


	});

	$("[name='doc_proced_cod']").on("focus",function(event){event.preventDefault();
		$(this).val('');
	});

	$("[name='doc_proced']").on("change",function(event){event.preventDefault();
		$("[name='doc_proced_cod']").val($(this).val());
		$("[name='doc_proced_nombre']").val($("[name='doc_proced'] option:selected").text());
	});

	$("#doc_modulo").on("click",'.btn_cancelar',function(event){
		window.location.href = '<?php echo e(route('proyectos.herramientas.documento.listardoc')); ?>';
	});

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\documentos\index.blade.php ENDPATH**/ ?>