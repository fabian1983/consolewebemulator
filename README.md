# consolewebemulator
<h2>Emulate roms online</h2>
Based on code for frame: download https://github.com/hacktheme/Nice-Admin<br>
Used code from : https://neptunjs.xyz/doc.html as Emulator <br>

<h2>Installation</h2>
1) Download https://github.com/hacktheme/Nice-Admin<br>
you need mapdirs :<br>
-dist<br>
-assets <br>
2) Download all code from consolewebemulator
<h3>Dir</h3>
Dir structure should look like this <br>
|-dist<br>
|-assets<br>
|-emulators.php<br>
|-index.php<br>
|-playemulator.php<br>
|-show.php<br>
|-zoek_roms.php<br>
<br>
3) upload roms in /roms/$system/<br>



<h2>Pages</h2>
- show all wanted availble system (index.php)<br>
--  search for rom included (zoek_roms.php)<br>
- indexing rom list from url ?system=$system (show.php)<br>
- Emulator is loaded by url ?system=$system&rom=$rom (playemulator.php)<br>
<br>
<h2>Functions</h2>
- Menu scan directory /roms/ and index it and make it countable.(index.php)<br>
- Searchform does ajax call and search in /roms (zoek_roms.php)<br>
- Images are loaded from url ?system=$system (everywhere)<br>
- when directory is empy dont show as result, because while testing some roms dont work because of missing bios. (didnt took time to fix it)<br>
- routing so it looks like 1 file known as ? or index.php  (index.php on line 255)
