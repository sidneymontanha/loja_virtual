import {
     numberFormatBR, limparFormatoReal, 
     mostrarElemento, ocultarElemento 
} from './utils.js'

const sectionHero = document.querySelector('.hero')
const sectionProdutos = document.querySelector('.produtos')
const botaoVoltar = document.querySelector('.voltar')
const sectionDetalhesProduto = document.querySelector('.produto__detalhes')
const sectionCarrinho = document.querySelector('.carrinho')

const ocultarVoltarEsecaoDetalhes = () => {
    botaoVoltar.style.display = 'none'
    sectionDetalhesProduto.style.display = 'none'
}
ocultarVoltarEsecaoDetalhes()

botaoVoltar.addEventListener('click', () => {
    sectionProdutos.style.display = 'flex'
    ocultarVoltarEsecaoDetalhes()
    resetarSelecao(radios)
})

const btnCarrinho = document.querySelector('.btn__carrinho .icone')
btnCarrinho.addEventListener('click', () => {
    if(numeroItens.innerHTML > 0) {
        mostrarElemento(sectionCarrinho)
        ocultarElemento(sectionHero)
        ocultarElemento(sectionProdutos)
        ocultarElemento(sectionDetalhesProduto)
        ocultarElemento(sectionIdentificacao)
        ocultarElemento(sectionPagamento)
    }
})

const btnHome = document.querySelector('.link_home')
btnHome.addEventListener('click', (event) => {
    event.preventDefault()
    ocultarElemento(sectionCarrinho)
    mostrarElemento(sectionHero, 'flex')
    mostrarElemento(sectionProdutos, 'flex')
    ocultarVoltarEsecaoDetalhes()
    ocultarElemento(sectionIdentificacao)
    ocultarElemento(sectionPagamento)
})

const numeroItens = document.querySelector('.numero_itens')
numeroItens.style.display = 'none' 

const atualizarNumeroItens = () => {
    numeroItens.style.display = cart.length ? 'block' : 'none'
    numeroItens.innerHTML = cart.length
}

const getProducts = async () => {
    const response = await fetch('js/products.json')
    const data = await response.json()
    return data
}

const generateCard = async () => {
    const products = await getProducts()
    products.map(product => {
        let card = document.createElement('div')
        card.id = product.id 
        card.classList.add('card__produto')
        card.innerHTML = `
        <figure>
            <img src="images/${product.image}" alt="${product.product_name}" />
        </figure>
        <div class="card__produto_detalhes">
            <h4>${product.product_name}</h4>
            <h5>${product.product_model}</h5>
        </div>
        <h6>${numberFormatBR.format(product.price)}</h6>
        `
        const listaProdutos = document.querySelector('.lista__produtos')
        listaProdutos.appendChild(card)
        preencherCard(card, products)
    })
}

generateCard()

const preencherCard = (card, products) => {
    card.addEventListener('click', (e) => {
        ocultarElemento(sectionProdutos)
        mostrarElemento(botaoVoltar)
        mostrarElemento(sectionDetalhesProduto, 'grid')

        const cardClicado = e.currentTarget
        const idProduto = cardClicado.id
        const produtoClicado = products.find( product => product.id == idProduto )
        preencherDadosProduto(produtoClicado)
    })
}

const preencherDadosProduto = (product) => {
    const images = document.querySelectorAll('.produto__detalhes_imagens figure img')
    const imagesArray = Array.from(images)
    imagesArray.map( image => {
        image.src = `./images/${product.image}`
    })

    document.querySelector('.detalhes span').innerHTML = product.id 
    document.querySelector('.detalhes h4').innerHTML = product.product_name
    document.querySelector('.detalhes h5').innerHTML = product.product_model
    document.querySelector('.detalhes h6').innerHTML = numberFormatBR.format(product.price)

}

const spanId = document.querySelector('.detalhes span')
ocultarElemento(spanId)

const details = document.querySelector('details')
details.addEventListener('toggle', () => {
    const summary = document.querySelector('summary')
    summary.classList.toggle('icone-expandir')
    summary.classList.toggle('icone-recolher')
})

const radios = document.querySelectorAll('input[type="radio"]')
radios.forEach(radio => {
  radio.addEventListener('change', () => {
    const label = document.querySelector(`label[for="${radio.id}"]`)
    label.classList.add('selecionado')
    radios.forEach(radioAtual => {
      if (radioAtual !== radio) {
        const outroLabel = document.querySelector(`label[for="${radioAtual.id}"]`)
        outroLabel.classList.remove('selecionado')
      }
    })
  })
})

const resetarSelecao = (radios) => {
    radios.forEach(radio => {
        radios.forEach(radioAtual => {
            if (radioAtual !== radio) {
                const outroLabel = document.querySelector(`label[for="${radioAtual.id}"]`)
                outroLabel.classList.remove('selecionado')
            }
        })
    })
}

const cart = []

const btnAddCarrinho = document.querySelector('.btn__add_cart')
btnAddCarrinho.addEventListener('click', () => {
    const produto = {
        id: document.querySelector('.detalhes span').innerHTML,
        nome: document.querySelector('.detalhes h4').innerHTML,
        modelo: document.querySelector('.detalhes h5').innerHTML,
        preco: document.querySelector('.detalhes h6').innerHTML.replace('R$&nbsp;', ''),
        tamanho: document.querySelector('input[type="radio"][name="size"]:checked').value
    }
    cart.push(produto) 
    ocultarVoltarEsecaoDetalhes()
    ocultarElemento(sectionHero)
    mostrarElemento(sectionCarrinho)
    atualizarCarrinho(cart)
    atualizarNumeroItens()
})

const corpoTabela = document.querySelector('.carrinho tbody')
const colunaTotal = document.querySelector('.coluna_total')

const atualizarCarrinho = (cart) => {
    corpoTabela.innerHTML = "" 
    cart.map( produto => {
        corpoTabela.innerHTML += `
            <tr>
                <td>${produto.id}</td>
                <td>${produto.nome}</td>
                <td class='coluna_tamanho'>${produto.tamanho}</td>
                <td class='coluna_preco'>${produto.preco}</td>
                <td class='coluna_apagar'>
                    <span class="material-symbols-outlined" data-id="${produto.id}">
                        delete
                    </span>
                </td>
            </tr>
        `
    })

    const total = cart.reduce( (valorAcumulado, item) => {
        return valorAcumulado + limparFormatoReal(item.preco)
    }, 0)
    colunaTotal.innerHTML = numberFormatBR.format(total) 
    spanSubTotal.innerHTML = numberFormatBR.format(total)
    spanTotalCompra.innerHTML = numberFormatBR.format(total + valorFrete - valorDesconto)  

    acaoBotaoApagar()
}

const acaoBotaoApagar = () => {
    const botaoApagar = document.querySelectorAll('.coluna_apagar span')
    botaoApagar.forEach( botao => {
        botao.addEventListener('click', () => {
            const id = botao.getAttribute('data-id')
            const posicao = cart.findIndex( item => item.id == id )
            cart.splice(posicao, 1)
            atualizarCarrinho(cart)
        })        
    })
    atualizarNumeroItens()
}

// aula 17
let valorFrete = 0
let valorDesconto = 0

const spanSubTotal = document.querySelector('.sub_total')
const spanFrete = document.querySelector('.valor_frete')
const spanDesconto = document.querySelector('.valor_desconto')
const spanTotalCompra = document.querySelector('.total_compra')

spanFrete.innerHTML = numberFormatBR.format(valorFrete)
spanDesconto.innerHTML = numberFormatBR.format(valorDesconto)

const sectionIdentificacao = document.querySelector('.identificacao')
const sectionPagamento = document.querySelector('.pagamento')

ocultarElemento(sectionIdentificacao)
ocultarElemento(sectionPagamento)

const btnContinuarCarrinho = document.querySelector('.btn_continuar')
btnContinuarCarrinho.addEventListener('click', () => {
    ocultarElemento(sectionCarrinho)
    mostrarElemento(sectionIdentificacao)

})

const formularioIdentificacao = document.querySelector('.form_identificacao')
const todosCamposObrigatorios = formularioIdentificacao.querySelectorAll('.form_identificacao [required]')
const todosCampos = formularioIdentificacao.querySelectorAll('.form_identificacao input')

const pegarDados = () => {
    const dados = {}
    todosCampos.forEach( campo => {
        dados[campo.id] = campo.value.trim()
    })
    return dados
}

// validacao onBlur
todosCamposObrigatorios.forEach( campo => {

    const emailRegex = /\S+@\S+\.\S+/

    campo.addEventListener('blur', (e) => {

        if(campo.value !== "" && e.target.type !== "email") {
            campo.classList.add('campo-valido')
            campo.classList.remove('campo-invalido')
            campo.nextElementSibling.textContent = ''
        } else {
            campo.classList.add('campo-invalido')
            campo.classList.remove('campo-valido')
            campo.nextElementSibling.textContent = `${campo.id} é obrigatório`
        }

        if(emailRegex.test(e.target.value)) {
            campo.classList.add('campo-valido')
            campo.classList.remove('campo-invalido')
            campo.nextElementSibling.textContent = ''
        }

        if(e.target.type === "checkbox" && !e.target.checked) {
            campo.parentElement.classList.add('erro')
            campo.nextElementSibling.textContent = `${campo.id} Concordo com a Política de Privacidade e os Termos de Uso.*`
        } else {
            campo.parentElement.classList.remove('erro')
        }

    })

})

const validacaoDoFormulario = () => {
    
    let formularioValido = true

    todosCamposObrigatorios.forEach(campoObrigatorio => {
        
        const isEmpty = campoObrigatorio.value.trim() === ''
        const isNotChecked = campoObrigatorio.type === 'checkbox' && !campoObrigatorio.checked
        
        campoObrigatorio.addEventListener('blur', (e) => {
            if(isEmpty) {
                campoObrigatorio.classList.add('campo-invalido')
                campoObrigatorio.nextElementSibling.textContent = `${campoObrigatorio.id} obrigatorio`
                formularioValido = false
            } else {
                campoObrigatorio.classList.add('campo-valido')
                campoObrigatorio.classList.remove('campo-invalido')
                campoObrigatorio.nextElementSibling.textContent = ''
            }
    
            if(isNotChecked) {
                campoObrigatorio.parentElement.classList.add('erro')
                formularioValido = false
            } else {
                campoObrigatorio.parentElement.classList.remove('erro')
            }
        })
        
    })

    return formularioValido
    
}

const btnFinalizarCadastro = document.querySelector('.btn_finalizar_cadastro')
btnFinalizarCadastro.addEventListener('click', (event) => {
    
    event.preventDefault()
    
    // validacoes
    validacaoDoFormulario()

    // pegar dados
    if(validacaoDoFormulario()) {
        console.log(pegarDados())
    }else{
        console.log('nao esta preencido')
    } 
})
    
	


const btnFinalizarCompra = document.querySelector('.btn_finalizar_compra')
btnFinalizarCompra.addEventListener('click', () => {
    ocultarElemento(sectionPagamento)
    mostrarElemento(sectionHero, 'flex')
    mostrarElemento(sectionProdutos, 'flex')

})

// aula 22
const buscarCep = async (cep) => {
    const url = `https://viacep.com.br/ws/${cep}/json/`
    const response = await fetch(url)
    const data = await response.json()
    return data
}

document.querySelector('#cep1').addEventListener('blur', async (e) => {
    const cep = e.target.value
    if (!cep) {
        limparCampos()
        return
    }
    const resposta = await buscarCep(cep)
    if (resposta.erro) {
        limparCampos()
        return
    }
    preencherCampos(resposta)
    document.querySelector('#numero').focus()
})
  
const limparCampos = () => {
    document.querySelector('#endereco').value = ''
    document.querySelector('#bairro').value = ''
    document.querySelector('#cidade').value = ''
    document.querySelector('#estado').value = ''
}
  
const preencherCampos = (resposta) => {
    document.querySelector('#endereco').value = resposta.logradouro
    document.querySelector('#bairro').value = resposta.bairro
    document.querySelector('#cidade').value = resposta.localidade
    document.querySelector('#estado').value = resposta.uf
}


