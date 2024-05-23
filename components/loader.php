<div id="loader">
    <div class="progress"></div>
    <div class="container">
        <div class="text text-l text-light">L</div>
        <div class="text text-o">o</div>
        <div class="text text-a text-light">a</div>
        <div class="text text-d">d</div>
        <div class="text text-i text-light">i</div>
        <div class="text text-n">n</div>
        <div class="text text-g text-light">g</div>
        <div class="text text-dot">.</div>
        <div class="text text-dot2 text-light">.</div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        updateProgressBar(100);
    });

    window.addEventListener("load", function(event) {
        updateProgressBar(100);
    });

    document.onreadystatechange = function () {
        if (document.readyState === "interactive") {
            updateProgressBar(50);
        } else if (document.readyState === "complete") {
            updateProgressBar(100);
        }
    };
    function updateProgressBar(progress) {
        const progressBar =document.querySelector('.progress');
        progressBar.style.width = progress + "%";
    }
</script>