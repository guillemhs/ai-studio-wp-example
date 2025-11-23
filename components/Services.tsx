import React from 'react';
import { SERVICES } from '../constants';

const Services: React.FC = () => {
  return (
    <section id="services" className="py-24 bg-agile-bg relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="font-heading text-3xl md:text-4xl font-bold text-agile-deep mb-4">
            Soluciones Integrales
          </h2>
          <p className="text-lg text-gray-600 font-sans">
            Combinamos experiencia técnica y metodológica para impulsar el crecimiento de tu organización.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {SERVICES.map((service) => (
            <div 
              key={service.id}
              className="group bg-white rounded-xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border-t-4 border-transparent hover:border-agile-vibrant transform hover:-translate-y-1"
            >
              <div className="w-14 h-14 bg-agile-bg rounded-lg flex items-center justify-center mb-6 group-hover:bg-agile-vibrant/10 transition-colors">
                <service.icon className="w-8 h-8 text-agile-primary group-hover:text-agile-vibrant transition-colors" />
              </div>
              
              <h3 className="font-heading text-xl font-bold text-agile-deep mb-3">
                {service.title}
              </h3>
              
              <p className="font-sans text-gray-600 leading-relaxed">
                {service.description}
              </p>
              
              <div className="mt-6">
                <a href="#" className="inline-flex items-center text-sm font-bold text-agile-primary group-hover:text-agile-vibrant transition-colors">
                  Saber más
                  <svg className="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;