<h1>🎮 Emulate ROMs Online</h1>

<p>This project allows you to emulate classic game ROMs directly in the browser.</p>

<ul>
  <li><strong>Frontend Framework:</strong> Based on <a href="https://github.com/hacktheme/Nice-Admin">Nice-Admin</a></li>
  <li><strong>Emulator Engine:</strong> Powered by <a href="https://neptunjs.xyz/doc.html">NeptunJS</a></li>
</ul>

<hr>

<h2>📦 Installation</h2>

<h3>1. Clone Required Repositories</h3>
<ul>
  <li>Download the UI framework: <a href="https://github.com/hacktheme/Nice-Admin">Nice-Admin</a></li>
  <li>Download this project and place the files in your web server root</li>
</ul>

<h3>2. Required Directory Structure</h3>

<pre>
|- dist/  (from niceadmin)
|- assets/ (from niceadmin) and  assets/images/emulator (from consolewebemulator)
|- roms/ (from consolewebemulator)
|- emulators.php (from consolewebemulator)
|- index.php (from consolewebemulator)
|- playemulator.php (from consolewebemulator)
|- show.php (from consolewebemulator)
|- zoek_roms.php (from consolewebemulator)
</pre>

<h3>3. Add ROM Files</h3>
<p>Upload your ROMs to the directory:</p>
<pre>/roms/{system}/</pre>
<p>Replace <code>{system}</code> with the name of the emulator system (e.g., <code>nes</code>, <code>gba</code>, <code>snes</code>).</p>

<hr>

<h2>📄 Pages Overview</h2>

<ul>
  <li><code>index.php</code>: Lists all available emulator systems</li>
  <li><code>zoek_roms.php</code>: AJAX search for ROMs</li>
  <li><code>?system={system}</code>: Displays ROMs for a system</li>
  <li><code>?system={system}&amp;rom={rom}</code>: Loads emulator with ROM</li>
</ul>

<hr>

<h2>⚙️ Core Functionality</h2>

<ul>
  <li><strong>ROM Indexing:</strong> Scans <code>/roms/</code> and lists available systems (<code>index.php</code>)</li>
  <li><strong>Search:</strong> AJAX-powered ROM search (<code>zoek_roms.php</code>)</li>
  <li><strong>Image Handling:</strong> Images loaded via <code>?system={system}</code> in query</li>
  <li><strong>System Filtering:</strong> Systems with no ROMs are hidden (some may require BIOS files)</li>
  <li><strong>Routing:</strong> Query string-based routing (see <code>index.php</code>, line 255)</li>
</ul>
