<h5>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor('admin/kontak','<button>Kembali</button>');?>
    </span>
</h5>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/kontak/add",$attributes);
?>
    <label for="nama">Nama</label>
    <input name="nama" type="text" id="nama" placeholder="Ketikkan nama kontak" value="<?php echo set_value("nama");?>" size="100%" required>
    <br /><br />
    <label for="email">Email</label>
    <input name="email" type="text" id="email" placeholder="Ketikkan email" value="<?php echo set_value("email");?>" size="100%" required>
    <br /><br />
    <label for="nomorhp">Nomor Hp</label>
    <input name="nomorhp" type="text" id="nomorhp" placeholder="Ketikkan nomor hp" value="<?php echo set_value("nomorhp");?>" size="100%" required>
    <br /><br />
    <label for="pesan">Pesan</label>
    <input name="pesan" type="text" id="pesan" placeholder="Ketikkan pesan" value="<?php echo set_value("pesan");?>" size="100%" required>
    <br /><br />
    <input type="submit" name="submit" value="Simpan"/>
<?php echo form_close();?>