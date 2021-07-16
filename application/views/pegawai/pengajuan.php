<div class="row m-4">
		<div class="col-12 col-md-8">
			<div class="card">
					<h5 class="card-header">Halaman Pengajuan</h5>
					<form action="<?= base_url('pegawai/pengajuan') ?>" method="post">
						<div class="card-body border-top py-0 my-3">
							<h5 class="text-muted my-3">Informasi</h5>
							<div class="row mb-3">
								<div class="col-xs-12">
									<div class="form-group">
										<label for="tipe"  class="mb-2">Jenis Cuti : </label>
										<select name="tipe" id="tipe" class="form-control" required>
											<option value="" disabled selected>-- Pilih salah satu --</option>
												<option value="Ijin">Ijin</option>
												<option value="Sakit">Sakit</option>
												<option value="Cuti Tahunan">Cuti Tahunan</option>
												<option value="Cuti Melahirkan">Cuti Melahirkan</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<label for="tanggal_mulai" class="mb-2">Tanggal Mulai : </label>
										<input type="date" name="tanggal_mulai" id="tanggal_mulai" value="" class="form-control" required/>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<label for="tanggal_selesai" class="mb-2">Tanggal Berakhir : </label>
										<input type="date" name="tanggal_selesai" id="tanggal_selesai" value="" class="form-control" required/>
									</div>
								</div>
							</div>
						</div>


						<div class="card-body border-top py-0 my-3 pt-2">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<label for="keterangan" class="mb-2">Keterangan : </label>
										<textarea name="keterangan" id="keterangan" cols="20" rows="5" class="form-control" required></textarea>
									</div>
								</div>
							</div>
							
						</div>
					
						
						<div class="card-footer">
							<div class="row w-100">
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<button type="submit" class="btn btn-primary btn-block">Simpan <i class="fa fa-save"></i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
