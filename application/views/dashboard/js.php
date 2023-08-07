<script src="<?php echo base_url() ?>assets/vendor/global/global.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dlabnav-init.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/chartjs/chart.bundle.min.js"></script>
<!-- Apex Chart -->
<script src="<?php echo base_url() ?>assets/vendor/apexchart/apexchart.js"></script>

<!-- Datatable -->
<script src="<?php echo base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins-init/datatables.init.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            language: {
                'paginate': {
                    'previous': '<i class="bi bi-skip-start-fill"></i>',
                    'next': '<i class="bi bi-skip-end-fill"></i>'
                }
            }
        });
    });
</script>

</body>

</html>