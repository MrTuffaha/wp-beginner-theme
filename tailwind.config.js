export default {
    content: [
        './**/*.php',
        // Add any other files that contain CSS classes or styles
    ],
    theme: {
        extend: {
            colors: {
                primary: 'var(--wp--preset--color--primary)',
                secondary: 'var(--wp--preset--color--secondary)',
                background: 'var(--wp--preset--color--background)',
                surface: 'var(--wp--preset--color--surface)',
                error: 'var(--wp--preset--color--error)',
                'on-primary': 'var(--wp--preset--color--on-primary)',
                'on-secondary': 'var(--wp--preset--color--on-secondary)',
                'on-background': 'var(--wp--preset--color--on-background)',
                'on-surface': 'var(--wp--preset--color--on-surface)',
                'on-surface-border': 'var(--wp--preset--color--on-surface-border)',
                'on-error': 'var(--wp--preset--color--on-error)',
                'text-headers': 'var(--wp--preset--color--text-headers)',
            }
        }
    },
    plugins: [],
};