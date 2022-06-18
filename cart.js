const cards = document.getElementById('cards')
const items = document.getElementById('items')
const footer = document.getElementById('footer')
const templateCard = document.getElementById('template-card').content
const templateFooter = document.getElementById('template-footer').content
const templatecart = document.getElementById('template-cart').content
const fragment = document.createDocumentFragment()
let cart = {}

document.addEventListener('DOMContentLoaded', e => { fetchData() });
cards.addEventListener('click', e => { addcart(e) });
items.addEventListener('click', e => { btnAumentarDisminuir(e) })

const fetchData = async () => {
    const res = await fetch('shirts.json');
    const data = await res.json()
    pintarCards(data)
}

// Pintar productos
const pintarCards = data => {
    data.forEach(item => {
        templateCard.querySelector('h5').textContent = item.title
        templateCard.querySelector('p').textContent = item.price
        templateCard.querySelector('button').dataset.id = item.id
        templateCard.querySelector('img').setAttribute("src", item.photo)
        const clone = templateCard.cloneNode(true)
        fragment.appendChild(clone)
    })
    cards.appendChild(fragment)
}

const addcart = e => {
    if (e.target.classList.contains('btn-dark')) {
        setcart(e.target.parentElement)
    }
    e.stopPropagation()
}

const setcart = item => {
    const product = {
        title: item.querySelector('h5').textContent,
        price: item.querySelector('p').textContent,
        id: item.querySelector('button').dataset.id,
        quantity: 1
    }
     console.log(product)
    if (cart.hasOwnProperty(product.id)) {
        product.quantity = cart[product.id].quantity + 1
    }

    cart[product.id] = { ...product }
    
    paintcart()
}

const paintcart = () => {
    items.innerHTML = ''

    Object.values(cart).forEach(product => {
        templatecart.querySelector('th').textContent = product.id
        templatecart.querySelectorAll('td')[0].textContent = product.title
        templatecart.querySelectorAll('td')[1].textContent = product.quantity
        templatecart.querySelector('span').textContent = product.price * product.quantity
        
        //botones
        templatecart.querySelector('.btn-info').dataset.id = product.id
        templatecart.querySelector('.btn-danger').dataset.id = product.id

        const clone = templatecart.cloneNode(true)
        fragment.appendChild(clone)
    })
    items.appendChild(fragment)

    paintFooter()
}

const paintFooter = () => {
    footer.innerHTML = ''
    
    if (Object.keys(cart).length === 0) {
        footer.innerHTML = `
        <th scope="row" colspan="5">Cart empty</th>
        `
        return
    }
    
    // sumar quantity y sumar totales
    const nquantity = Object.values(cart).reduce((acc, { quantity }) => acc + quantity, 0)
    const nprice = Object.values(cart).reduce((acc, {quantity, price}) => acc + quantity * price ,0)
    // console.log(nprice)

    templateFooter.querySelectorAll('td')[0].textContent = nquantity
    templateFooter.querySelector('span').textContent = nprice

    const clone = templateFooter.cloneNode(true)
    fragment.appendChild(clone)

    footer.appendChild(fragment)

    const boton = document.querySelector('#vaciar-cart')
    boton.addEventListener('click', () => {
        cart = {}
        paintcart()
    })

}

const btnAumentarDisminuir = e => {
    // console.log(e.target.classList.contains('btn-info'))
    if (e.target.classList.contains('btn-info')) {
        const product = cart[e.target.dataset.id]
        product.quantity++
        cart[e.target.dataset.id] = { ...product }
        paintcart()
    }

    if (e.target.classList.contains('btn-danger')) {
        const product = cart[e.target.dataset.id]
        product.quantity--
        if (product.quantity === 0) {
            delete cart[e.target.dataset.id]
        } else {
            cart[e.target.dataset.id] = {...product}
        }
        paintcart()
    }
    e.stopPropagation()
}