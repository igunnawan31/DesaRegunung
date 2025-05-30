import './bootstrap';
import '../css/app.css';
import 'flowbite';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

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

document.addEventListener("DOMContentLoaded", function () {
    fetch("http://localhost:8000/api/sejarah")
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById("sejarah-cards");
            data.forEach(item => {
                container.innerHTML += `
                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md">
                        <a href="#">
                            <img loading="lazy" class="rounded-t-lg w-full h-48 object-cover" src="${item.image_sejarah}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                    ${item.name_sejarah}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 line-clamp-2">
                                ${item.description1}
                            </p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                            <div class="mt-4 flex justify-between items-center text-sm text-gray-500">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-1">
                                        Administrator
                                    </div>
                                    <div class="flex items-center gap-1">
                                        Dilihat 1.471 kali
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-black text-white text-sm font-bold px-4 py-2 rounded-b-lg">
                            ${new Date(item.date_sejarah).toLocaleDateString('id-ID', { day: '2-digit', month: 'short', year: 'numeric' })}
                        </div>
                    </div>
                `;
            });
        })
        .catch(error => console.error("Error fetching sejarah data:", error));
});