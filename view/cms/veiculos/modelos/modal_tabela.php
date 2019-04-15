<?php

if(isset($_GET['id'])){
    
    require_once('controller/controllerTipo_veiculo.php');


    $controllerTipo_veiculo = new ControllerTipoVeiculo();

    $lista = $controllerTipo_veiculo->listar_modelos();


}

?>

<h2 style="text-align:center; margin:7px 0px 10px 0px;">Defina modelos para um tipo de veiculo</h2>
<div style=" display: block; width: 100%; height: auto; overflow: auto;">
    <h4 style="float:left;">Tipo de veiculo <strong>Bicicleta</strong></h3>
    <h3 onclick="modelo_adicionar()" style="float:right;"><img src="view/cms/imagem/icones/check1.png" width="20px"> Adicionar modelo </h3>
</div>
<div class="caixa_modelos">
<?php

 if(count($lista) < 1){
    echo "<img class='img_not_find alt='Nada encontrado' src='view/imagem/magnify.gif'>";
    echo " <p class='aviso_tabela'> Nenhum Modelo encontrado!</p> ";
 }

 $coluna = 1;
 
 
 $lista_modelos =  array_chunk($lista,3);


foreach($lista_modelos as $lista){?>
    
    <div class="caixa_item">

    <?php foreach($lista as $modelo){?>
        <div class="item">
            <label>
                
                <input type="checkbox" name="modelos" checked>
                <strong><?=@$modelo->getNome()?></strong>

            </label>
            <img  class="edit" src="view/cms/imagem/icones/edit.png" alt="edit">
            <img  class="delete" src="view/cms/imagem/icones/delete.png" alt="delete">
        </div>  
    <?php } ?>

    </div>

<?php } ?>
</div>
<style>
.caixa_modelos{
    background-color: #fdfdfd;
    border-top: solid 0.1px black;
    padding: 2px 15px;
    height: auto;
    overflow-y: auto;
    background-color:#e8e8e8;
}
.caixa_modelos input[type="checkbox"]{/* Mateus usou na linha 312  da home_cms.css */
    left: auto;/* Contra reação */
    position: initial;/* Contra reação */
}
.caixa_modelos .caixa_item{
    width: 30%;
    text-align: center;
    float: left;
}
.caixa_modelos .caixa_item .item{
    width: auto;
    /* margin: 4px 0px; */
    font-size: 20px;
    border: solid 0.8px black;
    border-radius: 1px;
    padding: 4px 0px;
    background-color: #fff;
    background: rgb(238,238,238);
    background: -moz-linear-gradient(8deg, rgba(238,238,238,1) 0%, rgba(213,213,213,1) 35%, rgba(255,255,255,1) 100%);
    background: -webkit-linear-gradient(8deg, rgba(238,238,238,1) 0%, rgba(213,213,213,1) 35%, rgba(255,255,255,1) 100%);
    background: linear-gradient(8deg, rgba(238,238,238,1) 0%, rgba(213,213,213,1) 35%, rgba(255,255,255,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#eeeeee",endColorstr="#ffffff",GradientType=1);
}
.caixa_modelos .caixa_item .item label{
    font-size:0.7em;
}
.caixa_modelos .caixa_item .item label strong{
    max-width: 55px;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    word-break: break-all;
}
.caixa_modelos .caixa_item .item img{
    width:18px;
    margin-bottom: -3px;
}
.caixa_modelos .caixa_item .item:hover{
    background: rgb(238,238,238);
    background: -moz-linear-gradient(8deg, rgba(238,238,238,1) 25%, rgba(255,255,255,1) 48%, rgba(213,213,213,1) 100%);
    background: -webkit-linear-gradient(8deg, rgba(238,238,238,1) 25%, rgba(255,255,255,1) 48%, rgba(213,213,213,1) 100%);
    background: linear-gradient(8deg, rgba(238,238,238,1) 25%, rgba(255,255,255,1) 48%, rgba(213,213,213,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#eeeeee",endColorstr="#d5d5d5",GradientType=1);
}
</style>
<script src="view/cms/veiculos/modelos/modal_modelo.js"></script>