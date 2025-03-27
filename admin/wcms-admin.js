class wcmsAdmin {
    constructor() {
        const self = this;

        // Modals
        const openModalButton = document.querySelectorAll('[data-toggle="wcms-modal"]');
        const closeModalButton = document.querySelectorAll('[data-dismiss="wcms-modal"]');
        const modals = document.getElementsByClassName('wcms-modal');

        openModalButton.forEach((element) => {
            element.addEventListener('click', function () {
                wcmsAdminActions.toggleModal(this, true);
            })
        });

        document.addEventListener('click', function (e) {
            if ([...modals].includes(e.target) || [...closeModalButton].includes(e.target)) {
                wcmsAdminActions.toggleModal(this, false);
            }
        });

        // Tabs
        const navTabs = document.querySelectorAll('ul.nav-tabs > li > a');
        navTabs.forEach((element) => {
            element.addEventListener('click', function (e) {
                e.preventDefault();
                wcmsAdminActions.openTabAction(this);
            })
        });

        // Loader
        const loaderLinks = document.querySelectorAll('[data-loader-id]');
        loaderLinks.forEach((link) => {
            link.addEventListener('click', function (event) {
                wcmsAdminActions.showLoader(true, this.dataset.loaderId);
            })
        });

        // Editable fields content save
        const editableText = document.querySelectorAll('div.editText:not(.editTextOpen)');
        editableText.forEach((editableElement) => {
            editableElement.addEventListener('click', self.constructEditableFieldsAction);
        });

        // Menu item hidden or visible
        const menuToggling = document.querySelectorAll('i.menu-toggle');
        menuToggling.forEach((menuToggle) => {
            menuToggle.addEventListener('click', self.hideOrShowMenuItemsAction);
        });

        // Add new page
        const menuAddNewPages = document.querySelectorAll('a.menu-item-add');
        menuAddNewPages.forEach((element) => {
            element.addEventListener('click', (e) => wcmsAdminActions.createNewPage(e.target));
        });

        // Reorder menu item
        const menuSortTriggers = document.querySelectorAll('.menu-item-up, .menu-item-down');
        menuSortTriggers.forEach((sortTrigger) => {
            sortTrigger.addEventListener('click', self.reorderMenuItemsAction)
        });

        // Change default page
        document.getElementById('changeDefaultPage').addEventListener('change', wcmsAdminActions.changeDefaultPage);

        // Change page layout
        document.getElementById('changePageLayout').addEventListener('change', wcmsAdminActions.changePageLayout);
    }

    /**
     * Method for creating textarea instead of selected editable fields
     */
    constructEditableFieldsAction() {
        const target = this;
        if (target.classList.contains('editTextOpen')) {
            return;
        }

        target.classList.add('editTextOpen');
        wcmsAdminActions.editableTextArea(target);
        if (target.children.length > 0) {
            target.firstChild.focus();
        } else {
            target.focus();
        }

        const textarea = target.getElementsByTagName('textarea');
        autosize(textarea);
        tabOverride.set(textarea);
    }

    /**
     * Method for reordering the items from menu
     */
    reorderMenuItemsAction() {
        const target = this;
        const position = target.classList.contains('menu-item-up') ? '-1' : '1';

        wcmsAdminActions.sendPostRequest('menuItems', position, 'menuItemOrder', target.dataset.menu);
    }

    /**
     * Method for hiding or showing the items from menu
     */
    hideOrShowMenuItemsAction() {
        const target = this;
        let visibility = null;

        if (target.classList.contains('menu-item-hide')) {
            target.classList.remove('eyeShowIcon', 'menu-item-hide');
            target.classList.add('eyeHideIcon', 'menu-item-show');
            target.setAttribute('title', 'Hide page from menu');
            visibility = 'hide';
        } else if (target.classList.contains('menu-item-show')) {
            target.classList.add('eyeShowIcon', 'menu-item-hide');
            target.classList.remove('eyeHideIcon', 'menu-item-show');
            target.setAttribute('title', 'Show page in menu');
            visibility = 'show';
        } else {
            return;
        }

        target.setAttribute('data-visibility', visibility);
        wcmsAdminActions.sendPostRequest('menuItems', ' ', 'menuItemVsbl', target.dataset.menu, visibility);
    }
}

/**
 * Wcms action method
 */
const wcmsAdminActions = {
    /**
     * Method to open tab content
     */
    openTabAction(target) {
        const tabsNavContainer = target.closest('.nav-tabs');
        const tabContentId = target.getAttribute('href').replace('#', '');
        const tabContent = document.getElementById(tabContentId);
        const tabsContentContainer = tabContent.closest('.tab-content');

        tabsNavContainer.querySelector('.active').classList.remove('active');
        tabsContentContainer.querySelector('.active').classList.remove('active');
        tabContent.classList.add('active');
        target.classList.add('active');
    },

    /**
     * Toggle modal based on clicked element
     * @param target
     * @param show
     */
    toggleModal(target, show) {
        if (show) {
            const modalId = target.getAttribute('href').replace('#', '');
            document.body.classList.add('modal-open');
            document.getElementById(modalId).style.display = 'block';

            const targetTab = target.dataset.targetTab;
            if (targetTab) {
                const navTab = document.querySelector('ul.nav-tabs > li > a[href="' + targetTab + '"]');
                if (navTab) {
                    wcmsAdminActions.openTabAction(navTab);
                }
            }
            return;
        }

        document.body.classList.remove('modal-open');
        if (target.dataset && target.dataset.dismiss) {
            target.closest('.wcms-modal').style.display = 'none';
            return;
        }

        // close all modals
        [].forEach.call(document.getElementsByClassName('wcms-modal'), function (el) {
            el.style.display = 'none';
        });
    },

    /**
     * Method for creating new page
     *
     * @returns {boolean}
     */
    createNewPage: (target) => {
        let newPageName = prompt('Enter page name');
        if (!newPageName) {
            return false;
        }

        newPageName = newPageName.replace(/[`~;:'",.<>\{\}\[\]\\\/]/gi, '').trim();
        wcmsAdminActions.sendPostRequest('menuItems', newPageName, 'menuItemCreate', target.dataset.menu, 'hide');
    },

    /**
     * Method for changing default page
     *
     * @returns {boolean}
     */
    changeDefaultPage: (target) => {
        wcmsAdminActions.sendPostRequest('defaultPage', target.target.value, 'config');
    },

    /**
     * Method for changing page layout
     *
     * @returns {boolean}
     */
    changePageLayout: (target) => {
        wcmsAdminActions.sendPostRequest('pageLayout', target.target.value, 'layout');
    },

    /**
     * Ajax saving method
     */
    contentSave: (id, newContent, dataTarget, dataMenu, dataVisibility, oldContent) => {
        if (newContent !== oldContent) {
            wcmsAdminActions.sendPostRequest(id, newContent, dataTarget, dataMenu, dataVisibility);
            return;
        }

        const target = document.getElementById(id);
        target.classList.remove('editTextOpen');
        target.innerHTML = newContent;
    },

    /**
     * Post data to API and reload
     *
     * @param fieldname
     * @param content
     * @param target
     * @param menu
     * @param visibility
     */
    sendPostRequest: (fieldname, content, target, menu, visibility = null) => {
        if (typeof saveChangesPopup !== 'undefined' && saveChangesPopup && !confirm('Save new changes?')) {
            event.preventDefault();
            alert("Changed are not saved, you can continue to edit or refresh the page.");
        } 
        else {
            wcmsAdminActions.showLoader(true);

            const dataRaw = {
                fieldname: fieldname,
                token: token,
                content: encodeURIComponent(content),
                target: target,
                menu: menu,
                visibility: visibility
            };
            const data = Object.keys(dataRaw).map(function (key, index) {
                return [key, dataRaw[key]].join('=');
            }).join('&');
    
            // Send request
            const request = new XMLHttpRequest();
            request.onreadystatechange = function () {
                setTimeout(() => window.location.reload(), 50);
            }
            request.open('POST', '', false);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            request.send(data);
        }
    },

    /**
     * Show saving loader
     * @param show
     * @param loaderId
     */
    showLoader: (show, loaderId = 'save') => {
        const loader = document.getElementById(loaderId);
        loader.style.display = show ? 'block' : 'none';
    },

    /**
     * Create editable field/form after clicking on div
     * @param editableTarget
     */
    editableTextArea: (editableTarget) => {
        const target = editableTarget;
        const content = target.innerHTML;
        const targetId = target.getAttribute('id');

        // figure out if the editableTarget that was clicked is a simple text element or has attributes that needs editing
        advancedTags = ['a', 'button', 'btn', 'img'];
        editableAttributes = ['src', 'alt', 'href', 'target'];
        elementPick = 'div';
 
        advancedTags.forEach((tag) => {
            if (content.includes('<'+tag)){
                elementPick = 'form';
            }
        });

        // create a new editable element to go inside the editableTarget that was just clicked
        const newElement = document.createElement(elementPick);
        newElement.setAttribute('id', targetId + '_field');
        
        if (elementPick == 'form'){
            // the new editable element is a form with a textarea for each attribute from advancedTags found earlier
            advancedTags.forEach((tag) => {
                parser = new DOMParser();
                doc = parser.parseFromString(content, 'text/html');
                tagInContent = doc.querySelectorAll(tag);
    
                if (tagInContent.length != 0) {
                    for (let i = 0; i < tagInContent.length; i++) {

                        editableAttributes.forEach((att) => {
                            if (att in tagInContent[i].attributes){
                                field = document.createElement("textarea");
                                field.setAttribute('type',"text");
                                field.setAttribute('name', att+i);
                                field.innerHTML = tagInContent[i].getAttribute(att);
                                newElement.appendChild(field);
                            }
                        });

                    }
                }
                
            });

            let s = document.createElement("input");
            s.setAttribute('type',"submit");
            s.setAttribute('value',"Submit");
            newElement.appendChild(s);

            // save data when form submit button is pressed
            newElement.onsubmit = function () {
 
                newStuff = content;

                advancedTags.forEach((tag) => {
                    parser = new DOMParser();
                    doc = parser.parseFromString(content, 'text/html');
                    tagInContent = doc.querySelectorAll(tag);
        
                    if (tagInContent.length > 0) {

                        for (let i = 0; i < tagInContent.length; i++) {

                            editableAttributes.forEach((att) => {
                                if (att in tagInContent[i].attributes){

                                    for (child of this.children) {
                                        if (child.value != 'Submit' && child.name == att+i){
                                            fieldContent = child.value;
                                            tagInContent[i].setAttribute(att, fieldContent);
                                            serializer = new XMLSerializer();
                                            newStuff = serializer.serializeToString(doc);                                     
                                        }
                                        
                                    }
                                    
                                }
                            });

    
                        }
                    }
                });

                split1 = newStuff.split("<body>");
                split2 = split1[1].split("</body>");
                newStuff = split2[0];
                
                wcmsAdminActions.contentSave(
                    targetId,
                    newStuff,
                    target.dataset.target,
                    target.dataset.menu,
                    target.dataset.visibility,
                    content
                );
                return false;
            }

        } else {
            // the new editable element is not a form, just a div with text tags in it
            newElement.innerHTML = content;
            newElement.setAttribute('contenteditable', 'true');

            // save data when focus is removed from the editable element
            newElement.onblur = function () {
                newElement.removeAttribute('contenteditable');
    
                newStuff = this.innerHTML
            
                wcmsAdminActions.contentSave(
                    targetId,
                    newStuff,
                    target.dataset.target,
                    target.dataset.menu,
                    target.dataset.visibility,
                    content
                );
            }
        }

        // place the new editable element inside the editableTarget
        editableTarget.innerHTML = '';
        editableTarget.appendChild(newElement);
    }

}

document.addEventListener("DOMContentLoaded", function () {
    new wcmsAdmin();
});

document.addEventListener("DOMContentLoaded", () => {
    if (typeof modalPersistence === 'undefined' || !modalPersistence) return;

    // Rest of the original implementation
    const modalSelector = '[href="#settingsModal"]';
    const tabStorageKey = 'wondercmsLastActiveTab';
    const modalStateKey = 'wondercmsModalState';
    const defaultTab = '#currentPage';
    const animationDelay = 50;

    const modalButton = document.querySelector(modalSelector);
    if (!modalButton) return;

    let isFirstInteraction = true;
    let modalOpen = localStorage.getItem(modalStateKey) === 'open';


    const handleTabChange = (targetTab = null) => {
        const allTabs = Array.from(document.querySelectorAll('#settingsModal .nav-link'));
        const allContents = Array.from(document.querySelectorAll('#settingsModal .tab-pane'));
        
        const storedTab = localStorage.getItem(tabStorageKey);
        const isValidTab = storedTab && allContents.some(c => c.id === storedTab.replace('#', ''));
        const target = targetTab || (isValidTab ? storedTab : defaultTab);

        const tabButton = allTabs.find(t => t.getAttribute('href') === target);
        const tabContent = document.querySelector(target);

        if (tabButton && tabContent) {
            allTabs.forEach(t => t.classList.remove('active'));
            allContents.forEach(c => c.classList.remove('active', 'show'));
            tabButton.classList.add('active');
            tabContent.classList.add('active', 'show');
        }
    };

    document.addEventListener('click', (e) => {
        const tabLink = e.target.closest('#settingsModal .nav-link');
        if (tabLink) {
            const tabId = tabLink.getAttribute('href');
            localStorage.setItem(tabStorageKey, tabId);
            handleTabChange(tabId);
        }
    });

    const updateModalState = (state) => {
        modalOpen = state;
        localStorage.setItem(modalStateKey, state ? 'open' : 'closed');
    };

    if (modalOpen) {
        modalButton.click();
        setTimeout(() => handleTabChange(), animationDelay);
    }

    document.addEventListener('click', (e) => {
        const closeButton = e.target.closest('.close, .modal-backdrop');
        if (closeButton) {
            updateModalState(false);
        }
    });

    modalButton.addEventListener('click', () => {
        updateModalState(true);
        if (isFirstInteraction) {
            setTimeout(() => {
                handleTabChange();
                isFirstInteraction = false;
            }, animationDelay);
        }
    });

    window.addEventListener('beforeunload', () => {
        if (modalOpen) {
            localStorage.setItem(modalStateKey, 'open');
        }
    });
});

