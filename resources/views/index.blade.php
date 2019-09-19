<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>SB Admin - Dashboard</title>
	<!-- Custom styles for this template-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="page-top">
	{{-- Navbar --}}
	@includeIf('components._navbar')
	<div id="wrapper">
		<!-- Sidebar -->
		@includeIf('components._sidebar')
		<div id="content-wrapper">
			<div class="container-fluid">
				<!-- Breadcrumbs-->
				@includeIf('components._breadcumns')
				<!-- Icon Cards-->
				@includeIf('components._cards')
				<!-- DataTables Example -->
				@includeIf('components._table')
				
			</div>
			<!-- /.container-fluid -->
			<!-- Sticky Footer -->
			@includeIf('components._footer')
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>