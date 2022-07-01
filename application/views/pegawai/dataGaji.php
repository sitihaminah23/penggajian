 <style>
        .scroll{
            height: 400px;
            overflow: scroll;

        }
     </style>
 <div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

<div class="scroll" >
<table class=" table table-striped table-bordered">
   <tr>
      <th>Nama Pegawai</th>
      <th>Jabatan</th>
      <th>Gaji Pokok</th>
      <th>Tj. Transposrt</th>
      <th>Tj. Bonus</th>
      <th>Total Gaji</th>
    
   </tr>
   
   <?php foreach($pegawai as $k) : ?>

<tr>
   <td><?php echo $k->nama_pegawai ?></td>
   <td><?php echo $k->nama_jabatan ?></td>
   <td>Rp. <?php echo number_format($k->gaji_pokok,0,',','.') ?></td>
   <td>Rp. <?php echo number_format($k->tj_transport,0,',','.') ?></td>
   <td>Rp. <?php echo number_format($k->bonus,0,',','.') ?></td>
   <td>Rp. <?php echo number_format($k->gaji_pokok + $k->tj_transport + $k->bonus,0,',','.') ?></td>
 
   
</tr>

<?php endforeach; ?>
</table>
                    
                   
</div>
                
         

           