const livereload = require('livereload');
const server = livereload.createServer();

server.watch(__dirname);

console.log(`Livereload server watching for changes on port http://localhost:${server.config.port}`);
