export const menuFixed = () => {
    let sHeight = screen.height,
    scrollY,
    menuMain = document.querySelector('.Header-container')

    window.onscroll = (e) => {
        scrollY = window.scrollY
        console.log(scrollY)

        if(scrollY > 600) {
            menuMain.classList.add(('MenuFixed'))
        }
        else if((scrollY + 10) < 600) {
            menuMain.classList.remove('MenuFixed')
        }
    }   
}