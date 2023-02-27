import './App.css';
import logo from './imagenes/logo.png';
import Boton from './componentes/Boton.js';
import Contador from './componentes/Contador.js';
import { useState } from 'react';

function App() {

  const [numClic, setNumClic] = useState(0);

  const manejarClic = ()=>{
    setNumClic(numClic + 1);
    console.log("Clic");
  }
  const reiniciarContador = ()=>{
    setNumClic(0);
    console.log("reiniciar");
  }
  return (
    <div className="App">
      <div className="freecodcamp-logo-contenedor">
        <img
          className="freecodcamp-logo"
          src={logo}
          alt="logo"
        />
      </div>
      <div className="contenedor-principal">
        <Contador 
        numClic={numClic} />

        <Boton
          texto="Clic"
          esBotonClic={true}
          manejarClic={manejarClic} />
        <Boton
          texto="Reiniciar"
          esBotonClic={false}
          manejarClic={reiniciarContador} />
      </div>
      
    </div>
  );
}

export default App;
