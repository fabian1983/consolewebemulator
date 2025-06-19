# consolewebemulator
<h2>Emulate roms online</h2>


Based on code for frame: https://github.com/hacktheme/Nice-Admin<br>
you need mapdirs dist+assets+js directories and file inside <br>
and place it next to index.php<br><br>
Used code from as Emulator : https://neptunjs.xyz/doc.html <br>



<h2>Pages</h2>
- show availble system(index.php) ;  make ajax call search for rom included (zoek_roms.php)<br>
- indexing rom list from selected system (show.php)<br>
- Emulator is loaded by url ?system=$system&rom=$rom (playemulator.php)<br>
<br>
<h2>Functions</h2>
- Menu scan directory /roms/ and index it.(index.php)<br>
- Searchform does ajax call and search in /roms (zoek_roms.php)<br>
- Images are loaded from url ?system=$system (everywhere)<br>
