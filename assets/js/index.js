document.addEventListener("DOMContentLoaded", () => {
    const main = document.querySelector('main');
    const intro = document.querySelector('.section.section_intro');
    const section = document.querySelectorAll('.section:not(.section_intro):not(.section_final)');

    const restart = document.querySelector('.section_final .section__info');
    if(restart) {
        restart.addEventListener('click', (e) => {
            window.location.reload();
        });
    }

    const cursor = document.getElementById('cursor');
    document.addEventListener("mousemove", (e) => {
        const {offsetX, offsetY} = e;
        cursor.style.top = `${offsetY + 5}px`;
        cursor.style.left = `${offsetX + 15}px`;
    });

    if (intro) {
        intro.addEventListener('click', (e) => {
            const card = e.currentTarget;
            const next = card.nextElementSibling;
            card.classList.add('start');
            card.classList.add('scrolling');
            next.classList.add('scrolling');
        });

        intro.addEventListener("animationend", (e) => {
            const card = e.currentTarget;
            const next = card.nextElementSibling;

            if (card.classList.contains('start')) {
                if (document.querySelector('.section.selected')) {
                    document.querySelector('.section.selected').classList.remove('selected');
                }
                card.classList.add('previous');
                next.classList.add('selected');
            }

            if(card.classList.contains('scrolling')) {
                card.classList.remove('scrolling');
            }
        });
    }

    section.forEach((el, i) => {
        el.addEventListener("animationend", (e) => {
            const card = e.currentTarget;
            if(card.classList.contains('scrolling')) {
                card.classList.remove('scrolling');
            }
        });

        el.addEventListener('click', (e) => {
            if(e.currentTarget.classList.contains('scrolling')
                || e.currentTarget.classList.contains('previous')
                || !e.currentTarget.classList.contains('selected')
            ) {return false;}

            const card = e.currentTarget;
            const next = card.nextElementSibling;

            if(card.classList.contains('scrolling')) {return false;}
            if(card.classList.contains('previous')) {return false;}

            if(next.classList.contains('section_final')) {cursor.remove();}

            card.classList.add('scrolling');
            next.classList.add('scrolling');

            next.classList.add('selected');
            el.classList.add('previous');
        })
    });
})
