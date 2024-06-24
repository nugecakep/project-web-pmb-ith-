<?php if(empty($j_user)) : ?>
      <section class="content">
        
        <div class="card">
            <div class="card-header bg-primary">
              <i class="fa fa-user-plus"></i>  Formulir pilih
            </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Silahkan pilih jalur pendaftaran</label>
                            <select id="" class="form-control" name="jalurpendaftaran">
                                <?php foreach($jalurpendaftaran as $jp) : ?>
                                  <option value="<?php echo $jp['id']; ?>"><?php echo $jp['namajurusan']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>                  
                    <button type="submit" class="btn btn-primary mt-3" name="daftar"><i class="fa fa-edit"></i> Daftar</button>
                </form>
            </div>
        </div>

    </section>

<?php endif ?>
    

