<?php
include_once("template.php");
?>
<div class="container">
  <br>
  <div>
    <table class="table" id="table">
      <thead>
        <tr>
          <td>NO</td>
          <td>Nama</td>
          <td>MAC</td>
          <td>Info</td>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
</div>
<script src="assets/datatables/jquery.dataTables.js"></script>
<script>
  
$(document).ready(function() {
    $('#table').DataTable( {
        "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
        "ajax": 'data.json'
    } );
} );
</script>