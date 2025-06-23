import './bootstrap';
import '../css/app.css';
import 'flowbite';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.scrollY > fixedNav) {
        header.classList.add('navbar-fixed');
    }
    else {
        header.classList.remove('navbar-fixed');
    }
}

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');


hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});


document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        threshold: 0.1,
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(element => observer.observe(element));
});

const header = document.getElementById('header');

const tabs = document.querySelectorAll('.tab');
    
tabs.forEach((tab) => {
    tab.addEventListener('click', function () {
        tabs.forEach(t => t.classList.remove('bg-slate-200'));
        this.classList.add('bg-slate-200');
    });
});

const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination],
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});

document.addEventListener("DOMContentLoaded", function() {
    fetch("/api/sejarah")
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById("sejarah-cards");
            data.forEach(item => {
                container.innerHTML += `
                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md">
                        <a href="/sejarah/${item.id}"> <!-- Link to single view -->
                            <img loading="lazy" class="rounded-t-lg w-full h-64 object-cover" src="${item.image_sejarah}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/sejarah/${item.id}"> <!-- Consistent link -->
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                    ${item.name_sejarah}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 line-clamp-2">
                                ${item.description1}
                            </p>
                            <a href="/sejarah/${item.id}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                        <div class="bg-black text-white text-sm font-bold px-4 py-2 rounded-b-lg">
                            ${new Date(item.date_sejarah).toLocaleDateString('id-ID', { day: '2-digit', month: 'short', year: 'numeric' })}
                        </div>
                    </div>
                `;
            });
        })
    .catch(error => console.error("Error:", error));
});

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const swiper = new Swiper('.swiper', {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            }
        }
    });
});

window.onload = function () {
    const successAlert = document.getElementById('success-alert');
    if (successAlert) {
        successAlert.scrollIntoView({ behavior: 'smooth' });
    } else {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
};