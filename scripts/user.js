
    // document.getElementById("cd-1").addEventListener("click", function () {
    //     document.getElementById("my-courses").scrollIntoView({
    //         behavior: "smooth"
    //     });
    // });

    document.getElementById("cd-1").addEventListener("click",myFunction);
    function myFunction(){
        document.getElementById("my-courses").scrollIntoView({
            behavior: "smooth" });  
    }

    document.getElementById("cd-2").addEventListener("click",myFunction);
    function myFunction(){
        document.getElementById("completed-courses").scrollIntoView({
            behavior: "smooth" });  
    }

    document.getElementById("cd-3").addEventListener("click",myFunction);
    function myFunction(){
        document.getElementById("learning-course").scrollIntoView({
            behavior: "smooth" });  
    }
