<html>

           <title>Tulis Artikel</title>
                <head>
<script  type="text/javascript"  src="<?php echo base_url().'aset/tinymce/tinymce.min.js'?>"></script>
<script  type="text/javascript">
            tinymce.init({
            selector: "textarea"
            });
</script>
</head>
  <body>
			<h2>Tuliskan Artikel Baru</h2>
               <table>
                    <tr>
                        <td>Judul</td>
                            <td>:</td>
                        <td><input  type="text" name="nama_pantai"></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                             <td>:</td>
                        <td><input  type="text" name="provinsi"></td>
                    </tr>
                    <tr>
                       <td>Artikel</td>
                             <td>:</td>
                        <td><textarea name="artikel"></textarea></td>
                    </tr>
                </table>
  </body>
  </html>	
