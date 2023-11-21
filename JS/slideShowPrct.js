// const carousel = document.querySelector('.sl-shws__prt');
// const arrowIcons = document.querySelectorAll('.col2 .icon-awLeft, .col2 .icon-awRight');
// const firstImg = document.querySelector('.sl-shws__prt img');


// let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
// // getting first img width & adding 14 margin value
// let firstImgWidth = firstImg.clientWidth + 14;

// const showHideIcon = () => {
//     // showing and hidding prev/next icon according to carousel scroll left value
//     let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scollable width
//     arrowIcons[0].style.display = carousel.scrollLeft == 0 ? 'none' : 'block';
//     arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? 'none' : 'block';

// }

// arrowIcons.forEach(icon => {
//     icon.addEventListener('click', () => {
//         // if clicked icon is left, reduce width value from the carousel scroll left else and to it 
//         carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
//         setTimeout(() => showHideIcon(), 60) // calling showHideIcon after 60ms
//     });
// });

// const autoSlide = () => {
//     // if there is no image left scroll then return return form here
//     if (carousel.scrollLeft == (carousel.scrollWidth - carousel.clientWidth)) return;
//     positionDiff = Math.abs(positionDiff); // making positionDiff values to positive
//     let firstImgWidth = firstImg.clientWidth + 14;
//     let valDifference =  firstImgWidth - positionDiff;

//     if (carousel.scrollLeft > prevScrollLeft) {
//         // if user is scrolling to the right
//         return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
//     } 
//     // if user is scrolling to the left
//     carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;

// }

// const dragStart = (e) => {
//     // update global variables value on mouse down event
//     isDragStart = true;
//     prevPageX = e.pageX || e.touches[0].pageX;
//     prevScrollLeft = carousel.scrollLeft;
// }

// const dragging = (e) => {
//     // scrolling images/carousel to left according to mouse pointer
//     if (!isDragStart) return;
//     e.preventDefault();
//     isDragging = true;
//     carousel.classList.add('dragging');
//     positionDiff = (e.pageX || e.touches[0]) - prevPageX;
//     carousel.scrollLeft = prevScrollLeft - positionDiff; 
//     showHideIcon();
// }

// const dragStop = () => {
//     isDragStart = false;
//     carousel.classList.remove('dragging');

//     if (!isDragging) return;
//     isDragging = false;
//     autoSlide();
// }

// carousel.addEventListener('mousedown', dragStart);
// carousel.addEventListener('touchstart', dragStart);

// carousel.addEventListener('mousemove', dragging);
// carousel.addEventListener('touchmove', dragging);

// carousel.addEventListener('mouseup', dragStop);
// carousel.addEventListener('mouseleave', dragStop);
// carousel.addEventListener('touchend', dragStop);

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