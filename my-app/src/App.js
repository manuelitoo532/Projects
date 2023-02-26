import './App.css';
import Testimonio from './componentes/Testimonio.js';
import nombre from './componentes/Variables';

function App() {
  return (
    <div className="App">
      <div className='contenedor-principal'>
        <h1>Here is what our alumni say about freeCodeCamp:</h1>
      {/* componente */}
      <Testimonio
        nombre= {nombre.wang.nombre}
        pais={nombre.wang.pais}
        imagen={nombre.wang.imagen}
        cargo={nombre.wang.cargo}
        empresa={nombre.wang.empresa}
        testimonio={nombre.wang.testimonio} />

        <Testimonio
        nombre={nombre.chima.nombre}
        pais={nombre.chima.pais}
        imagen={nombre.chima.imagen}
        cargo={nombre.chima.cargo}
        empresa={nombre.chima.empresa}
        testimonio={nombre.chima.testimonio} />

        <Testimonio
         nombre={nombre.bostian.nombre}
         pais={nombre.bostian.pais}
         imagen={nombre.bostian.imagen}
         cargo={nombre.bostian.cargo}
         empresa={nombre.bostian.empresa}
         testimonio={nombre.bostian.testimonio} /> 
      </div>
    </div>
  );
}

export default App;
