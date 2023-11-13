document.addEventListener("DOMContentLoaded", function () {
    var scrollButtons = document.querySelectorAll(".scroll");

    scrollButtons.forEach(function (scrollButton) {
        scrollButton.addEventListener("click", function (e) {
            e.preventDefault();

            var targetId = scrollButton.getAttribute("href").substring(1);

            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                var scrollDuration = 800; //Duracion de la animacion
                var targetPosition = targetElement.offsetTop;
                var startPosition = window.pageYOffset;
                var distance = targetPosition - startPosition;
                var startTime = null;

                function animation(currentTime) {
                    if (startTime === null) {
                        startTime = currentTime;
                    }

                    var timeElapsed = currentTime - startTime;
                    var percentage = Math.min(timeElapsed / scrollDuration, 1);
                    var easing = function (t) {
                        return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
                    };
                    var newPosition = startPosition + distance * easing(percentage);
                    window.scrollTo(0, newPosition);

                    if (percentage < 1) {
                        requestAnimationFrame(animation);
                    }
                }

                requestAnimationFrame(animation);
            }
        });
    });
});