<title>Update Berita</title>
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
<br>
<h3 align="center" class="judul"><b>Update Berita </b><i>"<?php echo $list_berita->judul?>"</i></h3>

<table align="center">
<tr align="left">
<fieldset>
	<?php echo form_open('c_berita/update/'.$list_berita->id); ?>
	<p>
		<label bgcolor="red" style="padding-left:10"> ID Berita </label>
		<input class="form-control type="text" name="id" style="width:" disabled="disabled" value="<?php echo $list_berita->id?>">
	</p>
	<p>
		<label bgcolor="red" style="padding-left:10" value="<?php echo $list_berita->kgr_judul?>"> Kategori </label>
		<select type="text" name="kgr_judul" class="form-control">
		<option value="Hiburan" <?php if($list_berita->kgr_judul=='Hiburan') echo 'selected' ?>>Hiburan</option>
		<option value="Politik" <?php if($list_berita->kgr_judul=='Politik') echo 'selected' ?>>Politik</option>
		<option value="Kriminal" <?php if($list_berita->kgr_judul=='Kriminal') echo 'selected' ?>>Kriminal</option>
		<option value="Teknologi" <?php if($list_berita->kgr_judul=='Teknologi') echo 'selected' ?>>Teknologi</option>
		<option value="Bisnis" <?php if($list_berita->kgr_judul=='Bisnis') echo 'selected' ?>>Bisnis</option>
		<option value="Internasional" <?php if($list_berita->kgr_judul=='Internasional') echo 'selected' ?>>Internasional</option>
		</select>
	</p>
	<p>
		<label bgcolor="red"style="padding-left:10"> Judul Berita </label>
		<input class="form-control type="text" name="judul" style="width:" value="<?php echo $list_berita->judul?>">
	</p>
	<p>
		<label bgcolor="red"style="padding-left:10"> Isi </label><br>
		<textarea type="text" name="isi" rows=20 cols=60 wrap=off autocorrect="on" style="padding-left:50" ><?php echo $list_berita->isi?></textarea>
	</p>
	<tr align="center">
		<label><i>*Pastikan berita yang dimasukkan telah dikoreksi terlebih dahulu!</i></label><br><br>
		<div align="center">
			<?php echo form_submit('submit','Update','class="btn btn-success"'); ?>
			<?echo form_close();?>&nbsp;
			<?php echo anchor('c_berita/display2','<button class="btn btn-danger">Batal</button>')?>
		</div><br>
	</tr>
</fieldset>
</tr>
</table>