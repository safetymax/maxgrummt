let scene, camera, renderer, plane, geometry, material, mesh, yoff;

function init(){
    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 10000);
}

init();

renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);

document.body.appendChild(renderer.domElement);


function createPlane(){
geometry = new THREE.PlaneBufferGeometry( window.innerHeight, window.innerHeight, 20, 20 );
material = new THREE.MeshBasicMaterial( {color: 0x800080, wireframe: true} );
mesh = new THREE.Mesh(geometry, material);

scene.add( mesh );

mesh.rotation.x = THREE.Math.degToRad(-55);
yoff=0;
}

const bggeometry = new THREE.PlaneGeometry(window.innerWidth*2,window.innerHeight*2,10,10);
const bgloader = new THREE.TextureLoader();
const bgmaterial = new THREE.MeshBasicMaterial( { map: bgloader.load("maxbg.png") } );
const bgmesh = new THREE.Mesh(bggeometry, bgmaterial);

scene.add(bgmesh);
bgmesh.position.z = -1*window.innerHeight;

function updateVertices(geom){
    var vertices = geom.geometry.attributes.position.array;
    for(let i = 0;i<=vertices.length;i+=3){
        vertices[i+2] = noise.perlin2(vertices[i]/200,(vertices[i+1]-yoff)/200)*100;
    }
    geom.geometry.attributes.position.needsUpdate = true;
    document.body.addEventListener("mousemove", (event) => {
        mesh.rotation.x=-55+(event.y/window.innerHeight+0.5)/2;
        mesh.rotation.y=(window.innerWidth-event.x)/window.innerWidth-0.5;
    });
    yoff++;
}

camera.position.z = 800;

function animate(){
    requestAnimationFrame(animate);
    //ANIMATION HERE---
    updateVertices(mesh);
    //-----------------
    renderer.render(scene, camera)
}

function onWindowResize(){
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}

window.addEventListener('resize', onWindowResize, false);

createPlane();
animate();
