@extends('layouts.default')

@section('conteudo')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card strpied-tabled-with-hover">
						<div class="card-header ">
							<div class="row">
								<div class="col-6">
									<h4 class="card-title">Produtos</h4>
									<p class="card-category">Veja a lista de todos os produtos abaixo.</p>
								</div>
								<div class="col-6 text-right">
									<a href="{{ route('produto.adicionar') }}" class="btn btn-info btn-fill pull-right">Adicionar</a>
								</div>
							</div>
						</div>
						<div class="card-body table-full-width table-responsive">
							<table class="table table-hover table-striped">
								<thead>
									<th>ID</th>
									<th>Data de criação</th>
									<th>Nome</th>
									<th>Valor</th>
									<th>Categorias</th>
									<th></th>
								</thead>
								<tbody>
									@for($i=0; $i<10; $i++)
										<tr>
											<td>1</td>
											<td>10/10/2018 10:20:43</td>
											<td>Produto 1</td>
											<td>R$ 300,00</td>
											<td>Categoria 1</td>
											<td>
												<a href="{{ route('produto.editar') }}" class="btn btn-secondary btn-xs btn-fill">Editar</a>
												<a href="" class="btn btn-danger btn-xs btn-fill">Apagar</a>
											</td>
										</tr>
									@endfor
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection