@extends('layouts.app')
@section('header')
<div class="d-flex justify-content-between align-items-center">
		<h2 class="page-head-title">Citas</h2>
	</div>
@endsection
@section('content')
	<div class="card">
		<div class="card-header text-center">
			<legend class="h2 my-0">¡Cita generada con éxito!</legend>
			Puede imprimir la cita o regresar a la pestaña principal de citas.
		</div>
		<div class="card-body">
			<div class="col-md-12 d-flex justify-content-center mt-2">
				<a  href="{{ route('dates.index') }}" class="btn btn-secondary pt-1 mr-5">
					<i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
					<span class="h4 my-0">Regresar</span>
				</a>
				<a href="{{ route('pdf', $date->uuid) }}" target="_blank" class="btn btn-danger pt-1 mr-5">
					<i class="zmdi zmdi-print zmdi-hc-lg pr-1"></i>
					<span class="h4 my-0">Imprimir</span>
				</a>
			</div>
		</div>
	</div>
@endsection
@push('scripts')
	<script>$('[data-tooltip="tooltip"]').tooltip();</script>
	@if (session('message-store'))
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 2000
			});
			Toast.fire({
				type: 'success',
				title: '¡Cita creada correctamente!'
			});
		</script>
	@endif
	<script>
		$(document).on("click", ".remove-link", function(e) {
		var btn = $(this);
			Swal.mixin({
				customClass: {
					cancelButton: 'btn btn-danger',
					confirmButton: 'btn btn-success'
				},
				buttonsStyling: false
			});
			Swal.fire({
				title: '¿Deseas eliminar esta cita?',
				text: "¡Esta acción no podrá ser revertida!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: 'Si, eliminar',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
					Swal.fire(
						'Eliminando...',
						'Este cita se eliminará para siempre.',
						'error'
					);
					$(btn).closest("form").submit();
				} else if (result.dismiss === Swal.DismissReason.cancel) {
					Swal.fire(
					'¡Cancelado!',
					'Acción revertida',
					'error'
					);
				}
			});
			e.preventDefault();
			return false;
		});
	</script>
	@if (session('message-update'))
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				type: 'info',
				title: '¡Cita editada!'
			});
		</script>
	@endif
@endpush