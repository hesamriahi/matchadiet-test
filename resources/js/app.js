// import './bootstrap';
// function clickArticleMammad() {
//     console.log('e')
// }
document.getElementsByClassName("card_section")[0].addEventListener("click",(e)=>{
    console.log(e)
})

document.addEventListener('DOMContentLoaded', function () {
    const video = document.getElementsByClassName('video')[0];
    video.muted = true;
    video.play().catch(function(error) {
        console.error('ویدیو پخش نشد:', error);
    });
});

