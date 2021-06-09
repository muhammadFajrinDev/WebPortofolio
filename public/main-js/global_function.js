
let getUrl = (function(){
    return function(){
        return 'http://localhost:8000/';
    }
})();
 
function changePict(el,changePict,event){
    // Change Active Photo
    el.attr("src", changePict);
    
    // add Active
    $target = $(event.target);   
    $target.addClass('list_active_photo');   
}   

function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

function photoObject(){
    let listPhoto = [
        {
        "file":"agis_1",
        "name":"Advance Gis 1",
        "status": false
        },
        {
        "file":"agis_2",
        "name":"Advance Gis 2",
        "status": false
        },
        {
        "file":"agis_3",
        "name":"Advance Gis 3",
        "status": true
        }
    ]; 
    return listPhoto;
}

(function (){
    let listPhoto = photoObject();
    let current;
    for(index in listPhoto){ 
        if(listPhoto[index].status){
         //Set Active List Marker
         current = 'list_active_photo';
         //Set Active First Img
         $("#header_img").attr("src",`${getUrl()}agis/${listPhoto[index].file}.JPG`);
        }else{
         current = ''; 
        } 
        var elementListPhoto = `<img src="${getUrl()}agis/${listPhoto[index].file}.JPG" index="${index}" class="photo_list ${current}">`;
        $(".list_photo").append(elementListPhoto);
    }
})();

