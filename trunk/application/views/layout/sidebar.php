<div class="right sidebar" id="sidebar">

	<?php if($this->session->userdata('ADMIN')) { ?>
		<div class="section">

			<div class="section-title">Manajemen</div>

			<div class="section-content">

				<ul class="nice-list">
					<li><?php echo anchor(site_url()."user", 'Pengguna &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."pajak", 'Data Wajib Pajak &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."akun", 'Akun &#187;', 'class="more"'); ?></li>												
					<li><?php echo anchor(site_url()."akun/saldo_awal", 'Saldo Awal &#187;', 'class="more"'); ?></li>												
				</ul>

			</div>

		</div>
	<?php } ?>
		<div class="section">

			<div class="section-title">Akuntansi</div>

			<div class="section-content">

				<ul class="nice-list">
					<li><?php echo anchor(site_url()."akun/detail_akun", 'Buku Besar &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."jurnal", 'Jurnal &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."jurnal/jurnal_umum", 'Jurnal Umum &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."jurnal/jurnal_penyesuaian", 'Jurnal Penyesuaian &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."jurnal/jurnal_penutup", 'Jurnal Penutup &#187;', 'class="more"'); ?></li>							
				</ul>

			</div>

		</div>
		
		<div class="section">

			<div class="section-title">Proyek</div>

			<div class="section-content">

				<ul class="nice-list">
					<li><?php echo anchor(site_url()."klien", 'Klien &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."proyek", 'Proyek &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."jurnal_proyek", 'Jurnal Proyek &#187;', 'class="more"'); ?></li>
				</ul>

			</div>

		</div>

		<div class="section">

			<div class="section-title">Laporan</div>

			<div class="section-content">

				<ul class="nice-list">
					<li><?php echo anchor(site_url()."laporan_keuangan", 'Laporan Keuangan &#187;', 'class="more"'); ?></li>						
					<li><?php echo anchor(site_url()."laporan_proyek", 'Laporan Proyek &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."laporan_ssp", 'Laporan Pajak SSP &#187;', 'class="more"'); ?></li>
					<li><?php echo anchor(site_url()."laporan_pph21", 'Laporan Pajak PPh 21 &#187;', 'class="more"'); ?></li>						
				</ul>

			</div>

		</div>
						
</div>
