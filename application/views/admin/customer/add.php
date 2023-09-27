<h5>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor('admin/customer','<button>Kembali</button>');?>
    </span>
</h5>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/customer/add",$attributes);
?>
    <label for="customer_name">Nama</label>
    <input name="customer_name" type="text" id="customer_name" placeholder="Ketikkan nama customer" value="<?php echo set_value("customer_name");?>" size="100%" required>
    <br /><br />
    <label for="cus_email">Email</label>
    <input name="cus_email" type="text" id="cus_email" placeholder="Ketikkan email" value="<?php echo set_value("cus_email");?>" size="100%" required>
    <br /><br />
    <label for="password">Password</label>
    <input name="password" type="text" id="password" placeholder="Ketikkan password" value="<?php echo set_value("password");?>" size="100%" required>
    <br /><br />
    <input type="submit" name="submit" value="Simpan"/>
<?php echo form_close();?>