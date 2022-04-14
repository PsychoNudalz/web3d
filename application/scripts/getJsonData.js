$(document).ready(function (){
    $.getJSON('../model/data.json',function (jsonObj){
        console.log(jsonObj);
        //Get the home page main text data
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        //Get the home page left column text data
        $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
        $('#subTitle_left').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
        $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        //Get the home page centre column text data
        $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '<h2>');
        $('#subTitle_centre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
        $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        //Get the home page right column text data
        $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '<h2>');
        $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
        $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');
    })
})