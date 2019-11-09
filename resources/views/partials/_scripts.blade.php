<script src="{{ asset('js/jquery-3.3.1.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js')}}"></script>

<!-- dataTables Buttons Scripts -->
<script src="{{ asset('js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('js/buttons.print.min.js')}}"></script>
<script src="{{ asset('js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('js/jszip.min.js')}}"></script>
<script src="{{ asset('js/pdfmake.min.js')}}"></script>
<script src="{{ asset('js/vfs_fonts.js')}}"></script>

<link rel="stylesheet" href="{{asset('datepicker/datepicker3.css')}}">
<link rel="stylesheet" href="/select2/select2.min.css">

<script>
    $(function () {

          //Initialize Select2 Elements
//$('.select2').select2()


      $("#example1").DataTable({
        "todayHighlight":true,
      });
      $("#data1").DataTable();
      $("#data2").DataTable();
      $("#data3").DataTable();
      $("#data4").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
      $('#exampleButtons').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          {
              extend:    'copyHtml5',
              text:      '<i class="fa fa-files-o"></i> Copy',
              titleAttr: 'Copy'
          },
          {
              extend:    'excelHtml5',
              text:      '<i class="fa fa-file-excel-o"></i> XLSX',
              titleAttr: 'Excel'
          },
          {
              extend:    'csvHtml5',
              text:      '<i class="fa fa-file-text-o"></i> CSV',
              titleAttr: 'CSV'
          },
          {
              extend:    'pdfHtml5',
              text:      '<i class="fa fa-file-pdf-o"></i> PDF',
              titleAttr: 'PDF'
          },
          {
            extend: 'print',
            text:   '<i class="fa fa-print"></i> Print',
            titleAttr: 'Print'
          },
      ]


    } );




      calender
    $('#calendar').datepicker({
      "todayHighlight": true,

    });
    })

    $('#datepicker3').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

       $('#datepicker4').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

       $('#date4').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

       $('#date3').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

       $('#date2').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

       $('#date1').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

       $('#date5').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

    $('#datepicker2').datepicker({
        autoclose: true,
     format: 'yyyy-mm-dd'
       });

 $('#datepicker').datepicker({
     autoclose: true,
  format: 'yyyy-mm-dd'
    });


  </script>

<script>
        function myFunction() {
            window.print();
          }

</script>


