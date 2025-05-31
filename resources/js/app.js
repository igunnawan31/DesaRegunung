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

document.addEventListener('DOMContentLoaded', function () {
    const galeriGrid = document.getElementById('galeri-grid');
    const paginationControls = document.getElementById('pagination-controls');

    // Create modal element
    const modal = document.createElement('div');
    modal.id = 'gallery-modal';
    modal.className = 'fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4';
    modal.innerHTML = `
        <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl max-h-[90vh] overflow-auto mx-4">
            <div class="p-6">
                <div class="flex justify-between items-start">
                    <h3 id="modal-title" class="text-2xl font-bold text-gray-800"></h3>
                    <button id="close-modal" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center justify-center">
                        <img id="modal-image" class="max-h-[60vh] object-contain rounded-lg" src="" alt="Event Image">
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-gray-700">Date:</h4>
                            <p id="modal-date" class="text-gray-600"></p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Description:</h4>
                            <p id="modal-description" class="text-gray-600"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    document.body.appendChild(modal);

    function fetchGaleri(page = 1) {
        fetch(`/api/galeri?page=${page}`)
            .then(res => res.json())
            .then(data => {
                galeriGrid.innerHTML = '';

                if (!data.data || !Array.isArray(data.data)) {
                    galeriGrid.innerHTML = '<p class="text-red-500">Failed to load gallery.</p>';
                    return;
                }

                data.data.forEach(item => {
                    const galleryItem = document.createElement('div');
                    galleryItem.className = 'gallery-item bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden flex flex-col';
                    galleryItem.innerHTML = `
                        <div class="gallery-image-container">
                            <img class="gallery-image cursor-pointer" 
                                 src="${item.image_acara}" 
                                 alt="${item.name_acara}" 
                                 data-id="${item.id}">
                        </div>
                        <div class="p-4 flex-grow flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">${item.name_acara}</h3>
                            <p class="text-sm text-gray-500 mb-3">${item.date_acara}</p>
                            <button class="read-more-btn mt-auto px-4 py-2 bg-blue-900 text-white rounded hover:bg-blue-700"
                                    data-id="${item.id}">
                                Read More &raquo;
                            </button>
                        </div>
                    `;
                    galeriGrid.appendChild(galleryItem);

                    // Add click events
                    galleryItem.querySelector('img').addEventListener('click', () => fetchGaleriDetails(item.id));
                    galleryItem.querySelector('.read-more-btn').addEventListener('click', (e) => {
                        e.stopPropagation();
                        fetchGaleriDetails(item.id);
                    });
                });

                renderPagination(data);
            });
    }

    function fetchGaleriDetails(id) {
        fetch(`/api/galeri/${id}`)
            .then(res => {
                if (!res.ok) throw new Error('Not Found');
                return res.json();
            })
            .then(item => {
                showModal(item);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Could not load event details');
            });
    }

    function showModal(item) {
        document.getElementById('modal-title').textContent = item.name_acara;
        document.getElementById('modal-image').src = item.image_acara;
        document.getElementById('modal-image').alt = item.name_acara;
        document.getElementById('modal-date').textContent = item.date_acara;
        document.getElementById('modal-description').textContent = item.description_acara;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    // Close modal handlers
    modal.querySelector('#close-modal').addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    function renderPagination(data) {
        paginationControls.innerHTML = '';

        if (data.prev_page_url) {
            paginationControls.innerHTML += `<button data-page="${data.current_page - 1}" class="px-3 py-1 bg-gray-200 rounded">Previous</button>`;
        }

        for (let i = 1; i <= data.last_page; i++) {
            paginationControls.innerHTML += `<button data-page="${i}" class="px-3 py-1 ${i === data.current_page ? 'bg-blue-500 text-white' : 'bg-gray-100'} rounded">${i}</button>`;
        }

        if (data.next_page_url) {
            paginationControls.innerHTML += `<button data-page="${data.current_page + 1}" class="px-3 py-1 bg-gray-200 rounded">Next</button>`;
        }

        paginationControls.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', () => {
                const page = btn.getAttribute('data-page');
                fetchGaleri(page);
            });
        });
    }

    fetchGaleri();
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