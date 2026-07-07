class Toast {
    constructor() {
        this.container = this.createContainer();
    }

    createContainer() {
        let container = document.getElementById('toast-container');
        if (!container) {
            container = document.createElement('div');
            container.id = 'toast-container';
            container.className = 'fixed bottom-6 right-6 z-[9999] space-y-3 pointer-events-none';
            document.body.appendChild(container);
        }
        return container;
    }

    show(title, message = '', type = 'success') {
        const toast = document.createElement('div');

        const colorClasses = type === 'success'
            ? ['border-green-200', 'bg-green-50', 'text-green-900', 'dark:border-green-800', 'dark:bg-green-900/30', 'dark:text-green-200']
            : ['border-red-200', 'bg-red-50', 'text-red-900', 'dark:border-red-800', 'dark:bg-red-900/30', 'dark:text-red-200'];

        toast.className = [
            'pointer-events-auto',
            'w-[320px]',
            'max-w-full',
            'rounded-xl',
            'border',
            'p-4',
            'shadow-lg',
            'transition-all',
            'duration-300',
            'opacity-0',
            'translate-y-4',
            ...colorClasses
        ].join(' ');

        toast.innerHTML = `
            <div class="flex items-start gap-3">
                <div class="mt-0.5 flex-shrink-0">
                    ${type === 'success' ? this.successIcon() : this.errorIcon()}
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold">${title}</p>
                    ${message ? `<p class="mt-1 text-sm opacity-80">${message}</p>` : ''}
                </div>
                <button type="button" class="text-neutral-400 hover:text-neutral-700 dark:hover:text-neutral-200 transition">
                    ${this.closeIcon()}
                </button>
            </div>
        `;

        this.container.appendChild(toast);

        // Animasi masuk
        requestAnimationFrame(() => {
            toast.classList.remove('opacity-0', 'translate-y-4');
            toast.classList.add('opacity-100', 'translate-y-0');
        });

        // Tombol close
        toast.querySelector('button').addEventListener('click', () => {
            this.hide(toast);
        });

        // Auto hide setelah 4 detik
        setTimeout(() => {
            this.hide(toast);
        }, 4000);
    }

    hide(toast) {
        toast.classList.add('opacity-0', 'translate-y-2');
        toast.addEventListener('transitionend', () => toast.remove(), { once: true });
    }

    successIcon() {
        return `
            <svg class="h-5 w-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        `;
    }

    errorIcon() {
        return `
            <svg class="h-5 w-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        `;
    }

    closeIcon() {
        return `
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        `;
    }
}

// Inisialisasi global
document.addEventListener('DOMContentLoaded', () => {
    window.toast = new Toast();
});
