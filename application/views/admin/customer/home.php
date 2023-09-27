<h5>
    <?php echo $judul;?>
    <span style="float:right">
    <?php echo anchor ('admin/customer/add','<button>Daftar Kontak</button>');?>
    </span>
</h5>
<?php echo $this->session->flashdata("message");?>
<?php
if (count($hasil) > 0)
{
    //jika ditemukan data maka eksekusi kode ini
    $i=1;
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
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
                <td align="justify"><?php echo $list['CUSTOMER_NAME'];?></td>
                <td align="justify"><?php echo $list['CUS_EMAIL'];?></td>
                <td align="justify"><?php echo $list['PASSWORD'];?></td>
                <td align="center">
                    <div class="dropdown">
                              <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  >
                                  <i class="bx bx-edit-alt me-1">
                                  </i><?php echo anchor('admin/customer/edit/'.$list['CUSTOMER_ID'],'<button >EDIT</button>','title="edit"');?></a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> <?php 
                                    $attr_del = array('onclick' => 'return confirmDel();','title' => 'delete');
                                    echo anchor('admin/customer/delete/'.$list['CUSTOMER_ID'],'<button>DELETE</button>',$attr_del);
                                    ?></a
                                >
                              </div>
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
        <p> Data tidak ada</P>
    <?php
}
?>

 