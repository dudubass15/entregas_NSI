<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><br>

	<h2>Tabela de Consulta</h2>
	<div class="table-responsive">
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>Data</th>
					<th>Tipo da Entrega</th>
					<th>Ronda/Técnico</th>
					<th>Apto</th>
					<th>Condomínio</th>
					<th>Status</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($lista_view as $b): ?>
				<tr>
					<td><?php echo date("d/m/Y", strtotime($b['data']));?></td>
					<td><?php echo $b['tipoentrega']; ?></td>
					<td><?php echo $b['ronda']; ?></td>
					<td><?php echo $b['apartamento']; ?></td>
					<td><?php echo $b['condominio']; ?></td>
					<td><?php echo $b['status']; ?></td>
					<td style="width: 100px;">
						<a href="<?php echo URL; ?>/home/del/<?php echo $b['id']; ?>"><span data-feather="check-circle" onclick="arquivar()"></span></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>

<script type="text/javascript">
	function arquivar() {
		alert("Informação arquivada com sucesso !");
	}
</script>