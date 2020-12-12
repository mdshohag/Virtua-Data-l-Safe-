				
		
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
	
	
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	
	
	<script src="alert/alertify.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script type="text/javascript">

var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#printableArea').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('Apdmit.pdf');
});
</script>

<script>
$(document).ready(function() {
	$('#dataTables-example').DataTable({
		responsive: true
	});
});
</script>
<script>
$(document).ready(function() {
	$('#dataTables-inbox').DataTable({
		responsive: true
	});
});
</script>
	
	
<script>
$(function(){
	$("#signouts").click(function(e){
		e.preventDefault();
		//alert('ok');
		$.ajax({
			type:'post',
			url:'post_url/signout.php',
			success:function(res){
				//alert(res);
				if(res == '1'){
					location.href='index.php';
				}else{
					alertify.error('Error on Logout');
				}
			}
		})
	});
})
</script>
</body>
 
</html>