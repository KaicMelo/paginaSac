

            //Validando os valores atraves do name="Value"
            function validaCampos() {
                if (document.form.produto.value == "Produto") {
                    if (document.form.pagamento.value == "Pagamento") {
                        if (document.form.entrega.value == "Entrega") {
                            if (document.form.site.value == "Site") {

                                alert("Escolha uma opção: Produto, Pagamento, Entrega ou Site");
                                return false;
                            } else {
                                if (document.form.produto.value == "Produto" && document.form.pagamento.value == "Pagamento" && document.form.entrega.value == "Entrega") {
                                    return true;
                                } else {
                                    alert("Escolha somente uma opção");
                                    return false;
                                }
                            }
                            alert("Escolha uma opção: Produto, Pagamento, Entrega ou Site");
                            return false;
                        } else {
                            if (document.form.produto.value == "Produto" && document.form.pagamento.value == "Pagamento" && document.form.site.value == "Site") {
                                return true;
                            } else {
                                alert("Escolha somente uma opção");
                                return false;
                            }
                        }
                        alert("Escolha uma opção: Produto, Pagamento, Entrega ou Site");
                        return false;
                    } else {
                        if (document.form.produto.value == "Produto" && document.form.entrega.value == "Entrega" && document.form.site.value == "Site") {
                            return true;
                        } else {
                            alert("Escolha somente uma opção");
                            return false;
                        }
                    }
                    alert("Escolha uma opção: Produto, Pagamento, Entrega ou Site");
                    return false
                } else {
                    if (document.form.pagamento.value == "Pagamento" && document.form.entrega.value == "Entrega" && document.form.site.value == "Site") {
                        return true;
                    } else {
                        alert("Escolha somente uma opção");
                        return false;
                    }
                }

            }
      
