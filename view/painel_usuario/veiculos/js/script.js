// function getValueOption(){
//     //recupera value do option
//     var e = document.getElementById("cb_veiculos");
//     var itemSelecionado = e.options[e.selectedIndex].value;

//     //Recupera texto do option
// //     var e = document.getElementById("cb_veiculos");
// //     var itemSelecionado = e.options[e.selectedIndex].text;  

//     console.log(itemSelecionado); 
// }

function getTipoVeiculo(idTipoVeiculo){
    console.log("Aqui: " + idTipoVeiculo);
    $.ajax({
        type:'POST',
        url:'router.php?controllerTipo_veiculo= tipo_veiculo&modo = buscar', 
    });

}

function getMarcaVeiculo(idTipoVeiculo){
    $.ajax({
        type:'POST',
        url:'router.php?controllerTipo_veiculo= tipo_veiculo&modo = buscar', 
    });
}