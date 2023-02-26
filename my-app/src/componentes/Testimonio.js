import React from 'react';
import '../hojas-de-estilo/Testimonio.css';

function Testimono(props){
  return (
    <div className='contenedor-testimonio'>
      <img  className='imagen-testimonio'
      src={require(`../imagenes/${props.imagen}.png`)}
      alt='imagen'/>

      <div className='contenedor-texto-testimonio'>
        <p className='nombre-testimonio'><strong>{props.nombre}</strong> in {props.pais}</p>
        <p className='cargo-testimonio'>{props.cargo} at <strong>{props.empresa}</strong></p>
        <p className='texto-testimonio'>"{props.testimonio}"</p>
      </div>
    </div>
  );
}
export default Testimono;