
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>

<!-------------------------------- https://datatables.net/extensions/responsive/examples/display-types/bootstrap5-modal.html   ----------------------------*/
------------------------------ datatable ---------------------------------- -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>


<script src="{{asset('assets/js/select2.min.js')}}"></script>

<!-- -------------------------- input select search ------------------------------- -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script> -->


<script>
    $("#select-booking").select2( {
        placeholder: "Select The Booking",
        allowClear: true
    } );
    $("#select-customer").select2( {
        placeholder: "Select The Customer",
        allowClear: true
    } )
    $("#select-customer").select2( {
        placeholder: "Select The Customer name",
        allowClear: true
    } );
    $("#select-car").select2( {
        placeholder: "Select The Car Number",
        allowClear: true
    } );
    $("#select-owner").select2( {
        placeholder: "Select The Owner Name",
        allowClear: true
    } );
</script>

<script>
   /*
    $(document).ready(function() {
        $('#bookings-table').DataTable( {
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details for '+data[0]+' '+data[1];
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                        tableClass: 'table'
                    } )
                }
            }
        } );
    } );
*/
    //--------------- Data Table for all table -----------------//
   $(document).ready(function() {
       $('#customers-table').DataTable();
       $('#owners-table').DataTable();
       $('#cars-table').DataTable();
       $('#bookings-table').DataTable();
       $('#invoices-table').DataTable();
   } );


</script>








