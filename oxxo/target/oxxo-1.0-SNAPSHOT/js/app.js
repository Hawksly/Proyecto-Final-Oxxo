const stockProductos = [
  {
    id: 1,
    nombre: "Cerveza Stella Artois",
    cantidad: 1,
    desc: "Cerveza muy equilibrada donde predominan moderadas notas a frutas blancas y de cereal",
    precio: 28,
    img: "res/producto/stella.png",
  },
  {
    id: 2,
    nombre: "Cerveza Pum Pum",
    cantidad: 1,
    desc: "Cerveza de maíz clara debido a que utiliza este ingrediente como adjunto a la malta de cebada",
    precio: 18,
    img: "res/producto/pum.png",
  },
  {
    id: 3,
    nombre: "Yogurt Battimix",
    cantidad: 1,
    desc: "Un lácteo parcialmente descremado sabor vainilla con hojuelas de arroz crujiente bañado en chocolate",
    precio: 4,
    img: "res/producto/batimix.png",
  },
  {
    id: 4,
    nombre: "Yogurt Gloria 500G",
    cantidad: 1,
    desc: "Yogurt Gloria es una cremosa y deliciosa bebida láctea con trozos de fruta, tiene nutrientes con zinc y vitaminas",
    precio: 6,
    img: "res/producto/Lit.png",
  },
  {
    id: 5,
    nombre: "Filete de Atún Florida",
    cantidad: 1,
    desc: "Filete de Atún FLORIDA en Aceite Vegetal Lata 140g, Calorias:196 cal, Grasas: 7g",
    precio: 5,
    img: "res/producto/atun.png",
  },
  {
    id: 6,
    nombre: "Galleta con Quinua y Ajonjolí",
    cantidad: 1,
    desc: "Un snack rico para cualquier momento del dia, galletas elaboradas con quinua y semillas de ajonjolí",
    precio: 9,
    img: "res/producto/Quinua.png",
  },
  {
    id: 7,
    nombre: "Frijol Castilla",
    cantidad: 1,
    desc: "Los frijoles de ojos negros tienen beneficios para personas que sufren diabetes, colesterol y la anemia",
    precio: 8,
    img: "res/producto/Frijol.png",
  },
  {
    id: 8,
    nombre: "Agua Mineral San Mateo",
    cantidad: 1,
    desc: "El agua mineral San Mateo tiene origen de manantial y contiene minerales buenos para tu cuerpo",
    precio: 3,
    img: "res/producto/agua.png",
  },
  {
    id: 9,
    nombre: "Chocolate Vizzio",
    cantidad: 1,
    desc: "Los dulces Vizzio son almendras finamente seleccionadas bañadas en abundante chocolate de leche",
    precio: 20,
    img: "res/producto/vizio.png",
  },
  {
    id: 10,
    nombre: "Chococlate Bon o Bon",
    cantidad: 1,
    desc: "Una golosina de la Arcor, Bombón con sabor a chocolate blanco con relleno sabor a frutilla fresa",
    precio: 17,
    img: "res/producto/corazon.png",
  },
  {
    id: 11,
    nombre: "Papas Ondas Picantes",
    cantidad: 1,
    desc: "Hojuelas de Papas Fritas LAY'S Ondas Picante Bolsa 150g, Grasas: 10g, sodio: 210mg",
    precio: 2,
    img: "res/producto/picante.png",
  },
  {
    id: 12,
    nombre: "MONSTER Bebida Energértica",
    cantidad: 1,
    desc: "La bebida energética más salvaje, Refresco energético carbonatado.",
    precio: 10,
    img: "res/producto/energizante.png",
  },
];
let carrito = [];

const contenedor = document.querySelector("#contenedor");
const carritoContenedor = document.querySelector("#carritoContenedor");
const vaciarCarrito = document.querySelector("#vaciarCarrito");
const precioTotal = document.querySelector("#precioTotal");
const activarFuncion = document.querySelector("#activarFuncion");
const procesarCompra = document.querySelector("#procesarCompra");
const totalProceso = document.querySelector("#totalProceso");
const formulario = document.querySelector('#procesar-pago')

if (activarFuncion) {
  activarFuncion.addEventListener("click", procesarPedido);
}

document.addEventListener("DOMContentLoaded", () => {
  carrito = JSON.parse(localStorage.getItem("carrito")) || [];

  mostrarCarrito();
  document.querySelector("#activarFuncion").click(procesarPedido);
});
if (formulario) {
  formulario.addEventListener('submit', enviarCompra)
}


if (vaciarCarrito) {
  vaciarCarrito.addEventListener("click", () => {
    carrito.length = [];
    mostrarCarrito();
  });
}

if (procesarCompra) {
  procesarCompra.addEventListener("click", () => {
    if (carrito.length === 0) {
      Swal.fire({
        title: "¡Tu carrito está vacio!",
        text: "Compra algo para continuar con la compra",
        icon: "error",
        confirmButtonText: "Aceptar",
      });
    } else {
      location.href = "compra.html";
    }
  });
}

stockProductos.forEach((prod) => {
  const { id, nombre, precio, desc, img, cantidad } = prod;
  if (contenedor) {
    contenedor.innerHTML += `
      <div class="card mt-3" style="width: 18rem;">
      <img class="card-img-top mt-2" src="${img}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">${nombre}</h5>
        <p class="card-text">Precio: ${precio}</p>
        <p class="card-text">Descripcion: ${desc}</p>
        <p class="card-text">Cantidad: ${cantidad}</p>
        <button class="btn btn-danger" onclick="agregarProducto(${id})">Comprar Producto</button>
      </div>
    </div>
      `;
  }
});

const agregarProducto = (id) => {
  const existe = carrito.some(prod => prod.id === id)

  if (existe) {
    const prod = carrito.map(prod => {
      if (prod.id === id) {
        prod.cantidad++
      }
    })
  } else {
    const item = stockProductos.find((prod) => prod.id === id)
    carrito.push(item)
  }
  mostrarCarrito()

};

const mostrarCarrito = () => {
  const modalBody = document.querySelector(".modal .modal-body");
  if (modalBody) {
    modalBody.innerHTML = "";
    carrito.forEach((prod) => {
      const { id, nombre, precio, desc, img, cantidad } = prod;
      console.log(modalBody);
      modalBody.innerHTML += `
        <div class="modal-contenedor">
          <div>
          <img class="img-fluid img-carrito" src="${img}"/>
          </div>
          <div>
          <p>Producto: ${nombre}</p>
        <p>Precio: ${precio}</p>
        <p>Cantidad :${cantidad}</p>
        <button class="btn btn-danger"  onclick="eliminarProducto(${id})">Eliminar producto</button>
          </div>
        </div>
        
    
        `;
    });
  }

  if (carrito.length === 0) {
    console.log("Nada");
    modalBody.innerHTML = `
      <p class="text-center text-primary parrafo dass">¡Aun no agregaste nada!</p>
      `;
  } else {
    console.log("Algo");
  }
  carritoContenedor.textContent = carrito.length;

  if (precioTotal) {
    precioTotal.innerText = carrito.reduce(
      (acc, prod) => acc + prod.cantidad * prod.precio,
      0
    );
  }

  guardarStorage();
};

function guardarStorage() {
  localStorage.setItem("carrito", JSON.stringify(carrito));
}

function eliminarProducto(id) {
  const juegoId = id;
  carrito = carrito.filter((juego) => juego.id !== juegoId);
  mostrarCarrito();
}
function procesarPedido() {
  carrito.forEach((prod) => {
    const listaCompra = document.querySelector("#lista-compra tbody");
    const { id, nombre, precio, img, cantidad } = prod;
    if (listaCompra) {
      const row = document.createElement("tr");
      row.innerHTML += `
                <td>
                <img class="img-fluid img-carrito" src="${img}"/>
                </td>
                <td>${nombre}</td>
              <td>${precio}</td>
              <td>${cantidad}</td>
              <td>${precio * cantidad}</td>
              `;
      listaCompra.appendChild(row);
    }
  });
  totalProceso.innerText = carrito.reduce(
    (acc, prod) => acc + prod.cantidad * prod.precio,
    0
  );
}

function enviarCompra(e) {
  e.preventDefault()
  const persona = document.querySelector('#persona').value
  const email = document.querySelector('#correo').value

  if (email === '' || persona == '') {
    Swal.fire({
      title: "¡Debes completar tu email y nombre!",
      text: "Rellena el formulario",
      icon: "error",
      confirmButtonText: "Aceptar",
    })
  } else {

    const btn = document.getElementById('button');

    // document.getElementById('procesar-pago')
    //  .addEventListener('submit', function(event) {
    //    event.preventDefault();

        btn.value = 'Enviando...';

        const serviceID = 'default_service';
        const templateID = 'template_s8zggy8';

        emailjs.sendForm(serviceID, templateID, this)
          .then(() => {
            btn.value = 'Finalizar compra';
            alert('Enviado!');
          }, (err) => {
            btn.value = 'Finalizar compra';
            alert(JSON.stringify(err));
          });
  };

    const spinner = document.querySelector('#spinner')
    spinner.classList.add('d-flex')
    spinner.classList.remove('d-none')

    setTimeout(() => {
      spinner.classList.remove('d-flex')
      spinner.classList.add('d-none')
      formulario.reset()
     }, 3000)

      const alertExito = document.createElement('p')
      alertExito.classList.add('alert', 'alerta', 'd-block', 'text-center', 'col-12', 'mt-2', 'alert-success')
      alertExito.textContent = 'Compra realizada correctamente'
      formulario.appendChild(alertExito)

      setTimeout(() => {
        alertExito.remove()
      }, 3000)


    localStorage.clear()
  }
