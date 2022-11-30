<script type="text/javascript">
    // Navbar styling
    var AllLi = document.querySelector('#topnav');

    AllLi(addEventListener('scroll', function changeMenuActive() {
        if (window.scrollY > 10) {
            AllLi.classList.add("playMeErase")
        } else {
            AllLi.classList.remove("playMeErase")
        }
    }));
    // end

</script>
