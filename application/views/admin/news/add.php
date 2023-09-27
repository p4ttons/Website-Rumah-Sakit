<h5>
    <?php echo $judul;?>
    <span style="float:right">
    <?php echo anchor('admin/news','<button>Tambah Data</button>');?>
</span>
</h5>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/news/add",$attributes);
?>
    <label for="news_cat_F_ID">Kategori Dokter</label>
    <?php
    $opsi_cat = $this->news_cat_model->get_drop_down();
    echo form_dropdown('news_cat_F_ID',$opsi_cat,set_value('news_cat_F_ID'));
    ?>
    <br /><br />

    <label for="news_title">Nama Dokter</label>
    <input name="news_title" type="text" id="news_title" placeholder="tuliskan nama dokter" value="<?php echo set_value("news_title");?>" size="100%" required>
    <br /><br />

    <label for="news_description">Deskripsi</label>
    <input name="news_description" type="text" id="news_description" placeholder="tuliskan deskripsi dokter" value="<?php echo set_value("news_description");?>" size="100%" requiered>
    <br /><br />

    <label for="news_image">Foto</label>
    <input name="news_image"type="file" id="news_image" required>
    <br /><br />
    <input type="submit" name="submit" value="Simpan"/>
<?php echo form_close();?>