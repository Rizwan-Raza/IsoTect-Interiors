<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    M.AutoInit();

    function scrollToTop() {
        var body = $("html, body");

        body.stop().animate({
            scrollTop: 0
        }, body.get(0).scrollHeight / 10, 'swing');
    }

    function popOut(elem) {
        let element = $(elem).find(".small-drop");
        if (element.css("height") == 0 || element.css("height") == "0px") {
            element.animate({
                    height: "240px",
                    opacity: "1"
                },
                200
            );
        } else {
            element.animate({
                    height: "0",
                    opacity: "0"
                },
                200
            );
        }
    }
</script>