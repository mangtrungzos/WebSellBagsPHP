const listImage = document.querySelector('.list-images');
const imgs = document.querySelectorAll('.img-detail')
const length = imgs.length
const btnLeft = document.querySelector('.btn-left')
const btnRight = document.querySelector('.btn-right')
let current = 0

const handleChangeSlide = () => {
  const width = imgs[0].offsetWidth;
  const maxTranslateX = (length - 1) * width * -1; // Giới hạn tối đa của translateX

  if (current == length - 1) {
    current = 0;
    listImage.style.transform = `translateX(0)`;
  } else {
    let translateX = width * -1 * current;
    if (translateX < maxTranslateX) {
      translateX = maxTranslateX; // Đảm bảo không vượt quá giới hạn tối đa
    }
    listImage.style.transform = `translateX(${translateX}px)`;
  }
};

btnRight.addEventListener('click', () => {
  current ++
  handleChangeSlide()
})

btnLeft.addEventListener('click', () => {
  current --
  handleChangeSlide()
})

