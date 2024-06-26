<?php if(!empty($j_user)) :?>
    <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-teal">
              <div class="widget-user-image">
                
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $_SESSION['nama'] ?></h3>
                 <?php foreach($user as $usr) : ?>
                    <h5 class="widget-user-desc">Status : <?php echo $usr['stat'];?> </h5>
                <?php endforeach ?>
            </div>
            <div class="box-footer no-padding">
            <?php foreach($user as $usr) : ?>
              <ul class="nav nav-stacked">
                    <li><a href="#">Nama Lengkap <span class="direct-chat-text bg-teal"><i class="fa fa-user"></i> <?php echo $usr['nama_lengkap']; ?></span></a></li>
                    <li><a href="#">Sekolah Asal <span class="direct-chat-text bg-teal"><i class="fa fa-university"></i> <?php echo $usr['sekolah_asal'] ?></span></a></li>
                    <li><a href="#">Nilai Akhir  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $usr['nilai_akhir'] ?> </span></a></li>
                    <li><a href="#">jurusan pilihan 1 <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['jurusan_1'] ?></span></a></li>
                    <li><a href="#">jurusan pilihan 2 <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['jurusan_2'] ?></span></a></li>
                    <li><a href="#">jurusan pilihan 3 <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['jurusan_3'] ?></span></a></li>
                    <li><a href="#">Jalur <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['jalur'] ?></span></a></li>
                    <li><a href="#">Tempat Lahir <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['tempat_lahir'] ?></span></a></li> 
                    <li><a href="#">Tanggal Lahir <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['tanggal_lahir'] ?></span></a></li>
                    <li><a href="#">Kelurahan <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['kelurahan'] ?></span></a></li>
                    <li><a href="#">kecamatan <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['kecamatan'] ?></span></a></li>
                    <li><a href="#">Provinsi <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['provinsi'] ?></span></a></li>
                    
              </ul>
              <?php endforeach ?>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>

  
    <?php elseif( !empty($terimaa)) : ?>
      <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-teal">
              <div class="widget-user-image">

              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $_SESSION['nama'] ?></h3>
                 <?php foreach($terimaa as $trm) : ?>
                    <h5 class="widget-user-desc">Status : DITERIMA</h5>
                    <h6 class="widget-user-desc"><a href="cetak_bukti.php?id=<?php echo $trm['id'] ?>" class="btn btn-primary btn-sm" ><i class="fa fa-print"></i>  Cetak</a></h6>
                <?php endforeach ?>
            </div>
            <div class="box-footer no-padding">
            <?php foreach($terimaa as $trm) : ?>
              <ul class="nav nav-stacked">
                    <li><a href="#">Nama Lengkap <span class="direct-chat-text bg-teal"><i class="fa fa-user"></i> <?php echo $trm['nama_lengkap']; ?></span></a></li>
                    <li><a href="#">Sekolah Asal <span class="direct-chat-text bg-teal"><i class="fa fa-university"></i> <?php echo $trm['sekolah_asal'] ?></span></a></li>
                    <li><a href="#">NISN  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $trm['nisn'] ?> </span></a></li>
                    <li><a href="#">Diterima pada jurusan <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $trm['jurusan'] ?></span></a></li>         
              </ul>
              <?php endforeach ?>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>

    <?php elseif( !empty($tolak)) : ?>
      <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-teal">
              <div class="widget-user-image">

              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $_SESSION['nama'] ?></h3>
                 <?php foreach($tolak as $tlk) : ?>
                    <h5 class="widget-user-desc">Status : DITERIMA</h5>
                    <h6 class="widget-user-desc"><a href="cetak_bukti.php?id=<?php echo $tlk['id'] ?>" class="btn btn-primary btn-sm" ><i class="fa fa-print"></i>  Cetak</a></h6>
                <?php endforeach ?>
            </div>
            <div class="box-footer no-padding">
            <?php foreach($tolak as $tlk) : ?>
              <ul class="nav nav-stacked">
                    <li><a href="#">Nama Lengkap <span class="direct-chat-text bg-teal"><i class="fa fa-user"></i> <?php echo $tlk['nama_lengkap']; ?></span></a></li>
                    <li><a href="#">Sekolah Asal <span class="direct-chat-text bg-teal"><i class="fa fa-university"></i> <?php echo $tlk['sekolah_asal'] ?></span></a></li>
                    <li><a href="#">NISN  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $tlk['nisn'] ?> </span></a></li>
              </ul>
              <?php endforeach ?>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>

<?php elseif( empty($j_user)) : ?>
    <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">  
              <h4>Kamu Belum  Mendaftar</h4>
                <p>
                    Kamu Belum Mendaftar !!, Silahkan Daftar Disini <br/><a href="index.php?page=daftar">Daftar ?</a>
                </p>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      

      <?php endif ?>