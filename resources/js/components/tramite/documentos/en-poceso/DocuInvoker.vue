<template>
<div>
    <div class="invokerJWS">
        <iframe id="frameInvokerJWS" style="height:0%;width:0%; border:none;display: none;" :src="srcFrameInvokerJWS"></iframe>
    </div>
    <div class="container infoEntity">
        <div class="col-md-12">
            <h5>
                <span v-if="entityDataName != null">
                    <div class="animated fadeIn"><i class="glyphicon glyphicon-pushpin"></i>{{ entityDataName }}</div>
                </span>
            </h5>
            <span id="entity_data_app"></span>
        </div>
    </div>
    <!-- Modal -->
    <div class="row">
        <div class="col-sm-12">
            <div id="mdlInvoker" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal fade">
                <div id="estadoFirma" class="modal-dialog" style="max-width:350px !important; display: none">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title">
                                <i class="glyphicon glyphicon-menu-right"></i>&#160;&#160; ReFirma Invoker
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="display: inherit;">
                                <div class="col-sm-12 text-center">
                                    <br />
                                    <img :src="img" style="border:0; margin-bottom:8px;" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <br />
                                    <div id="status">{{ text }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="configFirma" class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <div class="modal-title"><i class="glyphicon glyphicon-menu-right"></i>&#160;&#160; Configuraciones para firma digital</div>
                        </div> -->
                        <div class="modal-body pt-0 pb-0">
                            <div class="row">
                                <div class="col-sm-4" style="background-color: #3c3c3c;">

                                    <p>Configuraciones para firma digital</p>
                                    <div class="form-group mt-4">
                                        <!-- <label class="text-secondary">Total páginas:</label>
                                        {{ numPages }} -->
                                        <!-- <select class="form-control form-control-sm">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                        </select> -->
                                        <br>
                                        <label class="text-white">Página a firmar:</label>
                                        {{ pageNumber }}
                                        <br><br>
                                        <button class="btn btn-sm btn-warning" @click="previousPage"><span class="glyphicon glyphicon-step-backward"></span> Pág. anterior</button>
                                        {{ pageNumber }} de {{ numPages }}
                                        <button class="btn btn-sm btn-warning" @click="nextPage"><span class="glyphicon glyphicon-step-forward"></span> Pág. siguiente</button>
                                        
                                    </div>
                                    <div class="form-group ">
                                        <label class="text-white">Ampliación de página:</label>
                                        <small>{{ zommpdf.scale }}</small>
                                        <br>
                                        <button class="btn btn-sm btn-info" @click.prevent="zoommenos"><span class="glyphicon glyphicon-minus-sign"></span> Minimizar</button>
                                        
                                        <button class="btn btn-sm btn-info" @click.prevent="zoommas"><span class="glyphicon glyphicon-plus-sign"></span> Ampliar</button>

                                    </div>

                                    <div class="form-group mt-4 mb-5">
                                        <label class="text-white">Motivo de la firma</label>
                                        <select v-model="motivo" class="form-control form-control-sm">
                                            <option value="0">Soy el autor del documento</option>
                                            <option value="1">En señal de conformidad</option>
                                            <option value="2">Doy V° B°</option>
                                            <option value="3">Por encargo</option>
                                            <option value="4">Doy fé</option>
                                        </select>
                                    </div>

                                    <div class="form-group footer_div ">
                                        <button type="button" class="btn btn-light" data-dismiss="modal" @click="cerrar">Cancelar</button>
                                        <button type="button" class="btn btn-success float-right" @click="continuar">Continuar</button>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-center d-flex">
                                    <div class="row" style="margin:0px auto;text-align: center;">
                                        <div class="doc_preview text-center" @drop="drop($event)">
                                            <div class="cabecera">Cabecera</div>
                                            <div class="pie-de-pagina">Pie de pagina</div>
                                            <div v-if="motivo==2" v-dragged="onDragged" class="firma_preview_vertical dragzones" style="margin: 50px 0px 0px 50px;" onselectstart="return false;">
                                                <br />Firma<br>(detalles)
                                            </div>
                                            <div v-else v-dragged="onDragged" class="firma_preview dragzones" style="margin: 50px 0px 0px 50px;" onselectstart="return false;">
                                                <br />Firma|(detalles)
                                            </div>

                                            <div id="pageContainer">
                                                <canvas id="pdf-container"></canvas>
                                                
                                            </div>
                                            <!-- <div v-dragged="onDragged" class="firma_preview dragzones" style="margin: 50px 0px 0px 50px;" onselectstart="return false;">
                                                <br />Firma
                                            </div> -->
                                            <!-- <object :data="rutaarchivo#toolbar=0" type="application/pdf" width="420" height="600" style="z-index:1; ">
                                            </object> -->
                                            <!-- <embed :src="rutaarchivo+'#toolbar=0&navpanes=0&scrollbar=0'" type="application/pdf" width="100%" height="594px" /> -->

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import "pdfjs-dist/web/pdf_viewer.css";
import {
    GlobalWorkerOptions,
    getDocument
} from "pdfjs-dist/legacy/build/pdf";
import PDFJSWorker from "pdfjs-dist/legacy/build/pdf.worker.entry";
GlobalWorkerOptions.workerSrc = PDFJSWorker;

var hash = window.location.hash
export default {

    name: 'DocuInvoker',

    // metaInfo: {
    //   script: [
    //     { src: 'https://cdn.jsdelivr.net/vue.js', async: true, defer: true }
    //   ],
    // },

    props: {
        routeInvokerGet: {
            type: String,
            default: ''
        },
        routeInvokerPost: {
            type: String,
            default: ''
        },
        rutaurl: {
            type: String,
            default: ''
        }
        
        
    },

    data() {
        return {
            frameInvoker: null,
            imgs: {
                s_load: '/img/refirma/s_load.gif',
                s_download: '/img/refirma/s_download.gif',
                s_key: '/img/refirma/s_key.gif',
                s_upload: '/img/refirma/s_upload.gif',
                s_ok: '/img/refirma/s_ok.png',
                s_cancel: '/img/refirma/s_cancel.png'
            },
            img: null,
            text: 'Cargando el componente...',
            idWsComponent: null,
            srcFrameInvokerJWS: null,
            entityDataName: null,
            entityDataApp: null,
            app: 'jnlps://dsp.reniec.gob.pe/refirma_invoker/servlet',
            wss: 'wss://dsp.reniec.gob.pe/refirma_invoker_wss/websocket',
            type: null,
            webSocket: null,
            documentName_: null,
            argumentos: null,
            rutaarchivo: null,
            paginadoc: 1,
            split: '-@@-',
            result: null,
            idDocumento: null,
            idFile: null,
            configDiv: {
                maxL: 295,
                minL: 3,
                maxT: 489,
                minT: 50
            },
            maxX: 420,
            maxY: 760,
            relacion: 1.4237,
            X: 75,
            Y: 70,
            motivo: 0,
            // para previsualizar pdf con canvas
            url: null, //"http://stdv.test/firmados/56-203-4295-INFORME-119-2022.pdf",
            numPages: 1,
            pageNumber: 1,
            pdfDocument: null,
            zommpdf: {
                scale: 0.70
            }
            /////////  FIN CONFIG DE PREVISUALIZAR PDF/////////////////////////////////
        }
    },

    mounted: function () {
        this.img = this.imgs.s_load
    },
    methods: {
        onDragged({
            el,
            deltaX,
            deltaY,
            offsetX,
            offsetY,
            clientX,
            clientY,
            first,
            last
        }) {
            if (first) {
                this.isDragging = true
                return
            }
            if (last) {
                this.isDragging = false
                return
            }
            var l = +window.getComputedStyle(el)['margin-left'].slice(0, -2) || 0
            var t = +window.getComputedStyle(el)['margin-top'].slice(0, -2) || 0
            var newL = l + deltaX
            var newT = t + deltaY
            newL = newL > this.configDiv.minL ? (newL > this.configDiv.maxL ? this.configDiv.maxL : newL) : this.configDiv.minL
            newT = newT > this.configDiv.minT ? (newT > this.configDiv.maxT ? this.configDiv.maxT : newT) : this.configDiv.minT
            this.X = Math.round(newL * this.relacion)
            this.Y = Math.round(newT * this.relacion)
            el.style.marginLeft = newL + 'px'
            el.style.marginTop = newT + 'px'
        },
        drop(e) {
            console.log(e)
        },
        cerrar() {
            //window.location.reload();
        },
        previsualizapdf(idfile, iddoc) {

            var url = 'tramite/documento/printR/' + idfile + '/' + iddoc;
            this.rutaarchivo = this.rutaurl + url + '.pdf'
            this.url=this.rutaurl + url + '.pdf'
            this.getPdfDocument();

        },
        initInvoker: function (opt, documento = null) {
            var status = document.querySelector('#estadoFirma')
            var config = document.querySelector('#configFirma')
            status.style.display = 'none'
            config.style.display = ''
            this.img = this.imgs.s_load
            $('#mdlInvoker').modal({
                backdrop: 'static',
                keyboard: false
            })
            this.idDocumento = documento.id_documento
            this.idFile = documento.id
            this.type = opt
            // this.valorruta(documento.ruta_archivo)
            /*var route = "http://127.0.0.1:8000/tramite/documento/print/%s";
                      route=route.replace(/%s/g, documento.iddocumento)+'.pdf';
                      console.log(route);
                      var loadingTask = pdfjsLib.getDocument(route);
                      loadingTask.promise.then(function(pdf) {
                          console.log(pdf);
                          // you can now use *pdf* here
                      });*/
            this.previsualizapdf(this.idFile, this.idDocumento);
        },
        continuar() {
            this.rutaarchivo = null
            var status = document.querySelector('#estadoFirma')
            var config = document.querySelector('#configFirma')
            status.style.display = ''
            config.style.display = 'none'
            this.openSocket()
        },
        printMessage(message) {
            $jq('#mdlInvoker').modal({
                backdrop: 'static',
                keyboard: false
            })
        },
        getArguments() {
            if (this.paginadoc < 1) {
                this.paginadoc = 1;
            }
            const parameter = {
                type: this.type,
                iddocumento: this.idDocumento,
                idFile: this.idFile,
                posx: this.X,
                posy: this.Y,
                motivo: this.motivo,
                pagina: this.pageNumber
            }
            axios.get(this.routeInvokerPost, {
                params: parameter
            }).then(response => {
                this.argumentos = response.data
                console.log(this.idWsComponent + this.split + this.argumentos)
                this.webSocket.send(window.btoa(this.idWsComponent + this.split + this.argumentos))
                //dispatchEventClient('sendArguments', arg);
            })
        },
        openSocket() {
            var este = this
            if (this.webSocket !== null && this.webSocket.readyState !== WebSocket.CLOSED) {
                alert('WebSocket ya estÃ¡ abierto.')
                return
            }
            this.webSocket = new WebSocket(this.wss)
            this.webSocket.onopen = function (event) {
                if (event.data === undefined) {
                    return
                }
                if (event.data === 'expired') {
                    alert('La sesiÃ³n expirÃ³.')
                    //$jq('#mdlInvoker').modal('hide');
                }
            }
            this.webSocket.onmessage = function (event) {
                este.result = event.data
                console.log(event)
                if (este.result.indexOf('IdInvokerWS') >= 0) {
                    este.text = 'Obteniendo documento a firmar...'
                    este.idWsComponent = este.result.replace('IdInvokerWS', '')
                    este.srcFrameInvokerJWS = null
                    este.getArguments()
                    //postMessageToParent('getArguments');*************************************************************
                    return
                } else {
                    if (este.result.indexOf('entity_data_name') >= 0) {
                        este.entityDataName = este.result.replace('entity_data_name', '')
                        return
                    } else {
                        if (este.result.indexOf('entity_data_app') >= 0) {
                            este.entityDataApp = este.result.replace('entity_data_app', '')
                            return
                        } else {
                            if (este.result !== 'init' && este.result !== 'getDocument' && este.result !== 'sign' && este.result !== 'upload' && este.result !== 'ok' && este.result !== 'cancel' && este.result !== 'processOk' && este.result !== 'processCancel') {
                                este.srcFrameInvokerJWS = este.app + '?id=' + este.result
                                return
                            }
                        }
                    }
                }
                if (este.result === 'init') {
                    este.text = 'Obteniendo documento a firmar...'
                    return
                }
                if (este.result === 'getDocument') {
                    setTimeout(function () {
                        este.img = este.imgs.s_download
                        este.text = 'Obteniendo documento a firmar...'
                    }, 100)
                    return
                }
                if (este.result === 'sign') {
                    este.img = este.imgs.s_key
                    este.text = 'Firmando digitalmente el documento...'
                    return
                }
                if (este.result === 'upload') {
                    este.img = este.imgs.s_upload
                    este.text = 'Subiendo documento firmado...'
                    return
                }
                if (este.result === 'ok') {
                    este.img = este.imgs.s_ok
                    este.$emit('firmado')
                    este.text = 'Proceso de firma digital terminado.'
                    return
                }
                if (este.result === 'cancel') {
                    este.img = este.imgs.s_cancel
                    este.text = 'Proceso de firma digital cancelado.'
                    return
                }
            }
            this.webSocket.onclose = function (event) {
                setTimeout(function () {
                    //console.log(este)
                    $('#mdlInvoker').modal('hide')
                    //$jq('#mdlInvoker').modal('hide');********************************************
                    setTimeout(function () {
                        //postMessageToParent('close');********************************************
                        if (este.result === 'processOk') {
                            //postMessageToParent('invokerOk');************************************
                        }
                        if (este.result === 'processCancel') {
                            //postMessageToParent('invokerCancel');********************************
                        }
                    }, 300)
                }, 1000)
            }

            this.webSocket.onerror = function (event) {
                //alert(event.data);
            }
        },
        // FUNCIONES ADICIONALES PARA PREVISAULUZAR PDF
        zoommas() {
            this.zommpdf.scale = 0.01 + this.zommpdf.scale
            this.getPage(this.pageNumber);
        },
        zoommenos() {
            this.zommpdf.scale = this.zommpdf.scale - 0.01
            this.getPage(this.pageNumber);
        },

        // async valorruta(archivo) {
        //     this.url = this.ruta + '/' + archivo
        //     this.getPdfDocument();
        // },
        async getPdfDocument() {
            getDocument(this.url).promise.then(
                (pdf) => {
                    this.numPages = pdf.numPages;
                    this.pdfDocument = pdf;
                    this.getPage(this.pageNumber);
                },
                (reason) => {
                    console.error(reason);
                }
            );
        },

        getPage(pageNumer) {
            this.pdfDocument.getPage(pageNumer).then((page) => {
                //   var viewport = page.getViewport({ scale: 1.5 });
                var viewport = page.getViewport(this.zommpdf);

                var canvas = document.getElementById("pdf-container");
                var context = canvas.getContext("2d");
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                var renderContext = {
                    canvasContext: context,
                    viewport: viewport,
                };

                var renderTask = page.render(renderContext);

                renderTask.promise.then(function () {
                    console.log("Page rendered");
                });
            });
        },

        previousPage() {
            this.pageNumber =
                this.pageNumber > 1 ? this.pageNumber - 1 : this.pageNumber;
            this.getPage(this.pageNumber);
        },

        nextPage() {
            this.pageNumber =
                this.pageNumber < this.numPages ? this.pageNumber + 1 : this.pageNumber;
            this.getPage(this.pageNumber);
        },
    }
}
</script>

<style scoped>
.invokerMain {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 20000;
    overflow: hidden;
    background: transparent;
    display: none;
}

.invokerScreen {
    position: absolute;
    width: 100% !important;
    height: 100%;
    z-index: 10000;
}

iframe {
    height: 100%;
    width: 100%;
    border: none;
}

.modal-content {
    background-color: #222222;
    color: #999;
}

.modal-header {
    background-color: #1c1c1c;
    color: #888;
    border-bottom: 0px !important;
}

.modal-footer {
    background-color: #1c1c1c;
    color: #888;
    border-top: 0px !important;
}

.doc_preview {
    width: 420px;
    height: 594px;
    background: rgb(28, 136, 213);
    display: inline-block;
}

.pie-de-pagina {
    border: solid 1px black;
    width: 420px;
    height: 54px;
    position: absolute;
    /* top: 559px; */
    top: 540px;
    background: #244e2d;
    opacity: 0.5;
    color: #fff;
}

.cabecera {
    border: solid 1px black;
    width: 420px;
    height: 50px;
    position: absolute;
    background: #244e2d;
    opacity: 0.5;
    color: #fff;
}

/* .firma_preview {
      border: solid 1px black;
      width: 121px;
      height: 56px;
      background-color: #ffd6d6;
  } */
.firma_preview {
    border: solid 1px black;
    width: 121px;
    height: 45px;
    color: #1c1c1c;
    background-color: #ffd6d6;
    opacity: 0.6;
    z-index: 90000;
    position: absolute;
}

.footer_div {
    position: absolute;
    bottom: 10px;
    width: 90%;
    /* border: 3px solid #8AC007; */
}

/* firma vertical para visto bueno */
.firma_preview_vertical {
    border: solid 1px black;
    width: 76px;
    height: 70px;
    color: #1c1c1c;
    background-color: #ffd6d6;
    opacity: 0.6;
    z-index: 90000;
    position: absolute;
}

/* CSS ADIOCNALES */
#pageContainer {
    margin: auto;
}

.stepper {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 10px;
    /* right: 30px; */
    left: 50%;
}

.stepper .info {
    padding-left: 10px;
    padding-right: 10px;
}
</style>
