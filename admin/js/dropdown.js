// var minheight = 20;
// var maxheight = 100;
// var time = 1000;
// var timer = null;
// var toggled = false;

// window.onload = function() {
//     var controller = document.getElementById('dropdown-btn');
//     var slider = document.getElementById('slider');
//     slider.style.height = minheight + 'px'; //not so imp,just for my example
//     controller.onclick = function() {  
//         clearInterval(timer);
//         var instanceheight = parseInt(slider.style.height);  // Current height
//         var init = (new Date()).getTime(); //start time
//         var height = (toggled = !toggled) ? maxheight: minheight; //if toggled

//         var disp = height - parseInt(slider.style.height);
//         timer = setInterval(function() {
//             var instance = (new Date()).getTime() - init; //animating time
//             if(instance <= time ) { //0 -> time seconds
//                 var pos = instanceheight + Math.floor(disp * instance / time);
//                 slider.style.height =  pos + 'px';
//             }else {
//                 slider.style.height = height + 'px'; //safety side ^^
//                 clearInterval(timer);
//             }
//         },1);
//     };
// };

var minheight = 0;
var maxheight = 60;
var time = 300;
var timer = null;
var toggled = false;

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("clicked");
        var dropdownContent = this.nextElementSibling;

        dropdownContent.style.display = "flex";


        var i = this.firstChild;
        //console.log("display is: " + dropdownContent.style.display);
        //console.log("height is: " + dropdownContent.style.height);
        //console.log(this.firstChild);
        //console.log("fa-caret-down: " + i.classList.contains("fa-caret-down"));
        //console.log("fa-caret-up: " + i.classList.contains("fa-caret-up"));
        if (i.classList.contains("fa-caret-down")) {
            //dropdownContent.style.display = "flex";
            i.classList.toggle("fa-caret-up");
            i.classList.toggle("fa-caret-down");
            slideToggle(this, dropdownContent);
            //console.log("go down");
        }
        else if (i.classList.contains("fa-caret-up")) {
            //dropdownContent.style.display = "none";
            i.classList.toggle("fa-caret-down");
            i.classList.toggle("fa-caret-up");
            slideToggle(this, dropdownContent);
            //console.log("go up");
        }
    });
}

function slideToggle(slide_btn, slider){
    //console.log("slideToggle is called");
    var controller = slide_btn;
    //console.log(controller);
    var slider_height = slider.style.height;
    //console.log("slider is: " + slider.style + " height is: " + slider_height);
    //slider.style.height = minheight + 'px'; //not so important,just for my example
    // controller.onclick = function () {

    //console.log("onclick is called");
    clearInterval(timer);
    var current_height = parseInt(slider.style.height);  // Current height
    var start_time = (new Date()).getTime(); //start time
    var height = (toggled = !toggled) ? maxheight : minheight; //if toggled

    var diff = height - parseInt(slider.style.height);
    timer = setInterval(function () {
        var elapsed_time = (new Date()).getTime() - start_time; //animating time
        if (elapsed_time <= time) { //0 -> time seconds(1000)
            var pos = current_height + Math.floor(diff * elapsed_time / time);
            slider.style.height = pos + 'px';
            //console.log("height is: " + slider.style.height);
        } else {
            slider.style.height = height + 'px'; //safety side ^^
            //console.log("height is: " + slider.style.height);
            clearInterval(timer);
        }
    }, 1);

    //};
}
