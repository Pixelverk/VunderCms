A modified version of WonderCMS v3.5.0, which is a lovely flatfile cms project in PHP.
I wanted to make it a bit more usable by changing how page editing works, incoporating blog as a standard instead of plugin, etc etc.  

#Local dev setup
Just do something like this, it's a php file...
* Launch Apache from Xampp or equivalent tool
* Throw evertyhing in a folder, htdocs in Xampp
* Visit localhost/folderName
* Enjoy

The admin login PW should be "cE1IwMNt" at localhost/folder/login/, unless the database.json is removed and regenerated.
No security neeed here, just throw the plaintext PW in the readme. Who cares!

I've included index-350.php as a reminder of what WonderCMS looked like when I started.

Changes from standard WonderCMS so far -> see changelog.md

TO DO / Current goals
[ ] Make the onpage form-based block editing work for a, button and img tags.
[ ] Clean up the onpage editing experience, my inefficient JS
[ ] Improve the onpage editing experience, CSS could be better
[ ] Test my block editing experience with unnecessarily nested html elements...
[ ] Move menu items one layer up in the database.json, don't know why they are under 'config'.
[ ] Make the settings modal easier to use or just a bit more 
[ ] Figure out how the editing of page names via the settings modal should behave
[ ] Fix alert CSS so it doesn't block the menu items
[ ] Make it easy for users to create new pages based on default.php layout (currently done by navigating to non-existent page url)
[ ] Make it easy for users to create new pages based on chosen layout file (currently doable by switching page to template in settings after page already exists)

WonderCMS plugins that I want to incorporate / make use of
[ ] Get Wcms Simple Statistics plugin to work without errors
[ ] Incorporate the Wcms SimpleBlog plugin / make own blog solution
[ ] Improve the Swedish translation plugin, mostly the content