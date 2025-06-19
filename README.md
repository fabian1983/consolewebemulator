🎮 Emulate ROMs Online
This project allows you to emulate classic game ROMs directly in the browser.

Frontend Framework: Based on Nice-Admin

Emulator Engine: Powered by NeptunJS

📦 Installation
1. Clone Required Repositories
Download the UI framework from: Nice-Admin

Download this project (e.g., consolewebemulator) and place the required files in the same root directory.

2. Required Directory Structure
Ensure the following files and folders exist:

pgsql
Kopiëren
Bewerken
|- dist/
|- assets/
|- emulators.php
|- index.php
|- playemulator.php
|- show.php
|- zoek_roms.php
3. Add ROM Files
Upload your ROMs to the directory:

bash
Kopiëren
Bewerken
/roms/{system}/
Replace {system} with the specific emulator system (e.g., nes, gba, snes).

📄 Pages Overview
index.php: Lists all available emulator systems

zoek_roms.php: AJAX search for ROMs

show.php?system={system}: Displays available ROMs for the selected system

playemulator.php?system={system}&rom={rom}: Loads the emulator with the selected ROM

⚙️ Core Functionality
ROM Indexing: index.php scans /roms/ and lists available systems

Search: AJAX-based ROM search via zoek_roms.php

Image Handling: Images are dynamically loaded via query parameters

System Filtering: Systems with empty directories are excluded from the menu (some ROMs may not work without BIOS files)

Routing: Friendly routing is used via query strings (see index.php, around line 255)
