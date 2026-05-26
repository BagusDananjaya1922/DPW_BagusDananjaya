<div class="sidebar">
    <div class="sidebar-brand">⚡ POLTEK ACADEMIC</div>
    <ul class="sidebar-menu">
        <?php $page = basename($_SERVER['PHP_SELF']); ?>
        <li>
            <a href="<?php echo ($page == 'tampil_dosen.php') ? '#' : '../tampil_dosen.php'; ?>" class="<?php echo ($page == 'tampil_dosen.php') ? 'active' : ''; ?>">
                <span>Data Dosen</span>
            </a>
        </li>
        <li>
            <a href="<?php echo ($page == 'tampil.php' && strpos($_SERVER['REQUEST_URI'], 'mahasiswa') !== false) ? '#' : ( ($page == 'tampil_dosen.php') ? 'mahasiswa/tampil.php' : '../mahasiswa/tampil.php' ); ?>" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'mahasiswa') !== false) ? 'active' : ''; ?>">
                <span>Data Mahasiswa</span>
            </a>
        </li>
        <li>
            <a href="<?php echo ($page == 'tampil.php' && strpos($_SERVER['REQUEST_URI'], 'matakuliah)')) ? '#' : ( ($page == 'tampil_dosen.php') ? 'matakuliah/tampil.php' : '../matakuliah/tampil.php' ); ?>" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'matakuliah') !== false) ? 'active' : ''; ?>">
                <span>Data Matakuliah</span>
            </a>
        </li>
    </ul>
</div>
<div class="main-wrapper">