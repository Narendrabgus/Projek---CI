<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'home') ? "" : "collapsed" ?>" href="/home">
            <i class="bi bi-grid"></i>
            <span>Home</span>
        </a>
    </li><!-- End home Nav -->

    <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="/keranjang">
            <i class="bi bi-grid"></i>
            <span>Keranjang</span>
        </a>
    </li><!-- End keranjang Nav -->  

    <?php
        if (session()->get('role') == 'admin') {
    ?>
    <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="/produk">
            <i class="bi bi-grid"></i>
            <span>Produk</span>
        </a>
    </li><!-- End produk Nav -->
    <?php
        }
    ?>

    <?php if (session()->get('isLoggedIn')): ?>
        <div class="logout-btn" style="margin: 10px 0;">
            <a href="<?= base_url('logout') ?>" class="btn btn-sm ">
                Logout
            </a>
        </div>
    <?php endif; ?>

</ul>

</aside>
<!-- End Sidebar-->