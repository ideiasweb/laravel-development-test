@extends('layouts.default')

@section('conteudo')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card strpied-tabled-with-hover">
						<div class="card-body table-full-width table-responsive">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nome</label>
									<input type="text" class="form-control" placeholder="Nome" value="">
								</div>
								<div class="form-group">
									<label>Valor</label>
									<input type="text" class="form-control" placeholder="Valor" value="">
								</div>
								<div class="form-group">
									<label>Categoria</label>
								</div>
								<div class="form-group">
									<div class="table-full-width">
										<table class="table">
											<tbody>
												@for($i=0; $i<10; $i++)
													<tr>
														<td>
															<div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input" type="checkbox" value="">
																	<span class="form-check-sign"></span>
																</label>
															</div>
														</td>
														<td>Categoria</td>
													</tr>
												@endfor
											</tbody>
										</table>
									</div>
								</div>
								<div class="form-group">
									<button href="" class="btn btn-info btn-fill pull-right">Salvar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection