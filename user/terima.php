<div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">  
                <h4>Kamu Diterima di ITH, diharap jangan mengisi data lagi!!!</h4>
              <?php foreach($terimaa as $trm) : ?>
                <p>
                    Selamat <?php echo $trm['nama_lengkap'] ?> Kamu Sudah Diterima Di ITH <br/>
                    pada jurusan <?php echo $trm['jurusan'] ?>
                </p>
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div> 