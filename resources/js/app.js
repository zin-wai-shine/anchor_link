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

    const profileClick = document.getElementById('profileClick');
    const profileStatus = document.getElementById('profileStatus');
    const profileClose = document.getElementById('profileClose');

    const profileEdit = document.getElementById('profileEdit');
    const profile = document.getElementById('profile');

    const currentName = document.getElementById('currentName');
    const editName = document.getElementById('editName');
    const updateName = document.getElementById('updateName');
    const editNameClose = document.getElementById('editNameClose');

/*    const categoryCase = document.querySelectorAll('#categoryCase');
    const categoryChildContainer = document.querySelectorAll('#categoryChildContainer');*/

/*
    const yCategoryText = document.querySelectorAll('#yCategoryText');
    const wCategoryText = document.querySelectorAll('#wCategoryText');
*/



/* WEB DROP */
    function webFun(){
        if(webItem.classList.contains('display__action')){
            manageDropdown.classList.add('display__action')
            youtubeItem.classList.add('display__action');
            profileStatus.classList.add('display__action');
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
    /*function closeItem(){
        yCategoryText.forEach((item)=> {
            item.classList.remove('active__category')
            categoryChildContainer.forEach((category)=>{
                category.classList.add('display__action')
            })
        });
    };*/

    function youtubeFun(){
        if(youtubeItem.classList.contains('display__action')){
            webItem.classList.add('display__action');
            manageDropdown.classList.add('display__action')
            profileStatus.classList.add('display__action');
 /*           createItem.classList.add('display__action')
            createCategory.classList.add('display__action');*/
            youtubeItem.classList.remove('display__action');
        }else{
            youtubeItem.classList.add('display__action');
          /*  closeItem();*/
        }
    }
    clickYoutube.addEventListener('click',()=>{youtubeFun();});
    youtubeItemClose.addEventListener('click',()=>{
        youtubeItem.classList.add('display__action');
        closeItem();
    });

/* MANAGE DROP DOWN */
    function manageFun(){
        if(manageDropdown.classList.contains('display__action')){
            youtubeItem.classList.add('display__action');
            webItem.classList.add('display__action');
            profileStatus.classList.add('display__action');
            manageDropdown.classList.remove('display__action')
        }else{
            manageDropdown.classList.add('display__action')
        }
    };
    manageLogo.addEventListener('click',()=>{manageFun();});
    manageClose.addEventListener('click',()=>{manageFun();});


/* PROFILE MANAGEMENT */
    function profileFun(){
        if(profileStatus.classList.contains('display__action')){
            webItem.classList.add('display__action');
            manageDropdown.classList.add('display__action');
            youtubeItem.classList.add('display__action');
            currentName.classList.remove('display__action');
            updateName.classList.add('display__action');
            profileStatus.classList.remove('display__action');
        }else{
            profileStatus.classList.add('display__action');
        }
    }
    profileClick.addEventListener('click',()=>{profileFun();});
    profileClose.addEventListener('click',()=>{profileFun();});

/* EDIT PROFILE */
    profileEdit.addEventListener("click",()=>{
       profile.click();
    });
/*
    profile.onchange = e => {
        alert(e.target.files[0].name);
    }*/

    function editNameStatus (){
        if( currentName.classList.contains('display__action')){
            currentName.classList.remove('display__action');
            updateName.classList.add('display__action');
        }else{
            currentName.classList.add('display__action');
            updateName.classList.remove('display__action');
        }
    }
    editName.addEventListener('click',() => { editNameStatus() });
    editNameClose.addEventListener('click',()=>{ editNameStatus() });

/*CLICK YOUTUBE CATEGORY */

/*    yCategoryText.forEach((item)=>{
            item.addEventListener('click',()=>{
                yCategoryText.forEach((item)=>{
                    item.classList.remove('active__category')

                })
                item.classList.add('active__category');
            })
    })


   wCategoryText.forEach((item)=>{
        item.addEventListener('click',()=>{
            wCategoryText.forEach((item)=>{
               item.classList.remove('active__category')
            })
            item.classList.add('active__category')
        })
})*/



