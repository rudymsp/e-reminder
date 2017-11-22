	<div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Buat Reminder</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Reminder Jatuh Tempo</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12 col-xs-12">
                                <form class="form-horizontal" action="<?php echo base_url(). 'crud/tambah_reminder'; ?>" method="post">
                                    <input type="hidden" class="form-control" name="kodedept">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Reminder</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Reminder</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="jenis">
                                                <option value="">Pilih</option>
                                            <?php foreach ($jenis as $d) { 
                                               $id=$d->id;
                                               $jenis=$d->nama_jenis; ?>
                                                <option value="<?php echo $id;?>"><?php echo $jenis;?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="dept">
                                                <option value="">Pilih</option>
                                            <?php foreach ($dept as $e) { 
                                               $id_dept=$e->id_dept;
                                               $dept=$e->nama_dept; ?>
                                                <option value="<?php echo $id_dept;?>"><?php echo $dept;?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info</label>
                                        <div class="col-sm-8">
                                            <textarea  class="form-control inputtxtarea" row="5" name="info">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Jatuh Tempo</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtp">
                                                <input type="text" class="form-control input-group-addon" name="tanggal" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">E-mail Atasan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="email"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                             <button type="submit" class="btn btn-primary" onclick="
   var el = document.getElementsByTagName('select')[0];
  getSelectValues(el);">Save</button>
                                             <button type="submit" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>                    
                </div>
            </div>
		</div>
	</div>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-am-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Jquery -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <!-- DATATABLES -->
    <script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/dataTables.responsive.js')?>"></script>
    <!-- DATETIME -->
    <script src="<?php echo base_url('assets/js/dateTime/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dateTime/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- EXTRA JS -->
    <script src="<?php echo base_url('assets/js/extra.js')?>"></script>
    <script>
        $(document).ready(function() {
            $('.dtp').datetimepicker({                
                  format: 'YYYY-MM-DD'
             });
            $('.dtm').datetimepicker({                
                  format: 'HH:mm'
             });
        });
    </script>
    <!-- untuk multiple select -->
    <script>
        $('option').mousedown(function(e) {
            e.preventDefault();
            var originalScrollTop = $(this).parent().scrollTop();
            console.log(originalScrollTop);
            $(this).prop('selected', $(this).prop('selected') ? false : true);
            var self = this;
            $(this).parent().focus();
            setTimeout(function() {
                $(self).parent().scrollTop(originalScrollTop);
            }, 0);
    
            return false;
        });
    </script>
    <script>
        function getSelectValues(select) {
               var result = [];
               var options = select && select.options;
               var opt;

               for (var i=0, iLen=options.length; i<iLen; i++) {
                   opt = options[i];

                   if (opt.selected) {
                      result.push(opt.value || opt.text);
                   }
                }
                $('[name="kodedept"]').val(result);
                return result;
        }
    </script>