<div class="modal fade" id="modal-periode-laporan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:#F4B7BE; color: black">
            <div class="modal-header">
                <h4 class="modal-title">Periode Laporan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card p-3 mb-3" style="background-color:#F4B7BE; color: black">
                    <div class="input-group date mb-3" id="tanggal_mulai" data-target-input="nearest">
                        <span class="input-group-text" id="nomor_hp">Tanggal Mulai</span>
                        <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_mulai" value="{{ \Carbon\Carbon::today()->format('m/d/Y') }}"/>
                        <div class="input-group-append" data-target="#tanggal_mulai" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <div class="input-group date mb-3" id="tanggal_akhir" data-target-input="nearest">
                        <span class="input-group-text" id="nomor_hp">Tanggal Akhir</span>
                        <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_akhir" value="{{ \Carbon\Carbon::today()->format('m/d/Y') }}"/>
                        <div class="input-group-append" data-target="#tanggal_akhir" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="ubah-periode-transaksi">Ubah Periode Transaksi</button>
            </div>
        </div>
    </div>
</div>
