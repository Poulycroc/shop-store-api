<b-navbar type="light" variant="light">
    <div class="container">
        <b-navbar-nav>
            <b-nav-item href="/shops/<?= $shopName; ?>">
                <img src="<?= $shopLogo; ?>">
            </b-nav-item>

            <!-- Navbar dropdowns -->
            <b-nav-item-dropdown text="Catégories" left>
                <b-dropdown-item href="#">Bières</b-dropdown-item>
                <b-dropdown-item href="#">Vins</b-dropdown-item>
                <b-dropdown-item href="#">Soft</b-dropdown-item>
                <hr>
                <b-dropdown-item href="#">Chips</b-dropdown-item>
            </b-nav-item-dropdown>

            <b-nav-item href="/cart/<?= $shopName; ?>">Panier</b-nav-item>

            <b-nav-form>
                <b-form-input class="mr-sm-2" placeholder="Search"></b-form-input>
                <b-button variant="outline-success" class="my-2 my-sm-0" type="submit">
                    <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                    </svg>
                </b-button>
            </b-nav-form>
        </b-navbar-nav>
    </div>
</b-navbar>
