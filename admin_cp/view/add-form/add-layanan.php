<h3>Tambah Data Layanan</h3>
<form action="?page=act-layanan" method="POST">
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="layanan">Layanan</label>
            <input type="text" class="form-control" id="layanan" name="layanan">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-6">
         <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon">
         </div>
      </div>
      <div class="col-lg-6">
         <div class="form-group">
            <label for="status">Status</label>
            <div class="form-group form-check">
               <input type="checkbox" class="form-check-input" id="status" name="status" checked>
               <label class="form-check-label" for="status">Y</label>
            </div>
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary" name="save-layanan" style="width:50%">Simpan</button> &nbsp;
      <a href="?page=datalayanan" class="btn btn-danger">Batal</a>
   </div>

</form>