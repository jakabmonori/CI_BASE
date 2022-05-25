<?php
echo view('Admin/Common/Header');


$tomesek_szoveg_url = base_url('admin/tomesek/szoveg');
$tomesek_kep_url = base_url('admin/tomesek/kep');
?>

<?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


    <div class="page-heading d-flex justify-content-end">
        <?php if (isset($tomesek) && $tomesek == "szoveg"){
            echo "<a href='$tomesek_kep_url'>Kép szerkesztése</a>";
        }
        else if (isset($tomesek) && $tomesek == "kep") {
            echo "<a href='$tomesek_szoveg_url'>Szöveg szerkesztése</a>";
        }?>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <?php echo $output ?>
            </div>
        </section>
    </div>

<?php
echo view('Admin/Common/Footer');
?>


<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>