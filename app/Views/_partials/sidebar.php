<div class="sidebar" data-color="azure" data-image="<?= base_url('assets/img/sidebar-5.jpg')?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?= base_url('/dashboard');?>" class="simple-text">
                    Admin Logbook
                </a>
            </div>

            <ul class="nav">
                <li class="<?= $title == "Dashboard" ? "active":""; ?>">
                    <a href="<?= base_url('/dashboard');?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="<?= $title== "Peminjaman" ||"Pinjam Alat" || "Kembali Alat" ? "active":""; ?>">
                    <a href="<?= base_url('/pinjam');?>">
                        <i class="pe-7s-culture"></i>
                        <p>Peminjaman</p>
                    </a>
                </li>
                <li class="<?= $title== "DataPTK"? "active":""; ?>"> 
                    <a href="<?= base_url('/DataPTK');?>">
                        <i class="pe-7s-id"></i>
                        <p>Data Alat</p>
                    </a>
                </li>
                <li class="<?= $title== "Virtual Stand"? "active":""; ?>"> 
                    <a href="<?= base_url('/virtualstand');?>">
                        <i class="pe-7s-display2"></i>
                        <p>Riwayat</p>
                    </a>
                </li>
                <li class="<?= $title == "User"? "active":""; ?>">
                    <a href="<?= base_url('/user');?>">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>