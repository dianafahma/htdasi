<script>
	tinymce.init({
		selector: "textarea",
		theme: "modern",
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern"
		],
		external_plugins: {
			//"moxiemanager": "/moxiemanager-php/plugin.js"
		},
		content_css: "css/development.css",
		add_unload_trigger: false,

		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",

		image_advtab: true,

		style_formats: [
			{title: 'Bold text', format: 'h1'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		],

		template_replace_values : {
			username : "Jack Black"
		},

		template_preview_replace_values : {
			username : "Preview user name"
		},

		link_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		image_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		templates: [
			{title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
			{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
		],

		setup: function(ed) {
			/*ed.on(
				'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
				'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
				'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
				console.log(e.type, e);
			});*/
		},

		spellchecker_callback: function(method, data, success) {
			if (method == "spellcheck") {
				var words = data.match(this.getWordCharPattern());
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				success({words: suggestions, dictionary: true});
			}

			if (method == "addToDictionary") {
				success();
			}
		}
	});
</script>
<!--------------------------->
<title>Tambah Berita</title>
<?php echo form_open_multipart("c_berita/proses_tambah");?>
<table align="center">
<tr align="left">
<fieldset>
	<p>
	  <label bgcolor="red" style="padding-left:10"> ID Berita </label>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="text" name="ID" style="width:500" disabled="disabled" value="<?php echo $id; ?> - Terisi Otomatis" class="form-control">
	  <?php echo form_hidden('id',$id); ?>
	</p>
	<p>
	  <label bgcolor="red" style="padding-left:10"> Kategori </label>
	  <?php echo form_error('kategori'); ?>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select type="text" name="kgr_judul" class="form-control">
		   <option value="">--- Pilih Kategori ---</option>
		   <option value="Hiburan">Hiburan</option>
		   <option value="Politik">Politik</option>
		   <option value="Teknologi">Teknologi</option>
		   <option value="Kriminal">Kriminal</option>
		   <option value="Internasional">Internasional</option>
		   <option value="Bisnis">Bisnis</option>
		</select>
	</p>
	<p>
	  <label bgcolor="red"style="padding-left:10"> Judul Berita </label>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!------<?php echo form_error('judul'); ?>------>
	  <input type="text" name="judul" style="width:500" class="form-control">
	</p>
	<p>
		<label bgcolor="red"style="padding-left:10"> Isi </label><br>
		<textarea type="text" name="isi" rows=20 cols=60 wrap=off autocorrect="on" style="padding-left:50"></textarea>
	</p>
	<p>
		<label color="red" style="padding-left:10"> Gambar </label><br>
		<p class="form-control"><?php echo form_upload("files[0]"); ?><p/>
		<p class="form-control"><?php echo form_upload("files[1]"); ?><p/>
		<p class="form-control"><?php echo form_upload("files[2]"); ?><p/>
		<p class="form-control"><?php echo form_upload("files[3]"); ?><p/>
		<p class="form-control"><?php echo form_upload("files[4]"); ?><p/>
	</p>
	<p align="center">
	<td onclick="return confirm('Berita Anda Telah Disimpan & Akan di Verifikasi terlebih dahulu');">
		<?php echo form_submit('submit', 'Simpan', 'class="btn btn-success"'); ?></td><br>
		<label><i>*Pastikan berita yang dimasukkan telah dikoreksi terlebih dahulu!</i></label>
		<? echo form_close();?>
	</p>
</fieldset>
</center>
</tr>
</table>