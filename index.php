<?php

//include_once 'cadastrarUsuario.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600&family=Space+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>loja montanha</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="icon" href="images/favicon.png" />
    <script defer src="js/utils.js" type="module"></script>
    <script defer src="js/script.js" type="module"></script>
</head>
<body>
    <header class="topo">
        <div class="topo__marca">
            <a href="" class="link_home">
                <img src="images/preto.svg" alt="logo jordam">
                <h1>LOJA MONTANHA</h1>
            </a>
        </div>
        <div class="btn__carrinho">
            <div class="btn__carrinho_icone">
                <span class="material-symbols-outlined icone">
                    shopping_cart
                </span>
                <span class="numero_itens">0</span>
            </div>
            <div class="btn__carrinho_user">
                <span class="material-symbols-outlined icone">
                    account_circle
                </span>
                <span>user</span>
            </div>
        </div>
    </header>
    <section class="top_fixed">
        frete gratis para todo o brasil
    </section>
    <section class="hero">
        <div class="hero__content">
            <h1>
                <img src="images/logo-jordan.png" alt="">
                LOJA MONTANHA
            </h1>
            <H2>A melhor loja do brasil</H2>
            <p>A loja montanha é fruto de uma parceria forte com vários setores do comercio</p>
        </div>
    </section>
    
    <main>
        <section class="produtos">
            <div class="heading__produtos">
                <h3>Os melhores em um so lugar</h3>
                <p>A marca jordan na LOJA MONTANHA é a escolha certa para os amantes de basquete</p>
            </div>
            <section class="lista__produtos"></section>
        </section>
        <section class="voltar">
            Voltar
        </section>
        <section class="produto__detalhes">
            <div class="produto__detalhes_imagens">
                <figure>
                    <img src="" alt=""/>
                </figure>
                <figure>
                    <img src="" alt=""/>
                </figure>
                <figure>
                    <img src="" alt=""/>
                </figure>
                <figure>
                    <img src="" alt=""/>
                </figure>
                <figure>
                    <img src="" alt=""/>
                </figure>
                <figure>
                    <img src="" alt=""/>
                </figure>
                <figure>
                    <img src="" alt=""/>
                </figure>
                <figure>
                    <img src="" alt=""/>
                </figure>
            </div>
            <div class="produto__detalhes_info">

                <div class="detalhes">
                    <span>id</span>
                    <h4>Nome do produto</h4>
                    <h5>Descrição</h5>
                    <h6>R$ preço</h6>
                </div>

                <div class="tamanho">
                    <h5>Tamanho</h5>
                    <div class="tamanhos">
                        <input type="radio" class="radio" name="size" id="size38" value="38">
                        <label for="size38" class="numeros">38</label>

                        <input type="radio" class="radio" name="size" id="size39" value="39">
                        <label for="size39" class="numeros">39</label>

                        <input type="radio" class="radio" name="size" id="size39,5" value="39,5">
                        <label for="size39,5" class="numeros">39,5</label>

                        <input type="radio" class="radio" name="size" id="size40" value="40">
                        <label for="size40" class="numeros">40</label>

                        <input type="radio" class="radio" name="size" id="size41" value="41">
                        <label for="size41" class="numeros">41</label>

                        <input type="radio" class="radio" name="size" id="size42" value="42">
                        <label for="size42" class="numeros">42</label>

                        <input type="radio" class="radio" name="size" id="size43" value="43">
                        <label for="size43" class="numeros">43</label>

                        <input type="radio" class="radio" name="size" id="size44" value="44">
                        <label for="size44" class="numeros">44</label>

                        <input type="radio" class="radio" name="size" id="size45" value="45">
                        <label for="size45" class="numeros">45</label>

                        <input type="radio" class="radio" name="size" id="size46" value="46">
                        <label for="size46" class="numeros">46</label>

                        <input type="radio" class="radio" name="size" id="size47" value="47">
                        <label for="size47" class="numeros">47</label>

                        <input type="radio" class="radio" name="size" id="size48" value="48">
                        <label for="size48" class="numeros">48</label>

                        <input type="radio" class="radio" name="size" id="size50" value="50">
                        <label for="size50" class="numeros">50</label>

                        <input type="radio" class="radio" name="size" id="size51" value="51">
                        <label for="size51" class="numeros">51</label>
                    </div>
                </div>

                <div class="botao">
                    <button type="button" class="btn__add_cart">Adicionar ao carrinho</button>
                </div>

                <div class="descricao">
                    <p>Inspirado no AJ1, essa edição cano médio mantém o visual icônico que você ama, enquanto a escolha de cores e o couro conferem uma identidade distinta</p>

                    <p>Benefícios</p>

                    <ul>
                        <li>Cabedal em material genuíno, sintético e tecido para sensação de suporte.</li>
                        <li>Entressola de espuma e amortecimento Nike Air proporcionam conforto e leveza.</li>
                        <li>Solado de borracha com ponto de giro cria tração duradoura.</li>
                    </ul>
                </div>

                <details class="frete">
                    <summary class="icone-expandir">Calcular o frete e entrega</summary>
                    <p>Calcule o frete e o prazo de entrega para sua região</p>

                    
                    <div class="input">
                        <label for="cep1">Insira seu cep</label>
                        <input type="text" id="cep1" placeholder="00000-000"/>
                        <button type="button">Calcular</button>
                    </div>

                    <a href="https://buscacepinter.correios.com.br/app/cep/index.php" target="_blank" rel="noopener noreferrer">Não sei o meu cep</a>
                </details>
            </div>           
        </section>
        <section class="carrinho">
            <h2>Carrinho</h2>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Produto</th>
                        <th>Tamanho</th>
                        <th>Preço</th>
                        <th class="coluna_apagar">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td class="coluna_apagar">-</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><strong>TOTAL</strong></td>
                        <td class="coluna_total">-</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
            <!-- DETALHES DO CARRINHO -->
            <div class="carrinho__detalhes">
                <div class="frete">
                    <label for="cep2">Prazo de entrega</label>
                    <div class="input">
                        <input type="text" id="cep2" placeholder="00000-000" />
                        <button type="button" class="btn_calcular">Calcular</button>
                    </div>
                    <p>Tempo previsto para entrega</p>
                    <a href="https://buscacepinter.correios.com.br/app/endereco/index.php" target="_blank" rel="noopener noreferrer">Não sei meu CEP</a>
                </div>
                <div class="cupom_desconto">
                    <label for="cupom">Cupom de Desconto</label>
                    <div class="input">
                        <input type="text" id="cupom" />
                        <button type="button" class="btn_aplicar">Aplicar</button>
                    </div>
                    <span class="desconto_cupom"></span>
                </div>
                <div class="resumo">
                    <h3>Resumo</h3>
                    <ul>
                        <li>
                            <span>Valor dos produtos</span>
                            <span class="sub_total"></span>
                        </li>
                        <li>
                            <span>Frete</span>
                            <span class="valor_frete"></span>
                        </li>
                        <li>
                            <span>Desconto</span>
                            <span class="valor_desconto"></span>
                        </li>
                        <li>
                            <span>Total da compra</span>
                            <span class="total_compra"></span>
                        </li>
                    </ul>
                    <button type="button" class="btn_continuar">Continuar</button>
                </div>
            </div>
        </section>

        <section class="identificacao">
    
            <h2>Identificação</h2>
            <p>* campos obrigatórios</p>
        
            <form class="form_identificacao">
                <div class="input">
                    <label for="nome">Nome completo*</label>
                    <input type="text" id="nome" class="dn" required />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="email">E-mail*</label>
                    <input type="email" id="email" class="dn" required />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="telefone">Telefone*</label>
                    <input type="tel" id="telefone" class="dn" placeholder="99 99999-9999" required />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="cep">CEP*</label>
                    <input type="text" id="cep" class="dn" maxlength="9" placeholder="99999-999" required />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="endereco">Endereco*</label>
                    <input type="text" id="endereco" class="dn" required />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="numero">Número*</label>
                    <input type="text" id="numero" class="dn" maxlength="10" required />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="bairro">Bairro*</label>
                    <input type="text" id="bairro" class="dn" required />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" class="dn" />
                    <span class="erro"></span>
                </div>
                <div class="input">
                    <label for="cidade">Cidade*</label>
                    <input type="text" id="cidade" class="dn" required />
                    <span class="erro"></span>
                </div>
               
                <div class="input">
                    <label for="estado">Estado*</label>
                    
                    <select type="select" id="estado" class="dn">
                        <option value=''>Selecione um estado</option>
                        <option value='AC'>Acre</option>
                        <option value='AL'>Alagoas</option>
                        <option value='AP'>Amapá</option>
                        <option value='AM'>Amazonas</option>
                        <option value='BA'>Bahia</option>
                        <option value='CE'>Ceará</option>
                        <option value='DF'>Distrito Federal</option>
                        <option value='ES'>Espírito Santo</option>
                        <option value='GO'>Goiás</option>
                        <option value='MA'>Maranhão</option>
                        <option value='MT'>Mato Grosso</option>
                        <option value='MS'>Mato Grosso do Sul</option>
                        <option value='MG'>Minas Gerais</option>
                        <option value='PA'>Pará</option>
                        <option value='PB'>Paraíba</option>
                        <option value='PR'>Paraná</option>
                        <option value='PE'>Pernambuco</option>
                        <option value='PI'>Piauí</option>
                        <option value='RJ'>Rio de Janeiro</option>
                        <option value='RN'>Rio Grande do Norte</option>
                        <option value='RS'>Rio Grande do Sul</option>
                        <option value='RO'>Rondônia</option>
                        <option value='RR'>Roraima</option>
                        <option value='SC'>Santa Catarina</option>
                        <option value='SP'>São Paulo</option>
                        <option value='SE'>Sergipe</option>
                        <option value='TO'>Tocantins</option>
                    </select>
                    <span class="erro"></span>
                </div>
                
                </div>
                <div class="bloco">
                    <input type="checkbox" id="concordo" class="dn checkbox" required />
                    <label for="concordo">Concordo com a Política de Privacidade e os Termos de Uso.*</label>
                    <span class="erro"></span>
                </div>
                <div class="botao">
                    <button type="submit" class="btn_finalizar_cadastro">Finalizar cadastro</button>
                </div>
            </form>
        </section>
        
        <section class="pagamento">
        
            <h2>Pagamento</h2>
            <p>* campos obrigatórios</p>
            
            <h3>Dados do cartão</h3>
        
            <form class="form_pagamento">
                <div class="input">
                    <label for="numero_cartao">Número do cartão*</label>
                    <input type="text" id="numero_cartao" class="input" maxlength="16" required />
                </div>
                <div class="input">
                    <label for="nome_impresso">Nome impresso*</label>
                    <input type="text" id="nome_impresso" class="input" required />
                </div>
                <div class="input">
                    <label for="validade">Validade*</label>
                    <input type="text" id="validade" class="input" maxlength="5" placeholder="MM/AA" required />
                </div>
                <div class="input">
                    <label for="codigo_seguranca">Código de Seguranca*</label>
                    <input type="text" id="codigo_seguranca" class="input" maxlength="3" placeholder="CVV" required />
                </div>
                <div class="input">
                    <label for="numero_parcelas">Número de parcelas</label>
                    <select id="numero_parcelas" required >
                        <option value="1">À vista</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="bloco">
                    <input type="checkbox" id="salvar_cartao" class="checkbox" />
                    <label for="salvar_cartao">Salvar cartão para minhas próximas compras.*</label>
                </div>
                <div class="botao">
                    <button type="button" class="btn_finalizar_compra">Finalizar compra</button>
                </div>
                <div class="bloco">
                    <p>Ao finalizar a sua compra, você concorda com a nossa Política de trocas e devoluções.</p>
                </div>
            </form>
            
        </section>
           
    </main>
    
</body>
</html>