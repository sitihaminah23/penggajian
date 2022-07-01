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
<table class="table table-striped table-bordered">
     <tr>
         <th class="text-center">No</th>
         <th class="text-center">NIK</th>
         <th class="text-center">Nama Pegawai</th>
         <th class="text-center">Jenis Kelamin</th>
         <th class="text-center">Jabatan</th>
         <th class="text-center">Gaji Pokok</th>
         <th class="text-center">Tunjangan Transport</th>
         <th class="text-center">Bonus</th>
         <th class="text-center">Total</th>
      </tr>

      <?php $no=1; foreach($gaji as $g) : ?>
         <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $g->nik ?></td>
            <td><?php echo $g->nama_pegawai ?></td>
            <td><?php echo $g->jenis_kelamin ?></td>
            <td><?php echo $g->nama_jabatan ?></td>
            <td>Rp. <?php echo number_format($g->gaji_pokok,0,',','.') ?></td>
            <td>Rp. <?php echo number_format($g->tj_transport,0,',','.') ?></td>
            <td>Rp. <?php echo number_format($g->bonus,0,',','.') ?></td>
            <td>Rp. <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->bonus,0,',','.') ?></td>
            
         </tr>

      <?php endforeach; ?> 
                    
                   
</div>
                