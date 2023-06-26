function signuphover() {
    let id = document.querySelector('#hideover-lay').id = "showover-lay";
    console.log("Done")
    document.body.style.overflow="hidden"
}
function signupclose() {
    let id = document.querySelector('#showover-lay').id = "hideover-lay";
    console.log("Done")
    document.body.style.overflow="scroll"
}
function lawyersignup() {
    document.querySelector('#hiddenl').id = "showl";
    document.querySelector('#showu').id = "hiddenu";
    document.querySelector('#colorwl').id="colorbl";
    document.querySelector('#colorbu').id="colorwu";
    console.log("Done" + id1 + " " + id2)
}
function usersignup() {
    document.querySelector('#hiddenu').id = "showu";
    document.querySelector('#showl').id = "hiddenl";
    document.querySelector('#colorwu').id="colorbu";
    document.querySelector('#colorbl').id="colorwl";
    
    console.log("Done")
}