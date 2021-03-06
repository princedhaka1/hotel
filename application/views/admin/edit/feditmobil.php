<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">data</a></li>
        <li class="icon point_right active"><a href="<?php echo base_url(); ?>index.php/data/dataMobil">Sewa Mobil</a></li>
         <li class="icon point_right"><a href="#">edit</a></li>

    </ul>

    <!-- Breadcrumb: End -->

    <!-- Breadcrumb Icon Links: Start -->

    <ul class="right">

        <li><a href="<?php echo base_url(); ?>index.php/admin/dashboar" class="icon home tip" title="Dashboard">Home</a></li>
    </ul>
    <!-- Breadcrumb Icon Links: End -->

</div>
<!-- Breadcrumb Bar: End -->

</div>

<div class="grid_24">
    <?php if ($msg == "gagal") { ?>
    <div class="notice warning">
        <p><b>PERHATIAN:</b> Gagal simpan gambar tidak mendukung.</p>
    </div>
        <?php } else if ($msg == "success") { ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil disimpan.</p>
    </div>
        <?php } ?>
    <!-- Box Header: Start -->
    <div class="box_top">


        <h2 class="icon pages">Edit Mobil</h2>

        <!-- Tab Select: Start -->
       
        <!-- Tab Select: End -->


    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- News Table Tabs: Start -->
        <div class="tabs">

            <!-- News Sorting Table: Start -->
            <div id="listing" class="padding">
               

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/data/dataMobil/edit', $attributes); 
                if(isset ($en)) {
                    foreach ($en as $r) {?>
                <div class="field">
                    <label class="left">Merk Mobil</label>
                    <input type="text" name="merkM" id="judulG" value="<?php echo $r->namaM; ?>" class="left validate">
                   <input type="hidden" name="idSM" value="<?php echo $r->idSM; ?>" class="left validate">


                </div>



                <div class="field">
                    <label>Spesifikasi Mobil</label>
                    <textarea name="isi" class="wysiwyg"><?php echo $r->spesifikasiM ?></textarea>
                  
                </div>
                <div class="field">

                    <label class="left nomargin">Gambar</label>
                    <input type="file" name="file" accept="image/*"/><br/><p>Note : Image extension .jpg, size max 100kb</p>
                </div>


                <button>Simpan</button>
                <?php }}?>
            </form>
            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->
           
            <!-- News Sorting Table - Add News Tab: End -->


        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/menu_bawah'); ?>