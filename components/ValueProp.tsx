import React from 'react';
import { VALUES } from '../constants';

const ValueProp: React.FC = () => {
  return (
    <section id="values" className="py-24 bg-white overflow-hidden">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          
          {/* Text Content */}
          <div className="order-2 lg:order-1">
            <h2 className="font-heading text-3xl md:text-4xl font-bold text-agile-deep mb-6">
              El equilibrio entre <br/>
              <span className="text-agile-primary">Tecnología</span> y <span className="text-agile-turq">Humanidad</span>
            </h2>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed">
              En Agile611, creemos que la transformación digital no es solo sobre herramientas, sino sobre cultura. Nuestros valores fundamentales guían cada proyecto.
            </p>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-y-8 gap-x-6">
              {VALUES.map((value) => (
                <div key={value.id} className="flex flex-col">
                  <div className="flex items-center mb-2">
                    <div className="w-2 h-2 rounded-full bg-agile-vibrant mr-3"></div>
                    <h3 className="font-heading font-bold text-lg text-agile-deep">{value.title}</h3>
                  </div>
                  <p className="text-sm text-gray-500 pl-5 border-l border-gray-100">
                    {value.description}
                  </p>
                </div>
              ))}
            </div>
          </div>

          {/* Visual Content */}
          <div className="order-1 lg:order-2 relative">
            <div className="relative rounded-2xl overflow-hidden aspect-[4/3] shadow-2xl">
              <img 
                src="https://picsum.photos/800/600?grayscale" 
                alt="Team collaboration" 
                className="object-cover w-full h-full hover:scale-105 transition-transform duration-700"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-agile-deep/80 to-transparent flex items-end p-8">
                <div className="text-white">
                  <p className="font-heading font-bold text-2xl mb-1">Confianza Tecnológica</p>
                  <p className="text-agile-turq font-semibold">Toque Humano</p>
                </div>
              </div>
            </div>
            
            {/* Floating Badge */}
            <div className="absolute -bottom-6 -left-6 bg-agile-vibrant text-white p-6 rounded-lg shadow-xl hidden md:block max-w-xs">
              <p className="font-heading font-bold text-lg leading-tight">
                "Hacemos el lugar de trabajo más humano."
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>
  );
};

export default ValueProp;