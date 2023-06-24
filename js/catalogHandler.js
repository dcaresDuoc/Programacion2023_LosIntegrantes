document.products = [
    {
      id: "prd001",
      image: "images/img-pro-01.jpg",
      title: "Bravery Chicken Adult alimento para perro",
      price: 23990,
    },
    {
      id: "prd002",
      image: "images/img-pro-02.jpg",
      title: "Bravery Chicken Adult Cat alimento para gato",
      price: 20990,
    },
    {
      id: "prd003",
      image: "images/img-pro-03.jpg",
      title: "Portland scratch board - 42.5 x 24 x 10 cm rascador",
      price: 8990,
    },
    {
      id: "prd004",
      image: "images/img-pro-04.jpg",
      title: "Zeedog FlyArnés - Arnés - Gotham - XL, L, M, S, XS",
      price: 25990,
    },
    {
      id: "prd005",
      image: "images/img-pro-05.jpg",
      title: "Casa Perro Plastica Kenny",
      price: 79000,
    },
    {
      id: "prd006",
      image: "images/img-pro-06.jpg",
      title: "Igloo Casa Para Perro",
      price: 40990,
    },
    {
      id: "prd007",
      image: "images/img-pro-07.jpg",
      title: "Fuente bebedera flower - flor de 3 LT",
      price: 53990,
    },
    {
      id: "prd008",
      image: "images/img-pro-08.jpg",
      title: "Aquatic turtle diet 340GR",
      price: 13990,
    },
    {
      id: "prd009",
      image: "images/img-pro-09.jpg",
      title: "Large bird diet 1.36 KG",
      price: 26990,
    },
  ];
  
  function getCartFromCookie() {
    if (document.cookie == "") {
      document.cart = [];
      return;
    }
  
    for (const cookie of document.cookie.split(";"))
      if (cookie.split(" ")[0].split('=')[0] == "_cart")
        document.cart = JSON.parse(cookie.split(" ")[0].split("=")[1]);
  
    if (!document.cart) document.cart = [];
  }
  
  function updateCartCookie() {
    document.cookie = "_cart=" + JSON.stringify(document.cart) + " SameSite=none";
  }
  
  function updateQty(id) {
    let qty = document.getElementById(`input${id}`).value;
  
    for (const prd of document.cart) if (prd.id == id) prd.qty = qty;
  
    handlePageConstruction();
  }
  
  function addToCart(id, qty) {
    productInCart = false;
  
    for (const prd of document.cart) {
      if (id == prd.id) {
        productInCart = true;
        prd.qty += qty;
      }
    }
  
    if (!productInCart) {
      document.cart.push({
        id: id,
        qty: qty,
      });
    }
  
    updateCartCookie();
    handlePageConstruction();
  }
  
  function removeFromCart(id) {
    let newCart = [];
  
    for (const prd of document.cart) if (id != prd.id) newCart.push(prd);
  
    document.cart = newCart;
  
    updateCartCookie();
    handlePageConstruction();
  }
  
  function getProductById(productId) {
    for (const prd of document.products) {
      if (prd.id == productId) return prd;
    }
  }
  
  function buildIndexProducts(productId) {
    let prd = getProductById(productId);
  
    document.getElementById("INDEXPRODUCTTAB").innerHTML =
      document.getElementById("INDEXPRODUCTTAB").innerHTML +
      '<div class="col-lg-3 col-md-6 special-grid best-seller">' +
      '    <div class="products-single fix">' +
      '        <div class="box-img-hover">' +
      '            <div class="type-lb">' +
      "            </div>" +
      `            <img src="${prd.image}" class="img-fluid" alt="Image">` +
      '            <div class="mask-icon">' +
      "                <ul>" +
      '                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Vista Previa"><i' +
      '                                class="fas fa-eye"></i></a></li>' +
      '                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i' +
      '                                class="fas fa-sync-alt"></i></a></li>' +
      '                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a Favoritos"><i' +
      '                                class="far fa-heart"></i></a></li>' +
      "                </ul>" +
      `                <a onClick="addToCart('${productId}', 1)" class="cart">Añadir al carro</a>` +
      "            </div>" +
      "        </div>" +
      '        <div class="why-text">' +
      `            <h4>${prd.title}</h4>` +
      `            <h5>${formatPriceStr(prd.price)}</h5>` +
      "        </div>" +
      "    </div>" +
      "</div>";
  }
  
  function buildShopProducts(productId){
    let prd = getElementsById(productId);
  
    document.getElementById("INDEXPRODUCTTAB").innerHTML =
      document.getElementById("INDEXPRODUCTTAB").innerHTML + 
      '<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">' +
      '    <div class="products-single fix">' +
      '        <div class="box-img-hover">' +
      '            <div class="type-lb">' +
      "            </div>" +
      `            <img src="${prd.image}" class="img-fluid" alt="Image">` +
      '            <div class="mask-icon">' +
      "                <ul>" +
      '                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Vista Previa"><i' +
      '                                class="fas fa-eye"></i></a></li>' +
      '                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i' +
      '                                class="fas fa-sync-alt"></i></a></li>' +
      '                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a Favoritos"><i' +
      '                                class="far fa-heart"></i></a></li>' +
      "                </ul>" +
      `                <a onClick="addToCart('${productId}', 1)" class="cart">Añadir al carro</a>` +
      "            </div>" +
      "        </div>" +
      '        <div class="why-text">' +
      `            <h4>${prd.title}</h4>` +
      `            <h5>${formatPriceStr(prd.price)}</h5>` +
      "        </div>" +
      "    </div>" +
      "</div>";
  }
  
  function buildCartProducts(productId, qty) {
    let prd = getProductById(productId);
  
    document.getElementById("INDEXPRODUCTTAB").innerHTML =
      document.getElementById("INDEXPRODUCTTAB").innerHTML +
      "<tr>" +
      '    <td class="thumbnail-img">' +
      '        <a href="#">' +
      `            <img class="img-fluid" src="${prd.image}" alt="" />` +
      "        </a>" +
      "    </td>" +
      '    <td class="name-pr">' +
      '        <a href="#">' +
      `            ${prd.title}` +
      "        </a>" +
      "    </td>" +
      '    <td class="price-pr">' +
      `        <p>${formatPriceStr(prd.price)}</p>` +
      "    </td>" +
      `    <td class="quantity-box"><input onChange="updateQty('${prd.id}')" id='input${prd.id}' type="number" size="4" value="${qty}" min="0" step="1" class="c-input-text qty text">` +
      "    </td>" +
      '    <td class="total-pr">' +
      `        <p>${formatPriceStr(prd.price * qty)}</p>` +
      "    </td>" +
      '    <td class="remove-pr">' +
      `        <a onClick="removeFromCart('${prd.id}')">` +
      '            <i class="fas fa-times"></i>' +
      "        </a>" +
      "    </td>" +
      "</tr>";
  }
  
  
  
  
  function handlePageConstruction() {
    document.getElementById("INDEXPRODUCTTAB").innerHTML = "";
  
    let pageName = document.getElementById("pagetracker").value;
  
    if (pageName == "INDEX") {
      buildIndexProducts("prd001");
      buildIndexProducts("prd002");
      buildIndexProducts("prd003");
      buildIndexProducts("prd004");
    }
    
    if (pageName == "SHOP"){
      buildShopProducts("prd001");
      buildShopProducts("prd002");
      buildShopProducts("prd003");
      buildShopProducts("prd004");
      buildShopProducts("prd005");
      buildShopProducts("prd006");
      buildShopProducts("prd007");
      buildShopProducts("prd008");
      buildShopProducts("prd009");
    }
  
    if (pageName == "CART") {
      let subtotal = 0;
      let discount = 0;
      let shipping = 0;
      let couponed = 0;
  
      for (const prd of document.cart) {
        buildCartProducts(prd.id, prd.qty);
        for (const allprd of document.products) {
          if (allprd.id == prd.id) {
            subtotal += allprd.price * prd.qty;
          }
        }
      }
  
      shipping = parseInt(0.2 * subtotal);
      discount = parseInt(0.1 * subtotal);
  
      document.getElementById("CART_SUBTOTAL").innerText = `${formatPriceStr(
        subtotal
      )}`;
      document.getElementById("DISCOUNT_TAXS").innerText = `${formatPriceStr(
        discount
      )}`;
      document.getElementById("DISCOUNT_COUP").innerText = `${formatPriceStr(
        couponed
      )}`;
      document.getElementById("SHIPPING_TOTL").innerText = `${formatPriceStr(
        shipping
      )}`;
      document.getElementById("TOTAL").innerText = `${formatPriceStr(
        subtotal - discount - couponed + shipping
      )}`;
    }
  
    document.getElementById("CART_LEN").innerText = document.cart.length;
    if (document.getElementById("CART_LEN").innerText == "0")
      document.getElementById("CART_LEN").innerText = "";
  }
  
  
  function formatPriceStr(price) {
    price = price.toString();
    return `$ ${price.slice(0, price.length - 3)}.${price.slice(-3)}`;
  }
  
  getCartFromCookie();
  handlePageConstruction();
  