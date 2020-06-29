<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-date"></div>

<div class="post-body">
	<p>&nbsp;</p>
	<p>Keuangan Guyub adalah sistem informasi terpadu yang diperuntukkan dan dirancang khusus untuk Usaha Kecil Menengah (UKM) yang bergerak di bidang jasa. Standar keuangan yang digunakan baik untuk akuntansi dan pajak mengacu pada standar yang berlaku di Indonesia.</p>
	<p>&nbsp;</p>
	
	<script type="text/javascript">
            swfobject.embedSWF(
              "swf/open-flash-chart.swf", "grafik_laba_rugi",
              "<?= $chart_width ?>", "<?= $chart_height ?>",
              "9.0.0", "expressInstall.swf",
              {"data-file":"<?= urlencode($data_url) ?>"}
            );
    </script>
	
	<h3>Grafik Laba Rugi Bulanan</h3>
	<p>&nbsp;</p>
	<div id="grafik_laba_rugi"></div>

</div>
