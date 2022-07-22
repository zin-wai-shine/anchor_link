require('./bootstrap');


    const clickWeb = document.getElementById('clickWeb');
    const webItem = document.getElementById('webItem');
    const wetItemClose = document.getElementById('wetItemClose')

    const clickYoutube = document.getElementById('clickYoutube');
    const youtubeItem = document.getElementById('youtubeItem');
    const youtubeItemClose = document.getElementById('youtubeItemClose')

    const manageLogo = document.getElementById('manageLogo');
    const manageDropdown = document.getElementById('manageDropdown');
    const manageClose = document.getElementById('manageClose');

/*    const clickCreateItem = document.getElementById('clickCreateItem')
    const createItem = document.getElementById('createItem');
    const createItemClose = document.getElementById('createItemClose');

    const clickCreateCategory = document.getElementById('clickCreateCategory')
    const createCategory = document.getElementById('createCategory');
    const createCategoryClose = document.getElementById('createCategoryClose');*/


/* WEB DROP */
    function webFun(){
        if(webItem.classList.contains('display__action')){
            manageDropdown.classList.add('display__action')
            youtubeItem.classList.add('display__action');
/*            createItem.classList.add('display__action');
            createCategory.classList.add('display__action');*/
            webItem.classList.remove('display__action');
        }else{
            webItem.classList.add('display__action');
        }
    }
    clickWeb.addEventListener('click',()=>{webFun();});
    wetItemClose.addEventListener('click',()=>{
        webItem.classList.add('display__action');
    });

/* YOUTUBE DROP */
    function youtubeFun(){
        if(youtubeItem.classList.contains('display__action')){
            webItem.classList.add('display__action');
            manageDropdown.classList.add('display__action')
 /*           createItem.classList.add('display__action')
            createCategory.classList.add('display__action');*/
            youtubeItem.classList.remove('display__action');
        }else{
            youtubeItem.classList.add('display__action');
        }
    }
    clickYoutube.addEventListener('click',()=>{youtubeFun();});
    youtubeItemClose.addEventListener('click',()=>{
        youtubeItem.classList.add('display__action');
    });

/* MANAGE DROP DOWN */
    function manageFun(){
        if(manageDropdown.classList.contains('display__action')){
            youtubeItem.classList.add('display__action');
            webItem.classList.add('display__action');
            manageDropdown.classList.remove('display__action')
        }else{
            manageDropdown.classList.add('display__action')
        }
    };
    manageLogo.addEventListener('click',()=>{manageFun();});
    manageClose.addEventListener('click',()=>{manageFun();});

/*/!* CREATE ITEM DROP DOWN *!/
    function toggleCreateItem (){
        if(createItem.classList.contains('display__action')){
            webItem.classList.add('display__action');
            youtubeItem.classList.add('display__action');
            manageDropdown.classList.add('display__action');
            createCategory.classList.add('display__action');
            createItem.classList.remove('display__action');
        }else{
            createItem.classList.add('display__action')
        }
    }
    clickCreateItem.addEventListener('click',()=>{toggleCreateItem();})
    createItemClose.addEventListener("click", ()=>{toggleCreateItem();})

/!* CREATE CATEGORY DROP DOWN *!/
    function toggleCreateCategory (){
        if(createCategory.classList.contains('display__action')){
            webItem.classList.add('display__action');
            youtubeItem.classList.add('display__action');
            manageDropdown.classList.add('display__action');
            createItem.classList.add('display__action');
            createCategory.classList.remove('display__action');
        }else{
            createCategory.classList.add('display__action')
        }
    }
    clickCreateCategory.addEventListener('click',()=>{toggleCreateCategory();})
    createCategoryClose.addEventListener("click", ()=>{toggleCreateCategory();})*/
