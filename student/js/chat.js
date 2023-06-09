const ls = localStorage.getItem("selected");
let selected = false;
var list = document.querySelectorAll(".list"),
    content = document.querySelector("#chat-content"),
    input = document.querySelector(".message-footer input"),
    open = document.querySelector(".open a");
    close = document.querySelector(".close a");

//init
function init() {
  //input.focus();
  let now = 2;
  const texts = [""];
  for(var i = 4; i < list.length; i++) {
    list[i].querySelector(".time").innerText = `${now} day ago`;
    list[i].querySelector(".text").innerText = texts[(i-4) < texts.length ? (i-4) : Math.floor(Math.random() * texts.length)];
    now++;
  }
}
init();

//process
function process() {
  if(ls != null) {
    selected = true;
    click(list[ls], ls);
  }
  if(!selected) {
    click(list[0], 0);
  }

  list.forEach((l,i) => {
    l.addEventListener("click", function() {
      click(l, i);
    });
  });
  
  try {
    document.querySelector(".list.active").scrollIntoView(true);
  }
  catch {}
  
}
process();

//list click
function click(l, index) {
  list.forEach(x => { x.classList.remove("active"); });
  if(l) {
    l.classList.add("active");
    document.querySelector("sidebar").classList.remove("opened");
    open.innerHTML= '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
    close.innerHTML= '<i class="fa fa-times" aria-hidden="true"></i>';
    const img = l.querySelector("img").src,
          user = l.querySelector(".user").innerText,
          time = l.querySelector(".time").innerText;

    content.querySelector("img").src = img;
    content.querySelector(".info .user").innerHTML = user;
    content.querySelector(".info .time").innerHTML = time;

    const inputPH = input.getAttribute("data-placeholder");
    input.placeholder = inputPH.replace("{0}", user.split(' ')[0]);

    document.querySelector(".message-wrap").scrollTop = document.querySelector(".message-wrap").scrollHeight;
    
    localStorage.setItem("selected", index);
  }
}

open.addEventListener("click", (e) => {
  const sidebar = document.querySelector("sidebar");
  sidebar.classList.toggle("opened");
});

close.addEventListener("click", (e) => {
  const sidebar = document.querySelector("sidebar");
  sidebar.classList.remove("opened");
});