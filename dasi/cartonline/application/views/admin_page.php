<table>
	<tr>
		<td>
			No. Pesanan
		</td>
		<td>
			Total
		</td>
		<td>
			Detail
		</td>
	</tr>
	<?php foreach ($list_pesan->result() as $key ) {
		?>
	<tr>
		<td><?php echo $key->id_trx; ?></td>
		<td><?php echo $key->total; ?></td>
		<td><?php echo "action" ?></td>
	</tr>
	<?php
		}?>
</table>