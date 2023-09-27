<h5>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor('admin/news/add','<button>Tambah Data</button>');?>
    </span>
</h5>

<?php echo $this->session->flashdata("message");?>

<?php 
if (count($hasil) > 0)
{
    //jika ditemukan data maka eksekusi kode ini
    $i=1;
    ?>
    <table class="table table-bordered" width="100%" border="1" cellpadding="5" cellspacing="5">
        <thead>
            <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>Kategori</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Action</th>
        </tr>
        </thead>
    <?php
    foreach ($hasil as $key => $list)
    {
        ?>
            <tbody>
            <tr>
                <td align="center"><?php echo $i;?></td>
                <td aligin="justify">
                    <img src="<?php echo base_url();?>uploaded_files/<?php echo $list['NEWS_IMAGE'];?>" width="100">
                </td>
                <td align="justify"><?php echo $list['NEWS_CAT_NAME'];?></td>
                <td align="justify"><?php echo $list['NEWS_TITLE'];?></td>
                <td align="justify"><?php echo $list['NEWS_DESCRIPTION'];?></td>
                <td align="center">
                    <div class="dropdown">
                        <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <i class="bx bx-edit-alt me-1">
                                  </i>
                                    <?php echo anchor('admin/news/edit/'.$list['NEWS_ID'],'<button>EDIT</button>', 'title="edit"');?>
                                    &nbsp;&nbsp; &nbsp;</a>
                                 <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i>    
                                    <?php
                                    $attr_del = array('onclick' => 'return confirmDel();','title' => 'delete');
                                    echo anchor('admin/news/delete/'.$list['NEWS_ID'],'<button>DELETE</button>', $attr_del);
                                    ?>
                                </a>
                        <div>       
                 </div>   
                </td>
            </tr>
           </tbody> 
        <?php
        $i++;
    }
    ?>
</table>
<?php
}
else
{
    //jika tidak ada data maka tampilkan notifikasi
    ?>
        <p>Data tidak ada</p>
    <?php
}
?>

<script>
function confirmDel() {
  confirm("yakin Hapus?");
}
</script>