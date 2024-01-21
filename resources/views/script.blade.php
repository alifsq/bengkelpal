<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click','#btn-edit-project',function(){
            var id = $(this).data('id');
            var namaproject = $(this).data('nama_project');
            var tanggalproject = $(this).data('tanggal_project');
            var keteranganproject = $(this).data('keterangan_project');

            $('#modal-edit').modal('show');
            $('#id').val(id);
            $('#nama_project').val(namaproject);
            $('#tanggal_project').val(tanggalproject);
            $('#keterangan_project').val(keteranganproject);


            $('#formEdit').attr("action","/projectmenu/"+id);
        });
    });

</script>
