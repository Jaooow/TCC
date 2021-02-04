$(document).ready(function(){
    if($("#inputNome").val()){
        sessionStorage.setItem("nome", $("#inputNome").val());
    }
    else{
        sessionStorage.setItem("nome", "usuario");
    }
    //  sessionStorage.removeItem("produtos");
    $("#confirma").click(function(){
        if(!sessionStorage.getItem("produtos")){
            var produtos= {"nome": $("#descricao_produto").val(), "preco": $("#preco_produto").val(), "tipo": $("#tipo_produto").val()};
            produtos=JSON.stringify(produtos);
            sessionStorage.setItem("produtos", produtos);
            var p=sessionStorage.getItem("produtos");
            console.log(sessionStorage.getItem("produtos", "nome"));
        }
        else{
            var t= {"nome": $("#descricao_produto").val(), "preco": $("#preco_produto").val(), "tipo": $("#tipo_produto").val()};
            t=JSON.stringify(t);
            sessionStorage.setItem("produtos", t);
            console.log(t.nome);
        }
        $("#limpar").click();
    });

    if(sessionStorage.getItem("produtos")){
        var p= sessionStorage.getItem("produtos");
        p=JSON.parse(p);
        var nome= sessionStorage.getItem("nome");
        var conteudo ="<th scope='row'>1</th><td>"+p.nome+"</td><td>"+nome+"</td><td>R$ "+p.preco+" </td><td><div class='input-group input-group-sm mb-3'><input type='number' class='form-control' id='quantidade' name='quantidade' placeholder='Insira' aria-label='Small' aria-describedby='inputGroup-sizing-sm'></div></td>";
        $("#tabela").html(conteudo);
        $("#envia").click(function(){
            if($("#quantidade").val()=="" || $("#quantidade").val()==0){
                sessionStorage.setItem("confirmacao", 0);
            }
            else{
                sessionStorage.setItem("confirmacao", 1);
                sessionStorage.setItem("quantidade", $("#quantidade").val());
            }
        });
    }
    

    if(sessionStorage.getItem("confirmacao")){
        var p= sessionStorage.getItem("produtos");
        p=JSON.parse(p);
        var nome= sessionStorage.getItem("nome");
        var quant = sessionStorage.getItem("quantidade");
        var conteudo ="<th scope='row'>1</th><td>"+p.nome+"</td><td>"+nome+"</td><td>R$ "+p.preco+" </td><td>"+quant+"</td><td>R$ "+p.preco*quant+"</td>";
        $("#recebe_pedidos").html(conteudo);
    }
    else{
        var conteudo= "<td colspan='6'> Você não fez nenhum pedido</td>";
        $("#recebe_pedidos").html(conteudo);
    }
});