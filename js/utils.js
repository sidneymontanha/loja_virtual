export const numberFormatBR = new Intl.NumberFormat('pt-BR', {
    style: 'currency',
    currency: 'BRL',
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
})

export const limparFormatoReal = (valor) => {
    return parseFloat(valor.replace('R$&nbsp;', '').replace('.', '').replace(',', '.'))
}

export const ocultarElemento = (elemento) => {
    elemento.style.display = 'none'
}

export const mostrarElemento = (elemento, display='block') => {
    elemento.style.display = display
}