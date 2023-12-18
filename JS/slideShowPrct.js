

let startIndex = 0;
    const images = [
        "../../image/bag11.png",
        "../../image/bag12.png",
        "../../image/bag13.png",
        "../../image/bag14.png",
        "../../image/bag15.png",
        "../../image/bag10.png",
        "../../image/bag9.png",
        "../../image/bag8.png",
        "../../image/bag7.png",
        "../../image/bag11.png",
        "../../image/bag11.png"
    ];

    function changeImages(direction) {
        startIndex += direction;

        if (startIndex < 0) {
            startIndex = images.length - 4;
        } else if (startIndex > images.length - 4) {
            startIndex = 0;
        }

        const imageContainer = document.getElementById("imageContainer");
        imageContainer.innerHTML = ""; // Clear existing images

        for (let i = startIndex; i < startIndex + 4; i++) {
            const imageElement = document.createElement("img");
            imageElement.src = images[i];
            imageElement.alt = "";
            imageElement.width = 205;
            imageElement.height = 307;
            imageElement.draggable = false;

            if (i > startIndex) {
                imageElement.style.marginLeft = "25px";
            }

            imageContainer.appendChild(imageElement);
        }

        // const offset = startIndex * (205 + 25);
        // imageContainer.style.marginLeft = `-${offset}px`;
    }
    
    // Initial load
    changeImages(0);