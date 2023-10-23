<div class="d-md-flex mb-3 justify-content-md-end">

    <a id="scrollToTopButton" class="onTop" style="display: none;"></a>

    <script>
        const scrollToTopButton = document.getElementById("scrollToTopButton");
        window.addEventListener("scroll", () => {
            if (document.documentElement.scrollTop > 100) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        });
        scrollToTopButton.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    </script>

</div>
