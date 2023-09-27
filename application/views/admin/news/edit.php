<h5>
    <?php echo $judul;?>
    <span style="float:right"><?php echo anchor('admin/news','<button>Kembali</button>');?></span>
</h5>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/news/edit/".$hasil['NEWS_ID'],$attributes);
?>
    <label for="news_cat_F_ID">Kategori</label>
    <?php
    $opsi_cat = $this->news_cat_model->get_drop_down();
    echo form_dropdown('news_cat_F_ID',$opsi_cat,$hasil['NEWS_CAT_F_ID']);
    ?>
    <br /><br />

    <label for="news_title">Nama Dokter</label>
    <input name="news_title" type="text" id="news_title" value="<?php echo $hasil['NEWS_TITLE'];?>" size="100%" required>
    <br /><br />
    
    <label for="news_description">Deskripsi</label>
    <input name="news_description" type="text" id="news_description" value="<?php echo $hasil['NEWS_DESCRIPTION'];?>" size="100%" required>
    <br /><br />

    <label for="news_image">Foto</label>
    <br />
    <img src="<?php echo base_url();?>uploaded_files/<?php echo $hasil['NEWS_IMAGE'];?>" width="100"><br />
    <input name="news_image" type="file" id="news_image" required>
    <br /><br />
    <input type="submit" name="submit" value="simpan" />
<?php echo form_close();?>