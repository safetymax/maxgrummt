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
geometry = new THREE.PlaneBufferGeometry( window.innerWidth, window.innerWidth, 20, 20 );
material = new THREE.MeshBasicMaterial( {color: 0x800080, wireframe: true} );
mesh = new THREE.Mesh(geometry, material);

scene.add( mesh );

mesh.rotation.x = THREE.Math.degToRad(-55);
yoff=0;
}

function updateVertices(geom){
    var vertices = geom.geometry.attributes.position.array;
    for(let i = 0;i<=vertices.length;i+=3){
        vertices[i+2] = noise.perlin2(vertices[i]/window.innerWidth*7,(vertices[i+1]-yoff)/window.innerWidth*7)*window.innerWidth/15;
    }
    geom.geometry.attributes.position.needsUpdate = true;
    document.body.addEventListener("mousemove", (event) => {
        mesh.rotation.x=-55+(event.y/window.innerHeight+0.5)/2;
        mesh.rotation.y=(window.innerWidth-event.x)/window.innerWidth-0.5;
    });
    yoff+=window.innerWidth/1000;
}

camera.position.z = window.innerWidth/3;

function animate(){
    requestAnimationFrame(animate);
    //ANIMATION HERE---
    updateVertices(mesh);
    //-----------------
    renderer.render(scene, camera)
}


createPlane();
animate();
