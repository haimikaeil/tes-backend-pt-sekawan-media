<div class="alert alert-info alert-dismissable" id="sukses" style='display: none'>
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Sukses!</strong> Data Berhasil Ditambahkan Ke Database.
</div>

<div class="alert alert-danger alert-dismissable" id="gagal" style='display: none'>
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Gagal!</strong> Data Gagal Ditambahkan Ke Database.
</div>


<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark font-green-sharp">
                    <i class="<?=$this->icon?> font-green-sharp font-dark"></i>
                    <span class="caption-subject bold uppercase"> DATA ALL USER</span>
                </div>
                <div class="actions">
                    <a class="btn sbold btn-info" onclick='getData();'><i class="fa fa-refresh"></i> Refresh</a>
                    <a class="btn sbold btn-success save" onclick='saveData();' style="display: none;"><i class="fa fa-plus"></i> Save</a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="tabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Peg</th>
                            <th>Nama Pegawai</th>
                            <th>Gaji</th>
                            <th>Usia</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody id="dataTabel">
                        <tr>
                            <td colspan="6" style="text-align: center;"> - Silahkan Refresh Data - </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function formatMoney(n, c, d, t) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
            d = d == undefined ? "," : d,
            t = t == undefined ? "." : t,
            s = n < 0 ? "-" : "",
            i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
            j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

    // getData();
    function getData() {

        var data = $('#dataTabel').html('');
    
        $.ajax({
            url: '<?=site_url($this->cname.'/get_data')?>',
            dataType: 'json',
        })
        .done(function(res) {

            if(res.status == 'sukses'){

                $('.save').css('display', 'inline-block');

                for (var i = 0; i < res.data.length; i++) {

                    data += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+res.data[i].id+'</td>'+
                                    '<td>'+res.data[i].employee_name+'</td>'+
                                    '<td>'+formatMoney(res.data[i].employee_salary)+'</td>'+
                                    '<td>'+res.data[i].employee_age+'</td>'+
                                    '<td><img src="'+res.data[i].profile_image+'" alt=""/></td>'+
                                '</tr>';

                }

                $('#dataTabel').html(data);
                
            }
            
        });
        
    }

    function saveData(argument) {

        $.ajax({
            url: '<?=site_url($this->cname.'/do_tambah')?>',
        })
        .done(function(res) {
            // alert(res);
            if (res == 'sukses'){

                $('#sukses').css('display', 'block');

                setTimeout(function(){ 
                   $('#sukses').css('display', 'none');
                }, 3000);

                
            } else {

                $('#gagal').css('display', 'block');

                setTimeout(function(){ 
                   $('#gagal').css('display', 'none');
                }, 3000);
            }
            
        });
    }


</script>