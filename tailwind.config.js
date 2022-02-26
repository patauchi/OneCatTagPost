const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                // robot:[ 'Roboto'],
                // amita:['Amita'],
                italiano:['Italianno'],
                // coldiac:['coldiac'],
                // coldiac:['zevida'],
                // glamour:['Glamour'],
                // uninova:['Uninova'],
                cormorant:['Cormorant'],
                didot:['Theano Didot'],
                montserrat:['Montserrat']
            },
            colors:{
                pompadour: {
                    50: '#f8f4f6', 
                    100: '#f1e9ed', 
                    200: '#dbc7d3', 
                    300: '#c5a5b9', 
                    400: '#9a6284', 
                    500: '#6f1e4f', 
                    600: '#641b47', 
                    700: '#53173b', 
                    800: '#43122f', 
                    900: '#360f27'
                },
                gold: {
                    50: '#fcfaf8', 
                    100: '#f8f6f1', 
                    200: '#eee8dc', 
                    300: '#e4dbc7', 
                    400: '#d0bf9c', 
                    500: '#bca472', 
                    600: '#a99467', 
                    700: '#8d7b56', 
                    800: '#716244', 
                    900: '#5c5038'
                },
                carmine: {
                    50: '#fbf5f5', 
                    100: '#f7ebeb', 
                    200: '#ebcece', 
                    300: '#dfb1b1', 
                    400: '#c77676', 
                    500: '#af3b3b', 
                    600: '#9e3535', 
                    700: '#832c2c', 
                    800: '#692323', 
                    900: '#561d1d'
                },
                tuata: {
                    50: '#f5f5f5', 
                    100: '#ebebeb', 
                    200: '#cdcdcd', 
                    300: '#aeaeae', 
                    400: '#727272', 
                    500: '#353535', 
                    600: '#303030', 
                    700: '#282828', 
                    800: '#202020', 
                    900: '#1a1a1a'
                },
                nile: {
                    50: '#f4f5f7', 
                    100: '#e8ecee', 
                    200: '#c6cfd6', 
                    300: '#a4b1bd', 
                    400: '#60778b', 
                    500: '#1c3d59', 
                    600: '#193750', 
                    700: '#152e43', 
                    800: '#112535', 
                    900: '#0e1e2c'
                },
                coffe: {
                    50: '#f5f4f5', 
                    100: '#eceaeb', 
                    200: '#cfcacc', 
                    300: '#b2a9ad', 
                    400: '#796970', 
                    500: '#3f2933', 
                    600: '#39252e', 
                    700: '#2f1f26', 
                    800: '#26191f', 
                    900: '#1f1419'
                }

            },
            margin: {
                '-125': '-32rem',
               },

            inset: {
                "-1": "-0.25rem",
                "-2": "-0.5rem",
            },
        },
        container: {
            screens: {
               sm: "640px",
               md: "768px",
               lg: "1024px",
               xl: "1140px"
            }                           
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
        borderColor: ["responsive", "last", "hover", "focus"],
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
