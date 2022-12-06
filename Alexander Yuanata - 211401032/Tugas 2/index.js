let hide_toggle = true;
let fade_toggle = true;
let anim_toggle = true;

let i = 0;
const clr_range=[
    "#ff4719",
    "#6919ff",
    "#ff1988",
    "#c2ff19",
    "#3eff8b"
];

let black = "#000000"

let len = clr_range.length+1;

$(document).ready(function(){
    console.log("ready");

    $("#hide").click(function(){
        if(hide_toggle){
            $("#box-hide").hide();
        }
        else {
            $("#box-hide").show();
        }
        hide_toggle = !hide_toggle;
      });


      $("#fade").click(function(){
        if(fade_toggle){
            $("#box-fade").fadeOut(300);
        }
        else {
            $("#box-fade").fadeIn(300);
        }
        fade_toggle = !fade_toggle;
      });

      $("#slide").click(function(){
            $("#box-slide").slideToggle(300);
      });

      $("#anim").click(function(){
        console.log(i);
            $("#box-anim").css(
                {
                    "background-color": clr_range[i],
                },
                350
            );
            i += 1;
            i %= clr_range.length;
      });

});

