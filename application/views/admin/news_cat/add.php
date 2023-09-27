<h5>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor('admin/news_cat','<button>Kembali</button>');?>
    </span>
</h5>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/news_cat/add",$attributes);
?>
    <label for="news_cat_name">Kategori</label>
    <input name="news_cat_name" type="text" id="news_cat_name" placeholder="Ketikkan kategori spesialis, misal: Spesialis Anak, Spesialis Mata, Spesialis Bedah" value="<?php echo set_value("news_cat_name");?>" size="100%" required>
    <br /><br />
    <input type="submit" name="submit" value="Simpan"/>
<?php echo form_close();?>