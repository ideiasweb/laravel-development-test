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