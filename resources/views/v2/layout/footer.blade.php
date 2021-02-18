<section class="footer-container container">
    <div class="row footer-container-card">
        <h1>聯絡我們</h1>
        <div class="col-sm">
            <i class="fas fa-code"></i> 鹿鯊工作室
        </div>
        <div class="col-sm">
            <i class="fas fa-globe"></i> 乘載一切的 Blog
        </div>
        <div class="col-sm">
            <i class="fas fa-envelope"></i> deershark.tech@gmail.com
        </div>
        <div class="col-sm">
            <i class="fas fa-question"></i> 關於本系統
        </div>
    </div>
    <div class="row footer-container-card d-flex justify-content-center" id="copyright">
        Copyright © Deer Shark Technology Studio. All rights reserved
    </div>
</section>
<script>
    window.onscroll = function() {myFunction()};
    
    var scrolltop = document.getElementById("scrolltop");
    var sticky = scrolltop.offsetTop;
    
    function myFunction() {
        if (window.pageYOffset >= sticky) {
        scrolltop.classList.add("sticky")
        } else {
        scrolltop.classList.remove("sticky");
        }
    }
</script>