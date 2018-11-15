/* 
console.log('Halo');

function greeting(x){
	console.log(x);
}
greeting('Haloo');
*/

//Buat Server IEST 2015 (var =  const)
//module
const http = require('http'); //core module

//variabel
const hostname = '127.0.0.1' //localhost, loopback address
const port = 3000;

/*//FILE
const fs= require('fs'); //insert file module
fs.readFile('index.html', (err, html)=>{
	if(err){
		throw err;
		console.log('ERROR TJOY');
	}

	const server = http.createServer((req, res)=> {
		res.statusCode= 200; 
		res.setHeader('Content-type', 'text/HTML');
		res.write(html);
		res.end('ini html'); //to put into browser
	});

	server.listen(port, hostname, ()=> {
	console.log('Server started on port '+port);
});
});
*/


//function create server versi IEST 2015
const server = http.createServer((req, res)=> {
	res.statusCode= 200; 
	res.setHeader('Content-type', 'text/plain');
	res.end('Hello, World!'); //to put into browser
});

server.listen(port, hostname, ()=> {
	console.log('Server started on port '+port);
}); 
//*/