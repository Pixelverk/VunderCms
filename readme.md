A modified version of WonderCMS v3.5.0, which is a lovely flatfile cms project in PHP.

I wanted to make it a bit more usable by changing how page editing works, incorporating some plugins as a standard, etc etc.  

# Local dev setup
Just do something like this, it's just a php file...
* Launch Apache from Xampp or equivalent tool
* Throw evertyhing in a folder, htdocs in Xampp
* Visit localhost/folderName
* Enjoy

The theme folder has all the design / template stuff.

Settings, page/block data and everything else is in data/database.json.

The admin login PW should be "cE1IwMNt" at localhost/folder/login/.

If database.json is removed, it will be regenerated with a new password on next page load.

No security neeed here, just throw the plaintext PW in the readme. Who cares!

A lot of the editing/saving action is in the wcms-admin.js file.

# Work so far
I've included index-350.php as a reminder of what WonderCMS looked like when I started.

Most changes from the WonderCMS 3.5.0 can be found in the changelog.md file.

# TO DO
- [ ] Make sure regenerating the database.json still works as intended
- [ ] Make the onpage form-based block editing work for a, button, btn and img tags.
- [ ] Clean up the onpage editing experience, my inefficient JS
- [ ] Improve the onpage editing experience, CSS could be better
- [ ] Test my block editing experience with unnecessarily nested html elements...
- [ ] Move menu items one layer up in the database.json, don't know why they are under 'config'.
- [ ] Make the settings modal easier to use or just a bit more 
- [ ] Figure out how the editing of page names via the settings modal should behave
- [ ] Fix alert CSS so it doesn't block the menu items
- [ ] Make it easy to create pages based on default.php (currently done by navigating to non-existent page url)
- [ ] Make it easy to create pages based on chosen layout (currently done by switching layout in settings)

Existing WonderCMS plugins I might incorporate
- [ ] Get Wcms Simple Statistics plugin to work without errors
- [ ] Incorporate the Wcms SimpleBlog plugin / make own blog solution
- [ ] Improve the Swedish translation plugin, mostly the content
- [ ] The Wcms contact form plugin seems unseful as well
- [ ] The Wcms simple SEO seems useful for sitemap / robots.txt