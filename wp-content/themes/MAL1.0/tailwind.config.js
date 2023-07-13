module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './src/**/*.php',
            './template-parts/**/*.php',
            './*.php',
            './inc/**/*.php',
            './inc/*.php',
            './src/**/*.js',
            "./node_modules/flowbite/**/*.js"
        ],
    },
    darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
    theme: {
        colors: {
            'primary' : '#892035',
            'secondary': '#f1f1f0'
        }
    },
    variants: {},
    plugins: [
        require('flowbite/plugin')
    ]
}