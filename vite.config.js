import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
const path = require('path') // <-- require path from node

export default defineConfig({
    plugins: [
        laravel({
            // edit the first value of the array input to point to our new sass files and folder.
            input: [
                //scss
                'resources/scss/app.scss', 
                'resources/scss/partials/_header.scss', 
                'resources/scss/partials/_jumbotron.scss', 
                'resources/scss/partials/_main.scss', 
                'resources/scss/partials/_footer.scss', 
                //script
                'resources/js/app.js',
                'resources/js/scripts/actionConfirm.js',
            ],
            refresh: true,
        }),
    ],
    // Add resolve object and aliases
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~resources': '/resources/'
        }
    }
});
