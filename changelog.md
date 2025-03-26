# Done before versioncontrol
- [x] Remove theme/plugin/core updates, as they are tied to WonderCMS repos
- [x] Include CDN files locally instead, since I want to modify them later
- [x] Change themes functionality to just be one theme folder, no changes allowed!
- [x] Move the blocks storage in databse.json to be under pages, so each page has their specific blocks.
- [x] Automatically create blocks in database.json if they are mentioned in a page template but don't exist in database.json.
- [x] Create a folder for page layouts / templates in the theme folder, and make pages able to load a given layout.
- [x] Make it possible for users to change the page layout / template of a page from the settings modal "current page" tab.
- [x] When a logged in user goes to an non-existent page, create it imidiately instead of waiting for saveAction.
- [x] Give blocks some default content, which can be specified in page templates.
- [x] Change the block editing experience to use contenteditable for basic text tags, still saves using onblur.
- [x] Change the block editing experience to allow editing of image attritubutes via a form, saves on submit.

- [x] Any other small stuff I forgot or failed to mention here