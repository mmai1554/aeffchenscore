const round = (num) =>
    num
        .toFixed(7)
        .replace(/(\.[0-9]+?)0+$/, '$1')
        .replace(/\.0$/, '')
const rem = (px) => `${round(px / 16)}rem`
const em = (px, base) => `${round(px / base)}em`

module.exports = {
    mode: 'jit',
    content: [
        './theme.json',
        './**/*.js',
        './**/*.php',
        './**/*.html',
    ],
    theme: {
        fontFamily: {
            mono: [
                'Courier\\ Prime',
                'ui-monospace',
                'SFMono-Regular',
                'Menlo',
                'Monaco',
                'Consolas',
                '"Liberation Mono"',
                '"Courier New"',
                'monospace',
            ],
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '2000px'
        },
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        fontSize: rem(18),
                        lineHeight: round(27 / 18),
                        color: '#000',
                        maxWidth: '100%',
                        li: {
                            marginTop: em(2, 18),
                            marginBottom: em(2, 18),
                        },
                    },
                },
                'lg': {
                    css: {
                        fontSize: rem(18),
                        lineHeight: round(27 / 18),
                        li: {
                            marginTop: em(2, 18),
                            marginBottom: em(2, 18),
                        },
                    }
                }
            },
        },
    },
    future: {},
    variants: {},
    plugins: [
        require('@tailwindcss/typography'),
        // Extract colors and widths from theme.json.
        // require('@_tw/themejson')(require('../theme/theme.json')),

        // Uncomment below to add first-party Tailwind plugins.
        // require( '@tailwindcss/aspect-ratio' ),
        // require( '@tailwindcss/forms' ),
        // require( '@tailwindcss/line-clamp' ),
    ],
};
