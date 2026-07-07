import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

import './theme-init';
import './hero-swiper';
import './contact-form';
import copyBadge from './copy-badge';
import './partners';
import './toast';

import Alpine from 'alpinejs';
import waFloat from './wa-float';

import Swiper from "swiper";
import { Pagination, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";




window.Alpine = Alpine;
window.copyBadge = copyBadge;


document.addEventListener('alpine:init', () => {
    Alpine.data('waFloat', waFloat);
});

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    // =====================================================
    // MOBILE MENU
    // =====================================================
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }



    // =====================================================
    // GLOBAL AJAX SEARCH (PAGES + PRODUCTS)
    // =====================================================
    const searchInput = document.getElementById('searchInput');
    const pagesGrid = document.getElementById('articlesGrid');
    const productGrid = document.getElementById('productGrid');
    const paginationWrapper = document.getElementById('paginationWrapper');

    document.addEventListener('DOMContentLoaded', function () {
        const targets = document.querySelectorAll(
            '.js-hero-img, .js-hero-overlay, .js-hero-box, .js-hero-title, .js-hero-text'
        );

        if (!targets.length) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('is-visible');
                    void entry.target.offsetWidth; // force reflow agar animasi bisa restart
                    entry.target.classList.add('is-visible');
                } else {
                    entry.target.classList.remove('is-visible');
                }
            });
        }, {
            threshold: 0.3
        });

        targets.forEach((el) => observer.observe(el));
    });

    let timer;

    if (searchInput) {
        searchInput.addEventListener('keyup', () => {
            clearTimeout(timer);

            timer = setTimeout(() => {
                const keyword = searchInput.value.trim();

                /**
                 * ==========================
                 * SEARCH PAGES
                 * ==========================
                 */
                if (pagesGrid) {

                    fetch('/search/skeleton')
                        .then(res => res.text())
                        .then(html => {
                            pagesGrid.innerHTML = html;
                            if (paginationWrapper) paginationWrapper.innerHTML = '';
                        });

                    fetch(`/search/pages?keyword=${encodeURIComponent(keyword)}`)
                        .then(res => res.json())
                        .then(data => {
                            if (data.html?.trim()) {
                                pagesGrid.innerHTML = data.html;
                                if (paginationWrapper) {
                                    paginationWrapper.innerHTML = data.pagination ?? '';
                                }
                            } else {
                                pagesGrid.innerHTML = data.empty;
                                if (paginationWrapper) paginationWrapper.innerHTML = '';
                            }
                        })
                        .catch(err => console.error('Pages search error:', err));
                }

                /**
                 * ==========================
                 * SEARCH PRODUCTS
                 * ==========================
                 */
                if (productGrid) {

                    fetch('/search/products/skeleton')
                        .then(res => res.text())
                        .then(html => {
                            productGrid.innerHTML = html;
                            if (paginationWrapper) paginationWrapper.innerHTML = '';
                        });

                    fetch(`/search/products?keyword=${encodeURIComponent(keyword)}`)
                        .then(res => res.json())
                        .then(data => {
                            if (data.html?.trim()) {
                                productGrid.innerHTML = data.html;
                                if (paginationWrapper) {
                                    paginationWrapper.innerHTML = data.pagination ?? '';
                                }
                            } else {
                                productGrid.innerHTML = data.empty;
                                if (paginationWrapper) paginationWrapper.innerHTML = '';
                            }
                        })
                        .catch(err => console.error('Products search error:', err));
                }

            }, 400);
        });
    }

});
