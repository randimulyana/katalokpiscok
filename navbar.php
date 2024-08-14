<!-- Navbar start -->
<nav class="navbar" x-data>
  <a href="#" class="navbar-logo">piscok<span>gurih</span>.</a>

  <div class="navbar-nav">
    <a href="index.php">Home</a>
    <a href="#about">Tentang Kami</a>
    <a href="#menu">Menu</a>
    <a href="#products">Produk</a>
    <a href="#galery">Galery</a>
    <a href="profil.php">Profil Pengusaha</a>
    <a href="#contact">Kontak</a>
  </div>

  <div class="navbar-extra">
    <a href="#" id="search-button"><i data-feather="search"></i></a>
    <a href="#" id="shopping-cart-button">
      <i data-feather="shopping-cart">
        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span> </i
    ></a>
    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
  </div>

  <!-- Search Form start -->
  <div class="search-form">
    <input type="search" id="search-box" placeholder="search here..." />
    <label for="search-box"><i data-feather="search"></i></label>
  </div>
  <!-- Search Form end -->

  <!-- Shopping Cart start -->
  <div class="shopping-cart">
    <template x-for="(item, index) in $store.cart.items" x-keys="index">
      <div class="cart-item">
        <img :src="`img/products/${item.img}`" :alt="item.name" />
        <div class="item-detail">
          <h3 x-text="item.name"></h3>
          <div class="item-price">
            <span x-text="rupiah(item.price)"></span> &times;
            <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
            <span x-text="item.quantity"></span>
            <button id="add" @click="$store.cart.add(item)">&plus;</button> &equals;
            <span x-text="rupiah(item.total)"></span>
          </div>
        </div>
      </div>
    </template>
    <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem">Cart is Empty</h4>
    <h4 x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)"></span></h4>

    <div class="form-container" x-show="$store.cart.items.length">
      <form action="" id="checkoutForm">
        <h5>Costomer Detail</h5>

        <label for="name">
          <span>Name</span>
          <input type="text" name="name" id="name" />
        </label>
        <label for="email">
          <span>Email</span>
          <input type="text" email="email" id="email" />
        </label>
        <label for="phone">
          <span>Phone</span>
          <input type="text" phone="phone" id="phone" autocomplete="off" />
        </label>

        <button class="checkout-button" type="submit" id="checkout-button" value="Checkout">Checkout</button>
      </form>
    </div>
  </div>
  <!-- Shopping Cart end -->
</nav>
<!-- Navbar end -->
